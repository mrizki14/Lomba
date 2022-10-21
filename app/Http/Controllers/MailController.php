<?php

namespace App\Http\Controllers;


use App\Mail\ReviewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $mailData = [
            'title' => $request->title,
            'job' => $request->title,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to($request->email)->send(new ReviewMail($mailData));

        // dd($mailData);
        return redirect('/')
            ->with('alert', 'Your Email has been sent, Thank you');
    }
}
