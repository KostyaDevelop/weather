<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Weather extends Controller
{
    public function get(Request $request)
    {
        //////////////////////////////// Temperature ////////////////////////////////

        $city_id = 524901;
        $url = "http://api.openweathermap.org/data/2.5/weather?id=$city_id&lang=ru&units=metric&APPID=cb587b2f201b245a7b4f99a7b4837843";
        $contents = file_get_contents($url);
        $climat = json_decode($contents);
        $temperature = $climat->main->temp;

        //////////////////////////////// Date ///////////////////////////////////

        $date = date('G:i', time() + 5400 * 2);

        //////////////////////////////// Variables //////////////////////////////
        ///
        $info = "Текущее время в Москве: " . $date . "</br>" . "На этот момент температура в  Москве: ". $temperature . " ℃ ";
        $name = $request->input('name');
        $email = $request->input('email');

        //////////////////////////////// Mail ///////////////////////////////////

        $data = [ 'name' => $name,
                    'email' => $email,
                    'temperature' => $temperature];

        Mail::send('template.mail_template', ['data' => $data], function ($message) use ($data) {
            $mail_admin = env('MAIL_ADMIN');
            $message->from($mail_admin);
            $message->to($data['email'])->subject('Погода');
        });


        return view('pages.info', ['info' => $info]);
    }


}
