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
<div class="blog" style="margin-top:20px">
	<div class="blog_box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                <h2 class="page-title">Blogs</h2>
            </div>
				<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<div class="col-md-4" style="min-height: 420px;display: inline-block;"> 
						<a href="<?php echo e(url('/blog/').'/'.$blog->id); ?>">
							<img src="<?php echo e($blog->image); ?>" class="img-responsive" style="height: 275px !important;width: 340px !important"/>
						<h3><?php echo e($blog->$title); ?></h3></a>
						<h6><?php echo e($blog->created_at); ?></h6>
						<?php echo str_limit($blog->$des, 300); ?> 
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>