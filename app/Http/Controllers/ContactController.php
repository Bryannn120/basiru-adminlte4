<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['nama']);
            $message->to('iyanbang23@gmail.com'); // Ganti dengan email tujuan Anda
            $message->subject('Pesan dari ' . $data['nama']);
        });

        return back()->with('success', 'Pesan Anda telah terkirim.');
    }
}

