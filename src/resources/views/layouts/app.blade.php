<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portofolio David Yehezkiel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <header class="bg-white text-black">
        <nav class="container mx-auto px-15 py-6 flex justify-between mt-10">
            <h1 class="font-bold">My Portofolio</h1>

            <div class="flex gap-6">
                <a href="/" class="hover:text-black-300">Home</a>
                <a href="/contact" class="hover:text-gray-300">Contact</a>
                <a href="/projects" class="hover:text-gray-300">Project</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-10 mt-10">
        @yield('content')
    </main>

</body>
</html>