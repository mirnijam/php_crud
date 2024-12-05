<?php
function validatePhoneNumber($phone) {
    
    if (is_numeric($phone) && strlen($phone) == 10) {
        return true; 
    } else {
        return false;
    }
}





?>