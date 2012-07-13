<?php echo form_open('', array('class'=>'form'), array('employee_id'=> $employee_id)); ?>
    <!-- Static table -->
            <div class="widget">
                <div class="title">
                    <img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon"/>
                    <h6>Language Proficiency ( scale : '1' - Lowest to Excellent '5' -Highest )</h6>
                    <div class="topIcons">
                        <a href="#" class="tipS add_lang_row" original-title="Add Language"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/add.png" alt=""></a>
                    </div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck" id="language">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Language</td>
                            <td>Spoken</td>
                            <td>Written</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $options = array(
                                '' => 'Select Scale',
                                1 => 'Lowest',
                                2 => 'Below Average',
                                3 => 'Average',
                                4 => 'Good',
                                5 => 'Excellent'
                            );
                        ?>
                        <tr>
                            <td><a href="#1" class="delete_row"><img src="<?php echo site_url('assets/images'); ?>/icons/remove.png" alt="" /></a></td>
                            
                            <td>
                                <?php echo form_input(array('name'=>'language[][name]','style'=>'width:96%')); ?>
                            </td>
                            <td><?php echo form_dropdown('language[][spoken]', $options); ?></td>
                            <td><?php echo form_dropdown('language[][spoken]', $options); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
<?php echo form_close(); ?>

    <script type="text/javascript">
        $(document).ready(function(){
            // School Table
            var langRow = $('#language a.delete_row').length,
                row = $('#language tbody').html();
            
            $("table").delegate("a.delete_row", "click", function() {
                //alert(count);
                if(langRow > 1){
                    $(this).parent().parent().remove();
                    langRow--;
                }
                
                return false;
            });
            $('a.add_lang_row').click(function(){
                langRow++;
               
               $('#language tbody').append(row);
               
               return false;
            });
            
        });
    </script>