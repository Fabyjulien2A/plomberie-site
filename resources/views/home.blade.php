@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<!-- POLICE -->
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
@endpush

<!-- Bannière principale -->
<!-- Bannière pleine largeur avec image de fond -->
<section class="relative h-[500px] bg-cover bg-center" style="background-image: url('{{ asset('images/plombier-banner.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center px-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 md:h-24 mb-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Plomberie fiable & rapide à Ajaccio</h1>
        <p class="text-lg md:text-xl mb-6">Installation, dépannage et entretien – pour particuliers et pros</p>
        <a href="{{ route('contact') }}" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded hover:bg-blue-700 transition">Demander un devis</a>
    </div>
</section>


<!-- Services avec images -->
<section class="py-16 px-6 bg-white max-w-6xl mx-auto space-y-16">

    <div class="md:flex items-center gap-6">
        <img src="{{ asset('images/depannage.jpg') }}" class="w-full md:w-1/3 rounded shadow" alt="Dépannage plomberie">
        <div>
            <h2 class="text-2xl font-bold mb-2">🔧 Dépannage d'urgence</h2>
            <p class="text-gray-700">Intervention rapide sur fuites, canalisations bouchées, chauffe-eau en panne…</p>
        </div>
    </div>

    <div class="md:flex items-center gap-6 md:flex-row-reverse">
        <img src="{{ asset('images/installation.jpg') }}" class="w-full md:w-1/3 rounded shadow" alt="Installation sanitaire">
        <div>
            <h2 class="text-2xl font-bold mb-2">🚿 Installation sanitaire</h2>
            <p class="text-gray-700">Douches à l’italienne, WC, lavabos, cuisine – nous posons tous vos équipements avec soin.</p>
        </div>
    </div>

    <div class="md:flex items-center gap-6">
        <img src="{{ asset('images/entretien.jpg') }}" class="w-full md:w-1/3 rounded shadow" alt="Entretien plomberie">
        <div>
            <h2 class="text-2xl font-bold mb-2">🔄 Entretien & révision</h2>
            <p class="text-gray-700">Prolongez la durée de vie de vos installations avec nos contrats d’entretien sur-mesure.</p>
        </div>
    </div>

</section>

<!-- Témoignages -->
<section class="bg-gray-50 py-16 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-8 text-blue-600">💬 Ce que disent nos clients</h2>
        <div class="space-y-6">
            <blockquote class="bg-white shadow p-6 rounded">
                <p class="text-gray-700 italic">"Service rapide et efficace. Intervention le jour même. Je recommande !"</p>
                <span class="block mt-2 font-semibold text-gray-800">— Jean D.</span>
            </blockquote>
            <blockquote class="bg-white shadow p-6 rounded">
                <p class="text-gray-700 italic">"Installation complète de notre salle de bain. Travail soigné, très pro."</p>
                <span class="block mt-2 font-semibold text-gray-800">— Sophie M.</span>
            </blockquote>
        </div>
    </div>
</section>

<!-- Appel à l'action -->
<section class="py-16 px-6 text-center bg-white">
    <h2 class="text-2xl font-bold mb-4">📞 Besoin d’un devis ?</h2>
    <p class="text-gray-600 mb-6">Appelez-nous ou utilisez notre formulaire de contact. Réponse rapide garantie.</p>
    <a href="{{ route('contact') }}" class="bg-blue-600 text-white font-semibold px-8 py-3 rounded hover:bg-blue-700 transition">Nous contacter</a>
</section>

@endsection
