<?php $__env->startSection('content'); ?>

  <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
  </h1>

  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="card mb-4">
        <img class="card-img-top" src="<?php echo e(asset( 'storage/'.$post->image)); ?>" alt="">
      <div class="card-body">
        <h2 class="card-title"><?php echo e($post->title); ?></h2>
        <p class="card-text"><?php echo e($post->lead); ?></p>
        <a href="<?php echo e(url('/posts/' . $post->id)); ?>" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on <?php echo e($post->created_at); ?> by
        <a href="#"><?php echo e($post->author); ?></a>
      </div>
    </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <!-- Pagination -->
  <ul class="pagination justify-content-center mb-4">
    <li class="page-item">
      <a class="page-link" href="#">&larr; Older</a>
    </li>
    <li class="page-item disabled">
      <a class="page-link" href="#">Newer &rarr;</a>
    </li>
  </ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theresa/Documents/Seminarfach/simple-blog-3-master/resources/views/home.blade.php ENDPATH**/ ?>