<!-- Form -->
        <?php echo form_open('', array('class'=>'form','id'=>'validate'), array('employee_id'=> $employee_id)); ?>
            <fieldset>
                <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Previous Working Experience (exclude UDA)</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row_working_experience" original-title="Add Occupation"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="working_experience">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Company</td>
                            <td>Position</td>
                            <td>Year</td>
                            <td>Last Drawn Salary</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td>
                                <?php echo form_input(array('name'=>'working_experience[][company]','style'=>'width:96%','class'=>'validate[required]')); ?>
                            </td>
                            <td><?php echo form_input(array('name'=>'working_experience[][position]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'working_experience[][year]','style'=>'width:96%','class'=>'maskDate')); ?></td>
                            <td><?php echo form_input(array('name'=>'working_experience[][salary]','style'=>'width:96%')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>    
            </fieldset>
<<<<<<< HEAD
            
=======
<<<<<<< HEAD
<<<<<<< HEAD
            
=======
            <div class="widget">
               <div class="formSubmit"><input type="reset" value="Reset" class="redB"> <input type="submit" value="submit" class="blueB"></div>
               <div class="clear"></div>
           </div>
>>>>>>> original/pim
=======
            
>>>>>>> aa4de8a6d723cd32cba0daa162446a8c0e76bf16
>>>>>>> master
        <?php echo form_close(); ?>

        <script type="text/javascript">
        $(document).ready(function(){
            
            $("table").delegate("a.delete_row", "click", function() {
                $(this).parent().parent().remove();
            });
            $('a.add_row_working_experience').live('click',function(){
               var row = '<tr><td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'working_experience[][company]','style'=>'width:96%'), set_value('working_experience[1][company]')); ?></td><td><?php echo form_input(array('name'=>'working_experience[][position]','style'=>'width:96%'), set_value('working_experience[1][position]')); ?></td><td><?php echo form_input(array('name'=>'working_experience[][year]','style'=>'width:96%','class'=>'maskDate')); ?></td><td><?php echo form_input(array('name'=>'working_experience[1][salary]','style'=>'width:96%')); ?></td></tr>'; 
               $('#working_experience tbody').append(row);
               custom();
               
               return false;
            });
            
        });
    </script>