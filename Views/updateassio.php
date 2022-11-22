<?php

include '../controller/assioC.php';

$error = "";

// create client
$assio = null;

// create an instance of the controller
$assioC = new AssioC();
if (
    isset($_POST["id_association"])&&
    isset($_POST["name_assio"]) &&
    isset($_POST["mail"]) &&
    isset($_POST["phone"]) &&
    isset($_POST["president"]) 
) {
    if (
        !empty($_POST["id_association"])&&
        !empty($_POST["name_assio"]) &&
        !empty($_POST["mail"]) &&
        !empty($_POST["phone"]) &&
        !empty($_POST["president"]) 
    ) {
        $assio = new Assio(
            $_POST["id_association"],
            $_POST["name_assio"],
            $_POST["mail"],
            $_POST["phone"], 
            $_POST["president"]
        );
        $assioC->updateassio($assio, $_POST["id_association"]);
        header('Location:listassio.php');
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
    <button><a href="listassio.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_association'])) {
        $assio = $assioC->showassio($_POST['id_association']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idClient">id_association:
                        </label>
                    </td>
                    <td><input type="text" name="id_association" id="id_association" value="<?php echo $assio['id_association']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="name_assio">name_assio:
                        </label>
                    </td>
                    <td><input type="text" name="name_assio" id="name_assio" value="<?php echo $assio['name_assio']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="mail">mail:
                        </label>
                    </td>
                    <td><input type="text" name="mail" id="mail" value="<?php echo $assio['mail']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">phone:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="phone" value="<?php echo $assio['phone']; ?>" id="phone">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="number">president:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="president" id="president" value="<?php echo $assio['president']; ?>">
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