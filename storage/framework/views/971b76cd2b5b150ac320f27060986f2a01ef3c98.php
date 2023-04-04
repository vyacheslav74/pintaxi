<?php $__env->startSection('title', 'Service Types '); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="mb-1"><i class="ti-car"></i>&nbsp;Vehicle Category</h5><hr>
            <a href="<?php echo e(route('admin.service.create')); ?>" style="margin-left: 1em;" class="btn shadow-box btn-success btn-rounded pull-right"><i class="fa fa-plus"></i> Add New Vehicle</a>
            <table class="table table-striped table-bordered dataTable" id="table-2" style="width:100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vehicle Name</th>
                        <th>Capacity</th>
                        <th>Base Fare</th>
                        <th>Base Distance</th>
                        <th>Description</th>
                        <th>Icon</th>
                        <th>Upload Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($service->name); ?></td>
                        <td><?php echo e($service->capacity); ?></td>
                        <td><?php echo e(currency($service->fixed)); ?></td>
						<td><?php echo e($service->distance); ?> KM</td>
                        <td><?php echo e($service->description); ?></td>
                      
                        <td>
                            <?php if($service->image): ?> 
                                <img src="<?php echo e(url('/'. $service->image )); ?>" style="height: 50px" >
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($service->vehicle_image): ?> 
                                <img src="<?php echo e(url('/'. $service->vehicle_image )); ?>" style="height: 50px">
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td>
                            <form action="<?php echo e(route('admin.service.destroy', $service->id)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <a href="<?php echo e(route('admin.service.edit', $service->id)); ?>" class="btn btn-success shadow-box">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button class="btn btn-danger shadow-box" onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Vehicle Name</th>
                        <th>Capacity</th>
                        <th>Base Fare</th>
                        <th>Base Distance</th>
                        <th>Description</th>
                    
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>