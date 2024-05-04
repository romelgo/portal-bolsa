

<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Mis Postulaciones</h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Trabajo</a> </span> <span><span class="sep m-0"> ></span> Mis Postulaciones</span></p>
  </div>
</div>

<div class="site-section bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mis Postulaciones</div>

                <div class="card-body">
               
                    <?php if(is_null($applications) || $applications->isEmpty()): ?>
                    <p>No tienes postulaciones.</p>
                    <?php else: ?>
                   <!--  <ul>
                        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <h5><?php echo e($application->title); ?></h5>
                            <p><?php echo e($application->description); ?></p> Agrega aquí más detalles de la postulación si es necesario 
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul> -->
                        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mb-3">
                                
                                <div class="card-header"><h5>Empleo: <?php echo e($application->title); ?></h5></div>

                                <div class="card-body">
                                    <small class="badge bg-secondary badge-primary mb-2">Puesto de trabajo: <?php echo e($application->position); ?></small>
                                    <p>Descripcion: <?php echo e($application->description); ?></p>
                                </div>
                                <div class="card-footer">
                                    <span><a href="<?php echo e(route('job.show', [$application->id, $application->slug])); ?>" class="btn-sm btn btn-primary">Ver Trabajo</a></span>
                                    <span class="float-end">Ultimo dia de postulacion: <?php echo e($application->last_date); ?></span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php endif; ?>
               
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despligue\portal\resources\views/frontend/jobs/applications.blade.php ENDPATH**/ ?>