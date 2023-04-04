<?php $__env->startSection('title', 'Push Notification '); ?>

<?php $__env->startSection('content'); ?>

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <h5 class="mb-1"><i class="ti-comments"></i>&nbsp; Push Notification <hr></h5>
                <a href="<?php echo e(route('admin.pushnotification.create')); ?>" style="margin-left: 1em;" class="btn btn-success btn-rounded pull-right"><i class="fa fa-plus"></i> Add New Push Notification</a>
                <table class="table table-striped table-bordered dataTable" id="table-2" style="width:100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Notification Text</th>
                            <th>Expiration Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $notification): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            
                            <td><img src="<?php echo e(asset('public/user/profile/'.$notification->image)); ?>" width="80px" height="80px" /></td>
                            <td><?php echo e(($notification->type==1)?'User':'Provider'); ?></td>
                            <td><?php echo e($notification->title); ?></td>
                            <td><?php echo e($notification->notification_text); ?></td>
                            <td><?php echo e(date('Y-m-d: H:i:A', strtotime( $notification->expiration_date ) )); ?></td>
                            <td>
                                <form action="<?php echo e(route('admin.pushnotification.destroy', $notification->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger shadow-box" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                </form>
                            
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Notification Text</th>
                            <th>Expiration Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>