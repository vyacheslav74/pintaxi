<?php $__env->startSection('title', 'Promotion'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-12" style="margin-bottom: 20px;">
    <div class="dash-content">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title"><span class="s-icon"><i class="ti-crown user-sidebaricon" style="color: rgb(0, 0, 0);"></i></span>&nbsp;<?php echo app('translator')->get('user.promocode'); ?></h4>
            </div>
        </div>
        <?php echo $__env->make('common.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="row no-margin payment">
            <div class="col-md-12">
                <h5 class="btm-border"><strong><?php echo app('translator')->get('user.gift_coupon'); ?></strong> <a href="#" class="sub-right pull-right" data-toggle="modal" data-target="#add-promotion-modal"><?php echo app('translator')->get('user.add_promocode'); ?></a></h5>

                <?php $__empty_1 = true; $__currentLoopData = $promocodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promo): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                <div class="pay-option">
                    <h6>
                        <img src="<?php echo e(asset('asset/img/low-cost.png')); ?>"> <?php echo e($promo->promocode->promo_code); ?>

                        <a href="#" class="default"><?php echo e($promo->status); ?></a>
                    </h6>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                <div class="pay-option">
                    <h6 class="text-center"><?php echo app('translator')->get('user.no_promocode_applied'); ?></h6>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div id="add-promotion-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo app('translator')->get('user.add_promocode'); ?></h4>
            </div>
            <form id="payment-form" action="<?php echo e(route('promocodes.store')); ?>" method="POST" >
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row no-margin" id="card-payment">
                        <div class="form-group col-md-12 col-sm-12">
                            <label><?php echo app('translator')->get('user.promocode'); ?></label>
                            <input autocomplete="off" name="promocode" required type="text" class="form-control" placeholder="<?php echo app('translator')->get('user.add_promocode'); ?>">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="full-primary-btn btn-success box-shadow fare-btn"><?php echo app('translator')->get('user.add_promocode'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>