<?php $__env->startSection('title','Detail'); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <iframe src="image/nrcpdf.pdf" class="col-md-6" height="500px">
    </iframe>
    <iframe src="image/nrcpdf.pdf" class="col-md-6" height="500px">
    </iframe>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>