<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="max-w-4xl mx-auto py-12">
        <div class="bg-white p-8 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
            <p>Welcome, {{ auth()->user()->name }} ({{ auth()->user()->email }})</p>
            <p class="mt-4 text-sm text-gray-600">This is a simple admin dashboard placeholder.</p>
        </div>
    </div>
</body>

</html>
