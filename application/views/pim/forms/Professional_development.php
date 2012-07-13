<!-- Form -->
        <?php echo form_open('', array('class'=>'form'), array('employee_id'=> $employee_id)); ?>
            <fieldset>
                <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6></h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row" original-title="Add Award"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="award">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Award Title</td>
                            <td>Awarded By</td>
                            <td>Year</td>
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
            </fieldset>
            <fieldset>
                <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6></h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row_training" original-title="Add Training"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="training">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Training Type</td>
                            <td>Course Title</td>
                            <td>Conducted By</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#1" class="delete_row_training"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td>
                                <?php $option = array('Employee Orientation' => 'Employee Orientation','In-House Training' => 'In-House Training','Mentoring (On-Job-Training)' => 'Mentoring (On-Job-Training)','External Training (Development and Functional)' => 'External Training (Development and Functional)'); ?>
                                <?php echo form_dropdown(array('name'=>'training[][type]','style'=>'width:96%'),$option,'Employee Orientation'); ?>
                            </td>
                            <td><?php echo form_input(array('name'=>'training[][course_title]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'training[][conducted_by]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'training[][date]','style'=>'width:96%')); ?></td>
                        </tr>
                    </tbody>
                </table>
                </div>  
                <div id="unmask"></div>
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> aa4de8a6d723cd32cba0daa162446a8c0e76bf16
>>>>>>> master
            
            $("table").delegate("a.delete_row", "click", function() {
                $(this).parent().parent().remove();
            });
            $('a.add_row').click(function(){
               var row = '<tr><td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%')); ?></td></tr>'; 
               $('#award tbody').append(row);
               
               return false;
            });
            
            $("table").delegate("a.delete_row_training", "click", function() {
                $(this).parent().parent().remove();
            });
            $('a.add_row_training').click(function(){
               var row = '<tr><td><a href="#1" class="delete_row_training"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%')); ?></td></tr>'; 
               $('#training tbody').append(row);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            var awardRow = $('#award tbody').html(),
                awardRowCount = $('a.delete_row').length,
                awardCurrentCount = awardRowCount;

            $("table").delegate("a.delete_row", "click", function() {
                if(awardCurrentCount > awardRowCount){
                    $(this).parent().parent().remove();
                    awardCurrentCount--;
                }
                return false;
            });
            $('a.add_row').click(function(){
               $('#award tbody').append(awardRow);
               awardCurrentCount++;
               return false;
            });
            
            var trainingRow = $('#training tbody').html(),
                trainingRowCount = $('a.delete_row_training').length,
                trainingCurrentCount = trainingRowCount;
            
            $("table").delegate("a.delete_row_training", "click", function() {
                if(trainingCurrentCount > trainingRowCount){
                    $(this).parent().parent().remove();
                    trainingCurrentCount--;
                }
                return false;
            });
            $(".widget").delegate('a.add_row_training','click',function(){
                $('#training tbody').append(trainingRow);
               $('select').not('#uniform-undefined select').uniform();
               console.log($.uniform.elements);
               
               trainingCurrentCount++;
>>>>>>> original/pim
=======
>>>>>>> aa4de8a6d723cd32cba0daa162446a8c0e76bf16
>>>>>>> master
               
               return false;
            });
        });
    </script>