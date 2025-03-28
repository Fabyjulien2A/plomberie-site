<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Traitement du message (ex : stockage ou email)

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
