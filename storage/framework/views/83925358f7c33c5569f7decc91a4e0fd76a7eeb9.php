<?php $__env->startSection('title', 'Crm '); ?>
<?php $__env->startSection('content'); ?>
<div class="content-area py-1">
   <div class="container-fluid">
      <div class="box box-block bg-white">
         <h5 class="mb-1">
            <i class="ti-layout-media-right"></i>&nbsp;CRM User
            <?php if(Setting::get('demo_mode', 0) == 1): ?>
            <span class="pull-right">(*personal information hidden in demo)</span>
            <?php endif; ?>
         </h5>
         <hr>
         <a href="<?php echo e(route('admin.crm-manager.create')); ?>" style="margin-left: 1em;" class="btn shadow-box btn-success btn-rounded pull-right"><i class="fa fa-plus"></i> Add New</a>
         <table class="table table-striped table-bordered dataTable" id="table-2" style="width:100%;">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $crms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $crm): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
               <tr>
                  <td><?php echo e($index + 1); ?></td>
                  <td><?php echo e($crm->name); ?></td>
                  <?php if(Setting::get('demo_mode', 0) == 1): ?>
                  <td><?php echo e(substr($crm->email, 0, 3).'****'.substr($crm->email, strpos($crm->email, "@"))); ?></td>
                  <?php else: ?>
                  <td><?php echo e($crm->email); ?></td>
                  <?php endif; ?>
                  <?php if(Setting::get('demo_mode', 0) == 1): ?>
                  <td>+919876543210</td>
                  <?php else: ?>
                  <td><?php echo e($crm->mobile); ?></td>
                  <?php endif; ?>
                  <td>
                     <form action="<?php echo e(route('admin.crm-manager.destroy', $crm->id)); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">
                        <a href="<?php echo e(route('admin.crm-manager.edit', $crm->id)); ?>" class="btn shadow-box btn-success"><i class="fa fa-pencil"></i></a>
                        <button class="btn btn-danger shadow-box" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                     </form>
                  </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </tbody>
            <tfoot>
               <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Action</th>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>