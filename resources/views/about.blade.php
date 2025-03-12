@extends('layout')

@section('style')
<style>
    .about-container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('content')
<div class="flex justify-center items-center min-h-[70vh] px-4">
    <div class="about-container max-w-lg lg:max-w-2xl w-full text-center p-6 sm:p-8">
        <h2 class="text-2xl sm:text-3xl font-bold text-[var(--accent-color)] mb-4">About Crochet Haven</h2>
        <img class="mb-4 max-w-full h-auto rounded-lg shadow-md" src="{{ asset('/images/shop.png') }}" alt="Shop">
        <p class="text-gray-700 text-lg sm:text-xl leading-relaxed">
            Welcome to <strong class="text-[var(--accent-color)]">Crochet Haven</strong>, a place where creativity meets comfort.
            We specialize in hand-crafted crochet products made with love and passion. Every piece is carefully designed to bring warmth and beauty into your daily life.
        </p>
        <p class="text-gray-700 text-lg sm:text-xl leading-relaxed mt-4">
            Our mission is to spread the joy of handmade crafts, ensuring each customer gets a unique and meaningful product.
            Thank you for supporting our small business! 💖
        </p>
    </div>
</div>
@endsection
