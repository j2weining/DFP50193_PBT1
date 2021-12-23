<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Garden Salon</title>
</head>

<body>
    <h1>Hair Garden Salon</h1>
    <p></p>
    <form method="post" action="result.php">
        <table border="1">
            <tr>
                <td>Services</td>
                <td>Price</td>
                <td>Select Option</td>
            </tr>
            <tr>
                <td>Hair Cut</td>
                <td>RM 10.00</td>
                <td><input type="radio" name="haircut"></td>

            </tr>
            <tr>
                <td>Hair Wash</td>
                <td>RM 5.00</td>
                <td><input type="radio" name="hairwash"></td>

            </tr>
            <tr>
                <td>Hair Treatment</td>
                <td>RM 20.00</td>
                <td><input type="radio" name="hairtreatment"></td>

            </tr>
            <tr>
                <td>Hair Dye</td>
                <td>RM 50.00</td>
                <td><input type="radio" name="hairdye"></td>
         
            </tr>
            <tr>
                <td>Additional Services</td>
                <td>Price</td>
                <td>Select Option</td>
            </tr>
            <tr>
                <td colspan="5">
                    <button type="submit">Pay</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>