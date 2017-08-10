<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CronController extends Controller
{
    public function InitCron()
    {
        echo 'Initiated Cron...';
        //logCron();
        $this->logCron('-1', '-1', 'Alpha Testing Cron');
        echo 'Finished Cron...';
        /* Logging Cron Job */
        return 'Initiated Cron...';
    }

    public function subCron() {

        #Initiating Sub Cron
        #Considering only Reminder for now
        $reminderList = Reminder::where('status', 1)->get();

        #Reminder Type 1 denotes Daily Reminder and 2 denotes Only one time
        foreach ($reminderList as $reminder) {
            if ($reminder['reminder_type'] == 1) {
                #It is a Daily Reminder
                $this->Reminder('Daily', $reminder);
            } elseif ($reminder['reminder_type'] == 2) {
                #It is a One time Reminder
                $this->Reminder('Once', $reminder);
            } else {
                #It should be an instant reminder something else                
            }
        }
        #Finishing Sub Cron
    }

    #End of Sub Cron

    #Log Cron Service..

    public function logCron($id, $type, $note)
    {
        $txt = 'Cron on '.date("Y-m-d H:i:s").'|';
        $fileName = 'public/logs/cron-'.date("Y-m-d-H").'.txt';
        file_put_contents($fileName, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

        echo 'Executed Process Id ' . $id . '<br>';
        $cronData['process_id'] = $id;
        $cronData['type'] = $type;
        $cronData['cron_date'] = date("Y-m-d");
        $cronData['cron_time'] = date("Y-m-d H:i:s");
        $cronData['cron_note'] = $note;
        $cronData['status'] = 1;
        CronEntry::create($cronData);
    }
}
