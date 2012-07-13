<!-- Form -->
        <?php echo form_open('', array('class'=>'form','id'=>'validate'), array('employee_id'=> $employee_id)); ?>
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
                    <div class="formRow">
                        <label>Section / Unit / Project</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'section','class'=>'validate[required]')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Department</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'department')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Division</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'division')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </fieldset>
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
                    <div class="formRow">
                        <label>Staff Name</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'name')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Staff ID</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'staff_id')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Identity Card</label>
                        <div class="formRight">
                            <?php echo form_input(array('name'=>'ic_new','placeholder'=>'New I/C')); ?>
                        </div>
                        <div class="formRight mt12">
                            <?php echo form_input(array('name'=>'ic_old','placeholder'=>'Old I/C')); ?>
                        </div>
                        <div class="formRight mt12">
                            <?php echo form_input(array('name'=>'ic_old','placeholder'=>'Color')); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Date of Birth</label>
                        <div class="formRight">
                            <span class="oneThree">
                                <?php echo form_input(array('name'=>'dob_day','placeholder'=>'Day')); ?>
                                <span class="formNote">DD</span>
                            </span>
                            <span class="oneThree">
                                <?php echo form_input(array('name'=>'dob_month','placeholder'=>'Month')); ?>
                                <span class="formNote">MM</span>
                            </span>                        
                            <span class="oneThree">
                                <?php echo form_input(array('name'=>'dob_year','placeholder'=>'Year')); ?>
                                <span class="formNote">YYYY</span>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Gender</label>
                        <div class="formRight">
                            <?php echo form_radio('gender', 'Male',FALSE,'id="gender_1"'); ?><?php echo form_label('Male','gender_1'); ?>
                            <?php echo form_radio('gender', 'Female',FALSE,'id="gender_2"'); ?><?php echo form_label('Female','gender_2'); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Citizenship</label>
                        <div class="formRight">
                            <?php echo form_radio('citizenship', 'Malaysian',FALSE,'id="citizenship_1"'); ?><?php echo form_label('Malaysian','citizenship_1'); ?>
                            <?php echo form_radio('citizenship', 'Permanent Resident',FALSE,'id="citizenship_2"'); ?><?php echo form_label('Permanent Resident','citizenship_2'); ?>
                            <?php echo form_radio('citizenship', 'Non-Resident',FALSE,'id="citizenship_2"'); ?><?php echo form_label('Non-Resident','citizenship_3'); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Passport</label>
                        <div class="formRight">
                            <?php echo form_input(array('name'=>'passport[no]','placeholder'=>'Passport No')); ?>
                        </div>
                        <div class="formRight mt12">
                            <?php echo form_input(array('name'=>'passport[expiry]','placeholder'=>'Passport Expiry')); ?>
                        </div>
                        <div class="formRight mt12">
                            <?php echo form_input(array('name'=>'passport[issued]','placeholder'=>'Place of Issuance')); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Religion</label>
                        <div class="formRight">
                            <?php echo form_radio('religion', 'Muslim',FALSE,'id="religion_1"'); ?><?php echo form_label('Muslim','religion_1'); ?>
                            <?php echo form_radio('religion', 'Bhuddist',FALSE,'id="religion_2"'); ?><?php echo form_label('Bhuddist','religion_2'); ?>
                            <?php echo form_radio('religion', 'Hindu',FALSE,'id="religion_3"'); ?><?php echo form_label('Hindu','religion_3'); ?>
                            <?php echo form_radio('religion', 'Christian',FALSE,'id="religion_4"'); ?><?php echo form_label('Christian','religion_4'); ?>
                            <?php echo form_radio('religion', 'Other',FALSE,'id="religion_5"'); ?><?php echo form_label('Other','religion_5'); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Marital Status</label>
                        <div class="formRight">
                            <?php echo form_radio('marital_status', 'Single',FALSE,'id="marital_status_1"'); ?><?php echo form_label('Single','marital_status_1'); ?>
                            <?php echo form_radio('marital_status', 'Married',FALSE,'id="marital_status_2"'); ?><?php echo form_label('Married','marital_status_2'); ?>
                            <?php echo form_radio('marital_status', 'Divorced',FALSE,'id="marital_status_2"'); ?><?php echo form_label('Divorced','marital_status_3'); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Disability</label>
                        <div class="formRight">
                            <?php echo form_textarea(array('name'=>'disability','rows'=>5,'cols'=> 50), set_value('disability')); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Driver's License</label>
                        <div class="formRight">
                            <?php echo form_input(array('name'=>'license[no]','placeholder'=>'License Number')); ?>
                        </div>
                        <div class="formRight mt12">
                            <?php echo form_input(array('name'=>'license[type]','placeholder'=>'Type of License')); ?>
                        </div>
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