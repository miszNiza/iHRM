 <?php echo form_open('',array('class'=>'form'),array('employee_id'=>$employee_id));?>
<fieldset>
    <div class="widget">
        <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
       
        <div class="formRow">
            <label>File Ref. No.</label>
            <div class="formRight">
           <?php echo form_input(array('name'=>'file_ref'));?></div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Job Posting</label>
            <div class="formRight">
            <?php echo form_radio('job', 'Transfer', FALSE, 'id="transfer_1"');?><?php echo form_label('Transfer','transfer_1');?>
            <?php echo form_radio('job','Secondment', FALSE, 'id="transfer_2"');?><?php echo form_label('Secondment','transfer_2');?>
            </div>
        <div class="clear"></div>
      <br/>
         <label>Location</label>
            <div class="formRight">
            <span class="oneTwo"><?php echo form_input(array('name'=>'loct_from','placeholder'=>'From'));?></span>
            <span class="oneTwo"><?php echo form_input(array('name'=>'loct','placeholder'=>'To'));?></span>
            </div>
            <div class="clear"></div>
            <br/>
            <label>Date of Transfer</label>
            <div class="formRight">
             <?php echo form_input(array('name'=>'date_transfer','class'=>'datepicker'));?>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Promotion/ Upgrading</label>
            <div class="formRight">
                <span class="oneTwo"><?php echo form_input(array('name'=>'post_from','placeholder'=>'From (Position Level)'));?></span>
               <span class="oneTwo"> <?php echo form_input(array('name'=>'post_to','placeholder'=>'To (Position Level)'));?></span>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Salary Increment</label>
            <div class="formRight"><?php echo form_input(array('name'=>'salary_amount','placeholder'=>'Increment Amount (RM)'));?>
            </div>
            <div class="clear"></div>
            <br/>
            <div class="formRight"><?php echo form_input(array('name'=>'salary_scale','placeholder'=>'Pay Scale'));?>
            </div>
        <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Date of Increment</label>
            <div class="formRight"><?php echo form_input(array('name'=>'date_incre','class'=>'datepicker'));?>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Name of other Department<br/>
                (in Case of Deputy)</label>
            <div class="formRight"><?php echo form_input(array('name'=>'name_dept'));?>
            </div>
            <div class="clear"></div>
        </div>
        
    </div>
</fieldset>

<fieldset>
<div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Appraisal Record - Merit Point Rating: 1-Lowest 4-Highest (For Rating View)</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row" original-title="Add disciplinary"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="disciplinary">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Appraiser(Name of Superior)</td>
                            <td>Assessment Period 
                                <br/>(From-Date)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(To-Date)</td>
                            <td>Assessment Year</td>
                            <td>Assess & Liabilities 
                                <br/>(Filed)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Not Filed)</td>
                        </tr>
                    </thead>
                    <tbody class="disciplinary">
                        <tr>
                            <td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td><?php echo form_input(array('name'=>'merit[][merit_appraiser]', 'style'=>'width:96%'))?></td>
                           <td> <span class="oneTwo"><?php echo form_input(array('name'=>'merit[][merit_period1]','placeholder'=>'From','style'=>'width:96%','class'=>'datepicker'));?></span>
                            <span class="oneTwo"><?php echo form_input(array('name'=>'merit[][merit_period2]','placeholder'=>'To','style'=>'width:96%','class'=>'datepicker'));?></span></td>
                            <td><?php echo form_input(array('name'=>'merit[][merit_year]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'merit[][merit_liability]','style'=>'width:96%')); ?></td>
                        </tr>
                    </tbody>                             
                </table>
            </div>
</fieldset>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $("table").delegate("a.delete_row", "click", function() {
                $(this).parent().parent().remove();
            });
            
            $('a.add_row').click(function(){
                var row = '<tr><td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'merit[][merit_appraiser]','style'=>'width:96%'), set_value('merit[][merit_appraiser]')); ?></td><td><?php echo form_input(array('name'=>'merit[][merit_period]','style'=>'width:96%','class_1'=>'datepicker'), set_value('merit[1][merit_period]')); ?></td><td><?php echo form_input(array('name'=>'merit[][merit_year]','style'=>'width:96%'),  set_value('merit[2][merit_year]')); ?></td><td><?php echo form_input(array('name'=>'merit[][merit_liability]','style'=>'width:96%'),  set_value('merit[3][merit_liability]')); ?></td></tr>'; 
               $('#disciplinary tbody').append(row);
               
               return false;
            });
        });
    </script>