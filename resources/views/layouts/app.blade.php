<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mozziconnaci Plomberie')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="flex flex-col min-h-screen">

<!-- Header -->
<header class="bg-white shadow sticky top-0 z-50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 py-6 md:py-8 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Mozziconnaci" class="h-24 w-auto max-w-[200px] object-contain">
        </a>
        
        <nav class="hidden md:flex space-x-8 text-lg">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">🏠 Accueil</a>
            <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600">🛠️ Services</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600">✉️ Contact</a>
        </nav>

        <!-- Burger (mobile) -->
        <button @click="open = !open" class="md:hidden text-blue-600">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Menu mobile -->
    <div x-show="open" class="md:hidden px-4 pb-4 space-y-2 text-lg">
        <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600">🏠 Accueil</a>
        <a href="{{ route('services') }}" class="block text-gray-700 hover:text-blue-600">🛠️ Services</a>
        <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-blue-600">✉️ Contact</a>
    </div>
</header>

    
    
    <!-- Contenu principal -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Témoignages -->
    <section class="bg-gray-100 py-16 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-bold mb-8 text-blue-600">Témoignages de nos clients</h2>
            <div class="space-y-6">
                <blockquote class="bg-white shadow p-6 rounded">
                    <p class="text-gray-700 italic">"Intervention rapide et professionnelle. Je recommande !"</p>
                    <span class="block mt-2 font-semibold text-gray-800">— Jean D.</span>
                </blockquote>
                <blockquote class="bg-white shadow p-6 rounded">
                    <p class="text-gray-700 italic">"Service impeccable pour l’installation de notre salle de bain."</p>
                    <span class="block mt-2 font-semibold text-gray-800">— Marie T.</span>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-8 mt-10">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-6 text-sm">
            <div>
                <h3 class="font-bold mb-2">Mozziconnaci Plomberie</h3>
                <p>123 rue des Artisans<br>20000 Ajaccio</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Contact</h3>
                <p>Tél : 06 12 34 56 78<br>Email : contact@mozziconnaci.fr</p>
            </div>
            <div>
                <h3 class="font-bold mb-2">Horaires</h3>
                <p>Lun - Ven : 8h - 18h<br>Sam : 9h - 13h</p>
            </div>
        </div>
        <div class="text-center text-sm mt-6 text-blue-100">
            &copy; {{ date('Y') }} Mozziconnaci Plomberie. Tous droits réservés.
        </div>
    </footer>

</body>
</html>
