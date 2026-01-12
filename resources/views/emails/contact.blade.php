<!-- resources/views/emails/contact.blade.php -->
<h2>New Contact Message</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Subject:</strong> {{ $data['subject'] }}</p>

<p>{{ $data['message'] }}</p>
