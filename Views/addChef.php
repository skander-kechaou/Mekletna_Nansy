<?php
// review the add chef
include '../Controller/ChefC.php';
include '../Model/chef.php';

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
    //put the ids in the form
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
           null,
            $_POST["id_chef"],
            $_POST["Name_chef"],
            $_POST["Add_chef"],
            $_POST["mail_chef"],
            $_POST["Phone"],
            $_POST["Cv"],
            new DateTime($_POST["Date_Birth"])
        );
        $chefC->addChef($chef);
        header('Location:listChefs.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Display</title>
</head>

<body>
    <a href="listChefs.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="Name_chef">Name Chef:
                    </label>
                </td>
                <td><input type="text" name="Name_chef" id="Name_chef" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="Add_chef">Address Chef:
                    </label>
                </td>
                <td><input type="text" name="Add_chef" id="Add_chef" ></td>
            </tr>
            <tr>
                <td>
                    <label for="mail_chef">Mail Chef:
                    </label>
                </td>
                <td>
                    <input type="text" name="mail_chef" id="mail_chef">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Phone">Phone Chef:
                    </label>
                </td>
                <td>
                    <input type="number" name="Phone" id="Phone">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Cv">Cv Chef:
                    </label>
                </td>
                <td>
                    <input type="text" name="Cv" id="Cv">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="Date_Birth">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="date" name="Date_Birth" id="Date_Birth">
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