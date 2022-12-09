<?php

include '../controller/Donation_core.php';

$error = "";

$Donation = null;

$Donation_core = new donation_c();
if (
    isset($_POST["id_menu"]) &&
    isset($_POST["id_association"]) &&
    isset($_POST["id_donation"]) &&
    isset($_POST["location"]) &&
    isset($_POST["date"]) &&
    isset($_POST["reason"])
) {
    if (
        !empty($_POST["id_menu"]) &&
        !empty($_POST["id_association"]) &&
        !empty($_POST["id_donation"]) &&
        !empty($_POST["location"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["reason"])
    ) {
        $donation = new Donation_c(
            null,
            $_POST["id_menu"],
            $_POST["id_association"],
            $_POST["id_donation"], 
            $_POST["location"],
            new DateTime($_POST["date"]),
            $_POST["reason"]
        );
        $Donation_core->addDonation($donation);
        header('Location:listDonation.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Display</title>
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
                <td><input type="text" name="id_donation" id="id_donation" maxlength="20"></td>
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
                    <label for="date">Date:
                    </label>
                </td>
                <td>
                    <input type="date" name="date" id="date">
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