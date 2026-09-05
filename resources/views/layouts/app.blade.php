<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD Application')</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- fontawesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    {{-- alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex min-h-screen flex-col bg-slate-100 text-slate-900">

    <header class="bg-gradient-to-r from-blue-700 to-indigo-800 text-white shadow-lg">
        <div class="container mx-auto px-6">

            <nav class="flex flex-col items-center justify-between gap-4 py-5 sm:flex-row">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <h1 class="text-xl font-bold">
                        CRUD 
                    </h1>
                </a>

                <ul class="flex flex-wrap items-center justify-center gap-2">
                    <li><a href="{{ url('/') }}" class="block rounded-lg px-4 py-2 transition hover:bg-white/15">Home</a></li>
                    <li><a href="{{ route('products.index') }}" class="block rounded-lg px-4 py-2 transition hover:bg-white/15">Products</a></li>
                    <li><a href="{{ route('categories.index') }}" class="block rounded-lg px-4 py-2 transition hover:bg-white/15">Categories</a></li>
                    <li><a href="{{ url('/about') }}" class="block rounded-lg px-4 py-2 transition hover:bg-white/15">About</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="container mx-auto flex-1 px-6 py-10">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">
            @yield('content')
        </div>
    </main>

</body>
</html>