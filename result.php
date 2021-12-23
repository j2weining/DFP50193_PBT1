<?php
require 'function.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <h1>Result</h1>
    <form method="post" action="index.php">
        <table border="1">
            <tr>
                <td>Services</td>
                <td>Price</td>
                <td>Select Option</td>
                <td>Additional Services</td>
                <td>Price</td>
                <td>Select Option</td>
            </tr>
            <tr>
                <td>Hair Cut</td>
                <td>RM 10.00</td>
                <td><input type="radio" name="service" value="haircut" <?php if($service == 'haircut') echo " checked";?>></td>
                <td>Hair Wash</td>
                <td>RM 5.00</td>
                <td><input type="radio" name="addservice" value="wash" <?php if($addservice == 'wash') echo " checked";?>></td>
            </tr>
            <tr>
                <td rowspan="2">Hair Treatment</td>
                <td rowspan="2">RM 20.00</td>
                <td rowspan="2"><input type="radio" name="service" value="hairtreatment" <?php if($service == 'hairtreatment') echo " checked";?>></td>
                <td>Moisture Treatment</td>
                <td>RM 5.00</td>
                <td><input type="radio" name="addservice" value="moisture" <?php if($addservice == 'moisture') echo " checked";?>></td>
            </tr>
            <tr>
                <td>Relax Treatment</td>
                <td>RM 5.00</td>
                <td><input type="radio" name="addservice" value="relax" <?php if($addservice == 'relax') echo " checked";?>></td>
            </tr>
            <tr>
                <td>Hair Dye</td>
                <td>RM 50.00</td>
                <td><input type="radio" name="service" value="hairdye" <?php if($service == 'hairdye') echo " checked";?>></td>
                <td>Hair Bleach</td>
                <td>RM 20.00</td>
                <td><input type="radio" name="addservice" value="hairbleach" <?php if($addservice == 'hairbleach') echo " checked";?>></td>
            </tr>
            <tr>
                <td colspan="6">Total Price</td>
            </tr>
            <tr>
                <td colspan="6">RM<?php echo $total; ?></td>
            </tr>
            <tr>
                <td colspan="6">
                    <button type="submit">Back</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>