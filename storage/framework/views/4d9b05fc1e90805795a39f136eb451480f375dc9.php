<?php
use App\Zones;
use App\ServiceType;
?>


<?php $__env->startSection('title', 'Service Types '); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="mb-1"><i class="ti-layout-media-overlay-alt-2"></i>&nbsp;Mapped Vehicle</h5><hr>
            <a href="<?php echo e(url('admin/allocation')); ?>" style="margin-left: 1em;" class="btn shadow-box btn-success btn-rounded pull-right"><i class="fa fa-plus"></i> Add New Map</a>
            <table class="table table-striped table-bordered dataTable" id="table-2" style="width: 100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fare Plan</th>
                        <th>Vehicle List</th>
                        <th>Zone</th>                        
                        <th>Status</th>                     
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>                    
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			        <?php $zonename=Zones::select('*')->where('id' ,$service->zone_id)->first(); ?>
                    <?php  ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><a id="fareSetting"><?php echo e($service->plan_name); ?></a></td>
                        <td><?php echo e($service->service_name); ?></td>
                        <td><?php echo e($zonename['zone_name']); ?></td>
                        <td>Active</td>
                        <td>
                            <form action="<?php echo e(route('admin.fare.settings.deletePKG')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <input type="hidden" value="<?php echo e($service->id); ?>" name="id" />
                                <a href="<?php echo e(url('admin/cabAllocation_edit', $service->id)); ?>" class="btn btn-success shadow-box">
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
               
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>