<?php $__env->startSection('content'); ?>
<div>
    <div class="row">
        <div class="col-md-4">
            <div class="box b-a-0" style="top: 132px; box-shadow: none;height: 448px;">
                <div class="p-2 text-xs-center">
                    <h2><?php echo e(Setting::get('site_title')); ?> Login</h2>
                </div>
                <form class="form-material mb-1" role="form" method="POST" action="<?php echo e(url('/admin/login')); ?>" >
                <?php echo e(csrf_field()); ?>

                    <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" name="email" required="true" class="form-control" id="email" placeholder="Email">

                        <?php if($errors->has('email')): ?>
                            <span class="help-block" style="margin-left: 55px;color: red;">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" name="password" required="true" class="form-control" id="password" placeholder="Password">
                        <?php if($errors->has('password')): ?>
                            <span class="help-block" style="margin-left: 55px;color: red;">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-0">
                        <input type="checkbox" name="remember"> Remember Me
                    </div>
                    <br>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-success shadow-box btn-block waves-effect waves-light btn-lg"><i class="ti-arrow-right float-xs-right"></i>Login</button>
                    </div>
                </form>
                <div class="p-2 text-xs-center text-muted">
                    <a class="text-black" href="<?php echo e(url('/admin/password/reset')); ?>"><span class="underline">Forgot Your Password?</span></a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
        <img src="<?php echo e(asset('asset/front_dashboard/img/login.jpg')); ?>" alt="Admin Panel" style="width: 100%;">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>