<?php $__env->startSection('MainTitle'); ?>
show admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<img src="<?php echo e(asset("upload/$show_admin->image")); ?>" class="img-fluid" alt="">
<hr>
<h6> Admin Name : <?php echo e($show_admin->name); ?></h6>
<hr>
<h6> Admin email : <?php echo e($show_admin->email); ?></h6>
<hr>
<h6> Admin password : <?php echo e($show_admin->password); ?></h6>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pharmacy_laravel10\pharmacy\resources\views/Admins/show.blade.php ENDPATH**/ ?>