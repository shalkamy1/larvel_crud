<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("css/bootstrap.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/all.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/all.min.css")); ?>">


    <title>crud</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark ">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route("welcome")); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route("admin.index")); ?>">list Admins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route("admin.create")); ?>">create</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

<div class="container py-2">

<h1 class="text-center text-info">   <?php echo $__env->yieldContent("MainTitle"); ?></h1>

</div>


<div class="py-3">
<div class="container col-7">
<div class="card">
    <div class="card-body">
        <?php echo $__env->yieldContent("content"); ?>
    </div>
</div>
</div>
</div>


  <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

  <script src="<?php echo e(asset('js/all.js')); ?>"></script>

  <script src="<?php echo e(asset('js/all.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\pharmacy_laravel10\pharmacy\resources\views/layout/app.blade.php ENDPATH**/ ?>