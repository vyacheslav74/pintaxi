<?php $__env->startSection('title', 'Dashboard '); ?>

<?php $__env->startSection('styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('/asset/admin/vendor/jvectormap/jquery-jvectormap-2.0.3.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $diff = ['-success','-info','-warning','-danger']; ?>

<div class="content-area py-1">
<div class="container-fluid">
		<div class="box box-block bg-white">
				<div class="clearfix mb-1">
					<h5 class="float-xs-left"><i class="ti-flickr-alt"></i> Bird Eye<hr></h5>
					<div class="float-xs-right">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="world" style="height: 400px;"></div>
					</div>
					
				</div>
			</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript" src="<?php echo e(asset('/asset/admin/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('/asset/admin/vendor/jvectormap/jquery-jvectormap-world-mill.js')); ?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){

		        /* Vector Map */
		    $('#world').vectorMap({
		        zoomOnScroll: false,
		        map: 'world_mill',
		        markers: [
		        <?php $__currentLoopData = $rides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ride): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		        	<?php if($ride->status != "CANCELLED"): ?>
		            {latLng: [<?php echo e($ride->s_latitude); ?>, <?php echo e($ride->s_longitude); ?>], name: '<?php echo e($ride->user->first_name); ?>'},
		            <?php endif; ?>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

		        ],
		        normalizeFunction: 'polynomial',
		        backgroundColor: 'transparent',
		        regionsSelectable: true,
		        markersSelectable: true,
		        regionStyle: {
		            initial: {
		                fill: 'rgba(0,0,0,0.15)'
		            },
		            hover: {
		                fill: 'rgba(0,0,0,0.15)',
		            stroke: '#fff'
		            },
		        },
		        markerStyle: {
		            initial: {
		                fill: '#43b968',
		                stroke: '#fff'
		            },
		            hover: {
		                fill: '#3e70c9',
		                stroke: '#fff'
		            }
		        },
		        series: {
		            markers: [{
		                attribute: 'fill',
		                scale: ['#43b968','#a567e2', '#f44236'],
		                values: [200, 300, 600, 1000, 150, 250, 450, 500, 800, 900, 750, 650]
		            },{
		                attribute: 'r',
		                scale: [5, 15],
		                values: [200, 300, 600, 1000, 150, 250, 450, 500, 800, 900, 750, 650]
		            }]
		        }
		    });
		});
	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>