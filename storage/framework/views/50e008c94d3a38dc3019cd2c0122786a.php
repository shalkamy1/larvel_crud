<?php $__env->startSection('MainTitle'); ?>
list admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(Session::has("done")): ?>
<div class="alert alert-success">
    <?php echo e(Session::get("done")); ?>

</div>
<?php endif; ?>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col" colspan="3">action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php $__empty_1 = true; $__currentLoopData = $admin_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <th><?php echo e($loop->iteration); ?></th>
        <th><?php echo e($items->name); ?></th>
        <th><?php echo e($items->email); ?></th>
        <th><a href="<?php echo e(route("admin.show",$items->id)); ?>"><i class="text-info fa-solid fa-eye"></i></a> </th>
        <th><a href="<?php echo e(route("admin.edit",$items->id)); ?>"><i class="text-warning fa-solid fa-pen-to-square"></i></a> </th>
        <th><a href="<?php echo e(route("admin.destroy",$items->id)); ?>"><i class="text-danger fa-solid fa-trash"></i></a> </th>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

      <?php endif; ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pharmacy_laravel10\pharmacy\resources\views/Admins/index.blade.php ENDPATH**/ ?>