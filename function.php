<?php
$service = $_POST['service'];
$addservice = $_POST['addservice'];

function totalprice($total){
    $service = $_POST['service'];
    $addservice = $_POST['addservice'];
    if($service == 'haircut'){
        if($addservice == 'wash'){
            $total =+ 15;
        }else{
            $total =+ 10;
        }
    }elseif ($service == 'hairtreatment'){
        if($addservice == 'moisture'){
            $total =+ 25;
        }elseif($addservice == 'relax'){
            $total =+ 25;
        }else{
            $total =+ 20;
        }
    }elseif ($service == 'hairdye'){
        $total =+ 50;
    }else{
        $total = 0;
    }
    return $total;
}