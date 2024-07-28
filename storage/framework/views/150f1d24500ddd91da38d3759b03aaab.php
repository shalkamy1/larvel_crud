<?php $__env->startSection('MainTitle'); ?>
edit admin :<?php echo e($edit_Admin->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<form action="<?php echo e(Route("admin.update",$edit_Admin->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
<div class="form-group">
    <label for="">Admin name</label>
    <input type="text" name="AdminName" value="<?php echo e($edit_Admin->name); ?>" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin email</label>
    <input type="text" name="AdminEmail" value="<?php echo e($edit_Admin->email); ?>" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin password</label>
    <input type="text" name="AdminPassword" value="<?php echo e($edit_Admin->password); ?>" class="form-control">
</div>
<form class="form-group">
    <label for="">Admin image
        <span>
            <img src="<?php echo e(asset("upload/$edit_Admin->image")); ?>" width="40" alt="">
        </span>
    </label>


    <input type="file" name="AdminImage" value="<?php echo e($edit_Admin->image); ?>" class="form-control">
</div>
<div class="d-grid">
    <button class="btn btn-info"> Send Data</button>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pharmacy_laravel10\pharmacy\resources\views/Admins/edit.blade.php ENDPATH**/ ?>