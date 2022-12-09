<?php

include '../Controller/UserFct.php';
include '../Model/user.php';

$error = "";

$client = null;

$clientC = new ClientC();
if (
    isset($_GET["idClient"]) &&
    isset($_GET["fnameClient"]) &&
    isset($_GET["lnameClient"]) &&
    isset($_GET["pnbClient"]) &&
    isset($_GET["mailClient"]) &&
    isset($_GET["pwdClient"]) &&
    isset($_GET["bdayClient"]) &&
    isset($_GET["pcodeClient"]) &&
    isset($_GET["regionClient"]) &&
    isset($_GET["addressClient"])
) {
    if (
        !empty($_GET["idClient"]) &&
        !empty($_GET["fnameClient"]) &&
        !empty($_GET["lnameClient"]) &&
        !empty($_GET["pnbClient"]) &&
        !empty($_GET["mailClient"]) &&
        !empty($_GET["pwdClient"]) &&
        !empty($_GET["bdayClient"]) &&
        !empty($_GET["pcodeClient"]) &&
        !empty($_GET["regionClient"]) &&
        !empty($_GET["addressClient"])
    ) {
        $client = new Client(
            $_GET["idClient"],
            $_GET["fnameClient"],
            $_GET["lnameClient"],
            $_GET["pnbClient"], 
            $_GET["mailClient"],
            $_GET["pwdClient"],
            new DateTime($_GET["bdayClient"]),
            $_GET["pcodeClient"],
            $_GET["regionClient"],
            $_GET["addressClient"]
        );
        $clientC->updateClient($client, $_GET["idClient"]);
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
    if (isset($_GET['idClient'])) {
        $client = $clientC->showClients($_GET['idClient']);

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
