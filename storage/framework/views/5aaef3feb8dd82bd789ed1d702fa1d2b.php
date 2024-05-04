<!--====== Start Header Section======-->
<header>
    <div class="header">


      <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-bg">
          
          <div class="brand-logo">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>" id="menu-action">
              
              <span><?php echo e(config('app.adminName', 'ChambeaYA! Admin Pannel')); ?></span>
            </a>    

           

            <div id="nav-toggle">
                <div class="cta">
                    <div class="toggle-btn type1"></div>
                </div>
            </div>     
          </div>
        <!--   For Toggle Mobile Nav icon -->
          <div class="for-mobile d-mobile">
              <div class= "toggle-button" id = "toggle-button">
                <span class="material-icons">
                menu
                </span>
              </div>

          </div>
              <!--   For Toggle Mobile Nav Icon -->

          <div class="collapse navbar-collapse pr-3" id="#">
            <?php if(Auth::check()): ?>
            <ul class="navbar-nav user-info ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown show">
                <a href="#" class="navbar-nav-link dropdown-toggle text-light" data-toggle="dropdown" aria-expanded="true">
                  <div class="user-photo">
                    <img src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/db9c4e1327eb8fe5e9395a4b04e1ea4a_70x70.jpg" alt="">
                  </div>

                  
                      <?php echo e(Str::ucfirst(Auth::user()->name)); ?>

                  
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="" class="dropdown-item"> 
                    <i class="material-icons">
                      person_pin
                    </i>
                  Account Settings</a>
                  <div class="menu-dropdown-divider"></div>
                 


                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i><?php echo e(__('Logout')); ?></a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                      <?php echo csrf_field(); ?>
                  </form>
                </div>
              </li>
            </ul>
            <?php endif; ?>
          </div>


        </nav>
        
      </div>
    <!--   For Toggle Mobile Nav -->
     <div class="toggle-user-menu" id = "toggle-user-menu">
        <ul>
          <li><a href="#"><div class="user-photo"><img src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/db9c4e1327eb8fe5e9395a4b04e1ea4a_70x70.jpg" alt=""></div>admin@admin.com</a></li>
          <li><a href="">
            <i class="material-icons mr-2">
                    supervisor_account
                    </i>
                  Account Settings
                </a></li>
          <li><a href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="material-icons mr-2">exit_to_app</i>Logout</a></li>
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
        </ul>
      </div>
    <!--   For Toggle Mobile Nav -->
    </div>  
</header>
<!--====== End Header Section======--><?php /**PATH D:\despliegue\portal\resources\views////admin/partials/navbar.blade.php ENDPATH**/ ?>