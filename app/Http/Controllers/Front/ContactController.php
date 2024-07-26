<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request) {

        $request -> validate ([

        'full_name' => 'required|string|max:255',
        'email'     => 'required|email|max:255',
        'subject'   => 'required|string|max:255',
        'message'   => 'required|string|max:1000',

        ]);
        
        $test_message = Str::sanitize($request->input('message'));

        if (strpos($test_message, 'http') !== false || strpos($test_message, 'www.') !== false) {
            return redirect()->back();
        }

        $data = Contact::create([

            'full_name'     =>$request->input('full_name'),
            'email'         =>$request->input('email'),
            'subject'       =>$request->input('subject'),
            'message'       =>$request->input('message'),

        ]);

        // dd($data);

        foreach (['info@maroc-freelance.com', 'atmanebounnit@gmail.com'] as $recipient) {
            Mail::to($recipient)->send(new ContactFormMail($data));
        }

        return redirect()->back()->with('success', 'Thank you! Your message has been successfully sent. We will contact you very soon!');

    }
}
