<?php

include '../Controller/RegionC.php';

$error = "";

// create region
$region= null;

// create an instance of the controller
$regionC = new RegionC();
if ((
    isset($_POST["id_region"]) &&
    isset($_POST["name_region"]) &&
    isset($_POST["nb_people"]) 

) &&(
    !empty($_POST["id_region"]) &&
        !empty($_POST["name_region"]) &&
        !empty($_POST["nb_people"]) 
    ) ){
     
        $region = new region(
            $_POST['id_region'],
            $_POST['name_region'],
            $_POST['nb_people'],
        );
        $regionC->updateRegion($region, $_POST["id_region"]);
        header('Location:listRegions.php');
    
    } 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Region Display</title>
</head>

<body>
    <button><a href="listRegions.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
    <?php
    if (isset($_POST['id_region'])) {
        $region = $regionC->showRegion($_POST['id_region']);

    ?>
        <form action="" method="POST">

            <table border="1" align="center">
                 
            <tr>
                    <td>
                        <label for="id_region"> id region:
                        </label>
                    </td>
                    <td><input type="text" name="id_region" id="id_region" value="<?php echo $region['id_region']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="name_region"> Name:
                        </label>
                    </td>
                    <td><input type="text" name="name_region" id="name_region" value="<?php echo $region['name_region']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nb_people">nb people:
                        </label>
                    </td>
                    <td><input type="text" name="nb_people" id="nb_people" value="<?php echo $region['nb_people']; ?>" maxlength="20"></td>
                </tr>
        
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
