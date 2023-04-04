<?php $__env->startSection('title', 'Locations '); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <h5 class="mb-1"><span class="s-icon"><i class="ti-zoom-in"></i></span> &nbsp;Zones </h5>
                <hr/>
                <a href="<?php echo e(route('admin.zone.create')); ?>" style="margin-left: 1em;" class="btn shadow-box btn-success btn-rounded w-min-sm m-b-0-25 waves-effect waves-light pull-right"><i class="fa fa-plus"></i> Add New Location</a>
                <table class="table table-striped table-bordered dataTable" id="table-2" style="width:100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zone Name</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th style="width:50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $zone): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($zone->zone_name); ?></td>
                            <td><?php echo e($zone->country); ?></td>
                            <td><?php echo e($zone->state); ?></td>
                            <td><?php echo e($zone->city); ?></td>
                            <td><?php echo e($zone->currency); ?></td>
                            <td><?php echo e($zone->status); ?></td>
                            <td><?php echo e(date('Y-m-d: H:i:A', strtotime( $zone->created_at ) )); ?></td>
                            <td style="width: 100px;">
                                <form action="<?php echo e(route('admin.zone.destroy', $zone->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                    <a href="<?php echo e(route('admin.zone.edit', $zone->id)); ?>" class="btn shadow-box btn-black"><i class="fa fa-eye"></i></a>
                                    <button class="btn shadow-box btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Location Name</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Currency</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>