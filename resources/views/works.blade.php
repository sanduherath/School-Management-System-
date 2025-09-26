<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Works - CAMPUSA University</title>
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

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .animate-zoom-in {
            animation: zoomIn 0.6s ease-out forwards;
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

        .gallery-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .filter-btn.active {
            background-color: #3b82f6;
            color: white;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
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
                    SHOWCASE OF EXCELLENCE
                </div>

                <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    OUR <span class="text-blue-300">STUDENT WORKS</span>
                </h1>

                <p class="text-gray-300 text-lg mb-8 leading-relaxed max-w-2xl mx-auto">
                    Explore the amazing projects, achievements, and moments that define the CAMPUSA experience.
                    See our students in action and discover what makes our community special.
                </p>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="animate-fade-in-up">
                    <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                    <div class="text-gray-600">Student Projects</div>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="text-4xl font-bold text-blue-600 mb-2">200+</div>
                    <div class="text-gray-600">Research Papers</div>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                    <div class="text-gray-600">Awards Won</div>
                </div>
                <div class="animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="text-4xl font-bold text-blue-600 mb-2">100+</div>
                    <div class="text-gray-600">Events Hosted</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Buttons -->
    <section class="bg-gray-50 py-8">
        <div class="container mx-auto px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Student Photo Gallery</h2>
                <p class="text-gray-600">Filter by category to explore different aspects of student life</p>
            </div>

            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button
                    class="filter-btn active px-6 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors"
                    data-filter="all">
                    All Photos
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors"
                    data-filter="academic">
                    Academic
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors"
                    data-filter="events">
                    Events
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors"
                    data-filter="sports">
                    Sports
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors"
                    data-filter="graduation">
                    Graduation
                </button>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="gallery">
                <!-- Academic Photos -->
                <!-- Events Photos -->
                <div class="gallery-item animate-zoom-in" data-category="events" style="animation-delay: 0.3s;">
                    <img src="{{ asset('images/1.jpg') }}" alt="Welcome party 2024" class="rounded-lg w-full h-64 object-cover" />
                </div>
                <div class="gallery-item animate-zoom-in" data-category="events" style="animation-delay: 0.4s;">
                    <img src="{{ asset('images/2.jpg') }}" alt="Cultural festival" class="rounded-lg w-full h-64 object-cover" />
                </div>
                <div class="gallery-item animate-zoom-in" data-category="events" style="animation-delay: 0.5s;">
                    <img src="{{ asset('images/3.jpeg') }}" alt="Music concert" class="rounded-lg w-full h-64 object-cover" />
                </div>

                <!-- Sports Photos -->
                <div class="gallery-item animate-zoom-in" data-category="sports" style="animation-delay: 0.6s;">
                    <img src="{{ asset('images/4.jpg') }}" alt="Football championship" class="rounded-lg w-full h-64 object-cover" />
                </div>
                <div class="gallery-item animate-zoom-in" data-category="sports" style="animation-delay: 0.7s;">
                    <img src="{{ asset('images/5.jpeg') }}" alt="Basketball tournament" class="rounded-lg w-full h-64 object-cover" />
                </div>

                <!-- Graduation Photos -->
                <div class="gallery-item animate-zoom-in" data-category="graduation" style="animation-delay: 0.8s;">
                    <img src="{{ asset('images/6.jpeg') }}" alt="Graduation ceremony 2024" class="rounded-lg w-full h-64 object-cover" />
                </div>
                <div class="gallery-item animate-zoom-in" data-category="graduation" style="animation-delay: 0.9s;">
                    <img src="{{ asset('images/7.jpeg') }}" alt="Valedictorian speech" class="rounded-lg w-full h-64 object-cover" />
                </div>

                <div class="gallery-item animate-zoom-in" data-category="academic" style="animation-delay: 1s;">
                    <img src="{{ asset('images/8.jpg') }}" alt="Group study session" class="rounded-lg w-full h-64 object-cover" />
                </div>

                <div class="gallery-item animate-zoom-in" data-category="events" style="animation-delay: 1.1s;">
                    <img src="{{ asset('images/10.webp') }}" alt="Art exhibition" class="rounded-lg w-full h-64 object-cover" />
                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Image Preview -->
    <div id="imageModal" class="modal">
        <span class="absolute top-4 right-4 text-white text-4xl cursor-pointer z-10"
            onclick="closeModal()">&times;</span>
        <img id="modalImage" class="modal-content" alt="Gallery Image">
    </div>





    <script>
        // Gallery filtering functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filter === 'all') {
                            item.style.display = 'block';
                        } else {
                            if (item.getAttribute('data-category') === filter) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        }
                    });
                });
            });

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
            document.querySelectorAll('.animate-fade-in-up, .animate-zoom-in').forEach(el => {
                observer.observe(el);
            });
        });

        // Modal functionality
        function openModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.classList.add('show');
            modalImg.src = imageSrc;
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('show');
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
     <!-- Copyright -->
    <div class="text-center text-gray-100 text-sm py-4">
        © {{ date('Y') }} CAMPUSA University. All rights reserved.
    </div>
</body>

</html>
