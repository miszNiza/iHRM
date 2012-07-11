<!-- Form -->
        <?php echo form_open('', array('class'=>'form'), array('employee_id'=> $employee_id)); ?>
           <!-- Static table -->
           
            <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Disciplinary Information</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row" original-title="Add disciplinary"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="disciplinary">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Date</td>
                            <td>Domestic Inquiry</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="disciplinary">
                        <tr>
                            <td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td>
                                <?php echo form_input(array('name'=>'disc[][dom_date]','style'=>'width:96%')); ?>
                            </td>
                            <td><?php echo form_input(array('name'=>'disc[][dom_inq]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'disc[][dom_act]','style'=>'width:96%')); ?></td>
                        </tr>
                    </tbody>                             
                </table>
            </div>
           
            <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Criminal Information</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_row2" original-title="Add criminal"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="criminal">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Date</td>
                            <td>Criminal Offence</td>
                            <td>Criminal Penalty</td>
                        </tr>
                    </thead>
                    <tbody class="criminal">
                        <tr>
                            <td><a href="#2" class="delete_row2"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            <td>
                                <?php echo form_input(array('name'=>'crime[][cri_date]','style'=>'width:96%')); ?>
                            </td>
                            <td><?php echo form_input(array('name'=>'crime[][cri_offence]','style'=>'width:96%')); ?></td>
                            <td><?php echo form_input(array('name'=>'crime[][cri_penalty]','style'=>'width:96%')); ?></td>
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
                var row = '<tr><td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'disc[][dom_date]','style'=>'width:96%'), set_value('disc[1][dom_date]')); ?></td><td><?php echo form_input(array('name'=>'disc[][dom_inq]','style'=>'width:96%'), set_value('disc[1][dom_inq]')); ?></td><td><?php echo form_input(array('name'=>'disc[][dom_act]','style'=>'width:96%'),  set_value('disc[2][dom_act]')); ?></td></tr>'; 
               $('#disciplinary tbody').append(row);
               
               return false;
            });
            
            $("table").delegate("a.delete_row2", "click", function() {
                $(this).parent().parent().remove();
            });
            
            $('a.add_row2').click(function(){
                var row2 = '<tr><td><a href="#2" class="delete_row2"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td><td><?php echo form_input(array('name'=>'crime[][cri_date]','style'=>'width:96%'), set_value('crime[1][cri_date]')); ?></td><td><?php echo form_input(array('name'=>'crime[][cri_offence]','style'=>'width:96%'), set_value('crime[1][cri_offence]')); ?></td><td><?php echo form_input(array('name'=>'crime[][cri_penalty]','style'=>'width:96%'),  set_value('crime[2][cri_penalty]')); ?></td></tr>'; 
               $('#criminal tbody').append(row2);
               
               return false;
            });
        });
    </script>
           
           