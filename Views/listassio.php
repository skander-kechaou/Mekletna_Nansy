<?php
include '../controller/assioC.php';
$assioC = new AssioC();
$list = $assioC->listassio();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of associations</h1>
        <h2>
            <a href="addassio.php">Add assocaition</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>id assocation</th>
            <th>name_assio</th>
            <th>mail</th>
            <th>phone</th>
            <th>president</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $assio) {
        ?>
            <tr>
                <td><?= $assio['id_association']; ?></td>
                <td><?= $assio['name_assio']; ?></td>
                <td><?= $assio['mail']; ?></td>
                <td><?= $assio['phone']; ?></td>
                <td><?= $assio['president']; ?></td>
                <td align="center">
                    <form method="POST" action="updateassio.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $assio['id_association']; ?> name="id_association">
                    </form>
                </td>
                <td>
                    <a href="deleteassio.php?id_association=<?php echo $assio['id_association']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>