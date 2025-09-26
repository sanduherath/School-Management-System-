<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Crestview College</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up { animation: fadeInUp 0.9s ease-out forwards; }
        .bg-pattern { background-image: radial-gradient(circle at 25% 25%, rgba(255,255,255,0.06) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(255,255,255,0.03) 0%, transparent 50%); }
        .hero-gradient { background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 50%, #93c5fd 100%); }
        @keyframes popIn { 0% { transform: translateY(18px) scale(.98); opacity: 0; } 60% { transform: translateY(-6px) scale(1.02); opacity: 1; } 100% { transform: translateY(0) scale(1); opacity: 1; } }
        .animate-pop-in { animation: popIn 560ms cubic-bezier(.22,.9,.3,1) both; }
    </style>
</head>

<body class="font-sans">
    <section class="hero-gradient bg-pattern min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="container mx-auto px-8 flex items-center justify-center relative z-10">
            <div class="w-[420px]">
                <div class="w-full bg-white bg-opacity-10 backdrop-blur-md rounded-2xl p-10 shadow-xl animate-pop-in">
                    <div class="text-center mb-6">
                        <h2 class="text-2xl font-bold text-white">Forgot your password?</h2>
                        <p class="text-blue-100">Enter your email and we'll send a password reset link.</p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-4 bg-red-600 text-white p-3 rounded">
                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="mb-4 p-3 bg-green-600 text-white rounded">{{ session('status') }}</div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block text-blue-100 mb-2">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                                class="w-full px-4 py-3 rounded bg-white bg-opacity-20 text-white placeholder-blue-200 border border-transparent focus:outline-none focus:ring-2 focus:ring-blue-300" />
                        </div>

                        <div class="flex items-center justify-between mb-2">
                            <a href="{{ route('login') }}" class="text-blue-100 hover:underline text-sm">Back to Sign in</a>
                        </div>

                        <button type="submit" class="w-full bg-white text-blue-600 font-semibold py-3 rounded hover:scale-105 transition-transform">Send Reset Link</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-16 fill-white opacity-20">
                <path d="M1200 120L0 16.48V120z" opacity="0.25"></path>
                <path d="M1200 120L0 67.81V120z" opacity="0.5"></path>
                <path d="M1200 120L0 120z"></path>
            </svg>
        </div>
    </section>
</body>

</html>

