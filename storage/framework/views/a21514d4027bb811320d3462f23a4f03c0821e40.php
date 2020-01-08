<?php $__env->startSection('title','PersonInfo'); ?>
<?php $__env->startSection('content'); ?>

    <div class="row mt-5">
        <div class="card col-md-3 ml-5">
            <img src="image/Immigration-Logo.png" alt="Why" width="200px" height="200px">
            <div class="card-body text-justify">
                <h5 class="card-title">Chit San Thu</h5>
                <p class="card-text">12/AuKaTa(N)204906</p>
                <div class="row">
                    <a href="<?php echo e(url('update')); ?>" class="btn btn-primary">Update</a>
                    <a href="<?php echo e(url('detail')); ?>" class="btn btn-primary ml-2">View Detail</a>
                </div>

            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>