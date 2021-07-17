<?php 

function sanStr($value){
    return filter_var(trim($value),FILTER_SANITIZE_STRING);
}


function reqVal($value){
    return !empty($value);
}