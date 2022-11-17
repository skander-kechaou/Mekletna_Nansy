<?php
include '../Controller/UserFct.php';
$clientC = new ClientC();
$list = $clientC->listClients();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of clients</h1>
        <h2>
            <a href="addClient.php">Add Client</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>E-mail</th>
            <th>Date of Birth</th>
            <th>Postal Code</th>
            <th>Region</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $client) {
        ?>
            <tr>
                <td><?= $client['idClient']; ?></td>
                <td><?= $client['fnameClient']; ?></td>
                <td><?= $client['lnameClient']; ?></td>
                <td><?= $client['pnbClient']; ?></td>
                <td><?= $client['mailClient']; ?></td>
                <td><?= $client['bdayClient']; ?></td>
                <td><?= $client['pcodeClient']; ?></td>
                <td><?= $client['regionClient']; ?></td>
                <td><?= $client['addressClient']; ?></td>
                <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $client['idClient']; ?> name="idClient">
                    </form>
                </td>
                <td>
                    <a href="deleteClient.php?idClient=<?php echo $client['idClient']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>