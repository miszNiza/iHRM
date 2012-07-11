<!-- Form -->
        <?php echo form_open('', array('class'=>'form'), array('employee_id'=> $employee_id)); ?>
           <!-- Static table -->
            <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Education History</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row" original-title="Add School"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
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
        <?php echo form_close(); ?>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $("table").delegate("a.delete_row", "click", function() {
                $(this).parent().parent().remove();
            });
            $('a.add_row').click(function(){
               var row = '<tr><td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%'), set_value('education[1][school]')); ?></td><td><?php echo form_input(array('name'=>'education[][school]','style'=>'width:96%')); ?></td></tr>'; 
               $('#schools tbody').append(row);
               
               return false;
            });
        });
    </script>
           
           