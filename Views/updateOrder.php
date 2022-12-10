<?php

include '../Controller/orderC.php';

$error = "";

$order = null;

$orderC = new orderC();
if (
    isset($_POST["idOrder"]) &&
    isset($_POST["idMenu"]) &&
    isset($_POST["idClient"]) &&
    isset($_POST["priceOrder"]) &&
    isset($_POST["dateOrder"]) &&
    isset($_POST["statusOrder"]) 
) {
    if (
        !empty($_POST["idOrder"]) &&
        !empty($_POST["idMenu"]) &&
        !empty($_POST["idClient"]) &&
        !empty($_POST["priceOrder"]) &&
        !empty($_POST["dateOrder"]) &&
        !empty($_POST["statusOrder"]) 
       
    ) {
        $order = new order(
            null,
            $_POST["idOrder"],
            $_POST["idMenu"], 
            $_POST["idClient"],
            new DateTime($_POST["dateOrder"]),
            $_POST["priceOrder"],
            $_POST["statusOrder"]
        );
        $orderC->updateOrder($order, $_POST["idOrder"]);
        header('Location:listOrder.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Display</title>
</head>

<body>
    <button><a href="ListOrder.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idOrder'])) {
        $order = $orderC->showOrder($_POST['idOrder']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
            <tr>
                <td>
                    <label for="idOrder">Id Order:
                    </label>
                </td>
                <td><input type="number" name="idOrder" id="idOrder" value="<?php echo $order['idOrder']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="idMenu">id Menu:
                    </label>
                </td>
                <td><input type="number" name="idProduct" id="idProduct" value="<?php echo $order['idProduct']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="priceOrder">Price Order:
                    </label>
                </td>
                <td><input type="price" name="priceOrder" id="priceOrder" value="<?php echo $order['priceOrder']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="idClient">ID CLIENT:
                    </label>
                </td>
                <td><input type="number" name="idClient" id="idClient" value="<?php echo $basket['idClient']; ?>" maxlength="20"></td>
            </tr>
            <tr>

            <tr>
                <td>
                    <label for="priceOrder">Price Order:
                    </label>
                </td>
                <td><input type="number" name="priceOrder" id="priceOrder" value="<?php echo $basket['priceOrder']; ?>" maxlength="20"></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="dateOrder">Date order:
                    </label>
                </td>
                <td>
                    <input type="date" name="dateOrder" id="dateOrder" value="<?php echo $basket['dateOrder']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="idOrder">id order:
                    </label>
                </td>
                <td>
                    <input type="number" name="idOrder" id="idOrder" value="<?php echo $basket['idOrder']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="statusOrder">status:
                    </label>
                </td>
                <td>
                    <input type="text" name="statusOrder" id="statusOrder" value="<?php echo $basket['statusOrder']; ?>" >
                </td>
            </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>