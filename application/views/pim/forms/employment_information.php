<!-- Form -->
        <?php echo form_open('', array('class'=>'form','id'=>'validate'), array('employee_id'=> $employee_id)); ?>

            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
                    <div class="formRow">
                        <label>Date of Joined</label>
                        <div class="formRight"><input type="text" class="maskDate validate[required]" id="maskDate" value="value" /><span class="formNote">99/99/9999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Appoinment Status</label>
                        <div class="formRight">
                            <input type="radio" checked="checked" name="appoinment_status" id="permanent" /><label for="permanent">Permanent</label>
                            <input type="radio" name="appoinment_status" id="contract" /><label for="contract">Contract</label>
                        </div>
                        <div class="clear"></div>
                        <div class="formRight">
                            <span class="oneTwo">
                            <select name="appoinment_status_type" >
                                <option value="opt1">Probation</option>
                                <option value="opt2">Probation Extension</option>
                                <option value="opt2">Month-to-month</option>
                                <option value="opt2">Extension of Contract</option>
                            </select>
                            </span>
                            <span class="oneTwo">
                            <select name="appoinment_status_duration" >
                                <option value="opt1">3 months</option>
                                <option value="opt2">6 months</option>
                                <option value="opt2">12 months</option>
                                <option value="opt2">24 months</option>
                            </select>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Assigned Staff No.</label>
                        <div class="formRight"><input type="text" value="" class="validate[required]"/></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Position Level</label>
                        <div class="formRight">
                            <select name="select2" >
                                <option value="opt1">Snr Management</option>
                                <option value="opt2">Middle Management</option>
                                <option value="opt2">Executive Group</option>
                                <option value="opt2">Non-Executive Group</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Job Grade</label>
                        <div class="formRight">
                            <select name="select2" >
                                <option value="opt1">Chairman</option>
                                <option value="opt2">Group Managing Director</option>
                                <option value="opt2">Senior Vice President</option>
                                <option value="opt2">Vice President 1</option>
                                <option value="opt2">Vice President 2</option>
                                <option value="opt2">Assistant Vice President 1</option>
                                <option value="opt2">Assistant Vice President 2</option>
                                <option value="opt2">Sr Executive</option>
                                <option value="opt2">Executive 1</option>
                                <option value="opt2">Executive 2</option>
                                <option value="opt2">Non Executive</option>
                                <option value="opt2">NE A</option>
                                <option value="opt2">NE B</option>
                                <option value="opt2">NE C</option>
                                <option value="opt2">NE D</option>
                                <option value="opt2">NE E</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Designation</label>
                        <div class="formRight"><input type="text" value="" class="validate[required]"/></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Unit/Section/Project</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Department</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Division</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Job Location (Physical)</label>
                        <div class="formRight">
                            <input type="radio" checked="checked" name="job_location" id="head_office" /><label for="head_office">Head Office</label>
                            <input type="radio" name="job_location" id="subsidiary" /><label for="subsidiary">Subsidiary</label>
                        </div>
                        <div class="clear"></div>
                        <div class="formRight">
                            <select name="appoinment_status_type" >
                                <option value="opt1">Kuala Lumpur</option>
                                <option value="opt2">Labuan</option>
                                <option value="opt2">Putrajaya</option>
                                <option value="opt2">Johor</option>
                                <option value="opt2">Kedah</option>
                                <option value="opt2">Kelantan</option>
                                <option value="opt2">Melaka</option>
                                <option value="opt2">Negeri Sembilan</option>
                                <option value="opt2">Pahang</option>
                                <option value="opt2">Perak</option>
                                <option value="opt2">Perlis</option>
                                <option value="opt2">Penang</option>
                                <option value="opt2">Sabah</option>
                                <option value="opt2">Sarawak</option>
                                <option value="opt2">Selangor</option>
                                <option value="opt2">Terengganu</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Line of Reporting (immediate superior)</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Responsible for (no. of Subordinate)</label>
                        <div class="formRight"><input type="text" value="" /></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div id="unmask"></div>
            </fieldset>

        <?php echo form_close(); ?>