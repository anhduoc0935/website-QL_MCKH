<?php 
function post_date($getdate){
    $postTime = $getdate;
    $day = substr($postTime,8,2);
    $month = substr($postTime,5,2);
    $year =  substr($postTime,0,4);
    $newpostTime =  $day. " THÁNG " .$month. ", " .$year;
    return $newpostTime;
}

?>