<?php

include '../Controller/menuC.php';
include '../Model/menu.php';

$error = "";

$menu = null;

$menuC = new menuC();
if (
    isset($_POST["itemsMenu"]) &&
    isset($_POST["idMenu"]) &&
    isset($_POST["priceMenu"]) &&
    isset($_POST["regionMenu"]) &&
    isset($_POST["chefMenu"]) &&
    
) {
    if (
        !empty($_POST["itemsMenu"]) &&
        !empty($_POST["idMenu"]) &&
        !empty($_POST["priceMenu"]) &&
        !empty($_POST["regionMenu"]) &&
        !empty($_POST["chefMenu"]) &&
       
    ) {
        $menu = new menu(
            null,
            $_POST["itemsMenu"],
            $_POST["idMenu"],
            $_POST["priceMenu"], 
            $_POST["regionMenu"],
            $_POST["chefMenu"],
        );
        $menuC->addmenu($menu);
        header('Location:listmenu.php');
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
    <a href="listmenu.php">Back to list </a>
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
                    <label for="itemsMenu">item:
                    </label>
                </td>
                <td><input type="text" name="itemsMenu" id="itemsMenu" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="regionMenu">region:
                    </label>
                </td>
                <td><input type="text" name="regionMenu" id="regionMenu" maxlength="20"></td>
            </tr>
            <tr>

            <tr>
                <td>
                    <label for="priceMenu">price:
                    </label>
                </td>
      <td><input type="number" name="priceMenu" id="priceMenu" maxlength="20"></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="chefMenu">chef:
                    </label>
                </td>
                <td>
                    <input type="text" name="chefMenu" id="chefMenu">
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