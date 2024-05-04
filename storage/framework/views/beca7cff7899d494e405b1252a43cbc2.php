<?php $__env->startSection('content'); ?>
       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Create new Testimonial</li>
          </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/testimonials" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Back to testimonial</a>
           
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 


<div class="card bg-white">
    <div class="card-body mt-5 mb-5">

        <form action="<?php echo e(route('adminTestimoniStore')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <div class="col-md-2">Author name</div>
                <div class="col-md-4">
                    <input id="name" type="text" placeholder="Name" value="<?php echo e(old('name')); ?>" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value=""  autofocus="">
                    <?php if($errors->has('name')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                     <?php endif; ?>


                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Author profession</div>
                <div class="col-md-4">
                    <input id="profession" type="text" placeholder="Profession" value="<?php echo e(old('profession')); ?>" class="form-control<?php echo e($errors->has('profession') ? ' is-invalid' : ''); ?>" name="profession" value=""  autofocus="">
                    <?php if($errors->has('profession')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('profession')); ?></strong>
                    </span>
                     <?php endif; ?>


                 </div>
            </div>


            <div class="form-group row">
                <div class="col-md-2">Author testimonial info</div>
                <div class="col-md-6">

                    <textarea name="content" style="height: 120px" class="form-control <?php echo e($errors->has('content') ? ' is-invalid' : ''); ?>"><?php echo e(old('content')); ?></textarea>
                    <?php if($errors->has('content')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('content')); ?></p>
                        </div>
                    <?php endif; ?>
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Vimeo video id</div>
                <div class="col-md-4">
                    <input id="video_id" type="text" placeholder="Vimeo video id" value="<?php echo e(old('video_id')); ?>" class="form-control<?php echo e($errors->has('video_id') ? ' is-invalid' : ''); ?>" name="video_id" value=""  autofocus="">
                    <?php if($errors->has('video_id')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('video_id')); ?></strong>
                    </span>
                     <?php endif; ?>


                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">
                    <label for="status">Status:</label>
                </div>
                <div class="col-md-4">
                    <select name="status" id="status" class="form-control">
                        
                        <option value="1">Live</option>
                        <option value="0">Draft</option>
                            
                       
                    </select>
                

                 </div>
            </div>




            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class="theme-primary-btn btn btn-success" type="submit">Create post</button>
                   
                 </div>
            </div>

        </form>
  
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despliegue\portal\resources\views/admin/testimonials/create.blade.php ENDPATH**/ ?>