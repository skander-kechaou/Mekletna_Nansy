<?php

include '../Controller/Donation_core.php';

$error = "";

$Don = null;

$Donation_core = new Don();
if (
    isset($_POST["idMenu"]) &&
    isset($_POST["id_Assio"]) &&
    isset($_POST["id_Donation"]) &&
    isset($_POST["location"]) &&
    isset($_POST["Date_Commande"]) &&
    isset($_POST["reason"])
) {
    if (
        !empty($_POST["idMenu"]) &&
        !empty($_POST["id_Assio"]) &&
        !empty($_POST["id_Donation"]) &&
        !empty($_POST["location"]) &&
        !empty($_POST["Date_Commande"]) &&
        !empty($_POST["reason"])
    ) {
        $Donation = new Don(
            null,
            $_POST["idMenu"],
            $_POST["id_Assio"],
            $_POST["id_Donation"], 
            $_POST["location"],
            new DateTime($_POST["Date_Commande"]),
            $_POST["reason"]
        );
        $Donation_core->addDonation($Donation);
        header('Location:listDonation.php');
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
    <a href="listDonation.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="id_donation">ID donation:
                    </label>
                </td>
                <td><input type="text" name="idDonation" id="idDonation" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="id_menu">menu item:
                    </label>
                </td>
                <td><input type="text" name="id_menu" id="id_menu" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="id_association">association:
                    </label>
                </td>
                <td><input type="text" name="id_association" id="id_association" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="reason">reason:
                    </label>
                </td>
                <td><input type="text" name="reason" id="reason" maxlength="20"></td>
            </tr>


            <tr>
                <td>
                    <label for="location">location:
                    </label>
                </td>
                <td>
                    <input type="text" name="location" id="location " maxlength="200">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Date_Commande">Date:
                    </label>
                </td>
                <td>
                    <input type="date" name="Date_Commande" id="Date_Commande">
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