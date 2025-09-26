<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CAMPUSA University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 50%, #93c5fd 100%);
        }
    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-800">
     <!-- Header -->
    <header class="bg-blue-400 text-white py-2 text-sm rounded-t-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-blue-200">

            </div>
            <div class="flex items-center space-x-6">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    (303) 5446-5464
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    hello@example.com
                </span>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-blue-500 text-white py-4 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center pl-4">
                <div class="text-blue-300 text-2xl font-bold mr-2"></div>
                <div class="text-xl font-bold">Crestview College</div>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">HOME</a>
                <a href="{{ route('about') }}" class="hover:text-blue-400 transition-colors">ABOUT US</a>
                <a href="{{ route('works') }}" class="hover:text-blue-400 transition-colors">WORKS</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-400 transition-colors">CONTACT US</a>
                <a href="{{ route('login') }}"
                    class="bg-blue-400 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-500 transition-colors">
                    SIGN IN
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>


    <section class="hero-gradient text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-4">Get in Touch</h1>
            <p class="text-blue-200 max-w-2xl mx-auto">Have a question, feedback or want to connect? Send us a message
                and we'll get back to you shortly.</p>
        </div>
    </section>

    <main class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-white rounded-lg shadow p-8">
                <h2 class="text-2xl font-bold mb-4">Contact Form</h2>
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                        <input name="name" required class="w-full border rounded px-3 py-2" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input name="email" type="email" required class="w-full border rounded px-3 py-2" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea name="message" rows="6" required class="w-full border rounded px-3 py-2"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded font-semibold">Send
                            Message</button>
                    </div>
                </form>
            </div>

            <div>
                <div class="bg-white rounded-lg shadow p-8 mb-6">
                    <h3 class="text-xl font-bold mb-2">Contact Information</h3>
                    <p class="text-gray-600 mb-2">Email: hello@example.com</p>
                    <p class="text-gray-600 mb-2">Phone: (303) 5446-5464</p>
                    <p class="text-gray-600">Address: 123 Campus Drive, City, Country</p>
                </div>

                <div class="bg-white rounded-lg shadow p-8">
                    <h3 class="text-xl font-bold mb-2">Office Hours</h3>
                    <p class="text-gray-600">Mon - Fri: 08:00 - 17:00</p>
                    <p class="text-gray-600">Sat: 09:00 - 13:00</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Copyright -->
    <div class="text-center text-gray-100 text-sm py-4 bg-blue-700">
        © {{ date('Y') }} CAMPUSA University. All rights reserved.
    </div>
</body>

</html>
