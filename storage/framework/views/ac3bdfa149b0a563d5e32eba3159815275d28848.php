<!-- Header -->

<div class="site-header">

   <nav class="navbar navbar-light">

      <div class="container-fluid">

         <div class="col-sm-1 col-xs-1">

            <div class="hamburger hamburger--3dy-r">

               <div class="hamburger-box">

                  <div class="hamburger-inner"></div>

               </div>

            </div>

         </div>

         <div class="col-sm-2 col-xs-2">

            <div class="navbar-left" style="background-color: #fff;">

               <a class="navbar-brand" href="<?php echo e(url('dashboard')); ?>" style="background:white;">

                  <div class="logo">

                     <img  style="width: 132px;height: 40px; margin-left: -85px;" src=" <?php echo e(url(Setting::get('site_logo', asset('logo-black.png')))); ?>">

                  </div>

               </a>

            </div>

         </div>

         <div class="col-sm-9 col-xs-9">

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

               <ul class="nav navbar-nav navbar-right">

                  <li class="menu-drop">

                     <div class="dropdown">
                        <p class="btn btn-primary" style="padding-top: 24px;"> <?php echo e(trans('user.my_wallet')); ?> <?php echo e(currency(Auth::user()->wallet_balance)); ?></p>

                     </div>

                  </li>
                  <li class="menu-drop">
                     <div class="sl-nav" style="display:none;">
                    <ul>
                        <li>
    
                            <?php  $locale = app()->getLocale();  ?>
                            <?php if($locale == 'ar'): ?>
                            <?php echo e(trans('header.arabic-short')); ?>

                            <?php elseif($locale == 'ru'): ?>
                            <?php echo e(trans('header.russian-short')); ?>

                            <?php elseif($locale == 'fr'): ?>
                            <?php echo e(trans('header.french-short')); ?>                              
                            <?php elseif($locale == 'sp'): ?>
                            <?php echo e(trans('header.spanish-short')); ?>

                            <?php else: ?>                          
                            <?php echo e(trans('header.english-short')); ?>

                            <?php endif; ?>
    
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <div class="triangle"></div>
                            <ul style="margin-top: 10px">
                                <li class="licss"><a href="<?php echo e(url('lang/en')); ?>">
                                        <i class="sl-flag fas fa-globe-americas">
                                            <div id="English"></div>
                                        </i>
                                        <span><?php echo e(trans('header.english-short')); ?></span>
                                    </a>
                                </li>
                                <li class="licss">
                                    <a href="<?php echo e(url('lang/ar')); ?>">
                                        <i class="sl-flag fas fa-globe-americas">
                                            <div id="Arabic"></div>
                                        </i>
                                        <span><?php echo e(trans('header.arabic-short')); ?></span>
                                    </a>
                                </li>
                                <li class="licss">
                                    <a href="<?php echo e(url('lang/fr')); ?>">
                                        <i class="sl-flag fas fa-globe-americas">
                                            <div id="Arabic"></div>
                                        </i>
                                        <span><?php echo e(trans('header.french-short')); ?></span>
                                    </a>
                                </li>
                                <li class="licss">
                                    <a href="<?php echo e(url('lang/ru')); ?>">
                                        <i class="sl-flag fas fa-globe-americas">
                                            <div id="Arabic"></div>
                                        </i>
                                        <span><?php echo e(trans('header.russian-short')); ?></span>
                                    </a>
                                </li>
                                <li class="licss">
                                    <a href="<?php echo e(url('lang/sp')); ?>">
                                        <i class="sl-flag fas fa-globe-americas">
                                            <div id="Arabic"></div>
                                        </i>
                                        <span><?php echo e(trans('header.spanish-short')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                  </li>
                  
               </ul>

            </div>

         </div>

      </div>

   </nav>

</div>