<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotificationMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the contact section.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Send contact notification.
     */
    public function send(Request $request)
    {
        $contact = ([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'msg' => $request->message,
        ]);

        Mail::to('aevs.andres.vidal@gmail.com')
            ->send(new NotificationMailable($contact));

        return redirect()->route('contact.index')
            ->with('success-sends', 'Sent correctly');
    }
}
