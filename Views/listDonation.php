<?php
include '../Controller/Donation_core.php';
$Donation_core = new Don();
$list = $Donation_core->listDon();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Donation</h1>
        <h2>
            <a href="addDonation.php">Add Donation</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Donation</th>
            <th>Assiociation Name</th>
            <th>Id menu</th>
            <th>Date of Command</th>
            <th>Id_Assiociaton </th>
            <th>Mail</th>
            <th>Reason</th>
        </tr>
        <?php
        foreach ($list as $Donation) {
        ?>
            <tr>
                <td><?= $Donation['id_Donation']; ?></td>
                <td><?= $Donation['Name_Association']; ?></td>
                <td><?= $Donation['id_Assio']; ?></td>
                <td><?= $Donation['Add_Donation']; ?></td>
                <td><?= $Donation['mail']; ?></td>
                <td><?= $Donation['id_menu']; ?></td>
                <td><?= $Donation['reason']; ?></td>
                <td align="center">
                    <form method="POST" action="updateDonation.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Donation['id_Donation']; ?> name="id_Donation">
                    </form>
                </td>
                <td>
                    <a href="deleteDonation.php?id_Donation=<?php echo $Donation['id_Donation']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>