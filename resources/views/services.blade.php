@extends('layouts.app')

@section('title', 'Nos Services')

@section('content')

<!-- Police -->
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
@endpush

<!-- Titre -->
<section class="bg-blue-600 text-white py-20 text-center">
    <h1 class="text-4xl font-bold mb-4">🛠️ Nos Services</h1>
    <p class="text-lg">Qualité, fiabilité et proximité pour tous vos projets de plomberie</p>
</section>

<!-- Liste des services avec images -->
<section class="py-16 px-6 bg-white max-w-6xl mx-auto space-y-16">

    <div class="md:flex items-center gap-6">
        <img src="{{ asset('images/depannage.jpg') }}" class="w-full md:w-1/3 rounded shadow" alt="Dépannage plomberie">
        <div>
            <h2 class="text-2xl font-bold mb-2">🔧 Dépannage d'urgence</h2>
            <p class="text-gray-700">Intervention rapide en cas de fuite, canalisation bouchée ou panne d’eau chaude. Disponibles 7j/7.</p>
        </div>
    </div>

    <div class="md:flex items-center gap-6 md:flex-row-reverse">
        <img src="{{ asset('images/installation.jpg') }}" class="w-full md:w-1/3 rounded shadow" alt="Installation sanitaire">
        <div>
            <h2 class="text-2xl font-bold mb-2">🚿 Installation sanitaire</h2>
            <p class="text-gray-700">Création ou rénovation de salle de bain, installation de robinetterie, WC, lavabos, douches, chauffe-eau…</p>
        </div>
    </div>

    <div class="md:flex items-center gap-6">
        <img src="{{ asset('images/entretien.jpg') }}" class="w-full md:w-1/3 rounded shadow" alt="Entretien plomberie">
        <div>
            <h2 class="text-2xl font-bold mb-2">🔄 Entretien & révision</h2>
            <p class="text-gray-700">Prévention des pannes grâce à des entretiens réguliers. Contrats pour particuliers et professionnels.</p>
        </div>
    </div>

    <div class="md:flex items-center gap-6 md:flex-row-reverse">
        <img src="{{ asset('images/entreprise.jpg') }}" class="w-full md:w-1/3 rounded shadow" alt="Intervention en entreprise">
        <div>
            <h2 class="text-2xl font-bold mb-2">🏢 Interventions en entreprise</h2>
            <p class="text-gray-700">Collaboration avec syndics, hôtels, restaurants, bureaux. Interventions planifiées et soignées.</p>
        </div>
    </div>

</section>

<!-- Appel à l'action -->
<section class="py-16 px-6 text-center">
    <h2 class="text-2xl font-bold mb-4">📞 Un besoin en plomberie ?</h2>
    <p class="text-gray-600 mb-6">Nous répondons rapidement à toutes vos demandes. Contactez-nous pour un devis personnalisé.</p>
    <a href="{{ route('contact') }}" class="bg-blue-600 text-white font-semibold px-8 py-3 rounded hover:bg-blue-700 transition">Nous contacter</a>
</section>

@endsection
