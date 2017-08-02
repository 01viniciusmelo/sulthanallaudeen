<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CronController extends Controller
{
    public function InitCron()
    {
        $txt = date("Y-m-d H:i:s");
        $myfile = file_put_contents('public/cron.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
        return 'Initiated Cron...';
    }
}
