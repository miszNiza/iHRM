<!-- Form -->
        <?php echo form_open('', array('class'=>'form'), array('employee_id'=> $employee_id)); ?>

            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6>Spouse Details</h6></div>
                    <div class="formRow">
                        <label>Spouse Name</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>NRIC No.</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Citizenship</label>
                        <div class="formRight">
                            <select name="select2" >
                                <option value="opt1">Malaysian</option>
                                <option value="opt2">Permanent Resident</option>
                                <option value="opt3">Non-Resident</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Passport No.</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Expired Date</label>
                        <div class="formRight"><input type="text" value="" class="maskDate" /><span class="formNote">99/99/9999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Place of Issuance</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Phone No.</label>
                        <div class="formRight"><input type="text" value="" class="maskPhone"/><span class="formNote">(999) 999-9999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Email</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Employer Name</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Employer Address</label>
                        <div class="formRight"><textarea rows="8" cols="" name="growingTextarea" class="autoGrow lim" placeholder="Type something"></textarea></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Employer Phone No.</label>
                        <div class="formRight"><input type="text" value="" class="maskPhone"/><span class="formNote">(999) 999-9999</span></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </fieldset>
            
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6>Dependants Details</h6></div>
                    <div class="formRow">
                        <label>Name</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>NRIC No.</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Birth Certificate No.</label>
                        <div class="formRight">
                                <input type="text" value="" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Gender</label>
                        <div class="formRight">
                            <select name="select2" >
                                <option value="opt1">Male</option>
                                <option value="opt2">Female</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Relationship</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Spouse</label>
                        <div class="formRight">
                            <select name="select2" >
                                <option value="opt1">1</option>
                                <option value="opt2">2</option>
                                <option value="opt2">3</option>
                                <option value="opt2">4</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6>Family Relationship in UDA Group</h6></div>
                    <div class="formRow">
                        <label>Name</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>NRIC No.</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Relationship</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Department/Division</label>
                        <div class="formRight">
                            <select name="select2" >
                                <option value="opt1">1</option>
                                <option value="opt2">2</option>
                                <option value="opt2">3</option>
                                <option value="opt2">4</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div id="unmask"></div>
            </fieldset>

        <?php echo form_close(); ?>