
<div class="site-sidebar"> <!-- style="height: 100%;position: fixed;" -->
    <div class="custom-scroll custom-scroll-light">
         <div class="user-img">
            <?php $profile_image = img(Auth::user()->picture); ?>
            <div class="pro-img" style="background-image: url(<?php echo e($profile_image); ?>);margin-top: 15px;"></div>
            <h4 style="color: #ffffff;text-align: center;"><?php echo e(Auth::user()->first_name); ?> </h4>
        </div>
        <div style="margin-top: 30px;">
            <ul class="sidebar-menu">

                <li>
                    <a href="<?php echo e(url('dashboard')); ?>" class="waves-effect waves-light" style="text-decoration:none">
                        <span class="s-icon"><i class="ti-control-record" style="color:rgba(255, 255, 255, 0.7);"></i></span>
                        <span class="s-text user-dashboard" ><?php echo app('translator')->get('user.dashboard'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('mytrips')); ?>" class="waves-effect waves-light" style="text-decoration:none">
                        <span class="s-icon"><i class="ti-pie-chart" style="color:rgba(255, 255, 255, 0.7);"></i></span>
                        <span class="s-text user-dashboard" ><?php echo app('translator')->get('user.list_ride'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('trips')); ?>" class="waves-effect waves-light" style="text-decoration:none">
                        <span class="s-icon"><i class="ti-car user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard"><?php echo app('translator')->get('user.my_rides'); ?></span>
                    </a>
                </li>
    
                <li>
                    <a href="<?php echo e(url('upcoming/trips')); ?>" class="waves-effect waves-light" style="text-decoration:none">
                        <span class="s-icon"><i class="ti-calendar user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard"><?php echo app('translator')->get('user.upcoming_rides'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('profile')); ?>" class="waves-effect waves-light" style="text-decoration:none">
                        <span class="s-icon"><i class="ti-user user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard"><?php echo app('translator')->get('user.profile.profile'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/payment')); ?>" class="waves-effect waves-light" style="text-decoration:none">
                        <span class="s-icon"><i class="ti-money user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard"><?php echo app('translator')->get('user.payment'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/promotions')); ?>" class="waves-effect waves-light" style="text-decoration:none">
                        <span class="s-icon"><i class="ti-bookmark-alt" style="color:rgba(255, 255, 255, 0.7);"></i></span>
                        <!--span class="s-text user-dashboard"><?php echo app('translator')->get('user.promotion'); ?></span-->
                        <span class="s-text user-dashboard"><?php echo app('translator')->get('user.promocode'); ?></span>
                    </a>
                </li>
				
                <li>
                    <a href="<?php echo e(url('/wallet')); ?>" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-wallet user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard"><?php echo app('translator')->get('user.my_wallet'); ?></span>
                    </a>
                </li>
<!--
				
                <li>
                    <a href="<?php echo e(url('/faq')); ?>" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-menu-alt user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">FAQ</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/terms')); ?>" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-info user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Terms and Condition</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(url('/help')); ?>" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-help user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Help</span>
                    </a>
                </li>
				
				-->
                <li>
                    <a href="<?php echo e(url('/logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="waves-effect waves-light" style="text-decoration:none">
                    <span class="s-icon"><i class="ti-power-off user-sidebaricon"></i></span>
                    <span class="s-text user-dashboard"><?php echo app('translator')->get('user.profile.logout'); ?></span>
                    </a>
                </li>
                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
             
            </ul>
        </div>
    </div>
</div>


<!--div class="col-md-3">
    <div class="dash-left">
        <div class="user-img">
            <?php $profile_image = img(Auth::user()->picture); ?>
            <div class="pro-img" style="background-image: url(<?php echo e($profile_image); ?>);"></div>
            <h4><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h4>
        </div>
        <div class="side-menu">
             <ul>
                <li><a href="<?php echo e(url('dashboard')); ?>"><?php echo app('translator')->get('user.dashboard'); ?></a></li>
                <li><a href="<?php echo e(url('trips')); ?>"><?php echo app('translator')->get('user.my_trips'); ?></a></li>
                <li><a href="<?php echo e(url('upcoming/trips')); ?>"><?php echo app('translator')->get('user.upcoming_trips'); ?></a></li>
                <li><a href="<?php echo e(url('profile')); ?>"><?php echo app('translator')->get('user.profile.profile'); ?></a></li>
                <li><a href="<?php echo e(url('change/password')); ?>"><?php echo app('translator')->get('user.profile.change_password'); ?></a></li>
                <li><a href="<?php echo e(url('/payment')); ?>"><?php echo app('translator')->get('user.payment'); ?></a></li>
                <li><a href="<?php echo e(url('/promotions')); ?>"><?php echo app('translator')->get('user.promotion'); ?></a></li>
                <li><a href="<?php echo e(url('/wallet')); ?>"><?php echo app('translator')->get('user.my_wallet'); ?> <span class="pull-right"><?php echo e(currency(Auth::user()->wallet_balance)); ?></span></a></li>
                <li><a href="<?php echo e(url('/logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><?php echo app('translator')->get('user.profile.logout'); ?></a></li>
                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
            </ul>
        </div>
    </div>
</div-->