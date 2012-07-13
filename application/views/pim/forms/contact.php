<!-- Form -->
        <?php echo form_open('', array('class'=>'form'), array('employee_id'=> $employee_id)); ?>
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6>Home Address</h6></div>
                    <div class="formRow">
                        <label>House No.</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'address_house_no')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Road</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'address_road')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>District</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'address_district')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Postcode</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'address_postcode')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>State</label>
                        <?php 
                            $states = array(
                                'Kuala Lumpur' => 'Kuala Lumpur',
                                'Selangor' => 'Selangor',
                                'Pahang' => 'Pahang',
                                'Melaka' => 'Melaka',
                                'Negeri Sembilan' => 'Negeri Sembilan',
                                'Johor' => 'Johor',
                                'Terengganu' => 'Terengganu',
                                'Kedah' => 'Kedah',
                                'Perak' => 'Perak',
                                'Pulau Pinang' => 'Pulau Pinang',
                                'Perlis' => 'Perlis',
                                'Sabah' => 'Sabah',
                                'Sarawak' => 'Sarawak'
                            );
                        ?>
                        <div class="formRight"><?php echo form_dropdown('address_state',$states); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Mobile Phone No</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'phone_mobile')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>House Phone No</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'phone_home')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6>Emergency Contact</h6></div>
                    <div class="formRow">
                        <label>Name</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'emergency_name')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Phone</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'emergency_phone')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>House No</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'emergency_house_no')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Road</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'emergency_road')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>District</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'emergency_district')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Postcode</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'emergency_postcode')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>State</label>
                        <?php 
                            $states = array(
                                'Kuala Lumpur' => 'Kuala Lumpur',
                                'Selangor' => 'Selangor',
                                'Pahang' => 'Pahang',
                                'Melaka' => 'Melaka',
                                'Negeri Sembilan' => 'Negeri Sembilan',
                                'Johor' => 'Johor',
                                'Terengganu' => 'Terengganu',
                                'Kedah' => 'Kedah',
                                'Perak' => 'Perak',
                                'Pulau Pinang' => 'Pulau Pinang',
                                'Perlis' => 'Perlis',
                                'Sabah' => 'Sabah',
                                'Sarawak' => 'Sarawak'
                            );
                        ?>
                        <div class="formRight"><?php echo form_dropdown('address_state',$states); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="unmask"></div>
            </fieldset>

            <div class="widget">
               <div class="formSubmit"><input type="reset" value="Reset" class="redB"> <input type="submit" value="submit" class="blueB"></div>
               <div class="clear"></div>
            </div>
        <?php echo form_close(); ?>