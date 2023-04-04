<?php $__env->startSection('title', 'Update Service Type '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
           <h5 style="margin-bottom: 2em;"><i class="ti-car"></i>&nbsp;Update Vehicle</h5><hr>

            <form class="form-horizontal" action="<?php echo e(url('admin/service_update',$service->id)); ?>" method="POST" enctype="multipart/form-data" role="form" file="true">
                <?php echo e(csrf_field()); ?>

                <div class="form-group row">
                    <label for="name" class="col-xs-12 col-form-label">Vehicle Name</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" value="<?php echo e($service->name); ?>" name="name" required id="name" placeholder="Cab Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="picture" class="col-xs-12 col-form-label">Vehicle Icon</label>
                    <div class="col-xs-10">
                        <?php if($service->image): ?> 
                                <img src="<?php echo e(url('/'. $service->image )); ?>" style="height: 50px" >
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        <input type="file" accept="image/*" name="image" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="picture" class="col-xs-12 col-form-label">Vehicle Image</label>
                    <div class="col-xs-10">
                        <?php if($service->vehicle_image): ?> 
                                <img src="<?php echo e(url('/'. $service->vehicle_image )); ?>" style="height: 50px" >
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        <input type="file" accept="image/*" name="vehicle_image" class="dropify form-control-file" id="picture" aria-describedby="fileHelp">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fixed" class="col-xs-12 col-form-label">Base Price (<?php echo e(currency()); ?>)</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" value="<?php echo e($service->fixed); ?>" name="fixed" required id="fixed" placeholder="Base Price">
                    </div>
                </div>
                <div class="form-group row" >
                    <label for="distance" class="col-xs-12 col-form-label">Base Distance (KM)</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="text" value="<?php echo e($service->distance); ?>" name="distance" required id="distance" placeholder="Base Distance">
                    </div>
                </div>
                <span style="display:none">
                <div class="form-group row">
                    <label for="minute" class="col-xs-12 col-form-label">Unit Time Pricing (<?php echo e(currency()); ?>)</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="hidden" value="<?php echo e($service->minute); ?>" name="minute" required id="minute" placeholder="Unit Time Pricing">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-xs-12 col-form-label">Unit Distance Price (KM)</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="hidden" value="<?php echo e($service->price); ?>" name="price" required id="price" placeholder="Unit Distance Price">
                    </div>
                </div>
                 </span>
                <div class="form-group row">
                    <label for="capacity" class="col-xs-12 col-form-label">Seat Capacity</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="number" value="<?php echo e($service->capacity); ?>" name="capacity" required id="capacity" placeholder="Capacity">
                    </div>
                </div>

                <input class="form-control" type="hidden" value="MIN" name="calculator" >
                
                <div class="form-group row">
                    <label for="description" class="col-xs-12 col-form-label">Description</label>
                    <div class="col-xs-10">
                        <textarea class="form-control" type="text" name="description" required id="description" placeholder="Description" rows="4"><?php echo e($service->description); ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-10">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <button type="submit" class="btn btn-success shadow-box btn-block">Update</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 offset-md-6 col-md-3">
                                <a href="<?php echo e(route('admin.service.index')); ?>" class="btn btn-danger shadow-box btn-block">Cancel</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>