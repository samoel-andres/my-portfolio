<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotificationMailable;
use App\Notifications\MailNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;

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

        // Development mode (mailtrap)
        // Mail::to('aevs.andres.vidal@gmail.com')
        //     ->send(new NotificationMailable($contact));

        try {
            // Production mode (sendgrid)
            Notification::route('mail', 'aevs.andres.vidal@gmail.com')
                ->notify(new MailNotification($contact));
        } catch (\Exception $e) {
            return redirect()->route('contact.index')
                ->with('send-error', 'Oops no se pudo enviar la notificación, puedes contactarme directamente con los datos proporcionados en la parte inferior.');
        }

        return redirect()->route('contact.index')
            ->with('success-sends', 'Notificación enviada, te responderé a la brevedad al correo que indicaste o te contactaré vía telefónica.');
    }
}
