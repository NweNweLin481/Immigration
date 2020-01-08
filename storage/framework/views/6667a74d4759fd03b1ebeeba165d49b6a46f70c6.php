<?php $__env->startSection('title','Search Page'); ?>
<?php $__env->startSection('content'); ?>

<div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">

<form method="post" enctype="multipart/form-data">

<?php echo e(csrf_field()); ?>

<legend>Search .....</legend>
    <div class="form-row">


        <div class="form-group col-md-4">

            <input list="inputState" name="distName" class="form-control" placeholder="Division">

            <datalist id="inputState">
                <?php $__currentLoopData = $dists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dist): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($dist->name); ?>"></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </datalist>

        </div>

        <div class="form-group col-md-4">

            <input list="inputState2" name="typeName" class="form-control" placeholder="NRC Type">

            <datalist id="inputState2">
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($type->type); ?>"></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </datalist>

        </div>

    <div class="form-group col-md-4">
        
        <input type="number" class="form-control" id="number" name="number" placeholder="Number">
     </div>
</div>





<button type="submit" class="btn btn-primary">Search</button><br><br>
</form></div>


    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <p class="alert alert-danger"><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php if(session('name')): ?>
        <div class="card card-body bg-light container mt-5 col-md-offset-2 col-md-8">
            <div class="form-row"><div class="form-group col-md-4"> <h4><label>Name - <?php echo e(session('name')); ?></label></h4>
                <button type="button" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-primary">Send</button>
            </div></div>
    <?php endif; ?>

    <?php if(Session::has('pdfs')): ?>

        <?php $__currentLoopData = Session::get('pdfs'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

            <?php if( $pdf->pdf_type ==1): ?>
                <span>For 10 years </span>
            <?php endif; ?>
            <?php if( $pdf->pdf_type ==2): ?>
                <span>For 18 years old</span>
            <?php endif; ?>
            <?php if( $pdf->pdf_type ==3): ?>
                <span>For 30 years old</span>
            <?php endif; ?>
            <?php if( $pdf->pdf_type ==4): ?>
                <span>For 45 years old</span>
            <?php endif; ?>
            <br>

            <?php ($pdffile=$pdf->file_name); ?>




                <?php ($filelocations=unserialize($pdffile)); ?>

                <?php $__currentLoopData = $filelocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php ($loc='http://localhost/Immigration/public/uploades/'.$location); ?>


                <div>
                <iframe src="<?php echo e($loc); ?>" type="application/pdf" width="100%" height="500px">
                </iframe>
                </div>

                    <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <br>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>