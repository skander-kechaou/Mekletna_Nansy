<?php
include '../config.php';

class ClientC {
    public function listClients() {
        $sql = "SELECT * FROM Client";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } 
        catch(Exception $e) {
            $e->getMessage();
        }
    }
    // List all clients
    
    public function showClients($id) {
        $sql = "SELECT * FROM Client WHERE idClient=".$id;
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
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

    public function updateClient($Client, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Client SET 
                    idClient = :idClient,
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
                'idClient' => $id,
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

    public function resetPassword($newPwdHash, $tokenEmail){
        $this->db->query('UPDATE Client SET pwdClient=:pwd WHERE mailClient=:email');
        $this->db->bind(':pwd', $newPwdHash);
        $this->db->bind(':email', $tokenEmail);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function SortAlpha (){
        $sql = "SELECT * FROM client ORDER BY fnameClient";
        $db  = config ::getConnexion();
        try {
         $list = $db->query($sql);
         return $list;
        }
    
    catch (Exception $e){
        echo($e->getMessage());
    }
    }

}