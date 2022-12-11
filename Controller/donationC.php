<?php
include '../config.php';

class donationC {
    public function listdonation() {
        $sql = "SELECT * FROM donation";
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
    
    public function showdonation($idd) {
        $sql = "SELECT * FROM donation WHERE id_donation=".$idd;
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $donation=$query->fetch();
            return $donation;
        }
        catch (Exception $e) {
            $e->getMessage();
        }
    }
    // Show details (id) in the URL at the bottom of the page

    public function adddonation($donation) {
        $sql = "INSERT INTO donation VALUES
        (NULL, :idm, :d, :loc, :rea,:idc)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idm' => $donation->getid_menu(),
                'd' => $donation->getdate()->format('dd/mm/yyyy'),
                'loc' => $donation->get_location(),
                'rea' => $donation->get_reason(),
                'idc'=>$donation->get_id_client()
            ]);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    // Add a client 

    public function deletedonation($idd)
    {
        $sql = "DELETE FROM donation WHERE id_donation = :idd";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idd', $idd);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    // Delete a client 

    function updatedonation($donation, $ida)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE donation SET 
                    idc = :id_client,
                    idm = :id_menu, 
                    d = :date,
                    loc = :location,
                    rea = :reason
                WHERE id_donation= :id_donation'
            );
            $query->execute([
                'idc' => $donation->getid_client(),
                'idm' => $donation->getnameid_menu(),
                'd' => $donation->getdate(),
                'loc' => $donation->get_location(),
                'rea'=> $donation-> getreason()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function SortDonation ()
    {
        $sql = "SELECT * FROM donation ORDER BY location";
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