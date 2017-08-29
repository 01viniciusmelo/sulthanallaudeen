<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CronController extends Controller
{
    public function InitCron()
    {
        echo 'Initiated Cron...<br>';
        $this->logCron();
        //$this->logCron('-1', '-1', 'Alpha Testing Cron');
        echo 'Finished Cron...<br>';
        /* Logging Cron Job */
        return 'Initiated Cron...';
    }

    public function subCron() {

        #Initiating Sub Cron        
        #Finishing Sub Cron
    }

    #End of Sub Cron

    #Log Cron Service..

    public function logCron()
    {
        $txt = 'Cron on '.date("Y-m-d H:i:s").'|';
        $fileName = 'public/logs/cron-'.date("Y-m-d-H").'.txt';
        file_put_contents($fileName, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }

    // public function logCron($id, $type, $note)
    // {
    //     $txt = 'Cron on '.date("Y-m-d H:i:s").'|';
    //     $fileName = 'public/logs/cron-'.date("Y-m-d-H").'.txt';
    //     file_put_contents($fileName, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

    //     echo 'Executed Process Id ' . $id . '<br>';
    //     $cronData['process_id'] = $id;
    //     $cronData['type'] = $type;
    //     $cronData['cron_date'] = date("Y-m-d");
    //     $cronData['cron_time'] = date("Y-m-d H:i:s");
    //     $cronData['cron_note'] = $note;
    //     $cronData['status'] = 1;
    //     CronEntry::create($cronData);
    // }
}
