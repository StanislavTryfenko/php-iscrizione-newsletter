<?php
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_check = true;
} elseif (strlen($email) == 0) {
    $email_check = 0;
} else {
    $email = false;
}
?>