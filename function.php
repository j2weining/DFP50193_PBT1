<?php
$service = $_POST['service'];

$total;
$additionalprice;
$haircut = 10;

function totalprice($haircut,$service,$total){
    if($service == 'haircut'){
        $total += $haircut;
    }
    return $total;
}
