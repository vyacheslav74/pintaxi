<?php $__env->startSection('content'); ?>
<div class="signin_page">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
                  <h4><?php echo e(trans('passengersignin.sign_up')); ?></h4>

            <form role="form" method="POST" action= "<?php echo e(url('/provider/register')); ?>">
               <?php echo e(csrf_field()); ?>  
               <label><?php echo e(trans('passengersignin.name')); ?></label>
                    <input id="name" type="text" class="form-control" name="first_name" value="<?php echo e(old('first_name')); ?>" placeholder="<?php echo e(trans('passengersignin.name')); ?>" autofocus>

                <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>            


                <!--  <label>Last Name</label>
                <input id="name" type="text" class="form-control" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="Last Name">

                <?php if($errors->has('last_name')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('last_name')); ?></strong>
                  </span>
              <?php endif; ?> -->

              <label><?php echo e(trans('passengersignin.phone')); ?></label>
              
              <input type="text" autofocus id="phone_number" class="form-control" placeholder="<?php echo e(trans('passengersignin.phone')); ?>" name="phone_number" value="<?php echo e(old('phone_number')); ?>" />
              
              <?php if($errors->has('phone_number')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('phone_number')); ?></strong>
                  </span>
              <?php endif; ?>

              <label><?php echo e(trans('passengersignin.email_addr')); ?></label>
              <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(trans('passengersignin.email_addr')); ?>">

              <?php if($errors->has('email')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                  </span>
              <?php endif; ?>

              <label><?php echo e(trans('passengersignin.password')); ?></label>
              <input id="password" type="password" class="form-control" name="password" placeholder="<?php echo e(trans('passengersignin.password')); ?>">

              <?php if($errors->has('password')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('password')); ?></strong>
                  </span>
              <?php endif; ?>

              <label><?php echo e(trans('passengersignin.confirm_pass')); ?></label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="<?php echo e(trans('passengersignin.confirm_pass')); ?>">

              <?php if($errors->has('password_confirmation')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                  </span>
              <?php endif; ?>

              <label><?php echo e(trans('passengersignin.select_vehicle')); ?></label>
              <select class="form-control" name="service_type" id="service_type">
                <option value=""><?php echo e(trans('passengersignin.select_vehicle')); ?></option>
                <?php $__currentLoopData = get_all_service_types(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
              </select>

              <?php if($errors->has('service_type')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('service_type')); ?></strong>
                  </span>
              <?php endif; ?>

              <label><?php echo e(trans('passengersignin.vehicle_number')); ?></label>
              <input id="service-number" type="text" class="form-control" name="service_number" value="<?php echo e(old('service_number')); ?>" placeholder="<?php echo e(trans('passengersignin.vehicle_number')); ?>">

              <?php if($errors->has('service_number')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('service_number')); ?></strong>
                  </span>
              <?php endif; ?>

              <label><?php echo e(trans('passengersignin.vehicle_model')); ?></label>
              <input id="service-model" type="text" class="form-control" name="service_model" value="<?php echo e(old('service_model')); ?>" placeholder="<?php echo e(trans('passengersignin.vehicle_model')); ?>">

              <?php if($errors->has('service_model')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('service_model')); ?></strong>
                  </span>
              <?php endif; ?>

               <div class="facebook_btn">
                     <button value="submit" class="btn btn-default btn-arrow-left"style="background-color: #ec58d6;"><?php echo e(trans('passengersignin.next')); ?> </button>
                     <figure><img src="<?php echo e(url('asset/front_dashboard/img/btn_arrow.png')); ?>" alt="img"/></figure>
               </div>
         <h5><?php echo e(trans('passengersignin.already_reg')); ?><a class="log-blk-btn" href="<?php echo e(url('/provider/login')); ?>"> <?php echo e(trans('passengersignin.click_here')); ?></a></h5>
                 <?php if(Setting::get('social_login', 0) == 1): ?>
                    
   
                <?php endif; ?>
         </div>

         </form>
    
     
        <div class="col-md-8" style="margin-top:77px;">
          <img src="<?php echo e(url('asset/front_dashboard/img/User-Signup.png')); ?>" style="margin-top:-47px">
         </div>
     

      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>