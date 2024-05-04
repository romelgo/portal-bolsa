<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url(<?php echo e(asset('external/images/hero_2.jpg')); ?>);">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Trabajos para: <?php echo e($categoryName->name); ?></h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="<?php echo e(route('alljobs')); ?>">Trabajos</a> </span> <span><span class="sep m-0"> ></span> Categoria</span></p>
  </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row mt-5 mb-5">


            <div class="col-md-12">


                <div class="card">
                    <div class="card-header"><h3>Todos los trabajos de <strong><?php echo e($categoryName->name); ?></strong></h3></div>

                    <div class="card-body">
                        <?php if(count($jobs) > 0): ?>

                        <table class="table table-responsive text-center">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Logo:</th>
                                <th scope="col">Título:</th>
                                <th scope="col">Dirección:</th>
                                <th scope="col">Tipo de trabajo:</th>
                                <th scope="col">Trabajo publicado:</th>
                            
                                <th scope="col">Acción:</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; ?>  
                                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($i); ?></th>
                                        <td>
                                            
                                            
                                            <?php if($job->company->logo): ?>
                                            <img src="<?php echo e(asset('/uploads/logo')); ?>/<?php echo e($job->company->logo); ?>"  style="border-radius: 50px" width="50" height="50" alt="">
                        
                                            <?php endif; ?>


                                        </td>
                                        <td width="25%"><?php echo e($job->title); ?></td>
                                        <td width="20%"><i class="fas px-2 fa-map-marker-alt"></i><?php echo e(Str::limit($job->address, 20)); ?></td>
                                        <td><i class="fas px-2 fa-business-time"></i><?php echo e(Str::ucfirst($job->type)); ?></td>
                                        <td><i class="far px-2 fa-clock"></i> <?php echo e($job->created_at->diffForHumans()); ?></td>
                                    
                                        <td><a href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>"><button class="btn btn-success btn-sm">Ver mas</button></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                            </tbody>
                        </table>
                        <?php else: ?>

                        <h4 class="text-center">Aún no se ha publicado ningún trabajo de categoría.</h4>


                        <?php endif; ?>


                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-4">
            
                <?php echo e($jobs->links()); ?>

        
        </div>

        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<style>
td i{
    color: #4183d7
}
</style>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despligue\portal-v1\resources\views/frontend/jobs/jobs-category.blade.php ENDPATH**/ ?>