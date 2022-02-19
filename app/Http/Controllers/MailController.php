<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail()
    {
        $detail = [
            'title' => 'Mail from Surfside Media',
            'body'  => 'This is for testing'
        ];
        Mail::to("finggaaaaaaaaa@gmail.com")->send(new SendMail($details));
        return "";
    }
}
