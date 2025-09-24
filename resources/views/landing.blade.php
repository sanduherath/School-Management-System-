<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">SmartSchool</h1>
            <div class="space-x-6">
                <a href="#features" class="hover:text-blue-600">Features</a>
                <a href="#about" class="hover:text-blue-600">About</a>
                <a href="#contact" class="hover:text-blue-600">Contact</a>
                <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Smart School Management Made Easy</h2>
            <p class="text-lg md:text-xl mb-8">Manage students, teachers, classes, exams, and parents—all in one place.</p>
            <a href="{{ route('register') }}" class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg shadow hover:bg-gray-100">
                Get Started
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Key Features</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h4 class="font-semibold text-lg mb-2">🎓 Student Management</h4>
                    <p>Track profiles, attendance, and performance easily.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h4 class="font-semibold text-lg mb-2">👩‍🏫 Teacher Dashboard</h4>
                    <p>Manage classes, timetables, and reports efficiently.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h4 class="font-semibold text-lg mb-2">📊 Exams & Results</h4>
                    <p>Automated exam management with instant results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-6">About SmartSchool</h3>
            <p class="text-lg text-gray-600">SmartSchool is a modern School Management System designed to make academic and administrative work seamless for teachers, students, and parents. Access anywhere, anytime.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-6">Contact Us</h3>
            <p class="text-gray-600 mb-4">Have questions? Reach out to us.</p>
            <p class="font-semibold">📧 support@smartschool.com | 📞 +94 77 123 4567</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-6 text-center">
        <p>© {{ date('Y') }} SmartSchool. All rights reserved.</p>
    </footer>

</body>
</html>
