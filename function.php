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

function calculatetotal($total)
{
    $service = $_POST['service'];

    if ($service == 'Hair Cut') {
        $total = 10;
        if (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 35;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['relax'])) {
            $total += 15;
        } elseif (isset($_POST['hairwash']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture'])) {
            $total += 10;
        } elseif (isset($_POST['hairwash']) && isset($_POST['relax'])) {
            $total += 10;
        } elseif (isset($_POST['hairwash']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['hairwash'])) {
            $total += 5;
        } elseif (isset($_POST['moisture']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['moisture']) && isset($_POST['relax'])) {
            $total += 10;
        } elseif (isset($_POST['moisture']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['moisture'])) {
            $total += 5;
        } elseif (isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['relax'])) {
            $total += 5;
        } elseif (isset($_POST['hairbleach'])) {
            $total += 20;
        } else {
            $total = 10;
        }
    } elseif ($service == 'Hair Treatment') {
        $total = 20;
        if (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 35;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['relax'])) {
            $total += 15;
        } elseif (isset($_POST['hairwash']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture'])) {
            $total += 10;
        } elseif (isset($_POST['hairwash']) && isset($_POST['relax'])) {
            $total += 10;
        } elseif (isset($_POST['hairwash']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['hairwash'])) {
            $total += 5;
        } elseif (isset($_POST['moisture']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['moisture']) && isset($_POST['relax'])) {
            $total += 10;
        } elseif (isset($_POST['moisture']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['moisture'])) {
            $total += 5;
        } elseif (isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['relax'])) {
            $total += 5;
        } elseif (isset($_POST['hairbleach'])) {
            $total += 20;
        } else {
            $total = 10;
        }
    } elseif ($service == 'Hair Dye') {
        $total = 50;
        if (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 35;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['relax'])) {
            $total += 15;
        } elseif (isset($_POST['hairwash']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['hairwash']) && isset($_POST['moisture'])) {
            $total += 10;
        } elseif (isset($_POST['hairwash']) && isset($_POST['relax'])) {
            $total += 10;
        } elseif (isset($_POST['hairwash']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['hairwash'])) {
            $total += 5;
        } elseif (isset($_POST['moisture']) && isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 30;
        } elseif (isset($_POST['moisture']) && isset($_POST['relax'])) {
            $total += 10;
        } elseif (isset($_POST['moisture']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['moisture'])) {
            $total += 5;
        } elseif (isset($_POST['relax']) && isset($_POST['hairbleach'])) {
            $total += 25;
        } elseif (isset($_POST['relax'])) {
            $total += 5;
        } elseif (isset($_POST['hairbleach'])) {
            $total += 20;
        } else {
            $total = 10;
        }
    } else {
        header('location: index.php');
    }
    return $total;
}
