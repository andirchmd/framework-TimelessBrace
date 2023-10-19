<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
    
    
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white text-center py-20">
        <h1 class="text-5xl mb-6">Welcome to Our Site!</h1>
        <p class="text-xl mb-8">Discover our amazing product and features.</p>
        <a href="#features" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Learn More</a>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl mb-10">Features</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl mb-4">Feature 1</h3>
                    <p>Describe the first feature here.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl mb-4">Feature 2</h3>
                    <p>Describe the second feature here.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl mb-4">Feature 3</h3>
                    <p>Describe the third feature here.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-6">
        <p>&copy; 2023 My Website</p>
    </footer>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\TimelessBrace\resources\views/welcome.blade.php ENDPATH**/ ?>