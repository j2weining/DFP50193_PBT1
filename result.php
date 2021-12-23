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
            </tr>
            <tr>
                <td>Hair Cut</td>
                <td>RM 10.00</td>
                <td><input type="radio" name="service" value="haircut" <?php if($service == 'haircut') echo " checked";?>></td>

            </tr>
            <tr>
                <td>Hair Wash</td>
                <td>RM 5.00</td>
                <td><input type="radio" name="service" value="hairwash" <?php if($service == 'hairwash') echo " checked";?>></td>

            </tr>
            <tr>
                <td>Hair Treatment</td>
                <td>RM 20.00</td>
                <td><input type="radio" name="service" value="hairtreatment" <?php if($service == 'hairtreatment') echo " checked";?>></td>

            </tr>
            <tr>
                <td>Hair Dye</td>
                <td>RM 50.00</td>
                <td><input type="radio" name="service" value="hairdye" <?php if($service == 'hairdye') echo " checked";?>></td>
         
            </tr>
            <tr>
                <td>Additional Services</td>
                <td>Price</td>
                <td>Select Option</td>
            </tr>
            <tr>
                <td colspan="3">Total Price</td>
            </tr>
            <tr>
                <td colspan="3">RM<label <?php echo $total?>></label></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Back</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>