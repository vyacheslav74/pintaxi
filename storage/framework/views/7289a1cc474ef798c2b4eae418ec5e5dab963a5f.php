                    <label for="type" class="col-xs-12 col-form-label">Location</label>
					<div class="col-xs-10">
						<select name="zones" class="form-control" id="zones" required="" onChange="getZone(this.value)">
						    <option value="0">Choose One</option>
						    <?php $__currentLoopData = $zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<option value="<?php echo e($zone->id); ?>"><?php echo e($zone->zone_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					    </select>
					</div>