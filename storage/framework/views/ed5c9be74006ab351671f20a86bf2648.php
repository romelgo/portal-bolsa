<?php $__env->startSection('content'); ?>
    <!--  Header BreadCrumb -->
    <div class="content-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="material-icons">home</i>Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">View job : <?php echo e($job->title); ?> </li>
            </ol>
        </nav>
        <div class="create-item">
            <a href="/dashboard/jobs" class="theme-primary-btn btn btn-primary"><i class="material-icons">arrow_back</i>&nbsp;Back to jobs</a>
            
            
        </div>
    </div>
        <!--  Header BreadCrumb --> 


<div class="card bg-white">
    <div class="card-body mt-1 mb-5">

 

            <div class="form-group row">
                <div class="col-md-2">Job Title</div>
                <div class="col-md-4">
                    <input type="text" readonly value="<?php echo e($job->title); ?>" class="form-control">
   

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Job Position</div>
                <div class="col-md-4">
                    <input type="text" readonly value="<?php echo e($job->position); ?>" class="form-control">
                   
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Year of experience</div>
                <div class="col-md-4">
                    <input type="text" readonly class="form-control"  value="<?php echo e($job->experience); ?>">
                  

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Job Type</div>
                <div class="col-md-4">
                    <select readonly class="form-control">
                        <option value="Fulltime"<?php echo e($job->type=='Fulltime' ? 'selected':''); ?>>Fulltime</option>
                        <option value="Partime"<?php echo e($job->type=='Partime' ? 'selected':''); ?>>Partime</option>
                        <option value="Remote"<?php echo e($job->type=='Remote' ? 'selected':''); ?>>Remote</option>
                        
                    </select>
             
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Category</div>
                <div class="col-md-4">
                    <select readonly id="category_id" class="form-control">
                        <?php $__currentLoopData = App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cat->id); ?>" <?php echo e($cat->id==$job->category_id ? 'selected':''); ?>><?php echo e($cat->name); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Address</div>
                <div class="col-md-4">
                    <input type="text" readonly value="<?php echo e($job->address); ?>" class="form-control">
                   
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Role</div>
                <div class="col-md-6">
                    <textarea readonly style="height: 140px" class="form-control" ><?php echo e($job->roles); ?></textarea>
                   

                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Description</div>
                <div class="col-md-6">
                    <textarea readonly  style="height: 120px"  class="form-control" ><?php echo e($job->description); ?></textarea>
                  
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Nomber of vacancy</div>
                <div class="col-md-4">
                    <input type="text" readonly class="form-control"  value="<?php echo e($job->number_of_vacancy); ?>">
                   
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Gender</div>
                <div class="col-md-4">
                    <select class="form-control" readonly>
                        <option value="any"<?php echo e($job->gender=='any' ? 'selected':''); ?>>Any</option>
                        <option value="male"<?php echo e($job->gender=='male' ? 'selected':''); ?>>Male</option>
                        <option value="female"<?php echo e($job->gender=='female' ? 'selected':''); ?>>Female</option>
                      
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">Salary/year</div>
                <div class="col-md-4">

                    <select class="form-control" readonly>
                        <option value="negotiable"<?php echo e($job->salary=='negotiable' ? 'selected':''); ?>>Negotiable</option>
                        <option value="2000-5000"<?php echo e($job->salary=='2000-5000' ? 'selected':''); ?>>2000-5000</option>
                        <option value="50000-10000"<?php echo e($job->salary=='50000-10000' ? 'selected':''); ?>>5000-10000</option>
                        <option value="10000-20000"<?php echo e($job->salary=='10000-20000' ? 'selected':''); ?>>10000-20000</option>
                        <option value="30000-500000"<?php echo e($job->salary=='30000-500000' ? 'selected':''); ?>>50000-500000</option>
                        <option value="500000-600000"<?php echo e($job->salary=='500000-600000' ? 'selected':''); ?>>500000-600000</option>
    
                        <option value="600000 plus"<?php echo e($job->salary=='600000 plus' ? 'selected':''); ?>>600000 plus</option>
                    </select>
                 </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">Status</div>
                <div class="col-md-4">
                    <select readonly id="status" class="form-control">
                        <option value="1"<?php echo e($job->status=='1' ? 'selected':''); ?>>Live</option>
                        <option value="0"<?php echo e($job->status=='0' ? 'selected':''); ?>>Draft</option>
                    </select>
                
                 </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2 ">Job apply last date</div>
                <div class="col-md-4">
                    <input type="date" readonly value="<?php echo e($job->last_date); ?>" class="form-control">
              
                 </div>
            </div>
            <div class="form-group pt-2 row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <a href="/dashboard/jobs" class="theme-primary-btn btn btn-success">Back to jobs</a>
                 
                 </div>
            </div>

    
  
    </div>
</div>  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\despliegue\portal\resources\views/admin/jobs/show.blade.php ENDPATH**/ ?>