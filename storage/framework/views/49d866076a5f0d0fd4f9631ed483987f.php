
<nav class="flex flex-row p-8 justify-between items-center bg-white z-10 sticky top-0">
    <a href="#" class="basis-1/4">
        <img src="<?php echo e(asset('assets/images/logo-informatika-full.png')); ?>" alt="Logo Informatika" class="w-fit h-12">
    </a>
    <ul class="flex flex-row gap-12 justify-center basis-1/2">
        <li><a href="#">Tentang</a></li>
        <li><a href="#">Akademik</a></li>
        <li><a href="#">Kampus</a></li>
        <li><a href="#">Riset</a></li>
        <li><a href="#">Berita & Acara</a></li>
    </ul>
    <div class="basis-1/4 flex justify-end">
        <?php echo $__env->make('components.button', ['nama' => 'Portal'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\TimelessBrace\resources\views/components/navbar.blade.php ENDPATH**/ ?>