<?php
include '../controller/Donation_core.php';
$Donation_core = new donation_c();
$list = $Donation_core->listDonation();
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
            <th>Id association</th>
            <th>Id menu</th>
            <th>Date of Command</th>
            <th>location </th>
            <th>Reason</th>
        </tr>
        <?php
        foreach ($list as $Donation) {
        ?>
            <tr>
                <td><?= $Donation['id_donation']; ?></td>
                <td><?= $Donation['id_association']; ?></td>
                <td><?= $Donation['id_menu']; ?></td>
                <td><?= $Donation['location']; ?></td>
                <td><?= $Donation['id_menu']; ?></td>
                <td><?= $Donation['reason']; ?></td>
                <td align="center">
                    <form method="POST" action="updateDonation.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Donation['id_donation']; ?> name="id_donation">
                    </form>
                </td>
                <td>
                    <a href="deleteDonation.php?id_Donation=<?php echo $Donation['id_donation']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>