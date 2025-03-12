@extends('layout')

@section('style')
    <style>
        .swiper-slide img {
            width: 100%;
            height: 250px; /* Default lebih kecil */
            object-fit: contain;
            object-position: center;
            border-radius: 10px;
            background-color: var(--primary-color);
        }

        @media (min-width: 768px) { 
            .swiper-slide img {
                height: 400px; /* Ukuran lebih besar untuk layar lebih besar */
            }
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: var(--secondary-color) !important;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            color: var(--accent-color) !important;
        }

        .swiper-pagination-bullet {
            background-color: var(--secondary-color) !important;
        }

        .swiper-pagination-bullet-active {
            background-color: var(--accent-color) !important;
        }
    </style>
@endsection

@section('content')
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/carousel_1.png') }}" class="w-full" alt="Handmade Crochet">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/carousel_2.png') }}" class="w-full" alt="Soft & Cozy">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/carousel_3.png') }}" class="w-full" alt="Unique Craft">
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <section class="text-center mt-6 md:mt-10 px-4 md:px-6">
        <h2 class="text-2xl md:text-3xl font-bold text-[var(--accent-color)]">Welcome to Crochet Haven ✨</h2>
        <p class="text-base md:text-lg text-gray-700 mt-3 md:mt-4 max-w-xl md:max-w-2xl mx-auto">
            Discover the warmth and charm of handcrafted crochet.  
            Every stitch is made with love, ensuring a unique and personal touch in each product.  
            <br><br>
            🌿 Soft, cozy, and timeless – perfect for gifts or personal keepsakes.  
            Explore our collection and find your next favorite handmade piece!  
        </p>

        <a href="/katalog"
           class="mt-4 md:mt-6 inline-block bg-[var(--accent-color)] text-white py-2 px-6 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-all">
            Explore Our Collection →
        </a>
    </section>
@endsection

@section('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });
    </script>
@endsection
