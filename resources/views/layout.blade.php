<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements@latest/dist/js/tw-elements.umd.min.js"></script>
    @vite('resources/css/app.css')

    @yield('style')

    <style>
        :root {
            --primary-color: #faf9da;
            --secondary-color: #E1C7FA;
            --accent-color: rgb(67, 108, 155);
        }

        h1,
        li {
            color: rgb(67, 108, 155);
        }

        li {
            font-size: 18px;
        }

        @font-face {
            font-family: 'Perfectly-Vintages';
            src: url('{{ asset('fonts/Perfectly-Vintages.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Perfectly-Vintages', sans-serif;
            letter-spacing: 1px;
        }
    </style>
</head>

<body class="bg-[var(--primary-color)] text-gray-700 flex flex-col min-h-screen">
    <header class="bg-[var(--secondary-color)] w-full py-4 shadow-md">
        <div class="w-full flex justify-between items-center px-6">
            <h1 class="text-xl md:text-2xl font-bold">
                <span class="hidden md:inline">٭✿༺ 𝒞𝓇𝑜𝒸𝒽𝑒𝓉 𝐻𝒶𝓋𝑒𝓃 ༻✿٭</span>
                <span class="md:hidden">Crochet Haven</span>
            </h1>
    
            <button id="menu-toggle" class="md:hidden text-[var(--accent-color)] focus:outline-none">
                ☰
            </button>
    
            <nav class="hidden md:flex space-x-4">
                <ul class="flex space-x-4">
                    <li><a href="/home" class="hover:text-white">Home</a></li>
                    <li><a href="/katalog" class="hover:text-white">Katalog</a></li>
                    <li><a href="/about" class="hover:text-white">About</a></li>
                    <li><a href="/contact" class="hover:text-white">Contact</a></li>
                </ul>
            </nav>
        </div>
    
        <!-- Menu mobile -->
        <nav id="mobile-menu" class="hidden md:hidden bg-[var(--secondary-color)] text-center py-2 w-full">
            <ul class="space-y-2">
                <li><a href="/home" class="block py-2 hover:text-white">Home</a></li>
                <li><a href="/katalog" class="block py-2 hover:text-white">Katalog</a></li>
                <li><a href="/about" class="block py-2 hover:text-white">About</a></li>
                <li><a href="/contact" class="block py-2 hover:text-white">Contact</a></li>
            </ul>
        </nav>
    </header>
    

    <!-- Konten utama agar bisa mendorong footer ke bawah -->
    <main class="container mx-auto py-8 px-6 flex-grow">
        @yield('content')
    </main>

    <footer class="bg-[var(--secondary-color)] py-4 text-center mt-auto">
        <p>&copy; {{ date('Y') }} Crochet Haven. All rights reserved.</p>
    </footer>

    @yield('script')

</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        menuToggle.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });
    });
</script>
