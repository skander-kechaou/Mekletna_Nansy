<?php
include '../config.php';

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

    public function add($Client) {
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

    public
}