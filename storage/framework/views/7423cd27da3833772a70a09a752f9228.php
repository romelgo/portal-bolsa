<?php $__env->startSection('content'); ?>
<div style="height: 94px;"></div>


<div class="site-section bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Verifique su dirección de correo electrónico')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Antes de continuar, consulte su correo electrónico para obtener un enlace de verificación.')); ?>

                    <?php echo e(__('Si no recibiste el correo electrónico')); ?>,
                    <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('haga clic aquí para solicitar otro')); ?></button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despligue\portal-v1\resources\views/auth/verify.blade.php ENDPATH**/ ?>