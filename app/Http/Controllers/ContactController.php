<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
  {
    $validated = $request->validate([
      'name'    => 'required|string|max:255',
      'email'   => 'required|email|max:255',
      'subject' => 'required|string|max:255',
      'message' => 'required|string|min:10',
    ]);

    // Save to DB
    $contact = Contact::create($validated);

    // Send Mail (Queued)
    Mail::to(config('mail.from.address'))
      ->send(new ContactMail($contact));

    return back()->with('success', 'Your message has been sent successfully!');
  }
}
