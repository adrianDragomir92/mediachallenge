<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        $data = $request->validated();

        try {
            Mail::to(config('mail.from.address', 'hello@mediachallenge.ro'))
                ->send(new ContactMessage($data));

            return back()->with('status', 'Mesajul a fost trimis. Revenim în cel mai scurt timp.');
        } catch (\Throwable $exception) {
            Log::error('Contact form error', ['exception' => $exception]);

            return back()->withInput()->withErrors([
                'mesaj' => 'A apărut o problemă la trimiterea mesajului. Încearcă din nou sau scrie-ne pe hello@mediachallenge.ro.',
            ]);
        }
    }
}
