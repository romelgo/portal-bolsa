
    <?php echo $__env->make('frontend/partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend/partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <?php echo $__env->make('frontend/partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    



    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Trabajos recientes</h2>
            <!-- <div class="rounded border jobs-wrap">

          
              <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

              <a href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>" class="job-item d-block d-md-flex align-items-center  border-bottom  
                
                <?php if($job->type =='fulltime'): ?>         
                fulltime
                <?php elseif($job->type =='freelance'): ?> 
                freelance  
                <?php elseif($job->type =='partime'): ?>   
                partime  
                <?php elseif($job->type =='remote'): ?>   
                remote
                <?php endif; ?>

                ">
                <?php if($job->company->logo ?? ''): ?>
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="<?php echo e(asset('/uploads/logo')); ?>/<?php echo e($job->company->logo  ?? ''); ?>" alt="Image" class="img-fluid mx-auto">
                </div>
                <?php endif; ?>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3><?php echo e($job->title); ?></h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> <?php echo e(Str::limit($job->position, 20)); ?></div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> <?php echo e(Str::limit($job->address, 20)); ?></div>
                      <div><span class="icon-money mr-1"></span> $<?php echo e($job->salary); ?></div>
                      
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class=" p-2 rounded border 

                    <?php if($job->type =='fulltime'): ?>         
                    text-info  border-info
                    <?php elseif($job->type =='freelance'): ?> 
                    text-warning   border-warning
                    <?php elseif($job->type =='partime'): ?>   
                    text-danger   border-danger
                    
                    <?php elseif($job->type =='remote'): ?>   
                    text-dark   border-dark
                    <?php endif; ?>
                    
                    "><?php echo e(Str::ucfirst($job->type)); ?></span>
                  </div>
                </div>  
              </a>


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div> -->
            
              <!--  -->
              <div class="jobs-wrap" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">

                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('job.show', [$job->id, $job->slug])); ?>" 
                        class="job-item d-block border p-3 border: 1px solid red" 
                        style="border: 1px solid #358fdc; transition: border-color 0.3s, transform 0.3s; display: flex; flex-direction: column; align-items: center; text-align: center;"
                        onmouseover="this.style.borderColor = '#007BFF'; this.style.transform = 'scale(1.05)';" 
                        onmouseout="this.style.borderColor = 'transparent'; this.style.transform = 'scale(1.0)';">
                        
                        <?php if($job->company->logo ?? ''): ?>
                            <div class="company-logo text-center mb-2">
                                <img src="<?php echo e(asset('/uploads/logo')); ?>/<?php echo e($job->company->logo ?? ''); ?>" alt="Image" class="img-fluid mx-auto" style="max-width: 80px; height: auto;">
                            </div>
                        <?php endif; ?>
                        
                        <!-- Ubica la categoría de trabajo justo debajo de la imagen -->
                        <div class="job-category mt-2 mb-3">
                            <span class="p-2 rounded border 
                                <?php if($job->type == 'fulltime'): ?>
                                    text-info border-info
                                <?php elseif($job->type == 'freelance'): ?>
                                    text-warning border-warning
                                <?php elseif($job->type == 'partime'): ?>
                                    text-danger border-danger
                                <?php elseif($job->type == 'remote'): ?>
                                    text-dark border-dark
                                <?php endif; ?>">
                                <?php echo e(Str::ucfirst($job->type)); ?>

                            </span>
                        </div>
                        
                        <div class="job-details" style="display: flex; justify-content: space-between; width: 100%;">
                          <div style="font-size: 0.9rem; color: #6c757d;">
                            <h3 class="mb-2" style="font-size: 1.1rem;"><?php echo e($job->title); ?></h3>
                                <div class="mb-1">
                                    <span class="icon-suitcase mr-1"></span> 
                                    <?php echo e(Str::limit($job->position, 20)); ?>

                                </div>
                                <div class="mb-1">
                                    <span class="icon-room mr-1"></span> 
                                    <?php echo e(Str::limit($job->address, 20)); ?>

                                </div>
                                <div>
                                    <span class="icon-money mr-1"></span> 
                                    $<?php echo e($job->salary); ?>

                                </div>
                            </div>
                        </div>
                        
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>



              
            <div class="col-md-12 text-center mt-5">
              <a href="<?php echo e(route('alljobs')); ?>" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> mostrar mas chamba</a>
            </div>
          </div>
    
        </div>
      </div>
    </div>

    <?php echo $__env->make('frontend/partials.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend/partials.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="site-blocks-cover overlay inner-page" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">El trabajo de tus sueños</h1>
            <p class="h3 text-white mb-5">Te está esperando</p>
            <p><a href="/register" class="btn btn-outline-warning py-3 px-4">Usuario</a> <a href="<?php echo e(route('employer.register')); ?>" class="btn btn-warning py-3 px-4">Empresa </a></p>
            
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>¿Por qué elegirnos?</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Más empleos cada día</h2>
            <p>Ofrece nuevas oportunidades laborales diariamente. La plataforma conecta a empleadores con candidatos de forma ágil y eficiente, brindando actualizaciones constantes de vacantes en diversos sectores y regiones</p>
            <p><a href="#">Leer mas <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Trabajos creativos</h2>
            <p>Es una plataforma ofrece una variedad de ofertas de trabajo, desde freelance hasta posiciones de tiempo completo, para ayudar a los profesionales a conectar con empleadores que buscan talento innovador.</p>
            <p><a href="#">Lear mas <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <!-- <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Healthcare</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Lear mas <span class="icon-arrow-right small"></span></a></p>
          </div> -->
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Finanzas &amp; Contabilidad</h2>
            <p>Es una plataforma de empleo enfocada en oportunidades laborales para profesionales de la contabilidad y finanzas. Ofrece una variedad de vacantes en roles como contadores, auditores, analistas financieros, y otros cargos relacionados</p>
            <p><a href="#">Lear mas <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    

    <?php echo $__env->make('frontend/partials.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->make('frontend/partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\despligue\portal-v1\resources\views/welcome.blade.php ENDPATH**/ ?>