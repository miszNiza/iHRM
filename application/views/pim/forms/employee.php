<!-- Form leave -->
        <?php echo form_open('', array('class'=>'form','id'=>'validate'), array('employee_id'=> $employee_id)); ?>
            <fieldset>
          <div class="widget">
          <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
           
          <div class="formRow">
            <label>Annual Leave Balance B/F</label>
            <div class="formRight">
                <?php echo form_input(array('name'=>'annual_bf'));?>
            </div>
            <div class="clear"></div>
        </div>
          
          <div class="formRow">
              <label>Current Year Entitlement</label>
              <div class="formRight">
                  <?php echo form_input(array('name'=>'cur_year'));?>
              </div>
              <div class="clear"></div>
          </div>
          
          <div class="formRow">
              <label>Annual Leave Taken</label>
              <div class="formRight">
              <?php echo form_input(array('name'=>'annual_taken'));?>
              </div>
              <div class="clear"></div>
          </div>
          
          <div class="formRow">
              <label>Annual Leave Balance</label>
              <div class="formRight">
                  <?php echo form_input(array('name'=>'annual_balance'));?>
              </div>
              <div class="clear"></div>
          </div>
          
          <div class="formRow">
              <label>MC Entitlement 
                  <br/>(Admin View Only)</label>
              <div class="formRight">
                  <?php echo form_input(array('name'=>'mc_entitle')); ?>
              </div>
              <div class="clear"></div>
          </div>
          
          <div class="formRow">
              <label>Hospitalization Entitlement
              <br/>(Admin View Only)</label>
              <div class="formRight">
              <?php echo form_input(array('name'=>'hosp_entitle'));?>
          </div>
              <div class="clear"></div>
          </div>
          
          <div class="formRow">
              <label>MC Taken Todate</label>
              <div class="formRight">
                  <?php echo form_input(array('name'=>'mc_todate'));?>
              </div>
              <div class="clear"></div>
          </div>
          
          <div class="formRow">
              <label>MC Hospitalization Todate</label>
              <div class="formRight">
                  <?php echo form_input(array('name'=>'mc_hosp'));?>
              </div>
              <div class="clear"></div>
          </div>
          
          <div class="formRow">
              <label>Prolong Illness</label>
              <div class="formRight">
                  <?php echo form_input(array('name'=>'prolog_illness'));?>
              </div>
              <div class="clear"></div>
              <br/>
              <label>No of Days</label>
              <div class="formRight">
                 <?php echo form_checkbox('days','1st 60 Days', FALSE,'days1');?><?php echo form_label('1st 60 Days','days1');?>
                 <?php echo form_checkbox('days','2nd 60 Days', FALSE,'days2');?><?php echo form_label('2nd 60 Days','days2');?>
                 <?php echo form_checkbox('days','3rd 60 Days', FALSE,'days3');?><?php echo form_label('3rd 60 Days','days3');?>
                 <?php echo form_checkbox('days','Medical on Board', FALSE,'days4');?><?php echo form_label('Medical on Board','days4');?>
              </div>
              <div class="clear"></div>
              <br/>
              <div class="formRight">
                  <?php echo form_input(array('name'=>'start_date','placeholder'=>'Start Date','class'=>'datepicker')); ?>
                  <?php echo form_input(array('name'=>'end_date','placeholder'=>'End Date','class'=>'datepicker')); ?>
              </div>
              <div class="clear"></div>         
          </div>
    </div>
</fieldset>

<fieldset>
    <div class="widget">
      <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
      <h6> Leave Application Record</h6>
     <div class="topIcons">
     <a href="#" class="tipS add_row" original-title="Add Record"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
      </div>   
    </div>
        <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="leave">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Type Of Leave</td>
                            <td>Date Applied</td>
                            <td>Recommended By</td>
                            <td>Approved By</td>
                            <td>Reason</td>
                        </tr>
                    </thead>
                    <tbody class="leave">
                        <tr>
                            <td><a href="#" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td>
                                <?php echo form_input(array('name'=>'leave[][leave_type]','style'=>'width:96%','placeholder'=>'Please Specify')); ?>
                            </td>
                            <td>
                                <?php echo form_input(array('name'=>'leave[][leave_applied]','style'=>'width:96%','class'=>'datepicker')); ?>
                            </td>
                            <td>
                                <?php echo form_input(array('name'=>'leave[][leave_recommend]','style'=>'width:96%')); ?>
                            </td>
                            <td>
                                <?php echo form_input(array('name'=>'leave[][leave_approve]','style'=>'width:96%')); ?>
                            </td>
                                <td class="formRight">
                               &nbsp;&nbsp; <?php echo form_radio('leave','Domestic', FALSE, 'id="leave_domestic"');?><?php echo form_label('Domestic', 'leave_domestic');?> 
                               &nbsp;&nbsp; <?php echo form_radio('leave','Oversea', FALSE, 'id="leave_overc"');?><?php echo form_label('Oversea','leave_overc');?> 
                               &nbsp;&nbsp; <?php echo form_radio('leave','Country', FALSE, 'id="leave_count"');?><?php echo form_label('Country', 'leave_count');?> 
                                </td>
                        </tr>
                    </tbody>  
                </table>
    </div>
</fieldset>
<?php echo form_close();?>

<script type="text/javascript">
        $(document).ready(function()
        {
            $("table").delegate("a.delete_row", "click", function() {
                $(this).parent().parent().remove();
            });
            
            $('a.add_row').click(function(){
             var row='<tr><td><a href="#" class="delete_row"><img src="<?php echo site_url('assets/images');?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'leave[][leave_type]','style'=>'width:96%','placeholder'=>'Please Specify'),set_value('leave[][leave_type]'));?></td><td><?php echo form_input(array('name'=>'leave[][leave_applied]','style'=>'width:96%','class'=>'datepicker'),set_value('leave[1][leave_applied]'));?></td><td><?php echo form_input(array('name'=>'leave[][leave_recommend]','style'=>'width:96%'),set_value('leave[2][leave_recommend]'));?></td><td><?php echo form_input(array('name'=>'leave[][leave_approve]','style'=>'width:96%'),set_value('leave[3][leave_approve]'));?></td><td class="formRight"><?php echo form_radio('leave','Domestic', FALSE, 'id="leave_domestic"',set_value('leave_domestic'));?><?php echo form_label('Domestic','leave_domestic');?><?php echo form_radio('leave','Oversea', FALSE, 'id="leave_overc"',set_value('leave_overc'));?><?php echo form_label('Oversea','leave_overc');?><?php echo form_radio('leave','Country', FALSE, 'id="leave_count"',set_value('leave_count'));?><?php echo form_label('Country','leave_count');?></td</tr>';
            $('#leave tbody').append(row);
              $('input[type="radio"]').not('.radio input[type="radio"]').uniform();//add radio button
              $( ".datepicker" ).datepicker({ 
		defaultDate: +7,
		autoSize: true,
		appendText: '(dd-mm-yyyy)',
		dateFormat: 'dd-mm-yy'
                });
               return false;
            });
            
      });
    </script>

 
