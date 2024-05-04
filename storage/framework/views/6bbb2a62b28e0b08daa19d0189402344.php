

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mis Postulaciones</div>

                    <div class="card-body">
                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-3">
                                <h5><?php echo e($job->title); ?></h5>
                                <p><?php echo e($job->description); ?></p>
                                <p>Estado: <?php echo e($job->pivot->status); ?></p> <!-- Suponiendo que hay un campo "status" en la tabla pivot -->
                                <a href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>" class="btn btn-primary">Ver Trabajo</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despligue\portal\resources\views/frontend/jobs/applicar.blade.php ENDPATH**/ ?>