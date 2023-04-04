<?php $__env->startSection('content'); ?>
<?php
$locale = session()->get('locale');
   if($locale){

      $locale;

   }else{

      $locale = 'en';

   }
   $question = $locale.'_question';
   $des = $locale.'_description';
 ?>
<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div>

					<style>
.cbp_tmtimeline {
	margin: 30px 0 0 0;
	padding: 0;
	list-style: none;
	position: relative;
} 

/* The line */
.cbp_tmtimeline:before {
	content: '';
	position: absolute;
	top: 0;
	bottom: 0;
	width: 10px;
	background: #afdcf8;
	left: 20%;
	margin-left: -10px;
}

.cbp_tmtimeline > li {
	position: relative;
}

/* The date/time */
.cbp_tmtimeline > li .cbp_tmtime {
	display: block;
	width: 25%;
	padding-right: 100px;
	position: absolute;
}

.cbp_tmtimeline > li .cbp_tmtime span {
	display: block;
	text-align: right;
}

.cbp_tmtimeline > li .cbp_tmtime span:first-child {
	font-size: 0.9em;
	color: #bdd0db;
}

.cbp_tmtimeline > li .cbp_tmtime span:last-child {
	font-size: 2.9em;
	color: #3594cb;
}

.cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child {
	color: #6cbfee;
}

/* Right content */
.cbp_tmtimeline > li .cbp_tmlabel {
	margin: 0 0 15px 25%;
	background: #3594cb;
	color: #fff;
	padding: 2em;
	font-size: 1.2em;
	font-weight: 300;
	line-height: 1.4;
	position: relative;
	border-radius: 5px;
}

.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel {
	background: #6cbfee;
}

.cbp_tmtimeline > li .cbp_tmlabel h2 { 
	margin-top: 0px;
	padding: 0 0 10px 0;
	border-bottom: 1px solid rgba(255,255,255,0.4);
}

/* The triangle */
.cbp_tmtimeline > li .cbp_tmlabel:after {
	right: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-right-color: #3594cb;
	border-width: 10px;
	top: 10px;
}

.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after {
	border-right-color: #6cbfee;
}

/* The icons */
.cbp_tmtimeline > li .cbp_tmicon {
	width: 40px;
	height: 40px;
	font-family: 'ecoico';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	font-size: 1.4em;
	line-height: 40px;
	-webkit-font-smoothing: antialiased;
	position: absolute;
	color: #fff;
	background: #46a4da;
	border-radius: 50%;
	box-shadow: 0 0 0 8px #afdcf8;
	text-align: center;
	left: 20%;
	top: 0;
	margin: 0 0 0 -25px;
}

.cbp_tmicon-phone:before {
	content: "\e000";
}

.cbp_tmicon-screen:before {
	content: "\e001";
}

.cbp_tmicon-mail:before {
	content: "\e002";
}

.cbp_tmicon-earth:before {
	content: "\e003";
}

/* Example Media Queries */
@media  screen and (max-width: 65.375em) {

	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
		font-size: 1.5em;
	}
}

@media  screen and (max-width: 47.2em) {
	.cbp_tmtimeline:before {
		display: none;
	}

	.cbp_tmtimeline > li .cbp_tmtime {
		width: 100%;
		position: relative;
		padding: 0 0 20px 0;
	}

	.cbp_tmtimeline > li .cbp_tmtime span {
		text-align: left;
	}

	.cbp_tmtimeline > li .cbp_tmlabel {
		margin: 0 0 30px 0;
		padding: 1em;
		font-weight: 400;
		font-size: 95%;
	}

	.cbp_tmtimeline > li .cbp_tmlabel:after {
		right: auto;
		left: 20px;
		border-right-color: transparent;
		border-bottom-color: #3594cb;
		top: -20px;
	}

	.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after {
		border-right-color: transparent;
		border-bottom-color: #6cbfee;
	}

	.cbp_tmtimeline > li .cbp_tmicon {
		position: relative;
		float: right;
		left: auto;
		margin: -55px 5px 0 0px;
	}	
}


</style>
			<h1><?php echo e(trans('header.ride.how_it_work')); ?>?</h1>
		
				<hr>
					<ul class="cbp_tmtimeline">
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<li>
							<time class="cbp_tmtime" datetime="2013-04-10 18:30"></time>
							<div class="cbp_tmicon"><?php echo e($key+1); ?></div>
							<div class="cbp_tmlabel">
								<h2><?php echo e(ucwords($val->$question)); ?></h2>
								<p><?php echo e(strip_tags($val->$des)); ?></p>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						
					</ul>
				</div>

			</div>

		</div>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>