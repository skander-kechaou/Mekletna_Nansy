<?php

include '../controller/Donation_core.php';

$error = "";

// create Donation
$Donation = null;

// create an instance of the controller
$Donation = new donation_c();
if (
    isset($_POST["id_donation"]) &&
    isset($_POST["id_menu"]) &&
    isset($_POST["id_association"]) &&
    isset($_POST["date"])&&
    isset($_POST["reason"])&&
    isset($_POST["location"])
) {
    if (
        !empty($_POST["id_donation"]) &&
        !empty($_POST['location']) &&
        !empty($_POST["id_menu"]) &&
        !empty($_POST["id_association"]) &&
        !empty($_POST["date"])&&
        !empty($_POST["reason"])
        ) {
        $Donation = new Donation(
            $_POST['id_donation'],
            $_POST['location'],
            $_POST['id_menu'],
            $_POST['id_association'],
            $_POST['reason'],
            $_POST['date']
        );
        $Donation_core->updateDonation($Donation, $_POST["id_donation"]);
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
    <button><a href="listDonation.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST[''])) {
        $donation = $donation_core->showDonation($_POST['id_donation']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idClient">Id Client:
                        </label>
                    </td>
                    <td><input type="text" name="idClient" id="idClient" value="<?php echo $client['idClient']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="firstName">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstName" id="firstName" value="<?php echo $client['firstName']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastName">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastName" id="lastName" value="<?php echo $client['lastName']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $client['address']; ?>" id="address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">Date of Birth:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="dob" value="<?php echo $client['dob']; ?>">
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