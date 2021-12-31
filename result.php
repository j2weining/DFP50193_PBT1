<?php
require 'function.php';
$total = calculatetotal($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>

<body>
    <h1>Hair Garden Salon</h1>
    <p>Address: 6A, Jalan Khaya 1, Taman Khaya, 06010, Changlun, Kedah</p>
    <form method="post" action="index.php">
        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <td id="title">Services</td>
                <td id="tablebg"><?php echo $service?></td>
            </tr>
            <tr>
                <td id="title">Additional Services</td>
                <td id="tablebg"><?php echo $hairwash . ' ' . $moisture . ' '. $relax . ' ' . $hairbleach;?></td>
            </tr>
            <tr>

            </tr>

            <tr>
                <td id="title2">Total Price</td>
                <td id="tablebg">RM<?php echo $total; ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="back">Back</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>