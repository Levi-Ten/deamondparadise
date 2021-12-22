<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsEmailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    public function sendEmail(ContactUsEmailRequest $request)
    {
        // dd($request->get('name', 'email', 'subject'));
        $credentials = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'teleph' => $request->get('teleph'),
            'subject' => $request->get('subject'),
        ];

        Mail::to('razmulititiki@gmail.com')->send(new ContactUsMail($credentials));
        // dd('success');
        return redirect()->to('/')->with('success', 'Письмо успешно отправленно! Мы свяжемся с вами как можно скорее. Спасибо вам за интерес к нашему салону!');
    }
}
