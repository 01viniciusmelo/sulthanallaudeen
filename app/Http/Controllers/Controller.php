<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Auth;
use Config;
use SendGrid;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getAppConfig() {
        $Response = array('success' => 1, 'domainUrl' => Config::get('constants.config.URL'));
        return $Response;
    }

    public function sendMail($from,$subject,$to,$content){
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = base64_decode(Config::get('constants.keys.sendgrid'));
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);
        // echo $response->statusCode();
        // print_r($response->headers());
        // echo $response->body();
    }

    #Logout Function
    
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
