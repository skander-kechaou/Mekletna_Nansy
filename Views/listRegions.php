<?php
include '../Controller/RegionC.php';
$regionC = new RegionC();
$list = $regionC->listRegions();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of regions</h1>
        <h2>
            <a class="btn btn-primary" href="addRegion.php" role="button">Add Region</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id region</th>
            <th>Region Name</th>
            <th>Number People</th>
            
        </tr>
        <?php
        foreach ($list as $region) {
        ?>
            <tr>
                <td><?= $region['id_region']; ?></td>
                <td><?= $region['name_region']; ?></td>
                <td><?= $region['nb_people']; ?></td>
        
                <td align="center">
                    <form method="POST" action="updateRegion.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $region['id_region']; ?> name="id_region">
                    </form>
                </td>
                <td>
                    <a href="deleteRegion.php?id_region=<?php echo $region['id_region']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>