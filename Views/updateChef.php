<?php

include '../Controller/ChefC.php';

$error = "";

// create chef
$chef = null;

// create an instance of the controller
$chefC = new ChefC();
if (
    isset($_POST["id_chef"]) &&
    isset($_POST["Name_chef"]) &&
    isset($_POST["Add_chef"]) &&
    isset($_POST["mail_chef"])&&
    isset($_POST["Phone"])&&
    isset($_POST["Date_Birth"])&&
    isset($_POST["Cv"])
) {
    if (
        !empty($_POST["id_chef"]) &&
        !empty($_POST["Name_chef"]) &&
        !empty($_POST["Add_chef"]) &&
        !empty($_POST["mail_chef"])&&
        !empty($_POST["Phone"])&&
        !empty($_POST["Date_Birth"])&&
        !empty($_POST["Cv"])
    ) {
        $chef = new Chef(
            $_POST["id_chef"],
            $_POST["Name_chef"],
            $_POST["Add_chef"],
            $_POST["mail_chef"],
            $_POST["Date_Birth"],
            $_POST["Phone"],
            $_POST["Cv"],
            new DateTime($_POST["Date_Birth"])
        );
        $chefC->updateChef($chef, $_POST["id_chef"]);
        header('Location:listChefs.php');
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
    <button><a href="listChefs.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_chef'])) {
        $chef = $chefC->showChef($_POST['id_chef']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_chef">Id Chef:
                        </label>
                    </td>
                    <td><input type="text" name="id_chef" id="id_chef" value="<?php echo $chef['id_chef']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Name_chef"> Name:
                        </label>
                    </td>
                    <td><input type="text" name="Name_chef" id="Name_chef" value="<?php echo $chef['Name_chef']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Add_chef">Address:
                        </label>
                    </td>
                    <td><input type="text" name="Add_chef" id="Add_chef" value="<?php echo $chef['Add_chef']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="mail_chef">Mail:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="mail_chef" value="<?php echo $chef['mail_chef']; ?>" id="mail_chef">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">Date of Birth:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="Date_Birth" id="Date_Birth" value="<?php echo $chef['Date_Birthssss']; ?>">
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