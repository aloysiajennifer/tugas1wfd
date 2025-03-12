@extends('layout')

@section('style')
<style>
    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        overflow: hidden;
        text-align: center;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
</style>
@endsection

@section('content')
<h1 class="text-3xl font-bold text-center mb-6">☆ Katalog ☆</h1>

<!-- Grid container -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-screen-lg mx-auto px-4">
    @foreach ([ 
        ['flower_keychain.png', 'Flower Keychain', 25000],
        ['totebag.png', 'Totebag', 200000],
        ['drawstring_pouch.png', 'Drawstring Pouch', 45000],
        ['wallet.png', 'Wallet', 35000],
        ['cardigan.png', 'Cardigan', 205000],
        ['pencil_case.png', 'Pencil Case', 40000]
    ] as $item)
        <div class="card">
            <a href="#!">
                <img src="{{ asset('images/' . $item[0]) }}" alt="{{ $item[1] }}">
            </a>
            <div class="p-4">
                <h5 class="text-lg font-bold">{{ $item[1] }}</h5>
                <p class="text-gray-600">Rp{{ number_format($item[2], 0, ',', '.') }},00</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
