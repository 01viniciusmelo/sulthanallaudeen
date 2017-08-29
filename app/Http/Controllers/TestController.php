<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Hash;

class TestController extends Controller
{
    public function index()
    {
        return 'Test Controller of Sulthan Allaudeen';
    }

    public function Tutchapon()
    {
        $url = "http://13.228.10.174/api/v4/projects";
        $homepage = file_get_contents($url);
        $decoded = json_decode($homepage);
        $count = 0;
        echo '<table border="1">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Url</th>
                </tr>';
        foreach ($decoded as $value) {
            $count++;
            echo '<tr><td>'.$count.'</td><td>'.$value->name.'</td><td>'.$value->http_url_to_repo.'</td></tr>';
        }
        echo '</table>';
    }

    #Hash

    public function hash($string)
    {
        return Hash::make($string);
    }

    public function fcmPush()
    {
        $url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array (
                'registration_ids' => array (
                        'cisKTNAQ1Zk:APA91bE2tRQ7z1ClY27fbrkEdYnaN7T-OW6vfCkJd2zhdRM3GoKxMqAtGLqzCOAIWHAFo6DSDeL-m-jwYKCo2KmlhYipiKHY-pdo8xMYDmhh9qnJKmDf6JN590GAJ6ONUFtQ29yW96o6'
                ),
                'data' => array (
                        "message" => 'How r u'
                )
        );
        $fields = json_encode ( $fields );

        $headers = array (
                'Authorization: key=' . "AAAAalLjbyM:APA91bE9ZeLmlJ6i5DaTo6-12q_7YM1eT2HYQAl4XbpAmGchFkBmLEvarNkM9Jmcdk-kaZeCqEW-tVfGqK7OGTuJJdKyfsNgGGdPrgCJlwPVLG4BW21vGN527VBMq9yJntlGZCV5YvXu",
                'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        echo $result;
        curl_close ( $ch );
        echo 12345;
        print_r($result);
    }
}
