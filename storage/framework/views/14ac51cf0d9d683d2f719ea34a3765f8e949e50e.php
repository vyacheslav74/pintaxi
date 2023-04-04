<?php $__env->startSection('title', 'Payment Settings '); ?>

<?php $__env->startSection('content'); ?>

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <form action="<?php echo e(route('admin.settings.payment.store')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <h5><i class="ti-files"></i>&nbsp;Payment Gateway</h5>
                <div class="card card-block">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-cc-stripe pull-right"></i>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="stripe_secret_key" class="col-form-label">
                                    Stripe (Card Payments)
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(Setting::get('CARD') == 1): ?> checked  <?php endif; ?>  name="CARD" id="stripe_check" onchange="cardselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                        <div id="card_field" <?php if(Setting::get('CARD') == 0): ?> style="display: none;" <?php endif; ?>>
                            <div class="form-group row">
                                <label for="stripe_secret_key" class="col-xs-4 col-form-label">Stripe Secret key</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="<?php echo e(Setting::get('stripe_secret_key', '')); ?>" name="stripe_secret_key" id="stripe_secret_key"  placeholder="Stripe Secret key">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stripe_publishable_key" class="col-xs-4 col-form-label">Stripe Publishable key</label>
                                <div class="col-xs-8">
                                    <input class="form-control" type="text" value="<?php echo e(Setting::get('stripe_publishable_key', '')); ?>" name="stripe_publishable_key" id="stripe_publishable_key"  placeholder="Stripe Publishable key">
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="card card-block">
					<blockquote class="card-blockquote">
						 <div class="form-group row">
								<div class="col-xs-4">
									<label for="stripe_secret_key" class="col-form-label">
										Paypal Setting
									</label>
								</div>
								<div class="col-xs-6">
									<input <?php if(Setting::get('PAYPAL') == 1): ?> checked  <?php endif; ?>  name="PAYPAL" id="paypal_check" onchange="paypalselect()" type="checkbox" class="js-switch" data-color="#43b968">
								</div>
							</div>
								 <div id="paypal_field" <?php if(Setting::get('PAYPAL') == 0): ?> style="display: none;" <?php endif; ?>>
							<div class="form-group row">
								<label for="PAYPAL_CLIENT_ID" class="col-xs-4 col-form-label">Paypal Client Id</label>
								<div class="col-xs-8">
									<input class="form-control" type="text" value="<?php echo e(Setting::get('PAYPAL_CLIENT_ID', '')); ?>" name="PAYPAL_CLIENT_ID" required id="PAYPAL_CLIENT_ID" placeholder=">Paypal Client Id">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="PAYPAL_SECRET" class="col-xs-4 col-form-label">Pay Secret Key</label>
								<div class="col-xs-8">
									<input class="form-control" type="text" value="<?php echo e(Setting::get('PAYPAL_SECRET', '')); ?>" name="PAYPAL_SECRET" required id="PAYPAL_SECRET" placeholder="Contact Email">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="PAYPAL_MODE" class="col-xs-4 col-form-label">PAYPAL MODE</label>
								<div class="col-xs-8">
									<select class="form-control" id="PAYPAL_MODE" name="PAYPAL_MODE">
										<option value="sandbox" <?php if(Setting::get('PAYPAL_MODE', 0) == 'sandbox'): ?> selected <?php endif; ?>>Sandbox</option>
										<option value="live" <?php if(Setting::get('PAYPAL_MODE', 0) == 'live'): ?> selected <?php endif; ?>>Live</option>
									</select>
								</div>
							</div>
						</blockquote>
					</div>
				</div>
				<div class="card card-block">
					<blockquote class="card-blockquote">
						 <div class="form-group row">
								<div class="col-xs-4">
									<label for="stripe_secret_key" class="col-form-label">
										Razorpay Setting
									</label>
								</div>
								<div class="col-xs-6">
									<input <?php if(Setting::get('RAZORPAY') == 1): ?> checked  <?php endif; ?>  name="RAZORPAY" id="razorpay_check" onchange="razorpayselect()" type="checkbox" class="js-switch" data-color="#43b968">
								</div>
							</div>
								 <div id="paypal_field" <?php if(Setting::get('PAYPAL') == 0): ?> style="display: none;" <?php endif; ?>>
							<div class="form-group row">
								<label for="RAZORPAY_CLIENT_ID" class="col-xs-4 col-form-label">Razorpay Client Id</label>
								<div class="col-xs-8">
									<input class="form-control" type="text" value="<?php echo e(Setting::get('RAZORPAY_CLIENT_ID', '')); ?>" name="RAZORPAY_CLIENT_ID" required id="RAZORPAY_CLIENT_ID" placeholder="Razorpay Client Id">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="RAZORPAY_SECRET" class="col-xs-4 col-form-label">Razorpay Secret Key</label>
								<div class="col-xs-8">
									<input class="form-control" type="text" value="<?php echo e(Setting::get('RAZORPAY_SECRET', '')); ?>" name="RAZORPAY_SECRET" required id="RAZORPAY_SECRET" placeholder="RAZORPAY SECRET">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="RAZORPAY_MODE" class="col-xs-4 col-form-label">Razorpay MODE</label>
								<div class="col-xs-8">
									<select class="form-control" id="RAZORPAY_MODE" name="RAZORPAY_MODE">
										<option value="sandbox" <?php if(Setting::get('RAZORPAY_MODE', 0) == 'sandbox'): ?> selected <?php endif; ?>>Sandbox</option>
										<option value="live" <?php if(Setting::get('RAZORPAY_MODE', 0) == 'live'): ?> selected <?php endif; ?>>Live</option>
									</select>
								</div>
							</div>
						</blockquote>
					</div>
				</div>
                <div class="card card-block">
                    <blockquote class="card-blockquote">
                        <i class="fa fa-3x fa-money pull-right"></i>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label for="cash-payments" class="col-form-label">
                                    Cash Payments
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <input <?php if(Setting::get('CASH') == 1): ?> checked  <?php endif; ?> name="CASH" id="cash-payments" onchange="cardselect()" type="checkbox" class="js-switch" data-color="#43b968">
                            </div>
                        </div>
                    </blockquote>
                </div>
                <h5>Payment Settings</h5>

                <div class="card card-block">
                    <blockquote class="card-blockquote">
                        <div class="form-group row">
                            <label for="daily_target" class="col-xs-4 col-form-label">Daily Target</label>
                            <div class="col-xs-8">
                                <input class="form-control" 
                                    type="number"
                                    value="<?php echo e(Setting::get('daily_target', '0')); ?>"
                                    id="daily_target"
                                    name="daily_target"
                                    min="0"
                                    required
                                    placeholder="Daily Target">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tax_percentage" class="col-xs-4 col-form-label">Tax percentage(%)</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type=""
                                    value="<?php echo e(Setting::get('tax_percentage', '0')); ?>"
                                    id="tax_percentage"
                                    name="tax_percentage"
                                    
                                    placeholder="Tax Percentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surge_trigger" class="col-xs-4 col-form-label">Surge Trigger Point</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="number"
                                    value="<?php echo e(Setting::get('surge_trigger', '')); ?>"
                                    id="surge_trigger"
                                    name="surge_trigger"
                                    min="0"
                                    required
                                    placeholder="Surge Trigger Point">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surge_percentage" class="col-xs-4 col-form-label">Surge percentage(%)</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="number"
                                    value="<?php echo e(Setting::get('surge_percentage', '0')); ?>"
                                    id="surge_percentage"
                                    name="surge_percentage"
                                    min="0"
                                    max="100"
                                    placeholder="Surge percentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="commission_percentage" class="col-xs-4 col-form-label">Commission percentage(%)</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type=""
                                    value="<?php echo e(Setting::get('commission_percentage', '0')); ?>"
                                    id="commission_percentage"
                                    name="commission_percentage"
                                
                                    placeholder="Commission percentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="booking_prefix" class="col-xs-4 col-form-label">Booking ID Prefix</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                    type="text"
                                    value="<?php echo e(Setting::get('booking_prefix', '0')); ?>"
                                    id="booking_prefix"
                                    name="booking_prefix"
                                    min="0"
                                    max="4"
                                    placeholder="Booking ID Prefix">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="driver_tip" class="col-xs-4 col-form-label">Driver Tip percentage(%)</label>
                            <div class="col-xs-8">
                                <input class="form-control"
                                       type=""
                                       value="<?php echo e(Setting::get('driver_tip', '0')); ?>"
                                       id="driver_tip"
                                       name="driver_tip"
                                       placeholder="Driver Tip percentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="base_price" class="col-xs-4 col-form-label">
                                Currency ( <strong><?php echo e(Setting::get('currency', '$')); ?> </strong>)
                            </label>
                            <div class="col-xs-8">
                                <select name="currency" class="form-control" required>
                                    <option <?php if(Setting::get('currency') == "TZS"): ?> selected <?php endif; ?> value="TZS">Tanzania (TZS)</option>
                                    <option <?php if(Setting::get('currency') == "$"): ?> selected <?php endif; ?> value="$">US Dollar (USD)</option>
                                    <option <?php if(Setting::get('currency') == "₹"): ?> selected <?php endif; ?> value="₹"> Indian Rupee (INR)</option>

 <option <?php if(Setting::get('currency') == "KES"): ?> selected <?php endif; ?> value="KES"> Kenya (KES)</option>

                                    <option <?php if(Setting::get('currency') == "د.ك"): ?> selected <?php endif; ?> value="د.ك">Kuwaiti Dinar (KWD)</option>
                                    <option <?php if(Setting::get('currency') == "د.ب"): ?> selected <?php endif; ?> value="د.ب">Bahraini Dinar (BHD)</option>
                                    <option <?php if(Setting::get('currency') == "﷼"): ?> selected <?php endif; ?> value="﷼">Omani Rial (OMR)</option>
                                    <option <?php if(Setting::get('currency') == "£"): ?> selected <?php endif; ?> value="£">British Pound (GBP)</option>
                                    <option <?php if(Setting::get('currency') == "€"): ?> selected <?php endif; ?> value="€">Euro (EUR)</option>
                                    <option <?php if(Setting::get('currency') == "CHF"): ?> selected <?php endif; ?> value="CHF">Swiss Franc (CHF)</option>
                                    <option <?php if(Setting::get('currency') == "ل.د"): ?> selected <?php endif; ?> value="ل.د">Libyan Dinar (LYD)</option>
                                    <option <?php if(Setting::get('currency') == "B$"): ?> selected <?php endif; ?> value="B$">Bruneian Dollar (BND)</option>
                                    <option <?php if(Setting::get('currency') == "S$"): ?> selected <?php endif; ?> value="S$">Singapore Dollar (SGD)</option>
                                    <option <?php if(Setting::get('currency') == "AU$"): ?> selected <?php endif; ?> value="AU$"> Australian Dollar (AUD)</option>
                                </select>
                            </div>
                        </div>
                    </blockquote>
                </div>

                <div class="form-group row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-success shadow-box btn-block">Update</button>
                        
                    </div>
                    <div class="offset-xs-4 col-xs-4">
                       <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-danger shadow-box btn-block">Cancel</a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
function cardselect()
{
    if($('#stripe_check').is(":checked")) {
        $("#card_field").fadeIn(700);
    } else {
        $("#card_field").fadeOut(700);
    }
}
function paypalselect()
{
    if($('#paypal_check').is(":checked")) {
        $("#paypal_field").fadeIn(700);
    } else {
        $("#paypal_field").fadeOut(700);
    }
}
function razorpayselect()
{
    if($('#razorpay_check').is(":checked")) {
        $("#razorpay_field").fadeIn(700);
    } else {
        $("#razorpay_field").fadeOut(700);
    }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>