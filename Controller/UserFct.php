<?php
include '../config.php';
include '../Model/user.php'

class User {
    public function listClients() {
        $sql = "SELECT * FROM Client";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list
        } 
        catch(Exception $e) {
            $e->getMessage();
        }
    }
    // List all clients
    
    public function showDetails() {
        $sql = "SELECT * FROM Client WHERE idClient=".$id;
        $db = config::getConnexion();
        try {
            $Client = $db->prepare($sql);
            $query->execute();
            $client=$query->fetch();
            return $client;
        }
        catch (Exception $e) {
            $e->getMessage();
        }
    }
    // Show details (id) in the URL at the bottom of the page

    public function addClient($Client) {
        $sql = "INSERT INTO Client VALUES
        (NULL, :fn, :ln, :pn, :ml, :pw, :bd, :pc, :rg, :a)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $Client->getFirstName(),
                'ln' => $Client->getLastName(),
                'pn' => $Client->getPhoneNumber(),
                'ml' => $Client->getMail(),
                'pw' => $Client->getPassword(),
                'bd' => $Client->getBirthdate()->format("Y-m-d"),
                'pc' => $Client->getPostal(),
                'rg' => $Client->getRegion(),
                'a' => $Client->getAddress(),
            ]);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    // Add a client 

    public function deleteClient($id)
    {
        $sql = "DELETE FROM Client WHERE idClient = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    // Delete a client 

    function updateClient($Client, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Client SET 
                    fnameClient = :fnameClient, 
                    lnameClient = :lnameClient,
                    pnbClient = :pnbClient,
                    mailClient = :mailClient,
                    pwdClient = :pwdClient,
                    bdayClient = :bdayClient,
                    pcodeClient = :pcodeClient,
                    regionClient = :regionClient,
                    addressClient = :addressClient, 
                WHERE idClient= :idClient'
            );
            $query->execute([
                'id' => $Client->getIdClient(),
                'fnameClient' => $Client->getFirstName(),
                'lnameClient' => $Client->getLastName(),
                'pnbClient' => $Client->getPhoneNumber(),
                'mailClient' => $Client->getMail(),
                'pwdClient' => $Client->getPassword(),
                'bdayClient' => $Client->getBirthdate()->format("Y-m-d"),
                'pcodeClient' => $Client->getPostal(),
                'regionClient' => $Client->getRegion(),
                'addressClient' => $Client->getAddress(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}