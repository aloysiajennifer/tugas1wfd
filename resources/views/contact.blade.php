@extends('layout')

@section('style')
    <style>
        .contact-form {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection

@section('content')
    <div class="flex justify-center items-center min-h-[70vh] px-4">
        <div class="contact-form max-w-lg w-full p-6 sm:p-8">
            <h1 class="text-center text-xl sm:text-xl font-bold text-[var(--accent-color)] mb-6">Contact Us</h1>
            
            <form action="/send-message" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <label for="name" class="block text-lg font-semibold text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[var(--accent-color)]">
                </div>

                <div>
                    <label for="email" class="block text-lg font-semibold text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[var(--accent-color)]">
                </div>

                <div>
                    <label for="message" class="block text-lg font-semibold text-gray-700">Message:</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[var(--accent-color)]"></textarea>
                </div>

                <button type="submit"
                    class="w-full sm:w-auto px-6 py-3 mt-4 bg-[var(--accent-color)] text-white rounded-md font-semibold hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
            event.preventDefault(); 

            setTimeout(() => {
                alert("Pesan berhasil dikirim!");
                form.reset(); // Kosongkan input field setelah submit
            }, 500);
            
        });
    });
</script>
@endsection
