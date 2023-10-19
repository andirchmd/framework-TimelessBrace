<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="<?php echo e(mix('js/script.js')); ?>"></script>
    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>  

</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\TimelessBrace\resources\views/layouts/global.blade.php ENDPATH**/ ?>