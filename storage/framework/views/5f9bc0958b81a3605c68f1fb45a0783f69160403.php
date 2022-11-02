<?php $__env->startSection('title'); ?>
<link rel="stylesheet" href="style.css">
<?php $__env->startSection('content'); ?>
    <h1>Apotik Sejahtera</h1>

    <?php $__currentLoopData = $obats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listobat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="bagian">

        <div class="nama-obat">
            <?php echo e($listobat->Nama_Obat); ?>

        </div>
        <div class="deskripsi">
            <?php echo e($listobat->Deskripsi); ?>

        </div>
        <div class="harga">
            <?php echo e($listobat->Harga); ?>

        </div>
        <div class="gambar">
            <img src=<?php echo e($listobat->url_gambar); ?> alt="list-obat">
        </div>
</div>




    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\resources\views/home.blade.php ENDPATH**/ ?>