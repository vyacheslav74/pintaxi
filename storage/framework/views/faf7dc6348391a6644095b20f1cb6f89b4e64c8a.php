<?php $__env->startSection('content'); ?>
<?php $login_user = asset('asset/img/login-user-bg.jpg'); ?>
<div class="container-fluid" style="margin-bottom: 50px;">
    <h4 style="margin-top: 40px;margin-left: 15px;"><?php echo e(trans('passengersignin.reset_password')); ?></h4><br>

    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <form role="form" method="POST" action="<?php echo e(url('/password/email')); ?>">
        <?php echo e(csrf_field()); ?>


        <div class="col-md-12" style="margin-top: 10px;">
            <input type="email" class="form-control" name="email" placeholder="<?php echo e(trans('passengersignin.email_addr')); ?>" value="<?php echo e(old('email')); ?>" style="width: 312px;">
            <br/>
            <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>                        

            <div class="facebook_btn">
                <button value="submit" class="btn btn-default btn-arrow-left" style="width: 312px;border-radius: 0px;background-color: #5dce5d"><?php echo e(trans('passengersignin.next')); ?></button>
            </div>  
             <h5><?php echo e(trans('passengersignin.already_reg')); ?><a class="log-blk-btn" href="<?php echo e(url('PassengerSignin')); ?>"><?php echo e(trans('passengersignin.click_here')); ?></a></h5>
        </div>  
    
    </form>     
 </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>