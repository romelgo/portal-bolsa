
<!--====== Start Left Sidebar Section======-->
<section id="left-sidebar-area">
  <!--   Left Sidebar  -->
        <div id="left-sidebar-section">

          
            <aside>
              <div class="left-sidebar" id="wrapper-sidebar">
                <ul>
                  <li><a class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard')); ?>"><i class="material-icons">home</i>Dashboard</a></li>
                  <li><a  class="<?php echo e(request()->routeIs('adminEmployers') || request()->routeIs('adminEditEmp') ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard/employers')); ?>"><i class="material-icons">supervisor_account</i>Empresas</a></li>
                  <li><a  class="<?php echo e(request()->routeIs('adminCanTrash') || request()->routeIs('adminEditCan') || request()->routeIs('adminCandidates') ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard/candidates')); ?>"><i class="material-icons">person</i>Candidatos</a></li>
                  <li><a class="<?php echo e(request()->routeIs('adminTestiEdit') || request()->routeIs('adminTestimonial') || request()->routeIs('adminTestimonials') ? 'active' : ''); ?>" href="<?php echo e(route('adminTestimonials')); ?>"><i class="material-icons">comment</i>Testimonios</a></li>
                  <li><a class="<?php echo e(request()->routeIs('adminEditCat') || request()->routeIs('adminCategory')? 'active' : ''); ?>" href="<?php echo e(route('adminCategory')); ?>"><i class="material-icons">format_align_center</i>Categoria</a></li>
                  <li><a class="<?php echo e(request()->routeIs('adminPostCreate') || request()->routeIs('adminPosts') || request()->routeIs('adminPostEdit') || request()->routeIs('adminPostShow') || request()->routeIs('adminPostTrash') ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard/posts')); ?>"><i class="material-icons">collections</i>Posts</a></li>
                  <li><a class="<?php echo e(request()->routeIs('adminShow') || request()->routeIs('adminEdit') || request()->routeIs('adminJobTrash') || request()->routeIs('adminJobs') || request()->routeIs('adminEdit') || request()->routeIs('adminShow') || request()->routeIs('adminCreate')   ? 'active' : ''); ?>" href="<?php echo e(url('/dashboard/jobs')); ?>"><i class="material-icons">business_center</i>Trabajos</a></li>
         
                  <li><a class="<?php echo e(request()->routeIs('dashboard.settings')   ? 'active' : ''); ?>" href="<?php echo e(route('dashboard.settings')); ?>"><i class="material-icons">settings</i>Configuración general</a></li>
                  </ul>
              </div>  
            </aside>
        </div>
  <!--   Left Sidebar  -->
  </section>
<!--====== End Left Sidebar Section======-->
<?php /**PATH D:\despligue\portal-v1\resources\views////admin/partials/sidebar.blade.php ENDPATH**/ ?>