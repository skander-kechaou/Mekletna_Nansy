<?php
include '../Controller/ChefC.php';
$chefC = new ChefC();
$list = $chefC->listChefs();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of chefs</h1>
        <h2>
            <a href="addChef.php">Add Chef</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Chef</th>
            <th>Chef Name</th>
            <th>Address Chef</th>
            <th>Date of Birth</th>
            <th>Phone </th>
            <th>Mail</th>
            <th>Cv</th>
        </tr>
        <?php
        foreach ($list as $chef) {
        ?>
            <tr>
                <td><?= $client['id_chef']; ?></td>
                <td><?= $client['Name_chef']; ?></td>
                <td><?= $client['firstName']; ?></td>
                <td><?= $client['Add_chef']; ?></td>
                <td><?= $client['mail_chef']; ?></td>
                <td><?= $client['Phone']; ?></td>
                <td><?= $client['Date_Birth']; ?></td>
                <td><?= $client['Cv']; ?></td>
                <td align="center">
                    <form method="POST" action="updateChef.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $client['id_chef']; ?> name="id_chef">
                    </form>
                </td>
                <td>
                    <a href="deleteChef.php?id_chef=<?php echo $client['id_chef']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>