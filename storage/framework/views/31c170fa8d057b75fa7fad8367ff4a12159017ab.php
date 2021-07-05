<?php $__env->startSection('content'); ?>

  <div class="card my-4">
    <h5 class="card-header">Create a Post:</h5>
    <div class="card-body">
        <form method="post" action="<?php echo e(route('posts.update', $post->id)); ?>">
            <div class="form-group">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <label for="name">Name</label>
                <input type="text" class="form-control" name="title" value="<?php echo e($post->title); ?>" />
            </div>
            <div class="form-group">
                <label for="email">Lead</label>
                <input type="text" class="form-control" name="lead" value="<?php echo e($post->lead); ?>" />
            </div>
            <div class="form-group">
                <label for="phone">body</label>
                <input type="text" class="form-control" name="body" value="<?php echo e($post->body); ?>" />
            </div>
            <div class="form-group">
                <input name="image" type="file" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-block btn-danger">Update</button>
        </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theresa/Documents/Seminarfach/simple-blog-3-master/resources/views/updatePost.blade.php ENDPATH**/ ?>