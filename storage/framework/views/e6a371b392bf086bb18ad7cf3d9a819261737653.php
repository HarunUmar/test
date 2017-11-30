      <div id="wrapper">
    <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
                </div>
                <!-- logo -->
                <div class="navbar-brand">
                    <a href="index.html"></a>
                </div>
                <!-- end logo -->
                <div class="navbar-right">
                    <!-- search form -->
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- end search form -->
                    <!-- navbar menu -->



                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                           
                           <?php if(Auth()->guest()): ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="lnr lnr-cog"></i>
                                </a>
                                <ul class="dropdown-menu user-menu menu-icon">
                                    <li class="menu-heading"></li>
                                    <li class="menu-button">
                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-success"><i class="fa fa-rocket"></i> Login</a>
                                    </li>
                                    <li class="menu-button">
                                        <a href="<?php echo e(route('register')); ?>" class="btn btn-danger"><i class="fa fa-rocket"></i>Register</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <?php else: ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="lnr lnr-cog"> <?php echo e(Auth()->user()->email); ?></i>
                                </a>
                                <ul class="dropdown-menu user-menu menu-icon">
                                    <li class="menu-heading"></li>
                                    <li class="menu-button">    
                                        <a href="<?php echo e(route('logout')); ?>" class="btn btn-info"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="fa fa-rocket"></i> Logout</a>
                                    </li>
                                  
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                        
                                </ul>
                            </li>


                            
                            <?php endif; ?>


                          
                        </ul>
                    </div>
                    <!-- end navbar menu -->
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->