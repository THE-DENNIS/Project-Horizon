<?php
function sanitizer($evilstring){
    $safe_string = strip_tags($evilstring);
    $safe_string = trim($safe_string);
    $safe_string = htmlspecialchars($safe_string);
    $safe_string = stripslashes($safe_string);
    return $safe_string;


}


?>