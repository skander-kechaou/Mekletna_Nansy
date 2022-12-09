<?php

include '../Controller/basketC.php';
include '../Model/basket.php';

$error = "";

$basket = null;

$basketC = new basketC();
if (
    isset($_POST["idBasket"]) &&
    isset($_POST["nameOrder"]) &&
    isset($_POST["idClient"]) &&
    isset($_POST["priceOrder"]) &&
    isset($_POST["dateOrder"]) &&
    isset($_POST["idOrder"]) &&
    isset($_POST["statusOrder"]) &&
    isset($_POST["idProduct"]) 
) {
    if (
        !empty($_POST["idBasket"]) &&
        !empty($_POST["nameOrder"]) &&
        !empty($_POST["idClient"]) &&
        !empty($_POST["priceOrder"]) &&
        !empty($_POST["dateOrder"]) &&
        !empty($_POST["idOrder"]) &&
        !empty($_POST["statusOrder"]) &&
        !empty($_POST["idProduct"]) 
       
    ) {
        $basket = new basket(
            null,
            $_POST["idBasket"],
            $_POST["nameOrder"],
            $_POST["idClient"], 
            $_POST["priceOrder"],
            new DateTime($_POST["dateOrder"]),
            $_POST["idOrder"],
            $_POST["statusOrder"],
            $_POST["idProduct"]
        );
        $basketC->updateBasket($basket, $_POST["idBasket"]);
        header('Location:listBasket.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Display</title>
</head>

<body>
    <button><a href="ListBasket.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idBasket'])) {
        $basket = $basketC->showBasket($_POST['idBasket']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
            <tr>
                <td>
                    <label for="idBasket">Id Basket:
                    </label>
                </td>
                <td><input type="number" name="idBasket" id="idBasket" value="<?php echo $basket['idBasket']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="idProduct">id Product:
                    </label>
                </td>
                <td><input type="number" name="idProduct" id="idProduct" value="<?php echo $baskett['idProduct']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="nameOrder">name Order:
                    </label>
                </td>
                <td><input type="text" name="nameOrder" id="nameOrder" value="<?php echo $basket['nameOrder']; ?>" maxlength="20"></td>
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