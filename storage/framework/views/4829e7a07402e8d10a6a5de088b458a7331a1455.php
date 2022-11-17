

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('/pesan')); ?>" class="btn btn-success">+ Pesanan Baru</a>
    <form action="">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor Meja Pelanggan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="....">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Makanan</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Minuman</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\denia\Desktop\Test Kerja\kasir\resources\views//pesan.blade.php ENDPATH**/ ?>