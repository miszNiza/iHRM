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
<<<<<<< HEAD

<fieldset>

=======
<fieldset>
>>>>>>> master
 <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6> Appraisal Record</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row" original-title="Add Record"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
          <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="record">
<<<<<<< HEAD
                   <thead>
=======
                    <thead>
>>>>>>> master
                        <tr>
                            <td></td>
                            <td>Appraiser(Name of Superior)</td>
                            <td>Assessment Period 
                                <br/>(From-Date)&nbsp;&nbsp;&nbsp;&nbsp;(To-Date)</td>
                            <td>Assessment Year</td>
                            <td>Assess & Liabilities 
                                <br/>(Filed)&nbsp;&nbsp;&nbsp;&nbsp;(Not Filed)</td>
                        </tr>
                    </thead>
                    <tbody class="record">
                        <tr>
                            <td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
<<<<<<< HEAD
                           
=======
>>>>>>> master
                            <td><?php echo form_input(array('name'=>'record[][record_appraiser]', 'style'=>'width:96%'))?></td>
                            <td><span class="oneTwo"><?php echo form_input(array('name'=>'record[][record_period1]','placeholder'=>'From','style'=>'width:96%','class'=>'datepicker'));?></span>
                            <span class="oneTwo"><?php echo form_input(array('name'=>'record[][record_period2]','placeholder'=>'To','style'=>'width:96%','class'=>'datepicker'));?></span></td>
                            <td><?php echo form_input(array('name'=>'record[][record_year]','style'=>'width:96%')); ?></td>
                            <td><span class="oneTwo"><?php echo form_checkbox('record','Filed', FALSE, 'id="record_liability1"');?></span>
                           <span class="oneTwo"><?php echo form_checkbox('record','Not Filed',FALSE,'id="record_liability2"');?></span></td>                    
<<<<<<< HEAD
                       </tr>
                   </tbody>                             
                </table>
            </div>
</fieldset>


=======
                        </tr>                        
                </table>
</div>
  
</fieldset>

>>>>>>> master
<fieldset>
     <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6> Merit Point Rating: 1-Lowest 4-Highest (For Rating View)</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row2" original-title="Add Merit Point"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
<<<<<<< HEAD
          <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="merit">
=======
<table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="merit">
>>>>>>> master
                    <thead>
                        <tr>
                            <td></td>
                            <td>Year</td>
                            <td>Merit Point</td>
                            <td>Reward</td>
                        </tr>
                    </thead>
                    <tbody class="merit">
                        <tr>
                            <td><a href="#2" class="delete_row2"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
<<<<<<< HEAD
                            <td>
                                <?php echo form_input(array('name'=>'merit[][merit_year]','style'=>'width:96%')); ?>
                            </td>
                                <td class="formRight">
=======
                            <td><?php echo form_input(array('name'=>'merit[][merit_year]','style'=>'width:96%')); ?></td>
                            <td class="formRight">
>>>>>>> master
                               &nbsp;&nbsp; <?php echo form_radio('merit','1', FALSE, 'id="merit_1"');?><?php echo form_label('1', 'merit_1');?> 
                               &nbsp;&nbsp; <?php echo form_radio('merit','2', FALSE, 'id="merit_2"');?><?php echo form_label('2','merit_2');?> 
                               &nbsp;&nbsp; <?php echo form_radio('merit','3', FALSE, 'id="merit_3"');?><?php echo form_label('3', 'merit_3');?> 
                               &nbsp;&nbsp; <?php echo form_radio('merit','4', FALSE, 'id="merit_4"');?><?php echo form_label('4','merit_4');?> 
                               &nbsp;&nbsp; <?php echo form_radio('merit','5', FALSE, 'id="merit_5"');?><?php echo form_label('5','merit_5');?> 
                                </td>
                            <td class="formRight"><?php echo form_radio('merit','Increment',FALSE,'id="merit_incre"');?><?php echo form_label('Increment','merit_incre');?>
                             <?php echo form_radio('merit','Bonus',FALSE, 'id="merit_bonus"');?><?php echo form_label('Bonus','merit_bonus');?></td>
                        </tr>
                    </tbody>  
                </table>
    </div>
</fieldset>

    <?php echo form_close();?>

<script type="text/javascript">
<<<<<<< HEAD
        $(document).ready(function(){
     $("table").delegate("a.delete_row", "click", function() {
=======
        $(document).ready(function()
        {
            $("table").delegate("a.delete_row", "click", function() {
>>>>>>> master
                $(this).parent().parent().remove();
            });
            
            $('a.add_row').click(function(){

             var row='<tr><td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'record[][record_appraiser]', 'style'=>'width:96%'),set_value('record[][record_appraiser]'));?></td><td><?php echo form_input(array('name'=>'record[][record_period1]','placeholder'=>'From','style'=>'width:96%','class'=>'datepicker'),set_value('record[1][record_period1]'));?></span><span class="oneTwo"><?php echo form_input(array('name'=>'record[][record_period2]','placeholder'=>'To','style'=>'width:96%','class'=>'datepicker'),set_value('record[2][record_period2]'));?></td><td><?php echo form_input(array('name'=>'record[][record_year]','style'=>'width:96%'),set_value('record[2][record_year]')); ?></td><td><span class="oneTwo"><?php echo form_checkbox('record','Filed', FALSE, 'id="record_liability1"',set_value('record_liability1'));?></span><span class="oneTwo"><?php echo form_checkbox('record','Not Filed',FALSE,'id="record_liability2"',set_value('record_liability2'));?></span></td></tr>';  
            $('#record tbody').append(row);
             $('input[type="checkbox"]').not('.checkbox input[type="checkbox"]').uniform();//add radio button
              $( ".datepicker" ).datepicker({ 
		defaultDate: +7,
		autoSize: true,
		appendText: '(dd-mm-yyyy)',
		dateFormat: 'dd-mm-yy'
	});
               return false;
            });
            
            $("table").delegate("a.delete_row2", "click", function() {
                $(this).parent().parent().remove();
            });
            
            $('a.add_row2').click(function(){
               var row2='<tr><td><a href="#2" class="delete_row2"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'merit[][merit_year]','style'=>'width:96%'),set_value('merit[][merit_year]')); ?></td><td class="formRight"><?php echo form_radio('merit','1', FALSE, 'id="merit_1"',set_value('merit_1'));?><?php echo form_label('1', 'merit_1');?><?php echo form_radio('merit','2', FALSE, 'id="merit_2"',set_value('merit_2'));?><?php echo form_label('2','merit_2');?><?php echo form_radio('merit','3', FALSE, 'id="merit_3"',set_value('merit_3'));?><?php echo form_label('3','merit_3');?><?php echo form_radio('merit','4', FALSE, 'id="merit_4"',set_value('merit_4'));?><?php echo form_label('4','merit_4');?><?php echo form_radio('merit','5', FALSE, 'id="merit_5"',set_value('merit_5'));?><?php echo form_label('5','merit_5');?></td><td class="formRight"><?php echo form_radio('merit','Increment',FALSE,'id="merit_incre"',set_value('merit_incre'));?><?php echo form_label('Increment','merit_incre');?><?php echo form_radio('merit','Bonus',FALSE, 'id="merit_bonus"',set_value('merit_bonus'));?><?php echo form_label('Bonus','merit_bonus');?></td></tr>'; 
               $('#merit tbody').append(row2);
                $('input[type="radio"]').not('.radio input[type="radio"]').uniform();//add radio button
                 return false;
            });
        });
    </script>

<<<<<<< HEAD
               
=======
>>>>>>> master
