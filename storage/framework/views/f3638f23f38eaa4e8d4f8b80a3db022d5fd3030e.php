<?php $__env->startSection('title', 'Bank'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <h5 class="mb-1"><span class="s-icon"><i class="ti-stats-up"></i></span>&nbsp; Approved Account</h5>
            <hr/>
            <table class="table table-striped table-bordered dataTable" id="table-2" style="width:100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th ">Account Name </th>
                        <th >Paypal Id</th>
                        <th >Bank Name</th>
                        <th >Account Number</th>
                        <th >Routing Number</th>
                        <th >Type</th>
                        <th >status</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					
				
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($service->account_name); ?></td>
                        <td><?php echo e($service->paypal_id); ?></td>
                        <td><?php echo e($service->bank_name); ?></td>
                        <td><?php echo e($service->account_number); ?></td>
                        <td><?php echo e($service->routing_number); ?></td>
                        <td><?php echo e($service->type); ?></td>
                        <td><?php echo e($service->status); ?></td>
                       
                    
                        <td>
                           <form action="<?php echo e(route('admin.bank.destroy', $service->id)); ?>" method="POST">

                             <form action="#" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                             <a href="<?php echo e(route('admin.bank.edit', $service->id)); ?>" class="btn btn-success shadow-box">
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