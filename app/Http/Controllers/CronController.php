<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#Models
use App\Blog;
use App\BlogTag;
use App\Cron;
use App\Mail;
use App\Tag;
use App\User;

#Config
use Config;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use SendGrid;

class CronController extends Controller
{
    public function index(){
        $this->initCron();
    }

    public function InitCron()
    {
        echo 'Initiated Cron...<br>';
        echo $this->executeCron();
        //$this->logCron();
        echo 'Finished Cron...<br>';
        /* Logging Cron Job */
        return 'Cron executed Succesfully !';
    }

    public function executeCron(){
        return $this->backupDB();
        //return $this->subCron();
    }

    public function subCron() {
        #Initiating Sub Cron        
        //$this->getAppConfig();
        #Finishing Sub Cron
    }

    public function logCron()
    {
        $txt = 'Cron on '.date("Y-m-d H:i:s").'|';
        $fileName = 'public/logs/cron-'.date("Y-m-d-H").'.txt';
        file_put_contents($fileName, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }

    public function backupDB(){
        $cronStatus = Cron::whereDate('created_at', date('Y-m-d'))->count();
        if($cronStatus==0){
        $this->getTables();
        $this->createBackup();
        $this->mailBackup();
        $this->deleteFile();
        $this->deleteBackup(Config::get('constants.path.app').'/backup/'.date('Y-m-d'));
        $db = new Cron;
        $db->name = 'cron';
        $db->desc = 'Cron job for the day';
        $db->status = 1;
        $db->save();
        }
    }
    public function getTables(){
        $tables = [];
        $date = date('Y-m-d');
        $tables['blog'] = Blog::all();
        $tables['blog_tag'] = BlogTag::all();
        $tables['mail'] = Mail::all();
        $tables['user'] = User::all();
        foreach ($tables as $key => $value) {
            Storage::put('backup/'.$date.'/'.$key.'/'.$key.'.txt', $value);
        }        
    }

    public function createBackup(){
        $path = Config::get('constants.path.app');
        $rootPath = realpath($path);
        $zip = new ZipArchive();
        $zip->open($path.'backup/'.date('Y-m-d').'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path),
            RecursiveIteratorIterator::LEAVES_ONLY
        );
        foreach ($files as $name => $file)
        {
            if (!$file->isDir())
            {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();
    }
    public function mailBackup(){
        $from = new SendGrid\Email(Config::get('constants.config.name'), Config::get('constants.email.official'));
        $subject = Config::get('constants.slogan.dbbackup'). ' '.date("Y-m-d");
        $to = new SendGrid\Email(Config::get('constants.config.name'), Config::get('constants.email.personal'));
        $content = new SendGrid\Content("text/plain", Config::get('constants.slogan.dbbackuptxt'));
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = base64_decode(Config::get('constants.keys.sendgrid'));
        $sg = new \SendGrid($apiKey);

        // Start of Attachment 
        // $file = Config::get('constants.path.app').'/backup/'.date("Y-m-d").'.zip';
        // $file_encoded = base64_encode(file_get_contents($file));
        // $attachment = new SendGrid\Attachment();
        // $attachment->setContent($file_encoded);
        // $attachment->setType("application/zip");
        // $attachment->setDisposition("attachment");
        // $attachment->setFilename($file);
        // $mail = new SendGrid\Mail($from, $subject, $to, $content);
        // $mail->addAttachment($attachment);

        $response = $sg->client->mail()->send()->post($mail);
        echo $response->statusCode();
        print_r($response->headers());
        echo $response->body();
    }

    public function deleteFile(){
        $date = date_create(date('Y-m-d'));
        date_sub($date, date_interval_create_from_date_string('7 days'));
        $date= date_format($date, 'Y-m-d');
        $file = Config::get('constants.path.app').'backup/'.$date.'.zip';
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public function deleteBackup($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir."/".$object) == "dir") 
                $this->deleteBackup($dir."/".$object); 
                else unlink   ($dir."/".$object);
            }
            }
            reset($objects);
            rmdir($dir);
        }
        
    }
}
