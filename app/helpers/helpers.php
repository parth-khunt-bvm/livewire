<?php

function ccd($data){
    echo "<pre>";
    print_r($data);
    die();
}
function date_formate($date){
    return date("d, M-Y", strtotime($date));
}
?>
