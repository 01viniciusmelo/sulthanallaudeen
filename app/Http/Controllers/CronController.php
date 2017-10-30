<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronController extends Controller
{
    public function index(){
        $this->initCron();
    }

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

    public function logCron()
    {
        $txt = 'Cron on '.date("Y-m-d H:i:s").'|';
        $fileName = 'public/logs/cron-'.date("Y-m-d-H").'.txt';
        file_put_contents($fileName, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }
}
