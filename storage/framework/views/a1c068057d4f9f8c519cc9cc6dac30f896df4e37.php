<?php $__env->startSection('title', 'Complaint Form'); ?>
<?php $__env->startSection('content'); ?>
<?php
$locale = session()->get('locale');
   if($locale){

      $locale;

   }else{

      $locale = 'en';

   }
 ?>
<style type="text/css">
    .form-control{
        background-color: #ffff !important;
    }
</style>
<div id="contact-page" class="page">    
    <section class="page-content">
        <div class="container">
            <div class="row">                   
                <div class="col-sm-12">
                    <h3><?php echo e(trans('contact_us.contact_us')); ?></h3>
                </div>
            </div>
            <div class="row">                   
                <div class="col-sm-6">
                    <h3><?php echo e(trans('contact_us.head')); ?></h3>
                    <p><?php echo e(trans('contact_us.para')); ?></p>
                    <?php if(session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                     <?php endif; ?>
                    <div id="contact-form1">
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="<?php echo e(route('complaint')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label for="your_name"><?php echo e(trans('contact_us.name')); ?>*</label>
                                    <input type="text"  name="name" id="input-name" required  <?php if( Auth::check() ): ?> value="<?php echo e(Auth::user()->first_name); ?>"  <?php endif; ?> class="form-control" placeholder="<?php echo e(trans('contact_us.name')); ?>*" />                           
                                </div>
                                <div class="form-group">
                                    <label for="your_email"><?php echo e(trans('contact_us.email')); ?>*</label>
                                    <input type="email"  name="email" required <?php if( Auth::check() ): ?> value="<?php echo e(Auth::user()->email); ?>"  <?php endif; ?>  id="input-email" class="form-control" placeholder="<?php echo e(trans('contact_us.email')); ?>*" />                                                
                                </div>
                  

                                
                                <?php if( $data['message_cats'] ): ?>
                                <div class="form-group">
                                <label for="subject"><?php echo e(trans('contact_us.query')); ?>*</label>
                                <select class="form-control" name="transfer" id="transfer" required>
                                <option value=""> <?php echo e(trans('contact_us.please_select')); ?> </option>
                                <option value="1"><?php echo e(trans('contact_us.customer')); ?></option>
                                <option value="2"><?php echo e(trans('contact_us.dispatcher')); ?></option>
                                <option value="3"><?php echo e(trans('contact_us.account')); ?></option>
                                <option value="4"><?php echo e(trans('contact_us.general')); ?></option>
                            </select>                         
                                </div>
                                <?php endif; ?>
                                
                                <div class="form-group">
                                    <label for="your_message"><?php echo e(trans('contact_us.message')); ?>*</label>
                                    <textarea class="form-control" required name="message" id="input-message" rows="8" placeholder="<?php echo e(trans('contact_us.enter_description')); ?>*"></textarea>                                                      
                                </div>
                 
                                <div class="buttons">
                                    <input  type="submit" value="<?php echo e(trans('contact_us.send_message')); ?>" data-loading-text="Sending..."  class="btn btn-info btn-block">
                                </div>
                            </form>                    
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="contact-info">
                        <h3><?php echo e(trans('contact_us.contact_info')); ?></h3>                        
                        <ul class="ul">
                            
                            <li>
                                <p><i class="fa fa-phone"></i> <?php echo e(trans('contact_us.call_us')); ?></p>
                                <p>xxxxxxxxxx </p>
                            </li>
                            <li>
                                <p><i class="fa fa-comments-o"></i> <?php echo e(trans('contact_us.chat')); ?></p>
                                <p>xyz</p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope"></i> <?php echo e(trans('contact_us.email1')); ?></p>
                                <p>xyz@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">var route='<?php echo e(route("complaint")); ?>';</script>
<script type="text/javascript" src="<?php echo e(url('/asset/front/js/contact.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>