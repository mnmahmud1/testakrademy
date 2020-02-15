<?php
function is_username_valid($name){
    if (preg_match("[a-z]",$name)) {
        echo "String betul";
    } else {
        echo "salah";
    }
}
    is_username_valid("mahmudi");
?>