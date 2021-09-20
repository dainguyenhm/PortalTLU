
<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('index_Chuan.Layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('index_Chuan.Content_index.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('slide'); ?>
    <?php echo $__env->make('index_Chuan.Layout.slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index_Chuan.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PortalTLU\Sources\Project_CDTN\resources\views/index_Chuan/index.blade.php ENDPATH**/ ?>