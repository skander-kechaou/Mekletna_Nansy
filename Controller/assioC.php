<?php
require_once('../config.php');

class AssioC {
    public function listassio() {
        $sql = "SELECT * FROM association";
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
    
    public function showassio() {
        $sql = "SELECT * FROM association WHERE id_association=".$ida;
        $db = config::getConnexion();
        try {
            $assio = $db->prepare($sql);
            $query->execute();
            $assio=$query->fetch();
            return $assio;
        }
        catch (Exception $e) {
            $e->getMessage();
        }
    }
    // Show details (id) in the URL at the bottom of the page

    public function addassio($assio,$id) {
        $sql = "INSERT INTO association VALUES
        (NULL, :na, :mla, :pha,:loc, ?)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'na' => $assio->getname_assio(),
                'mla' => $assio->getmail(),
                'pha' => $assio->getphone(),
                'loc' => $assio->getlocation(),
                $id 
            ]);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    // Add a client 

    public function deleteassio($ida)
    {
        $sql = "DELETE FROM association WHERE id_association = :ida";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':ida', $ida);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    // Delete a client 

    function updateassio($assio, $ida)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE assio SET 
                    name_assio = :name_assio, 
                    mail = :mail,
                    phone = :phone,
                    president = :president
                WHERE id_association= :id_association'
            );
            $query->execute([
                'ida' => $assio->getid_association(),
                'name_assio' => $assio->getname_assio(),
                'mail' => $assio->getmail(),
                'phone' => $assio->getphone(),
                'president'=> $assio-> getpresident()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}