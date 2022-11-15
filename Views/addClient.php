<?php

include '../Controller/UserFct.php';

$error = "";

$client = null;

$UserFct = new UserFct();
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
        $UserFct->addClient($client);
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
    <a href="listClients.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="idClient">ID:
                    </label>
                </td>
                <td><input type="number" name="idClient" id="idClient" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="fnameClient">First Name:
                    </label>
                </td>
                <td><input type="text" name="fnameClient" id="fnameClient" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="lnameClient">Last Name:
                    </label>
                </td>
                <td><input type="text" name="lnameClient" id="lnameClient" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="pnbClient">Phone Number:
                    </label>
                </td>
                <td><input type="number" name="pnbClient" id="pnbClient" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="mailClient">E-mail Address:
                    </label>
                </td>
                <td><input type="text" name="mailClient" id="mailClient" maxlength="20"></td>
            </tr>
            <tr>

            <tr>
                <td>
                    <label for="pwdClient">Password:
                    </label>
                </td>
                <td><input type="password" name="pwdClient" id="pwdClient" maxlength="20"></td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="bdayClient">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="date" name="bdayClient" id="bdayClient">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pcodeClient">Postal Code:
                    </label>
                </td>
                <td>
                    <input type="number" name="pcodeClient" id="pcodeClient">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="regionClient">Region:
                    </label>
                </td>
                <td>
                    <input type="text" name="regionClient" id="regionClient">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="addressClient">Address:
                    </label>
                </td>
                <td>
                    <input type="text" name="addressClient" id="addressClient">
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