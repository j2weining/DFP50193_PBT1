<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hair Garden Salon</title>
</head>

<body id="body">
    <h1>Hair Garden Salon</h1>
    <p>Address: 6A, Jalan Khaya 1, Taman Khaya, 06010, Changlun, Kedah</p>
    <form method="POST" action="result.php">
        <table border="1" cellpadding="0" cellspacing="0">
            <tr id="title">
                <td id="title2">Services</td>
                <td>Price</td>
                <td>Select Option</td>
                <td id="title2">Additional Services</td>
                <td>Price</td>
                <td>Select Option</td>
            </tr>
            <tr id="tablebg">
                <td id="trcolor">Hair Cut</td>
                <td>RM 10.00</td>
                <td><input type="radio" name="service" value="Hair Cut" checked></td>
                <td id="trcolor">Hair Wash</td>
                <td>RM 5.00</td>
                <td><input type="checkbox" name="hairwash" value="Hair Wash"></td>
            </tr>
            <tr id="tablebg">
                <td rowspan="2" id="trcolor">Hair Treatment</td>
                <td rowspan="2">RM 20.00</td>
                <td rowspan="2"><input type="radio" name="service" value="Hair Treatment"></td>
                <td id="trcolor">Moisture Treatment</td>
                <td>RM 5.00</td>
                <td><input type="checkbox" name="moisture" value="Moisture Treatment"></td>
            </tr>
            <tr id="tablebg">
                <td id="trcolor">Relax Treatment</td>
                <td>RM 5.00</td>
                <td><input type="checkbox" name="relax" value="Relax Treatment"></td>
            </tr>
            <tr id="tablebg">
                <td id="trcolor">Hair Dye</td>
                <td>RM 50.00</td>
                <td><input type="radio" name="service" value="Hair Dye"></td>
                <td id="trcolor">Hair Bleach</td>
                <td>RM 20.00</td>
                <td><input type="checkbox" name="hairbleach" value="Hair Bleach"></td>
            </tr>
            <tr>
                <td colspan="6">
                    <button type="submit" class="proceed">Proceed</button>
                    <button type="reset" class="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>