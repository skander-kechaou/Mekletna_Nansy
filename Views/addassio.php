

<?php

include '../controller/assioC.php';

$error = "";

$assio = null;

$assioC = new AssioC();
if (
    isset($_POST["na"]) &&
    isset($_POST["mla"]) &&
    isset($_POST["pha"]) &&
    isset($_POST["pr"]) 
) {
    if (
        !empty($_POST["na"]) &&
        !empty($_POST["mla"]) &&
        !empty($_POST["pha"]) &&
        !empty($_POST["pr"]) 
    ) {
        $assio = new Assio(
            null,
            $_POST["na"],
            $_POST["mla"],
            $_POST["pha"], 
            $_POST["pr"]
        );
        $assioC->addassio($assio);
        header('Location:listassio.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Display</title>
</head>

<body>
    <a href="listassio.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="na">name assiociation :
                    </label>
                </td>
                <td><input type="text" name="na" id="na" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="mla">mla:
                    </label>
                </td>
                <td><input type="text" name="mla" id="mla" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="pha">pha:
                    </label>
                </td>
                <td><input type="text" name="pha" id="pha" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="pr">pr:
                    </label>
                </td>
                <td><input type="text" name="pr" id="pr" maxlength="50"></td>
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