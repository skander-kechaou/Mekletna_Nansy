<?php

include '../Controller/orderC.php';
include '../Model/order.php';

$error = "";

$order = null;

$orderC = new orderC();
if (
    isset($_POST["idOrder"]) &&
    isset($_POST["idMenu"]) &&
    isset($_POST["idClient"]) &&
    isset($_POST["priceOrder"]) &&
    isset($_POST["statusOrder"]) &&
    isset($_POST["dateOrder"]) &&
    isset($_POST["nbOrder"]) 
    
) {
    if (
        !empty($_POST["idOrder"]) &&
        !empty($_POST["idMenu"]) &&
        !empty($_POST["idClient"]) &&
        !empty($_POST["priceOrder"]) &&
        !empty($_POST["statusOrder"]) &&
        !empty($_POST["dateOrder"]) &&
        !empty($_POST["nbOrder"]) 
       
    ) {
        $order = new order(
            null,
            $_POST["idOrder"],
            $_POST["idMenu"],
            $_POST["idClient"], 
            $_POST["priceOrder"],
            $_POST["statusOrder"],
            new DateTime($_POST["dateOrder"]),
            $_POST["nbOrder"]
            
        );
        $orderC->addOrder($order);
        header('Location:listorders.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <a href="listOrder.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            

             <tr>
                <td>
                    <label for="idMenu">Menu:
                    </label>
                </td>
                <td><input type="number" name="idMenu" id="idMenu" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="idorder">client:
                    </label>
                </td>
                <td><input type="number" name="idClient" id="idClient" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="priceOrder">Price:
                    </label>
                </td>
                <td><input type="number" name="priceOrder" id="priceOrder" maxlength="20"></td>
            </tr>
            <tr>

            <tr>
                <td>
                    <label for="statusOrder">status:
                    </label>
                </td>
      <td><input type="status" name="statusOrder" id="statusOrder" maxlength="20"></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="dateOrder">Date of Order:
                    </label>
                </td>
                <td>
                    <input type="date" name="dateOrder" id="dateOrder">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nbOrder">number Order:
                    </label>
                </td>
                <td>
                    <input type="number" name="nbOrder" id="nbOrder">
                    </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

