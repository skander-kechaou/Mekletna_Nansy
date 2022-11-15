<?php

include '../Controller/Donation_core.php';

$error = "";

// create Donation
$Donation = null;

// create an instance of the controller
$Donation_ = new DonationC();
if (
    isset($_POST["id_Donation"]) &&
    isset($_POST["Name_Assio"]) &&
    isset($_POST["id_Menu"]) &&
    isset($_POST["id_Assio"]) &&
    isset($_POST["Date_Commande"])&&
    isset($_POST["reason"])&&
    isset($_POST["Name_Assio"])
) {
    if (
        !empty($_POST["id_Donation"]) &&
        !empty($_POST['Name_Assio']) &&
        !empty($_POST["id_Menu"]) &&
        !empty($_POST["id_Assio"]) &&
        !empty($_POST["Date_Commande"])&&
        !empty($_POST["mail"])&&
        !empty($_POST["reason"])&&
    ) {
        $Donation = new Donation(
            $_POST['id_Donation'],
            $_POST['Name_Assio'],
            $_POST['id_Menu'],
            $_POST['id_Assio'],
            $_POST['Date_Commande'],
            $_POST['mail'],
            $_POST['reason']
            new DateTime($_POST['Date_Commande'])
        );
        $Donation_core->updateDonation($Donation, $_POST["id_Donation"]);
        header('Location:ListDonations.php');
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
    <button><a href="ListDonations.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_Donation'])) {
        $Donation = $Donation_core->showDonation($_POST['id_Donation']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_Donation">Id Donation:
                        </label>
                    </td>
                    <td><input type="text" name="id_Donation" id="id_Donation" value="<?php echo $Donation['id_Donation']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Name_Assio">Name Assio:
                        </label>
                    </td>
                    <td><input type="text" name="Name_Assio" id="Name_Assio" value="<?php echo $Donation['Name_Assio']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_Menu">id menu:
                        </label>
                    </td>
                    <td><input type="text" name="id_Menu" id="id_Menu" value="<?php echo $Donation['id_Menu']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_Assio">id_Assio:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id_Assio" value="<?php echo $Donation['id_Assio']; ?>" id="id_Assio">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_Commande">Date of Commande:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="Date_Commande" id="Date_Commande" value="<?php echo $Donation['Date_Commande']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_Commande">mail:
                        </label>
                    </td>
                    <td>
                        <input type="varchar" name="mail" id="mail" value="<?php echo $Donation['mail']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Date_Commande">reason
                        </label>
                    </td>
                    <td>
                        <input type="varchar" name="reason" id="reason" value="<?php echo $Donation['reason']; ?>">
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