
<div class="site-section block-15">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5 section-heading">
          <h2>Recent Blog</h2>
        </div>
      </div>


      <div class="nonloop-block-15 owl-carousel">
        

          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
         

          <div class="media-with-text">
            <div class="img-border-sm mb-4">
              <a href="<?php echo e(route('adminPostRead', [$post->id, $post->slug])); ?>" class="image-play">
                <?php if($post->post_thumbnail): ?>
                <img src="<?php echo e(asset('storage/'.$post->post_thumbnail)); ?>" alt="" class="img-fluid">
                <?php else: ?>  
                <img src="external/images/img_1.jpg" alt="" class="img-fluid">

                <?php endif; ?>
              </a>
            </div>
            <h2 class="heading mb-0 h5"><a href="<?php echo e(route('adminPostRead', [$post->id, $post->slug])); ?>"><?php echo e($post->title); ?></a></h2>
            <span class="mb-3 d-block post-date">Date: <?php echo e($post->created_at->diffForHumans()); ?> &bullet; By <a href="#">Admin</a></span>
            <p><?php echo e(Str::limit($post->description, 120)); ?></p>
          </div>
        
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </div>

      <div class="row">
        
      </div>
    </div>
  </div>
  <?php /**PATH D:\despligue\portal - copia\resources\views/frontend/partials/blog.blade.php ENDPATH**/ ?>