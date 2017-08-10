<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CronController extends Controller
{
    public function InitCron()
    {
        $txt = 'Cron on '.date("Y-m-d H:i:s").'|';
        $fileName = 'public/logs/cron-'.date("Y-m-d-H").'.txt';
        file_put_contents($fileName, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
        return 'Initiated Cron...';
    }
}
