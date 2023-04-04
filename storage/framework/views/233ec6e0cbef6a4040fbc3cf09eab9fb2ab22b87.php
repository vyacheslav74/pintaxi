<?php $__env->startSection('content'); ?>
<div class="signin_page">
   <div class="container">
      <div class="row">
         <div class="col-md-4" style="margin-top: 35px;">
            <h4><?php echo e(trans('passengersignin.login')); ?></h4>
            <form role="form" method="POST" action="<?php echo e(url('/login')); ?>" style="margin-bottom:10px;">
               <?php echo e(csrf_field()); ?>  
               <label><?php echo e(trans('passengersignin.email')); ?></label>
               <input id="email" name="email" class="form-control" type="text" placeholder="<?php echo e(trans('passengersignin.email')); ?>" value="<?php echo e(old('email')); ?>" required > 
               <?php if($errors->has('email')): ?>
               <span class="help-block">
               <strong><?php echo e($errors->first('email')); ?></strong>
               </span>
               <?php endif; ?>
               <label><?php echo e(trans('passengersignin.password')); ?></label> 
               <input id="password" name="password" class="form-control" type="password" placeholder="<?php echo e(trans('passengersignin.password')); ?>" required>
               <?php if($errors->has('password')): ?>
               <span class="help-block">
               <strong><?php echo e($errors->first('password')); ?></strong>
               </span>
               <?php endif; ?>
               <div class="facebook_btn">
                     <button value="submit" class="btn btn-default btn-arrow-left" style="background-color: #ec58d6;"><?php echo e(trans('passengersignin.next')); ?> </button>
                     <figure><img src="<?php echo e(url('asset/front_dashboard/img/btn_arrow.png')); ?>" alt="img"/></figure>
               </div>
               <p><?php echo e(trans('passengersignin.dont_account')); ?> <a href="<?php echo e(url('/register')); ?>"><?php echo e(trans('passengersignin.sign_up')); ?></a></p>
               <p class="helper"><a href="<?php echo e(url('/password/reset')); ?>"><?php echo e(trans('passengersignin.forgot_pass')); ?></a></p>
			   	
        
         </form>
			<div class="">
				<a href="<?php echo e(url('/auth/facebook')); ?>"><button type="submit" class="btn btn-default" style="background-color:#3b61ad;">LOGIN WITH FACEBOOK</button></a>
			</div>  
			<div class="">
				<a href="<?php echo e(url('/auth/google')); ?>"><button type="submit" class="btn btn-default" style="background-color:#f37151">LOGIN WITH GOOGLE+</button></a>
			</div>
		
		 </div>
         <div class="col-md-8">
            <img src="<?php echo e(url('asset/front_dashboard/img/User-Login.png')); ?>" alt="Dispatcher Panel"> 
         </div>
		 

      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>