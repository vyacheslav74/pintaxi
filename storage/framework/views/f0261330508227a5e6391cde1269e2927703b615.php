<?php $__env->startSection('title', 'Dashboard '); ?>
<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('asset/admin/vendor/jvectormap/jquery-jvectormap-2.0.3.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-area py-1">

<div class="container-fluid">

    <div class="row row-md">

        <div class="col-lg-4 col-md-6 col-xs-12">

            <div class="box box-block bg-success mb-2">

                <div class="t-content">

                    <h4 class="text-uppercase mb-1"><?php echo app('translator')->get('user.total_ride'); ?></h4>

                    <h1 class="mb-1"><?php echo e($all_ride); ?></h1>

                </div>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-xs-12">

            <div class="box box-block bg-primary mb-2">

                <div class="t-content">

                    <h4 class="text-uppercase mb-1"><?php echo app('translator')->get('user.cancel_ride'); ?></h4>

                    <h1 class="mb-1"><?php echo e($cancel_rides); ?></h1>

                </div>

            </div>

        </div>

        <div class="col-lg-4 col-md-6 col-xs-12">

            <div class="box box-block bg-warning mb-2">

                <div class="t-content">

                    <h4 class="text-uppercase mb-1"><?php echo app('translator')->get('user.schedule_ride'); ?></h4>

                    <h1 class="mb-1"><?php echo e($scheduled_rides); ?></h1>

                </div>

            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="dash-content">

                <div class="row no-margin">

                    <div class="col-md-12">

                        <h4 class="page-title"><span class="s-icon"><i class="fa fa-recycle" style="color: rgb(0, 0, 0);"></i></span>&nbsp;<?php echo app('translator')->get('user.ride_history'); ?></h4>

                    </div>

                </div>

                <div class="row no-margin ride-detail">

                    <div class="col-md-12">

                    <?php if($trips->count() > 0): ?>

                         
                        <table class="table table-condensed" style="border-collapse:collapse;">

                            <thead>

                                <tr>

                                    <th><?php echo app('translator')->get('user.booking_id'); ?></th>

                                    <th><?php echo app('translator')->get('user.date'); ?></th>

                                    <th><?php echo app('translator')->get('user.profile.name'); ?></th>

                                    <th><?php echo app('translator')->get('user.amount'); ?></th>

                                    <th><?php echo app('translator')->get('user.vehicle'); ?></th>

                                    <th><?php echo app('translator')->get('user.payment'); ?></th>
                                    
                                    <th><?php echo app('translator')->get('user.status'); ?></th>

                                    <th><?php echo app('translator')->get('user.details'); ?></th>

                                </tr>

                            </thead>



                            <tbody>

                            <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>



                                <tr data-toggle="collapse" data-target="#trip_<?php echo e($trip->id); ?>" class="accordion-toggle collapsed">


                                    <td><?php echo e($trip->booking_id); ?></td>

                                    <td><?php echo e(date('d-m-Y',strtotime($trip->assigned_at))); ?></td>

                                    <?php if($trip->provider): ?>

                                        <td><?php echo e($trip->provider->first_name); ?> <?php echo e($trip->provider->last_name); ?></td>

                                    <?php else: ?>

                                        <td>-</td>

                                    <?php endif; ?>

                                    <?php if($trip->payment): ?>

                                        <td><?php echo e(currency($trip->payment->total)); ?></td>

                                    <?php else: ?>

                                        <td>-</td>

                                    <?php endif; ?>

                                    <?php if($trip->service_type): ?>

                                        <td><?php echo e($trip->service_type->name); ?></td>

                                    <?php else: ?>

                                        <td>-</td>

                                    <?php endif; ?>

                                    <td><?php echo app('translator')->get('user.paid_via'); ?> <?php echo e($trip->payment_mode); ?></td>

                                    <td><?php echo e($trip->status); ?></td>

                                    <td>

                                        <form action ="<?php echo e(url('/mytrips/detail')); ?>">

                                            <input type="hidden" value="<?php echo e($trip->id); ?>" name="request_id">

                                            <button type="submit" style="margin-top: 0px;" class="btn-black btn-rounded fare-btn"><?php echo app('translator')->get('user.detail'); ?></button>

                                        </form>

                                    </td>

                                </tr>



                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>





                            </tbody>

                        </table>

                        <?php else: ?>

                            <hr>

                            <p style="text-align: center;"><?php echo app('translator')->get('user.no_ride_available'); ?></p>

                        <?php endif; ?>

                    </div>

                </div>



            </div>
        </div>

    </div>

</div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>