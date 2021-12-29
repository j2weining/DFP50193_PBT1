<?php
$service = $_POST['service'];
$total = 0;
if (isset($_POST['hairwash'])) {
    $hairwash = $_POST['hairwash'];
} else {
    $hairwash = '';
}

if (isset($_POST['moisture'])) {
    $moisture = $_POST['moisture'];
} else {
    $moisture = '';
}

if (isset($_POST['relax'])) {
    $relax = $_POST['relax'];
} else {
    $relax = '';
}

if (isset($_POST['hairbleach'])) {
    $hairbleach = $_POST['hairbleach'];
} else {
    $hairbleach = '';
}

function totalprice($total)
{
    $service = $_POST['service'];

    if ($service == 'Hair Cut') {
        $total = 10;
        if (isset($_POST['hairwash'])) {
            $total += 5;
        } elseif (isset($_POST['moisture'])) {
            $total += 5;
        }
    } elseif ($service == 'Hair Treatment') {
        $total = 20;
    } elseif ($service == 'Hair Dye') {
        $total = 50;
    } else {
        $total = 0;
    }
    return $total;
}
