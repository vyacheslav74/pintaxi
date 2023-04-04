<?php $__env->startSection('content'); ?>
<?php
$locale = session()->get('locale');
   if($locale){

      $locale;

   }else{

      $locale = 'en';

   }
   $title = $locale.'_title';
   $des = $locale.'_description';
 ?>
<div class="signup">
	<div class="signup_box">
		<h3 style="font-size: 32px;margin: 21px 0 0 21px;color:black;"><?php echo e(ucwords($data->$title)); ?></h3><br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div>
                     <?php echo e(strip_tags($data->$des)); ?>

					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>