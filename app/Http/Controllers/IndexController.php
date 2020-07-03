<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller
{

    public function getIndex(Request $request)
    {

        // $data = \App\Index::where('permalink', '=', 'Contact')->get()->toArray();
        $input = $request->only('name', 'email', 'subject', 'message', 'phone');
        $emailSent = false;

        if ($request->isMethod('post')) {
            $message = "<h1>New construction lead</h1>" .
                "<h3>Name: </h3>" . $request['name'] . "<br>" .
                "<h3>Email: </h3>" . $request['email'] . "<br>" .
                "<h3>Phone: </h3>" . $request['phone'] . "<br><br>" .
                "<h3>Message: </h3>" . $request['message'];

            $subject = $request['subject'];
            $email = 'info@rizzardiconstruction.com';
            $ricksEmail    = 'frederick.w.balzer@outlook.com';
            $angelasEmail  = 'a.reckard6@outlook.com';
            $curl_post_data = array(
                'from' => 'leads@mail.rizzardiconstruction.com',
                'to' => $ricksEmail . ',' . $angelasEmail,
                'cc' => $email,
                'subject' => $subject,
                'html' => $message
            );

            $service_url = 'https://api.mailgun.net/v3/mail.rizzardiconstruction.com/messages';

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
        return view('index', ['emailSent' => $emailSent, 'title' => 'Erie, PA Construction Contractor | Rizzardi Construction']);
    }
    public function postIndex()
    {
        
    }

    public function getAbout(Request $request)
    {
        return view('about', ['title' => 'Meet our team | Rizzardi Construction']);
    }

    public function getServices(Request $request)
    {
        return view('services', ['title' => 'Home Improvement Services | Rizzardi Construction']);
    }

    public function getTerms(Request $request)
    {
        return view('terms', ['title' => 'Terms and Conditions | Rizzardi Construction']);
    }

    public function getPrivacy(Request $request)
    {
        return view('privacy', ['title' => 'Privacy Policy | Rizzardi Construction']);
    }

    public function getContact(Request $request)
    {

        // $data = \App\Index::where('permalink', '=', 'Contact')->get()->toArray();
        $input = $request->only('name', 'email', 'subject', 'message', 'phone');
        $emailSent = false;

        if ($request->isMethod('post')) {
            $message = "<h1>New construction lead</h1>" .
                "<h3>Name: </h3>" . $request['name'] . "<br>" .
                "<h3>Email: </h3>" . $request['email'] . "<br>" .
                "<h3>Phone: </h3>" . $request['phone'] . "<br><br>" .
                "<h3>Message: </h3>" . $request['message'];

            $subject = $request['subject'];
            $email = 'info@rizzardiconstruction.com';
            $ricksEmail    = 'frederick.w.balzer@outlook.com';
            $angelasEmail  = 'a.reckard6@outlook.com';
            $curl_post_data = array(
                'from' => 'leads@mail.rizzardiconstruction.com',
                'to' => $ricksEmail . ',' . $angelasEmail,
                'cc' => $email,
                'subject' => $subject,
                'html' => $message
            );

            $service_url = 'https://api.mailgun.net/v3/mail.rizzardiconstruction.com/messages';

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
        return view('contact', ['emailSent' => $emailSent, 'title' => 'Contact Rizzardi Construction in Erie, PA']);
    }
    public function postContact()
    {
    }
}
