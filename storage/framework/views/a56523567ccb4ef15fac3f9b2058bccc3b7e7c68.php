<?php $__env->startSection('title', 'My Trips '); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
	.fontsize{
		font-size: 14px;
	}
    .car-radio{
        width: 125px !important;
    }
    #yandex_estimated_btn {
        padding: 5px 10px;
        margin: 20px;
        color: white;
        background: #000111;
        border: 1px solid #000111 !important;
        border-radius: 10px;
    }
</style>

<div class="col-md-12" style="margin-bottom: 20px;">

    <div class="dash-content">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title"><span class="s-icon"></span>&nbsp; <?php echo e(trans('user.my_rides')); ?></h4>
            </div>
        </div>
        <?php echo $__env->make('common.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="row no-margin pricing_left">
            <div class="col-md-6">
                <form action="<?php echo e(url('confirm/ride')); ?>" method="GET" onkeypress="return disableEnterKey(event);" class="tripsform">
                    <?php if(Setting::get('map_type', 1) == 2): ?>
                       <input type="hidden" name="distance" id="distance_input" value="<?php echo e(session('distance')); ?>">
                       <input type="hidden" name="duration" id="duration_input" value="<?php echo e(session('duration')); ?>">
                       <input type="hidden" name="seconds" id="seconds_input" value="<?php echo e(session('seconds')); ?>">
                       <input type="hidden" name="s_address" value="<?php echo e(session('s_address')); ?>">
                       <input type="hidden" name="d_address" value="<?php echo e(session('d_address')); ?>">
                   <div id="input_address_box">

                   </div>
                       <input type="button" id="yandex_estimated_btn" value="CALCULATE"/>
                <?php else: ?>
                    <div class="input-group dash-form" style="max-width:inherit">
                        <div class="input-group-addon"><span class="ti-control-record"></span></div>
                        <input type="text" class="form-control fontsize" id="origin-input" name="s_address"  placeholder="<?php echo e(trans('index.enter_pickup_location')); ?>" value="<?php echo e(session('s_address')); ?>">
                    </div>
                    <div class="input-group dash-form" style="max-width:inherit">
                        <div class="input-group-addon"><span class="ti-location-pin"></span></div>
                        <input type="text" class="form-control fontsize" id="destination-input" name="d_address"  placeholder="<?php echo e(trans('index.enter_destination')); ?>" value="<?php echo e(session('d_address')); ?>">
                    </div>
                    <input type="hidden" name="s_latitude" id="origin_latitude" value="<?php echo e(session('s_latitude')); ?>">
                    <input type="hidden" name="s_longitude" id="origin_longitude" value="<?php echo e(session('s_longitude')); ?>">
                    <input type="hidden" name="d_latitude" id="destination_latitude" value="<?php echo e(session('d_latitude')); ?>">
                    <input type="hidden" name="d_longitude" id="destination_longitude" value="<?php echo e(session('d_longitude')); ?>">
                    <input type="hidden" name="current_longitude" id="long" value="<?php echo e(@$_GET['current_longitude']); ?>">
                    <input type="hidden" name="current_latitude" id="lat" value="<?php echo e(@$_GET['current_latitude']); ?>">
                    <input type="hidden" name="promo_code" id="promo_code" />
                <?php endif; ?>

                    <div class="car-detail">
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <?php $i = 0;  ?>
                        <div class="car-radio">
                            <input type="radio" 
                                name="service_type"
                                value="<?php echo e($service->id); ?>"
                                id="service_<?php echo e($service->id); ?>"
                                <?php if(session('service_type') == $service->id): ?> checked="checked" <?php endif; ?>>
                            <label for="service_<?php echo e($service->id); ?>">
                                <div class="car-radio-inner">
                                    
                                    <div class="img"><img src="<?php echo e(image($service->image)); ?>"  class="<?php echo e($i== 0 ? 'img_color ': ''); ?>"></div>
                                    <div class="name"><span class="<?php echo e($i== 0 ? 'car_ser_type': ''); ?>"><?php echo e($service->name); ?></span></div>
                                </div>
                            </label>
                        </div>
                        <?php $i++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>
                    <button type="submit" class="half-primary-btn btn-success shadow-box fare-btn" style="width: 100% !important;"><?php echo app('translator')->get('user.ride.order_now'); ?></button>
                </form>
            </div>

            <div class="col-md-6">
                <div class="map-responsive">
                    <div id="map" style="width: 100%; height: 450px;"></div>
                </div> 
            </div>
        </div>
    </div>

    <div class="dash-content" style="margin-top: 20px;">
        <div class="row no-margin">
            <div class="col-md-12">
                <h4 class="page-title">Recent Ride</h4>
            </div>
        </div>

        <div class="row no-margin ride-detail">
            <div class="col-md-12">
            <?php if($trips->count() > 0): ?>

                <table class="table table-condensed" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->get('user.booking_id'); ?></th>
                            <th><?php echo app('translator')->get('user.date'); ?></th>
                            <th><?php echo app('translator')->get('user.profile.name'); ?></th>
                            <th><?php echo app('translator')->get('user.amount'); ?></th>
                            <th><?php echo app('translator')->get('user.type'); ?></th>
                            <th><?php echo app('translator')->get('user.payment'); ?></th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <tr data-toggle="collapse" data-target="#trip_<?php echo e($trip->id); ?>" class="accordion-toggle collapsed">
                            <td><?php echo e($trip->booking_id); ?></td>
                            <td><?php echo e(date('d-m-Y',strtotime($trip->assigned_at))); ?></td>
                            <?php if($trip->provider): ?>
                                <td><?php echo e($trip->provider->first_name); ?> <?php echo e($trip->provider->last_name); ?></td>
                            <?php else: ?>
                                <td>-</td>
                            <?php endif; ?>
                            <?php if($trip->payment): ?>
                                <td><?php echo e(currency($trip->payment->total)); ?></td>
                            <?php else: ?>
                                <td>-</td>
                            <?php endif; ?>
                            <?php if($trip->service_type): ?>
                                <td><?php echo e($trip->service_type->name); ?></td>
                            <?php else: ?>
                                <td>-</td>
                            <?php endif; ?>
                            <td><?php echo app('translator')->get('user.paid_via'); ?> <?php echo e($trip->payment_mode); ?></td>
                            <td>
                                <form action ="<?php echo e(url('/mytrips/detail')); ?>">
                                    <input type="hidden" value="<?php echo e($trip->id); ?>" name="request_id">
                                    <button type="submit" style="margin-top: 0px;" class="full-primary-btn fare-btn">Detail</button>
                                </form>
                            </td>
                        </tr>
                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


                    </tbody>
                </table>
                <?php else: ?>
                    <hr>
                    <p style="text-align: center;">No Rides Available</p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
<!-- Schedule Modal -->
<div id="schedule_modal" class="modal fade schedule-modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Schedule a Order</h4>
      </div>
		<form>
			<div class="modal-body">
				<label>Date</label>
				<input value="<?php echo e(date('m/d/Y')); ?>" type="text" id="datepicker" placeholder="Date" name="schedule_date">
				<label>Time</label>
				<input value="<?php echo e(date('H:i')); ?>" type="text" id="timepicker" placeholder="Time" name="schedule_time">
			  </div>
			  <div class="modal-footer">
				<button type="button" id="schedule_button" class="half-primary-btn btn-success shadow-box" data-dismiss="modal" style="width: 522px;margin-right: 24px;">Schedule Order</button>
			</div>
		</form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>    

<?php if(Setting::get('map_type', 1) == 2): ?><!--YANDEX MAP-->
<script src="https://api-maps.yandex.ru/2.1/?apikey=<?php echo e(env("YANDEX_MAP_KEY")); ?>&lang=en_US" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('asset/front/js/provider.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('asset/front/js/yandex_map.js')); ?>"></script>
<script>
        $(function() {
           $(document).ready(function () {
              
                setTimeout(function () {
                    $("#input_address_box").append($(".ymaps-2-1-79-control-popup.ymaps-2-1-79-popup.ymaps-2-1-79-popup_direction_down"));
                }, 1000);

               $('#yandex_estimated_btn').click(function(e) {
                   e.preventDefault();
                   form = $(this).closest('form');
                   form.find('.help-block, .final_estimated, .book_now_wrap').remove();

                   let orig = '';
                   let dest = '';
                   $("#input_address_box input[type=text]").each(function (index) {
                       if(index == 0) {
                           orig = $(this).val();
                           $('input[name="s_address"]').val(orig);
                       } else {
                           dest = $(this).val();
                           $('input[name="d_address"]').val(dest);
                       }
                   });

                   var distance		    =	form.find('#distance_input').val();
                   var duration	    =	form.find('#duration_input').val();
                   var seconds    =   form.find('#seconds_input').val();
                   var formData = form.serializeArray();

                   if( distance !== 0     && seconds !==  0 ) {

                       $.ajax({
                           headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                           type	:	'POST',
                           url   : '<?php echo e(url("/get_fare_yandex")); ?>',
                           data	: 	formData,
                           success	: 	function(json) {
                               form.find('#yandex_estimated_btn').after('<div class="final_estimated" style="font-weight: bold; color:black"><span class="pull-left">Estimated Fare</span><span class="pull-right">'+json.estimated_fare+'</span></div>');
                               form.find('.car-detail').after('<div class="book_now_wrap"><button type="submit" class="btn btn-default sid_tg">Book Now <figure><img src="asset/front_dashboard/img/btn_arrow.png" alt="img"></figure></button></div>');
                           }

                       });
                   }
               });

           }) ;
        });
    </script>
<?php else: ?>
<script type="text/javascript" src="<?php echo e(asset('asset/front/js/map.js')); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAP_KEY')); ?>&libraries=places&callback=initMap" async defer></script>
<?php endif; ?>

<script type="text/javascript">
 $('.pricing_left .car-radio').on('click', function() {
   var detail = $('.car-detail');
   detail.find('input[type=radio]').attr('checked');
   detail.find('.car_ser_type').removeClass('car_ser_type');
   detail.find('.img_color').removeClass('img_color');
   $(this).find('img').addClass('img_color');
   $(this).find('span').addClass('car_ser_type');
   if($(':radio[name=service_type]:checked, :radio[name=service_type]:checked').length >= 1){
   $('input[name=service_type]').attr('checked', false); 

   } if($(':radio[name=service_type]:checked, :radio[name=service_type]:checked').length==0){
   	   $(this).find('input[type=radio]').attr('checked', 'checked');
   }
   
   });

        var ip_details = <?php echo json_encode( $ip_details );  ?>;

        var current_latitude = parseFloat(ip_details.geoplugin_latitude);
        var current_longitude = parseFloat(ip_details.geoplugin_longitude);
      


    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success);
    } else {
        console.log('Sorry, your browser does not support geolocation services');
        initMap();
    }

    function success(position)
    {
        document.getElementById('long').value = position.coords.longitude;
        document.getElementById('lat').value = position.coords.latitude;

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
          
        }
		
        initMap();
    }
</script> 
    
    <script type="text/javascript">	
        var date = new Date();
        date.setDate(date.getDate()-1);
        $('#datepicker').datepicker({  
            startDate: date
        });	

		
        $('#timepicker').timepicker({showMeridian : false});		
        function card(value){
            if(value == 'CARD'){
                $('#card_id').fadeIn(300);
            }else{
                $('#card_id').fadeOut(300);
            }
        }	
        
        $('#schedule_button').click(function(){
            alert("ride script");
            $("#datepicker").clone().attr('type','hidden').appendTo($('#create_ride'));
            $("#timepicker").clone().attr('type','hidden').appendTo($('#create_ride'));
            alert("ride script before submit");
            document.getElementById('create_ride').submit();
        }); 		

    </script>
    
<script type="text/javascript">

    function disableEnterKey(e)
    {
        var key;
        if(window.e)
            key = window.e.keyCode; // IE
        else
            key = e.which; // Firefox

        if(key == 13)
            return e.preventDefault();
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>