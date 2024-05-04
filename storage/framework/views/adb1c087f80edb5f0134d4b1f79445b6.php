<?php $__env->startSection('content'); ?>
       <!--  Header BreadCrumb -->
       <div class="content-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Edit : <?php echo e($candidate->name); ?></li>
          </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/candidates" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Back to candidates</a>
          
        </div>
    </div>
      <!--  Header BreadCrumb --> 


<div class="card bg-white">
    <div class="card-body mt-1 mb-5">

        <form action="<?php echo e(route('adminCanUpdate', [$candidate->id])); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="form-group row">
                <div class="col-md-2">Candidate Name</div>
                <div class="col-md-4">
                    <input type="text" name="name" value="<?php echo e($candidate->name); ?>" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('name')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('name')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Candidate Email</div>
                <div class="col-md-4">
                    <input type="email" name="email" value="<?php echo e($candidate->email); ?>" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('email')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('email')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Candidate Address</div>
                <div class="col-md-4">
                    <input type="text" name="address" value="<?php echo e($candidate->profile->address ?? ''); ?>" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('address')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('address')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Candidate Gender</div>
                <div class="col-md-4">
                    <select class="form-control" name="gender">
                        <option value="any"<?php echo e($candidate->profile->gender ?? '' =='any' ? 'selected':''); ?>>Any</option>
                        <option value="male"<?php echo e($candidate->profile->gender ?? '' =='male' ? 'selected':''); ?>>Male</option>
                        <option value="female"<?php echo e($candidate->profile->gender ?? '' =='female' ? 'selected':''); ?>>Female</option>
                      
                    </select>
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Candidate Date of Birth</div>
                <div class="col-md-4">
                    <input type="date" name="dob" value="<?php echo e($candidate->profile->dob ?? ''); ?>" class="form-control<?php echo e($errors->has('dob') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('dob')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('dob')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Candidate Experience</div>
                <div class="col-md-4">
                    <input type="text" name="experience" value="<?php echo e($candidate->profile->experience ?? ''); ?>" class="form-control<?php echo e($errors->has('experience') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('experience')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('experience')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Candidate Phone number</div>
                <div class="col-md-4">
                    <input type="text" name="phone" value="<?php echo e($candidate->profile->phone ?? ''); ?>" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>">
                    <?php if($errors->has('phone')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('phone')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Candidate Bio</div>
                <div class="col-md-6">
                    <textarea name="bio" style="height: 140px" class="form-control" ><?php echo e($candidate->profile->bio ?? ''); ?></textarea>
                    <?php if($errors->has('bio')): ?>
                        <div style="color:red">
                            <p class="mb-0"><?php echo e($errors->first('bio')); ?></p>
                        </div>
                    <?php endif; ?>

                 </div>
            </div>

      
            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <button class="theme-primary-btn btn btn-success" type="submit">Update profile</button>
                 
                 </div>
            </div>

        </form>
  
    </div>
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despliegue\portal\resources\views/admin/candidates/edit.blade.php ENDPATH**/ ?>