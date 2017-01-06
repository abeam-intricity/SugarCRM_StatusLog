<?php   
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');    

class StatusLogHook {  
     function status_log_hook($bean, $event, $arguments) {  
         if($bean->fetched_row['status'] != $bean->status) {  
              $bean->status_log_c .= $bean->status . "," . date("Y-m-d H:i:s") . ";";  
         }  
     }  
} 