<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMPUSA - University for Everyone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-10px) rotate(1deg); }
            66% { transform: translateY(5px) rotate(-1deg); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .animate-slide-in-right {
            animation: slideInRight 1s ease-out 0.5s forwards;
            opacity: 0;
        }

        .bg-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255,255,255,0.05) 0%, transparent 50%);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 50%, #93c5fd 100%);
        }
    </style>
</head>
<body class="font-sans bg-blue-500">
    <!-- Header -->
    <header class="bg-blue-400 text-white py-2 text-sm rounded-t-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-blue-200">

            </div>
            <div class="flex items-center space-x-6">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    (303) 5446-5464
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
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
                <a href="#" class="hover:text-blue-400 transition-colors">HOME</a>
                <a href="#" class="hover:text-blue-400 transition-colors">ABOUT US</a>
                <a href="#" class="hover:text-blue-400 transition-colors">WORKS</a>
                <a href="#" class="hover:text-blue-400 transition-colors">CONTACT US</a>
                <a href="{{ route('login') }}" class="bg-blue-400 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-500 transition-colors">
                    SIGN IN
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient bg-pattern min-h-screen flex items-center relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-5 rounded-full animate-float"></div>
            <div class="absolute top-32 right-20 w-16 h-16 bg-blue-400 bg-opacity-20 rounded-full animate-float" style="animation-delay: -2s;"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white bg-opacity-5 rounded-full animate-float" style="animation-delay: -4s;"></div>
            <div class="absolute top-1/2 left-8 w-8 h-8 bg-blue-400 bg-opacity-20 rounded-full animate-float" style="animation-delay: -1s;"></div>
        </div>

        <div class="container mx-auto px-8 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Left Content -->
            <div class="text-white animate-fade-in-up ml-8">
                <div class="text-blue-300 text-sm font-semibold mb-4 uppercase tracking-wide">
                    UNIVERSITY FOR EVERYONE
                </div>

                <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    PARTNER FOR<br>
                    YOUR FUTURE<br>
                    <span class="text-blue-300">OF LEARNING</span>
                </h1>

                <p class="text-gray-300 text-lg mb-8 leading-relaxed max-w-md">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                    tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Amet
                    dolor sit et mauris.
                </p>

                <button class="bg-blue-400 text-white px-8 py-4 rounded-md font-semibold text-lg hover:bg-blue-500 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    LEARN MORE
                </button>
            </div>

            <!-- Right Content - Student Image -->
            <div class="relative animate-slide-in-right">
                <div class="relative">
                    <!-- Background decoration -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-400 to-blue-500 rounded-full blur-xl opacity-20 animate-pulse"></div>

                    <!-- Student Image Container -->
                    <div class="relative bg-white bg-opacity-10 rounded-full p-12 backdrop-blur-sm">
                        <img src="{{ asset('images/student.png') }}"
                             alt="Happy Student"
                             class="w-96 max-w-full mx-auto"
                             style="filter: drop-shadow(0 15px 30px rgba(0,0,0,0.2));">
                    </div>

                    <!-- Floating elements around student -->

                </div>
            </div>
        </div>

        <!-- Bottom wave decoration -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-16 fill-white">
                <path d="M1200 120L0 16.48V120z" opacity="0.25"></path>
                <path d="M1200 120L0 67.81V120z" opacity="0.5"></path>
                <path d="M1200 120L0 120z"></path>
            </svg>
        </div>
    </section>

    <script>
        // Add smooth scrolling and interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);

            // Observe animated elements
            document.querySelectorAll('.animate-fade-in-up, .animate-slide-in-right').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
