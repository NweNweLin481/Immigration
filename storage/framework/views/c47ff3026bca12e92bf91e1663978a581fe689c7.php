<?php $__env->startSection('title','Update'); ?>
<?php $__env->startSection('content'); ?>

    <div class="card card-body col-md-8">
        <legend>Update Form</legend>
        <div class="card mb-3 " style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="image/Immigration-Logo.png" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Chit San Thu</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>