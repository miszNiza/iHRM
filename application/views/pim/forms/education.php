<!-- Form -->
        <?php echo form_open('', array('class'=>'form'), array('employee_id'=> $employee_id)); ?>
           <!-- Static table -->
            <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Education History</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_school_row" original-title="Add School"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="schools">
                    <thead>
                        <tr>
                            <td></td>
                            <td>School</td>
                            <td>Year</td>
                            <td>Grade</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td>
                                <?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%')); ?>
                            </td>
                            <td><?php echo form_input(array('name'=>'education[][year]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'education[][grade]','style'=>'width:96%')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
           
           <!-- Static table -->
            <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Tertiary Education</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_college_row" original-title="Add College"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="college">
                    <thead>
                        <tr>
                            <td></td>
                            <td>College/University</td>
                            <td>Passing Year</td>
                            <td>Stream/Course</td>
                            <td>Qualification</td>
                            <td>CGPA</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td>
                                <?php echo form_input(array('name'=>'education[][college]','style'=>'width:96%')); ?>
                            </td>
                            <td><?php echo form_input(array('name'=>'education[][year]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'education[][course]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'education[][qualification]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'education[][cgpa]','style'=>'width:96%')); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="formSubmit"><input type="submit" value="submit" class="redB"></div>
            </div>
           
        <?php echo form_close(); ?>

    <script type="text/javascript">
        $(document).ready(function(){
            // School Table
            var schoolRowCount = $('#schools a.delete_row').length,
                schoolRow = $('#schools tbody').html();
                
            $("table").delegate("a.delete_row", "click", function() {
                //alert(count);
                if(schoolRowCount > 1){
                    $(this).parent().parent().remove();
                    schoolRowCount--;
                }
                
                return false;
            });
            $('a.add_school_row').click(function(){
                schoolRowCount++;
                $('#schools tbody').append(schoolRow);
               
                return false;
            });
            
            //Tertiary education table
            var collegeRowCount = $('#college a.delete_row').length,
                collegeRow = $('#college tbody').html();
                
            $("table").delegate("a.delete_row", "click", function() {
                //alert(count);
                if(collegeRowCount > 1){
                    $(this).parent().parent().remove();
                    collegeRowCount--;
                }
                
                return false;
            });
<<<<<<< HEAD
            
            $('a.add_row').click(function(){
               var row = '<tr><td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%')); ?></td></tr>'; 
               $('#schools tbody').append(row);
=======
            $('a.add_college_row').click(function(){
                collegeRowCount++;
                $('#college tbody').append(collegeRow);
               
>>>>>>> original/pim
               
               return false;
            });
        });
    </script>
           
           