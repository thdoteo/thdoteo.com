<?php $__env->startSection('content'); ?>

    <h2>Edit <?php echo e($project->name); ?></h2>

    <p><?php echo $__env->make('projects.admin.form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>