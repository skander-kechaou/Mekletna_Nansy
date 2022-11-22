<?PHP
include "../config.php";
include "../model/Donation.php";
class Donation_c 
{
    function addDonation($Donation)
    {
        $sql = "INSERT INTO donation VALUES (NULL, :id_association,:id_menu, :id_donation,:reason,:location,:date)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_donation' => $Donation->getid_Donation(),
                'id_menu' => $Donation->getid_menu(),
                'reason'=> $Donation->get_reason(),
                'id_association' => $Donation->getid_assiociation(),
                'date' => $Donation->getdate()->format('Y-m-d'),
                'location' => $Donation->get_location()
              
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
	
    function listDonation()
    {
		$sql="SElECT * From Donation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function deleteDonation($id_donation)
    {
		$sql="DELETE FROM donation where id_donation= :id_donation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_donation',$id_donation);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function updatedonation($donation, $id_donation)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE donation SET 
                    id_association = :id_association, 
                    id_menu = :id_menu,
                    date = :date,
                    location = :location,
                    reason =:reason
                WHERE id_donation= :id_donation'
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
    
    function showDonation($id_donation)
    {
		$sql="SELECT * from Donation where id_donation=$id_donation";
		$db = config::getConnexion();
		try{
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
}

?>