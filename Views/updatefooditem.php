<?php

include '../Controller/fooditemC.php';
include '../Model/fooditem.php';

$error = "";

$fooditem = null;

$fooditemC = new fooditemC();
if (
    isset($_POST["idfooditem"]) &&
    isset($_POST["Pricefooditem"]) &&
    isset($_POST["Namefooditem"]) 
) {
    if (
        !empty($_POST["idfooditem"]) &&
        !empty($_POST["Pricefooditem"]) &&
        !empty($_POST["Namefooditem"]) 
    
    ) {
        $fooditem = new fooditem(
            null,
            $_POST["idfooditem"],
            $_POST["Pricefooditem"],
            $_POST["Namefooditem"]
        );
        $fooditemC->updatefooditem($fooditem, $_POST["idfooditem"]);
        header('Location:listfooditem.php');
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
    <button><a href="Listfoodite.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idfooditem'])) {
        $fooditem = $fooditemC->showfooditem($_POST['idfooditem']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
            <tr>
                <td>
                    <label for="idfooditem">fooditem:
                    </label>
                </td>
                <td><input type="text" name="idfooditem" id="idfooditem" value="<?php echo $fooditem['idfooditem']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="pricefooditem">price fooditem:
                    </label>
                </td>
                <td><input type="text" name="Pricefooditem" id="Pricefooditem" value="<?php echo $fooditem['Pricefooditem']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="Namefooditem">name fooditem:
                    </label>
                </td>
                <td><input type="number" name="Namefooditem" id="Namefooditem" value="<?php echo $fooditem['Namefooditem']; ?>" maxlength="20"></td>
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