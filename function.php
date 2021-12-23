<?php
$service = $_POST['service'];
$addservice = $_POST['addservice'];

$haircut = 10;
$hairwash = 5;
$total = totalprice($service,$haircut,$hairwash,$total);
$additionalprice;

function totalprice($service,$haircut,$hairwash,$total){
    if($service == 'haircut'){
        $total =+ $haircut;
    }elseif ($service == 'hairwash'){
        $total =+ $hairwash;
    }
    return $total;
}
