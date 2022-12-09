<?php

include '../Controller/UserFct.php';
include '../Model/user.php';

$error = "";

$client = null;

$clientC = new ClientC();
if (
    isset($_POST["fnameClient"]) &&
    isset($_POST["lnameClient"]) &&
    isset($_POST["pnbClient"]) &&
    isset($_POST["mailClient"]) &&
    isset($_POST["pwdClient"]) &&
    isset($_POST["bdayClient"]) &&
    isset($_POST["pcodeClient"]) &&
    isset($_POST["regionClient"]) &&
    isset($_POST["addressClient"])
) {
    if (
        !empty($_POST["fnameClient"]) &&
        !empty($_POST["lnameClient"]) &&
        !empty($_POST["pnbClient"]) &&
        !empty($_POST["mailClient"]) &&
        !empty($_POST["pwdClient"]) &&
        !empty($_POST["bdayClient"]) &&
        !empty($_POST["pcodeClient"]) &&
        !empty($_POST["regionClient"]) &&
        !empty($_POST["addressClient"])
    ) {
        $client = new Client(
            null,
            $_POST["fnameClient"],
            $_POST["lnameClient"],
            $_POST["pnbClient"], 
            $_POST["mailClient"],
            $_POST["pwdClient"],
            new DateTime($_POST["bdayClient"]),
            $_POST["pcodeClient"],
            $_POST["regionClient"],
            $_POST["addressClient"]
        );
        $clientC->updateClient($client, $_POST["idClient"]);
        header('Location:listClients.php');
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
    <button><a href="ListClients.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idClient'])) {
        $client = $clientC->showClients($_POST['idClient']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
            <tr>
                <td>
                    <label for="fnameClient">First Name:
                    </label>
                </td>
                <td><input type="text" name="fnameClient" id="fnameClient" value="<?php echo $client['fnameClient']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="lnameClient">Last Name:
                    </label>
                </td>
                <td><input type="text" name="lnameClient" id="lnameClient" value="<?php echo $client['lnameClient']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="pnbClient">Phone Number:
                    </label>
                </td>
                <td><input type="number" name="pnbClient" id="pnbClient" value="<?php echo $client['pnbClient']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="mailClient">E-mail Address:
                    </label>
                </td>
                <td><input type="text" name="mailClient" id="mailClient" value="<?php echo $client['mailClient']; ?>" maxlength="20"></td>
            </tr>
            <tr>

            <tr>
                <td>
                    <label for="pwdClient">Password:
                    </label>
                </td>
                <td><input type="password" name="pwdClient" id="pwdClient" value="<?php echo $client['pwdClient']; ?>" maxlength="20"></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="bdayClient">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="date" name="bdayClient" id="bdayClient" value="<?php echo $client['bdayClient']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pcodeClient">Postal Code:
                    </label>
                </td>
                <td>
                    <input type="number" name="pcodeClient" id="pcodeClient" value="<?php echo $client['pcodeClient']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="regionClient">Region:
                    </label>
                </td>
                <td>
                    <input type="text" name="regionClient" id="regionClient" value="<?php echo $client['regionClient']; ?>" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="addressClient">Address:
                    </label>
                </td>
                <td>
                    <input type="text" name="addressClient" id="addressClient" value="<?php echo $client['addressClient']; ?>" >
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
