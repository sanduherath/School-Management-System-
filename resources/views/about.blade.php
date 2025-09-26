<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CAMPUSA University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-10px) rotate(1deg);
            }

            66% {
                transform: translateY(5px) rotate(-1deg);
            }
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

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
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

        .animate-slide-in-left {
            animation: slideInLeft 1s ease-out 0.3s forwards;
            opacity: 0;
        }

        .bg-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
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

    <!-- Hero Section -->
    <section class="hero-gradient bg-pattern py-20 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-5 rounded-full animate-float"></div>
            <div class="absolute top-32 right-20 w-16 h-16 bg-blue-400 bg-opacity-20 rounded-full animate-float"
                style="animation-delay: -2s;"></div>
            <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white bg-opacity-5 rounded-full animate-float"
                style="animation-delay: -4s;"></div>
            <div class="absolute top-1/2 left-8 w-8 h-8 bg-blue-400 bg-opacity-20 rounded-full animate-float"
                style="animation-delay: -1s;"></div>
        </div>

        <div class="container mx-auto px-8 text-center relative z-10">
            <div class="text-white animate-fade-in-up">
                <div class="text-blue-300 text-sm font-semibold mb-4 uppercase tracking-wide">
                    LEARN ABOUT CAMPUSA
                </div>

                <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    ABOUT <span class="text-blue-300">OUR UNIVERSITY</span>
                </h1>

                <p class="text-gray-300 text-lg mb-8 leading-relaxed max-w-2xl mx-auto">
                    Discover our journey, mission, and commitment to providing world-class education
                    that transforms lives and builds futures.
                </p>
            </div>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-8">
            <!-- Our Story -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
                <div class="animate-slide-in-left ml-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Story</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-4">
                        Founded in 1985, CAMPUSA has been at the forefront of educational excellence for over three
                        decades.
                        What started as a small community college has grown into a prestigious university serving
                        students
                        from around the globe.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Our commitment to innovation, quality education, and student success has made us a leader in
                        higher education. We believe that education should be accessible to everyone, regardless of
                        their background or circumstances.
                    </p>
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">35+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">15K+</div>
                            <div class="text-gray-600">Students</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">500+</div>
                            <div class="text-gray-600">Faculty</div>
                        </div>
                    </div>
                </div>
                <div class="animate-fade-in-up flex justify-center">
                    <div class="bg-blue-100 rounded-lg p-4 max-w-md md:max-w-lg lg:max-w-xl w-[450px]">
                        <img src="{{ asset('images/school.png') }}" alt="University Campus"
                            class="w-full rounded-lg shadow object-cover h-64 md:h-80 lg:h-96">
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Mission & Vision -->
        <div class="grid lg:grid-cols-2 gap-16 m-16 mb-16">
            <div class="bg-blue-200 p-8 rounded-lg animate-slide-in-left">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    To provide transformative educational experiences that empower students to become
                    innovative leaders, critical thinkers, and responsible global citizens who contribute
                    positively to society and drive meaningful change in their communities.
                </p>
            </div>
            <div class="bg-blue-200 p-8 rounded-lg animate-fade-in-up">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be recognized as a premier institution of higher learning that sets the standard
                    for educational excellence, innovation, and inclusivity, preparing students for
                    success in an ever-evolving global landscape.
                </p>
            </div>
        </div>

        <!-- Our Values -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Core Values</h2>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow animate-fade-in-up">
                <div class="text-blue-600 text-5xl mb-4">💡</div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Innovation</h4>
                <p class="text-gray-600">Embracing new ideas and cutting-edge approaches to education and research.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow animate-fade-in-up"
                style="animation-delay: 0.1s;">
                <div class="text-blue-600 text-5xl mb-4">🤝</div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Integrity</h4>
                <p class="text-gray-600">Maintaining the highest standards of honesty, ethics, and transparency.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow animate-fade-in-up"
                style="animation-delay: 0.2s;">
                <div class="text-blue-600 text-5xl mb-4">🌍</div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Inclusivity</h4>
                <p class="text-gray-600">Creating a welcoming environment where diversity is celebrated and valued.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow animate-fade-in-up"
                style="animation-delay: 0.3s;">
                <div class="text-blue-600 text-5xl mb-4">⭐</div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Excellence</h4>
                <p class="text-gray-600">Striving for the highest quality in all aspects of education and service.</p>
            </div>
        </div>
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
            document.querySelectorAll('.animate-fade-in-up, .animate-slide-in-left').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
    <!-- Copyright -->
    <div class="text-center text-gray-100 text-sm py-4">
        © {{ date('Y') }} CAMPUSA University. All rights reserved.
    </div>
</body>

</html>
