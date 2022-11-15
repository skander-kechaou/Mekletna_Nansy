<?php

include '../Controller/Donation_core.php';

$error = "";

$Don = null;

$Donation_core = new Don();
if (
    isset($_POST["idMenu"]) &&
    isset($_POST["id_Assio"]) &&
    isset($_POST["id_Donation"]) &&
    isset($_POST["mail"]) &&
    isset($_POST["Name_Assio"]) &&
    isset($_POST["Date_Commande"]) &&
    isset($_POST["reason"])
) {
    if (
        !empty($_POST["idMenu"]) &&
        !empty($_POST["id_Assio"]) &&
        !empty($_POST["id_Donation"]) &&
        !empty($_POST["mail"]) &&
        !empty($_POST["Name_Assio"]) &&
        !empty($_POST["Date_Commande"]) &&
        !empty($_POST["reason"])
    ) {
        $Donation = new Don(
            null,
            $_POST["idMenu"],
            $_POST["id_Assio"],
            $_POST["id_Donation"], 
            $_POST["mail"],
            $_POST["Name_Assio"],
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
                    <label for="idDonation">ID:
                    </label>
                </td>
                <td><input type="text" name="idDonation" id="idDonation" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="idMenu">First Name:
                    </label>
                </td>
                <td><input type="text" name="idMenu" id="idMenu" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="id_Assio">Last Name:
                    </label>
                </td>
                <td><input type="text" name="id_Assio" id="id_Assio" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="id_Donation">Phone Number:
                    </label>
                </td>
                <td><input type="text" name="id_Donation" id="id_Donation" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="mail">E-mail Address:
                    </label>
                </td>
                <td><input type="text" name="mail" id="mail" maxlength="20"></td>
            </tr>
            <tr>

            <tr>
                <td>
                    <label for="reason">address:
                    </label>
                </td>
                <td>
                    <input type="text" name="reason" id="reason">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Date_Commande">Date of Birth:
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