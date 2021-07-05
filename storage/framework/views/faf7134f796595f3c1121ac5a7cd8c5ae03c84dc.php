<?php $__env->startSection('content'); ?>

    <h2>Posts</h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Author</th>
                <th>created at</th>
                <th>updated at</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($post->id); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->author); ?></td>
                    <td><?php echo e($post->created_at); ?></td>
                    <td><?php echo e($post->updated_at); ?></td>
                    <td class="text-center">
                        <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-success btn-sm">Edit</a>
                        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="post" style="display: inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/theresa/Documents/Seminarfach/simple-blog-3-master/resources/views/admin/posts.blade.php ENDPATH**/ ?>