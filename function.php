<?php
$service = $_POST['service'];

$total = 0;
$additionalprice = 0;

if($service == 'haircut'){
    $haircut = 10;
    $total = $haircut;
}