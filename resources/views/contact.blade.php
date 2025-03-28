@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="bg-blue-600 text-white py-20 text-center">
    <h1 class="text-4xl font-bold mb-4">Contactez-nous</h1>
    <p class="text-lg">Un besoin en plomberie ? Un projet à discuter ? On est là !</p>
</section>

<section class="bg-white py-16 px-6">
    <div class="max-w-4xl mx-auto bg-gray-50 shadow rounded-lg p-8">

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-800 rounded">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" name="nom" id="nom" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" id="message" rows="5" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded hover:bg-blue-700 transition">Envoyer le message</button>
            </div>
        </form>
    </div>

    <div class="text-center mt-12 text-gray-600">
        <p><strong>📍 Adresse :</strong> 123 rue des Artisans, Ajaccio</p>
        <p><strong>📞 Téléphone :</strong> 06 12 34 56 78</p>
        <p><strong>📧 Email :</strong> contact@mozziconnaci.fr</p>
        <p><strong>🕒 Horaires :</strong> Lun-Ven : 8h - 18h</p>
    </div>
    
</section>

@endsection
