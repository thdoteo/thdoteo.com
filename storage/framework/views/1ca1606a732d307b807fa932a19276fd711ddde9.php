<?php $__env->startSection('code', '500'); ?>
<?php $__env->startSection('title', __('Error')); ?>

<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>