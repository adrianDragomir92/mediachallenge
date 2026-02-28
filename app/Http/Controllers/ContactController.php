<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'nume' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefon' => ['nullable', 'string', 'max:50'],
            'servicii' => ['nullable', 'string', 'max:255'],
            'mesaj' => ['required', 'string'],
        ]);

        try {
            Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
                $message->to(config('mail.from.address', 'hello@mediachallenge.ro'))
                    ->subject('Mesaj nou de pe mediachallenge.ro')
                    ->replyTo($data['email'], $data['nume']);
            });

            return back()->with('status', 'Mesajul a fost trimis. Revenim în cel mai scurt timp.');
        } catch (\Throwable $exception) {
            Log::error('Contact form error', ['exception' => $exception]);

            return back()->withInput()->withErrors([
                'mesaj' => 'A apărut o problemă la trimiterea mesajului. Încearcă din nou sau scrie-ne pe hello@mediachallenge.ro.',
            ]);
        }
    }
}
