<?php

   
   $locale = session()->get('locale');
   if($locale){

      $locale;

   }else{

      $locale = 'en';

   }
   $des = $locale.'_description';
   $type = $locale.'_type';
   $name = $locale.'_name';
   $meta_des = $locale.'_meta_description';
   $title = $locale.'_title';
   ?>

<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('asset/front/css/slick.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('asset/front/css/slick-theme.css')); ?>"/>

<style type="text/css">


.book_now_wrap  .btn.btn-default.sid_tg {
    text-transform: uppercase;
    font-family: 'open_sansbold';
    font-size: 16px;
    color: #ffffff;
    background-color: #ef6edf;
    border-color: #ef6edf;
    border-radius: 0;
    width: 100%;
    text-align: left;
    height: 40px;
    line-height: 28px;
    position: relative;
}

.book_now_wrap figure {
	float: right;
}
.slick-prev{
	z-index: 0 !important;
}
.slick-next{
	z-index: 0 !important;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="get_there">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="get_there_left">
              <h1><?php echo e(trans('index.get_there')); ?></h1>
               <p><?php echo e(trans('index.your_day_belongs_to_you')); ?></p>
            </div>
         </div>
      </div>
   </div>
   <div class="banner">
<div class="">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="pricing_left">
               <h5><?php echo e(trans('index.book_online')); ?></h5>
               <h4><?php echo e(trans('index.with_fare_estimation')); ?></h4>
               <form  method="GET"  action="<?php echo e(url('/PassengerSignin')); ?>" id="location_form"  onkeypress="return disableEnterKey(event);" style="width: 100%">
				  <div class="pickup_location">
                     <input class="form-control" type="text" id="origin-input" required name="s_address"  placeholder="<?php echo e(trans('index.enter_pickup_location')); ?>">
                  </div>
                  <div class="destination">
                     <input class="form-control"  type="text"  id="destination-input" required  name="d_address"  placeholder="<?php echo e(trans('index.enter_destination')); ?>">
                     <figure><img src="asset/front_dashboard/img/destination.png" id="estimated_btn" alt="img"/></figure>
                  </div>
                  <input type="hidden" name="s_latitude" id="origin_latitude">
                  <input type="hidden" name="s_longitude" id="origin_longitude">
                  <input type="hidden" name="d_latitude" id="destination_latitude">
                  <input type="hidden" name="d_longitude" id="destination_longitude">
                  <input type="hidden" name="current_longitude" id="long">
                  <input type="hidden" name="current_latitude" id="lat">
                  <input type="hidden" name="promo_code" id="promo_code" />
                  <div class="car-detail">
                     <?php if( count( $services )  > 0 ): ?>
                     <?php $i = 0;  ?>
                     <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                     <div class="car-radio">
                        <input type="radio" name="service_type" value="<?php echo e($service->id); ?>" id="service_<?php echo e($service->id); ?>"  <?php if($loop->first): ?> checked="checked" <?php endif; ?>>
                        <label for="service_<?php echo e($service->id); ?>">
                           <div class="car-radio-inner">
                              <div class="img"><img src="<?php echo e(image($service->image)); ?>"  class="<?php echo e($i== 0 ? 'img_color ': ''); ?>"></div>
                              <div class="name"><span class="<?php echo e($i== 0 ? 'car_ser_type': ''); ?>"><?php echo e($service->name); ?></span></div>
                           </div>
                        </label>
                     </div>
                     <?php $i++; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                     <?php endif; ?>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-8">
            <div id="map"></div>
         </div>
      </div>
   </div>
</div>  
   </div>
</div>
<div class="clearfix"></div>
<div class="reasons">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
       
          <?php $__currentLoopData = $index; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <?php if($val->$meta_des=='index1'): ?>
            <div class="col-md-6">
               <div class="easiest">
                  <figure><img src="<?php echo e($val->image); ?>" alt="img"/></figure>
               </div>
            </div>
            <div class="col-md-6">
               <div class="easiest">
                  <h1><?php echo e($val->$title); ?></h1>
                  <h4><?php echo e(strip_tags($val->$des)); ?></h5>
               </div>
               <div class="reasons_btn">
                  <a class="btn btn-default button-shadow" href="<?php echo e(url('/PassengerSignin')); ?>" style="background-color: #000000;border-color: #000000;">
                     <?php echo e(trans('index.book_now')); ?> 
                     <figure><img src="asset/front_dashboard/img/btn_arrow.png" alt="img"></figure>
                  </a>
               </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
          <?php $__currentLoopData = $index; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <?php if($val->$meta_des=='index2'): ?>
            <div class="col-md-6">
               <div class="easiest">
                  <h1><?php echo e($val->$title); ?></h1>
                  <h4><?php echo e(strip_tags($val->$des)); ?></h5>
               </div>
               <div class="reasons_btn">
                  <a class="btn btn-default button-shadow" href="<?php echo e(url('/fare_estimate')); ?>" style="background-color: #000000;border-color: #000000;">
                     <?php echo e(trans('index.calculate_fare')); ?> 
                     <figure><img src="asset/front_dashboard/img/btn_arrow.png" alt="img"></figure>
                  </a>
               </div>
            </div>
               <div class="col-md-6">
                  <div class="easiest">
                     <figure><img src="<?php echo e($val->image); ?>" alt="img"/></figure>
                  </div>
               </div>
               <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
          <?php $__currentLoopData = $index; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <?php if($val->$meta_des=='index3'): ?>
            <div class="col-md-6">
               <div class="easiest">
                  <figure><img src="<?php echo e($val->image); ?>" alt="img"/></figure>
               </div>
            </div>
            <div class="col-md-6">
               <div class="easiest">
                  <h1><?php echo e($val->$title); ?></h1>
                  <h4><?php echo e(strip_tags($val->$des)); ?></h5>
               </div>
               <div class="reasons_btn">
                  <a class="btn btn-default button-shadow" href="<?php echo e(url('/provider/register')); ?>" style="background-color: #000000;border-color: #000000;">
                     <?php echo e(trans('index.signup_now')); ?>

                     <figure><img src="asset/front_dashboard/img/btn_arrow.png" alt="img"></figure>
                  </a>
               </div>
               <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="therd_banner">
   <div class="container">
      <div class="therd_banner_text">
         <h3><?php echo e(trans('index.parameter.title4')); ?></h3>
         <small><?php echo e(trans('index.parameter.small')); ?></small>
         <p><?php echo e(trans('index.parameter.description4')); ?> </p>
         <div class="community_btn">
            <a href = <?php echo e(url('/stories')); ?> class="btn btn-default button-shadow" style="background-color: #000000;border-color: #000000;">
               <?php echo e(trans('index.read_stories')); ?> 
               <figure><img src="asset/front_dashboard/img/btn_arrow.png" alt="img" /></figure>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="our_drivers">
   <div class="container">
      <div id="owl-demo2" class="owl-carousel owl-theme">
        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
         <div class="owl-item">
            <div class="item">
               <figure><img src="<?php echo e(asset('storage/app/public/'.$testimonial->image)); ?>" alt="img" /></figure>
               <div class="drivers_img_txt" style="margin-top: -40px;">
                  <p><?php echo e($testimonial->$des); ?> </p>
                  <small><strong><?php echo e($testimonial->$name); ?>, </strong><?php echo e($testimonial->$type); ?></small>
               </div>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  
      </div>
   </div>
</div>
<div class="unlocking_cities">
   <div class="container">
      <div class="unlocking_text">
         <h3 style="margin-top: 175px;"><?php echo e(trans('index.parameter.title5')); ?></h3>
      </div>
   </div>
</div>
<div class="find_city">
   <div class="container">
      <div class="city_text">
         <h3><?php echo e(trans('index.now')); ?> <?php echo e(Setting::get('site_title')); ?> <?php echo e(trans('index.is_in_usa')); ?></h3>
      </div>
      <p><?php echo e(trans('index.parameter.description5')); ?></p>
      <div class="city-form button-shadow">
         <input type="text" class="form-control" placeholder="<?php echo e(trans('index.search_your_city')); ?>">
         <a href="#"><img src="asset/front_dashboard/img/destination.png" alt="arrow"/></a>
      </div>
   </div>
</div> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript" src="<?php echo e(asset('asset/front/js/slick.min.js')); ?>"></script>
<script type="text/javascript">

  var  saveLocation =function() {  
   
  
	   $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type	:	'POST',
            url	    : 	site_url+'/saveLocationTemp',
            data	: 	$('#location_form').serialize(), 
        
            success	: 	function(json) {
              
            }
          });
       }
   
   var ip_details = [];
   var current_latitude =  30.033333; 
   var current_longitude = 31.233334;
   
   $(document).ready(function() {
     $("#owl-demo2").owlCarousel({
       autoPlay: 3000,
       items :3,
       autoPlay:true,
       navigation:true,
       navigationText:true,
       pagination:true,
       itemsDesktop : [1350,3],
       itemsDesktop : [1199,2],
       itemsDesktopSmall : [991,1],
       itemsTablet: [767,1], 
       itemsMobile : [560,1] 
     });
   
   });     
   
   function disableEnterKey(e) {
       var key;
       if(window.e) {
           key = window.e.keyCode; // IE
       } else {
           key = e.which; // Firefox
       }
   
       if(key == 13)
           return e.preventDefault();
   }
   
    $('.pricing_left .car-radio').on('click', function() {
   var detail = $('.car-detail');
   detail.find('input[type=radio]').attr('checked');
   detail.find('.car_ser_type').removeClass('car_ser_type');
   detail.find('.img_color').removeClass('img_color');
   $(this).find('img').addClass('img_color');
   $(this).find('span').addClass('car_ser_type');
   $(this).find('input[type=radio]').attr('checked', 'checked');
   
   });
   
   $('.car-detail').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: false,
		swipeToSlide: true,
		infinite: false
	});

   $(function() {
	   
		$('#destination-input').focusout(function(){
		   //console.log('hhhhhhhhhhhhh.....');
			saveLocation();
		});
		
		 $('.pricing_left .car-radio').on('click', function() {
			 
            var radioValue = $("input[name='service_type']:checked").val();
            if(radioValue){
                saveLocation(); 
            }
        });
	   
	    $('#origin-input,#destination-input').on('change,focusout', function() {

			//console.log('reached.....');
			saveLocation();
			
		});
   $('#estimated_btn').click(function(e) {
    e.preventDefault();
    form = $(this).closest('form');
    form.find('.help-block, .final_estimated, .book_now_wrap').remove();
   
    var origion                 = form.find('#origin-input');
    var destinated              = form.find('#destination-input');
   
    var origin_latitude		    =	form.find('#origin_latitude').val();
    var origin_longitude	    =	form.find('#origin_longitude').val();
    var destination_latitude    =   form.find('#destination_latitude').val();
    var destination_longitude   =   form.find('#destination_longitude').val();
    var formData = form.serializeArray();
   
    if( origion.val().length === 0 ) {
        form.find('.pickup_location').append('<span class="help-block text-danger">Please add a pick up location! </span>');
        return false;
    }
    
    if( destinated.val().length === 0 ) {
        form.find('.destination').append('<span class="help-block text-danger">Please add a final location! </span>');
        return false;
    }
   
   
    if( origin_latitude.length !== 0 &&  origin_latitude.length !== 0  && origin_latitude.length !== 0  && origin_latitude.length !==  0 ) {
		 
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type	:	'POST',
            url   : '<?php echo e(url("/get_fare")); ?>',
            data	: 	formData,         
            success	: 	function(json) {
                form.find('.destination').after('<div class="final_estimated" style="font-weight: bold; color:black"><span class="pull-left">Estimated Fare</span><span class="pull-right">'+json.estimated_fare+'</span></div>');  
                form.find('.car-detail').after('<div class="book_now_wrap"><button type="submit" class="btn btn-default sid_tg">Book Now <figure><img src="asset/front_dashboard/img/btn_arrow.png" alt="img"></figure></button></div>');
            }
            
          });
   }
   });
   
   });
   
</script>
<script type="text/javascript" src="<?php echo e(asset('asset/front/js/map.js')); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAP_KEY')); ?>&libraries=places&callback=initMap" async defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>