<?php $__env->startSection('title', 'Support '); ?>

<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
   <div class="container-fluid">
      <div class="box box-block bg-white">
      	<h5 class="mb-1">
           <i class="ti-receipt"></i>&nbsp; <?php echo e($title); ?>

         </h5><hr>
         <table class="table table-striped table-bordered dataTable" id="table-2"style="width:100%;">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
               <tr>
                  <td><?php echo e($index + 1); ?></td>
                  <td><?php echo e($user->name); ?></td>
                  <td><?php echo e($user->email); ?></td>
                  <?php if($user->transfer==1): ?>
                  <td>Customer Relationship</td>
                  <?php elseif($user->transfer==2): ?>
                  <td>Dispatcher Department</td>
                  <?php elseif($user->transfer==3): ?>
                  <td>Account Department</td>
                  <?php else: ?>
                  <td></td>
                  <?php endif; ?>
                  <td><?php echo e($user->message); ?></td>
                  <td>
                  <a href="<?php echo e(route('admin.openTicketDetails', $user->id)); ?>" class="btn btn-success shadow-box"><i class="fa fa-eye"></i></a>
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