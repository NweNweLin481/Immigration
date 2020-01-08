<?php $__env->startSection('title','PersonInfo'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session('status')): ?>
        <p class="alert alert-success col-md-8 col-md-offset-2"><?php echo e(session('status')); ?> </p>
        <div class="card" style="width: 18rem;">
            <img src="image/Immigration-Logo.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

    <?php else: ?>


        <div class="card bg-light container mt-5 col-md-offset-2 col-md-8">

            <div class="card-body">
                <div class="alert alert-danger">Something was wrong</div>
            </div>
        </div>

    <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>