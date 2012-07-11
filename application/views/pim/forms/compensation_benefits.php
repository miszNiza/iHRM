    <?php echo form_open('',array('class'=>'form'),array('employee_id'=>$employee_id))?>
<fieldset>
    <div class="widget">
        <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
        <div class="formRow">
            <label>Offered Base-salary<br/>
                (upon joining)</label>
            <div class="formRight"><?php echo form_input(array("offer_base_salary"=>"offer_base_salary","RM"=>"RM")); ?></div>
            <div class="clear"></div>
       </div>
        <div class="formRow">
            <label>Scale/Grade (default)</label>
            <div class="formRight"><?php echo form_input(array("grade"=>"grade"));?>
            </div>
           <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>Bank Account<br/>
            (For Salary Credit)</label>
            <div class="formRight"><?php echo form_input(array("name"=>"account[bank_name]","placeholder"=>"Bank Name"));?>
            </div>
            <div class="formRight mt12"><?php echo form_input(array("name"=>"account[location]","placeholder"=>"Location/Branch")); ?>
            </div>
            <div class="formRight mt12"><?php echo form_input(array("name"=>"account[type_acc]", "placeholder"=>"Type Of Account"));?>
            </div>
            <div class="formRight mt12"><?php echo form_input(array("name"=>"account[account_no]","placeholder"=>"Account No."));?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</fieldset>
<fieldset>
    <div class="widget">
        <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
        <div class="formRow">
            <label>Health (Medical)</label>
            <div class="formRight"><?php  
                $options=array(
				''                 => 'Select Coverage by',
				'health_insurance' => 'Insurance',
				'health_company'   =>'Company'
			 );

		echo form_dropdown('health',$options);?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>Hospitalization Entitlement</label>
            <div class="formRight"><?php 
            $options=array(
                ''           => 'Select Room Entitlement',
                'room_exec'  => 'Executive Suite/1st Class',
                'room_single'=> 'Single Bedded',
                'room_double'=> 'Double Bedded',
                'room_four'  => 'Four Bedded'
            );
            echo form_dropdown('room',$options);
            ?>
            <br/>
            <br/>
                <?php 
                $options=array(
                    ''               => 'Select Coverage Per Year',
                    'cover_per_year1'=>'RM350,000',
                    'cover_per_year2'=>'RM250,000',
                    'cover_per_year3'=>'RM150,000',
                    'cover_per_year4'=>'RM75,000'
                );
                echo form_dropdown('cover_per_year',$options);
                ?>
            </div>
            <div class="clear"></div>
        </div>
            
    <div class="formRow">
        <label>Outpatient Visit</label>
        <div class="formRight">
        <?php
        $options=array(
            '' => 'Select Payment by',
            'paid_card'=>'Medical Card',
            'paid_self'=>'Self-paid'
        );
        echo form_dropdown('outpatient_paid',$options);
        ?>
       </div>
         <div class="clear"></div>
    </div>
        <div class="formRow">
            <label>Education</label>
            <div class="formRight">
                <?php echo form_radio('education','Scholarship', FALSE, 'id="educate_1"');?><?php echo form_label('Scholarship', 'educate_1');?>
                <?php echo form_radio('education','Soft Loan',FALSE, 'id="educate_2"');?><?php echo form_label('Soft Loan', 'educate_2');?>
               </div>
            <div class="clear"></div>
       </div>
        
        <div class="formRow">
            <label>Loans</label>
            <div class="formRight">
                <?php echo form_radio('loan','Housing', FALSE, 'id="loan_house"');?><?php echo form_label('Housing', 'loan_house');?>
                <?php echo form_radio('loan', 'Vehicle', FALSE, 'id="loan_vehicle"');?><?php echo form_label('Vehicle', 'loan_vehicle');?>
                <?php echo form_radio('loan', 'Soft Loan', FALSE, 'id="loan_soft"');?><?php echo form_label('Soft Loan', 'loan_soft');?>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Employer Contribution</label>
            <div class="formRight">
                <?php echo form_radio('contribute', 'EPF', FALSE, 'id="contri_epf"');?><?php echo form_label('EPF', 'contri_epf');?>
                <?php echo form_radio('contribute', 'Pension/Retired', FALSE, 'id="contri_pension"');?><?php echo form_label('Pension/Retired','contri_pension');?>
                <?php echo form_radio('contribute', 'SOCSO', FALSE, 'id="contri_socso"');?><?php echo form_label('SOCSO', 'contri_socso');?>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Allowance Entitlement</label>
            <div class="formRight">
                <?php echo form_radio('allowance', 'Housing', FALSE, 'id="allow_house"');?><?php echo form_label('Housing', 'allow_house');?>
                <?php echo form_radio('allowance', 'Travelling', FALSE, 'id="allow_travel"');?><?php echo form_label('Travelling','allow_travel');?>
                <?php echo form_radio('allowance', 'Hardship', FALSE, 'id="allow_hardship"');?><?php echo form_label('Hardship', 'allow_hardship');?>
                <?php echo form_radio('allowance', 'Others', FALSE, 'id="allow_other"');?><?php echo form_label('Others','allow_other');?>
           </div>
            <div class="clear"></div>
        </div>
 </div>
</fieldset>
<fieldset>
     <div class="widget">
        <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
        <div class="formRow">
            <label>EPF No.</label>
            <div class="formRight"><?php echo form_input(array('name'=>'epf_no')); ?></div>
                   <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>SOCSO No.</label>
           <div class="formRight"><?php echo form_input(array('name'=>'socso_no'));?></div>
               <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>Zakat Contribution <br/>
                    (Ref No.)</label>
           <div class="formRight"><?php echo form_input(array('name'=>'zakat_contri'));?></div>
               <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Income Tax File No.</label>
            <div class="formRight"><?php echo form_input(array('name'=>'income_tax'));?></div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow"><label>Branch</label>
            <div class="formRight"><?php echo form_input(array('name'=>'branch'));?></div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Retirement Schema Ref.</label>
            <div class="formRight"><?php echo form_input(array('name'=>'retired_ref'));?></div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Date of Retirement</label>
            <div class="formRight">
                <?php echo form_input(array('name'=>'date_retired','class'=>'datepicker'));?>
            </div>
                    <div class="clear"></div> 
            </div>
        </div>      
</fieldset>

<?php echo form_close();?>