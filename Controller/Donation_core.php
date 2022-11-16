<?PHP
include "../config.php";
include "../connection.php";
class Donationcore 
{
function afficheDonation ($Donation)
    {
		echo "id_Menu: ".$Donation->getid_Menu()."<br>";
		echo "id_Assio: ".$Donation->getid_Assio()."<br>";
        echo "Date_Donation: ".$Donation->getDate_Donation()."<br>";
        echo "id_Donation: ".$Donation->getid_Donation()."<br>";
        echo "reason: ".$Donation->getreason()."<br>";
        echo "mail: ".$Donation->get_mail()."<br>";
        echo "reason: ".$Donation->get_name()."<br>";
	}
	
function ajouterDonation($Donation)
    {
		$sql="insert into Donation (id_Menu,id_Assio,Date_Donation,reason,Name_Assio,id_Donation) values (:idMenu, :idAssio,:DateDonation,:reason0,:Name_Assio,:id_Donation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $id_Menu=$Donation->getid_Menu();
        $id_Assio=$Donation->getid_Assio();
        $Date_Donation=date("Y-m-d") ;
        $id_Donation=$Donation->getid_Donation();
        $reason=$Donation->getreason();
		$req->bindValue(':idMenu',$id_Menu);
		$req->bindValue(':id_Assio',$id_Assio);
        $req->bindValue(':DateDonation',$Date_Donation);
        $req->bindValue(':reason0',$reason);

		
            $req->execute();
           
        }
            catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
    function afficherDonation()
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
    
    function supprimerDonation($id_Donation)
    {
		$sql="DELETE FROM Donation where id_Donation= :id_Donation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_Donation',$id_Donation);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
	function modifierDonation($Donation,$id_Donation){
		$sql="UPDATE Donation SET id_Menu=:id_Menu0, id_Assio=:id_Assio, Date_Donation=:Date_Donation WHERE id_Menu=:id_Menu";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$id_Menu0=$Donation->getid_Menu();
        $id_Assio=$Donation->getid_Assio();
        $Date_Donation=$Donation->getDate_Donation();
		$datas = array(':id_Menu0'=>$id_Menu0, ':id_Assio'=>$id_Assio,':Date_Donation'=>$Date_Donation, ':id_Donation'=>$id_Donation);
		$req->bindValue(':id_Menu0',$id_Menu0);
		$req->bindValue(':id_Assio',$id_Assio);
        $req->bindValue(':Date_Donation',$Date_Donation);
		
		
            $s=$req->execute();
			

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    
    function recupererDonation($id_Donation)
    {
		$sql="SELECT * from Donation where id_Donation=$id_Donation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
    function rechercherlisteDonation($id_Donation)
    {
		$sql="SELECT * from Donation where id_Donation=$id_Donation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    

}

?>