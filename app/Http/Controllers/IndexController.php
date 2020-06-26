<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller
{

    public function getContact(Request $request)
    {

        // $data = \App\Index::where('permalink', '=', 'Contact')->get()->toArray();
        $input = $request->only('name', 'email', 'subject', 'message');
        $emailSent = false;

        if ($request->isMethod('post')) {
            $message = "Hello here is a message from " . $_SERVER['SERVER_NAME'] . " " .
                "Name:" . $request['name'] . " " .
                "Email:" . $request['email'] . " " .
                "Message:" . $request['message'];

            $subject = $request['subject'];
            $email = 'patrick.d.rizzardi@gmail.com';
            $curl_post_data = array(
                'from' => 'webmaster@wcffit.com',
                'to' => $email,
                'subject' => $subject,
                'text' => $message
            );

            $service_url = 'https://api.mailgun.net/v3/rizzardiconstruction.com';

            $curl = curl_init($service_url);
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($curl, CURLOPT_USERPWD, "api:key-208d4887aeee490febc76a6584ab027d");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $curl_response = curl_exec($curl);
            curl_close($curl);
            //		var_dump($curl_response);
            //		exit;

            $emailSent = true;
        }



        // return view('contact', ['title' => "contact", 'contents' => $data, 'emailSent' => $emailSent]);
        return view('contact', ['emailSent' => $emailSent]);
    }

    public function postContact() {}

}
