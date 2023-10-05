
<section class="h-[500px] bg-white flex flex-col items-center overflow-hidden">
    <h2 class="h-2/5 text-4xl font-bold flex items-center">Kampus Merdeka</h2>
    <div class="container h-3/5 gap-8 grid grid-cols-3">
        <?php $__currentLoopData = $mbkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mbkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="h-64 w-auto flex bg-white rounded-3xl drop-shadow-lg">
                <div class="w-2/3 flex flex-col p-8 justify-between divide-y">
                    <div>
                        <h4 class="truncate font-bold text-2xl"><?php echo e($mbkm['nama']); ?></h4>
                        <p class="font-medium text-lg"><?php echo e($mbkm['jenis']); ?></p>
                    </div>
                    <p><?php echo e($mbkm['deskripsi']); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php /**PATH C:\xampp\htdocs\TimelessBrace\resources\views/components/mbkm.blade.php ENDPATH**/ ?>