<?php

/*
 * Alert helper to configure alert display
 * Alert types : info, success, error, warning
 */

if(!function_exists('show_alert')){
    function show_alert($alert){
        $html = '';
        if(is_array($alert)){
            foreach ($alert as $key=>$value){

                switch ($key){
                    case 'error' :
                        $class = 'nFailure';
                        break;
                    case 'success' :
                        $class = 'nSuccess';
                        break;
                    case 'info' :
                        $class = 'nInformation';
                        break;
                    default:
                        $class = 'nWarning';
                        break;
                }

                $html .= '<div class="nNote '.$class.' hideit">';
                $html .= $value;
                $html .= '</div>';
            }
        }
        return $html;
    }
}
?>
