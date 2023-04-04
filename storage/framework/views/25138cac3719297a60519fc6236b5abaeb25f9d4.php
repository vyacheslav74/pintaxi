<?php 
$datas = top_countries();
 ?>
<footer>
    <div class="container">
        <div class="footer-topborder">
            <div class="row">
                <div class="col-md-4 footer-uber">
                    <div class="footer-topheading"> <img src="<?php echo e(url(Setting::get('site_logo'))); ?>" width="40%" height="40%" /> </div>
                </div>
                <div class="col-md-4 footer-signup">
                    <div class="footer-topbtn"> <a href="<?php echo e(url('/register')); ?>" class="btn btn-default button-shadow" style="background-color: #000000;" ><?php echo e(trans('footer.signup_for_ride')); ?></a> </div>
                </div>
                <div class="col-md-4 footer-becomedriver">
                    <div class="footer-topbtn border"> <a href="<?php echo e(url('/provider/register')); ?>" class="btn btn-default button-shadow" style="background-color: #000000;color: white;" ><?php echo e(trans('footer.become_a_driver')); ?></a> </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="row">
                <div class="col-md-4">
                    <div class="location-footer">
                        <h4><?php echo e(trans('footer.download_to_ride')); ?></h4>
                        <ul class="app">
                            <li>
                                <a href="<?php echo e(Setting::get('store_link_ios','#')); ?>"> <img src="<?php echo e(asset('asset/front/img/appstore.png')); ?>" width="30%" height="30%"> </a>
                            </li>
                            <li>
                                <a href="<?php echo e(Setting::get('store_link_user')); ?>"  target="_blank"> <img src="<?php echo e(asset('asset/front/img/playstore.png')); ?>" width="30%" height="30%"> </a>
                            </li>
                        </ul>
                        <h4><?php echo e(trans('footer.download_to_drive')); ?></h4>
                        <ul class="app">
                            <li>
                                <a href="<?php echo e(Setting::get('store_link_ios','#')); ?>"> <img src="<?php echo e(asset('asset/front/img/appstore.png')); ?>" width="30%" height="30%"> </a>
                            </li>
                            <li>
                                <a href="<?php echo e(Setting::get('store_link_provider')); ?>" target="_blank"> <img src="<?php echo e(asset('asset/front/img/playstore.png')); ?>" width="30%" height="30%"> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li>
                                <a href="#"><img src="<?php echo e(url('asset/front_dashboard/img/facebook.png')); ?>" alt="facebook" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo e(url('asset/front_dashboard/img/google-plus.png')); ?>" alt="facebook" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo e(url('asset/front_dashboard/img/twitter.png')); ?>" alt="facebook" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-manu">
                        <ul>
                            <?php $__currentLoopData = getPages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <?php if($list->slug == 'about-us'): ?>
									<li><a href="<?php echo e(url('').'/'.$list->slug); ?>"><?php echo e(trans('footer.about_ilyft')); ?></a></li>
                                    <?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							<?php $__currentLoopData = getPages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($list->slug == 'why-us'): ?>
								<li><a href="<?php echo e(url('').'/'.$list->slug); ?>"><?php echo e(trans('footer.why_ilyft')); ?></a></li>
                                <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            <li><a href="<?php echo e(url('/how_it_works')); ?>"><?php echo e(trans('footer.how_it_works')); ?></a></li>
                            <li><a href="<?php echo e(url('/blogs')); ?>"><?php echo e(trans('footer.blog')); ?></a></li>
                            <?php $__currentLoopData = getPages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($list->slug == 'privacy-policy'): ?>
								<li><a href="<?php echo e(url('').'/'.$list->slug); ?>"><?php echo e(trans('footer.policy')); ?></a></li>
                                <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							<?php $__currentLoopData = getPages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($list->slug == 'refund-policy'): ?>
								<li><a href="<?php echo e(url('').'/'.$list->slug); ?>"><?php echo e(trans('footer.refund')); ?></a></li>
                                <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							<?php $__currentLoopData = getPages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($list->slug == 'terms-conditions'): ?>
								<li><a href="<?php echo e(url('').'/'.$list->slug); ?>"><?php echo e(trans('footer.terms_conditions')); ?></a></li>
                                <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-right">
                        <ul>
                            <li><a href="<?php echo e(url('/fare_estimate')); ?>"><?php echo e(trans('footer.fare_estimation')); ?></a></li>
                            <li><a href="<?php echo e(url('/helppage')); ?>"><?php echo e(trans('footer.help')); ?></a></li>
                            <li><a href="<?php echo e(url('/support/complaint')); ?>"><?php echo e(trans('footer.complaint')); ?></a></li>
                            <li><a href="<?php echo e(url('/contact_us')); ?>"><?php echo e(trans('footer.contact_us')); ?></a></li>
                            <li><a href="<?php echo e(url('/register')); ?>"><?php echo e(trans('footer.signup')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="citesandcountries">
			<div class="footer-left">
				<ul>
					<li><small><?php echo e(trans('footer.top_countries')); ?></small></li>
				</ul>
			</div>
			<div class="footer-right" >
				<div class="top-cities">
					<ul>
						<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <li><a href="<?php echo e(url('/country/'.$data->country)); ?>"><?php echo e($data->country); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					
					</ul>
				</div>
				
			</div> 
			<br/>                   
		</div>
    </div>
</footer>