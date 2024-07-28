<?php $__env->startSection('MainTitle'); ?>
create admin
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php if(Session::has("done")): ?>
<div class="alert alert-success">
    <?php echo e(Session::get("done")); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(Route("admin.store")); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
<div class="form-group">
    <label for="">Admin name</label>
    <input type="text" name="AdminName" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin email</label>
    <input type="text" name="AdminEmail" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin password</label>
    <input type="text" name="AdminPassword" class="form-control">
</div>
<form class="form-group">
    <label for="">Admin image </label>
    <input type="file" name="AdminImage" class="form-control">
</div>
<div class="d-grid">
    <button class="btn btn-info"> Send Data</button>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pharmacy_laravel10\pharmacy\resources\views/Admins/create.blade.php ENDPATH**/ ?>