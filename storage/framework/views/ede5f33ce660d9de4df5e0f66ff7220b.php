

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-3">
    <h2>Post List</h2>
    <a class="btn btn-primary" href="<?php echo e(route('posts.create')); ?>">Create Post</a>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($post->id); ?></td>
        <td><?php echo e($post->title); ?></td>
        <td>
            <a class="btn btn-info btn-sm" href="<?php echo e(route('posts.show', $post)); ?>">Show</a>
            <a class="btn btn-warning btn-sm" href="<?php echo e(route('posts.edit', $post)); ?>">Edit</a>
            <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo e($posts->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUD-APP\resources\views/posts/index.blade.php ENDPATH**/ ?>