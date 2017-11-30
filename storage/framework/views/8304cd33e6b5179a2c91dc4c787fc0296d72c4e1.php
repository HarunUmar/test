<?php $__env->startSection('content'); ?>

<div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box register">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center"></div>
                            <p class="lead">Buat Akunt</p>
                        </div>
              
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#myprofile" role="tab" data-toggle="tab" aria-expanded="true">Supplier</a></li>
                    <li class=""><a href="#account" role="tab" data-toggle="tab" aria-expanded="false">Costumer</a>
                    </li>

                </ul>



                    <div class="tab-content content-profile">
                        <!-- MY PROFILE -->
                        <div class="tab-pane fade active in" id="myprofile">
                            
                            <?php echo $__env->make('auth.register_suplier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </div>
                        <!-- END MY PROFILE -->
                        <!-- ACCOUNT -->
                        <div class="tab-pane fade" id="account">

                         <?php echo $__env->make('auth.register_costumer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                           
                        </div>
                        <!-- END PREFERENCES -->
                    </div>
               
               </div>
            </div>
         </div>
      </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>