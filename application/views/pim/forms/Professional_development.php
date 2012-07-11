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
        <?php echo form_close(); ?>

        <script type="text/javascript">
        $(document).ready(function(){
            
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
               
               return false;
            });
        });
    </script>