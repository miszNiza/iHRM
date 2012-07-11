<?php

/**
 *  Check user login status
 *  
 *  @access public
 *  @return return TRUE on logged in, FALSE if not logged in
 *  
 */

if(!function_exists('user_logged_in')){
    function user_logged_in(){
        $ci = & get_instance();
        $user = $ci->session->userdata('user');
        
        if($user)
            return TRUE;
        else
            return FALSE;
    }
}
?>
