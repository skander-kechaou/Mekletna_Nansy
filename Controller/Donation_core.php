<?PHP
include "../config.php";
include "../connection.php";
class commandecore 
{
function affichecommande ($commande)
    {
		echo "id_Menu: ".$commande->getid_Menu()."<br>";
		echo "id_Assio: ".$commande->getid_Assio()."<br>";
        echo "Date_Commande: ".$commande->getDate_Commande()."<br>";
        echo "id_Donation: ".$commande->getid_Donation()."<br>";
        echo "reason: ".$commande->getreason()."<br>";

	}
	
	function ajoutercommande($commande){
		$sql="insert into commande (id_Menu,id_Assio,Date_Commande,reason) values (:idMenu, :idAssio,:DateCommande,:reason0)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $id_Menu=$commande->getid_Menu();
        $id_Assio=$commande->getid_Assio();
        $Date_Commande=date("Y-m-d") ;
        $id_Donation=$commande->getid_Donation();
        $reason=$commande->getreason();
		$req->bindValue(':idMenu',$id_Menu);
		$req->bindValue(':id_Assio',$id_Assio);
        $req->bindValue(':DateCommande',$Date_Commande);
        $req->bindValue(':reason0',$reason);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
    function affichercommande()
    {
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function supprimercommande($id_Donation)
    {
		$sql="DELETE FROM commande where id_Donation= :id_Donation";
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
    
	function modifiercommande($commande,$id_Donation){
		$sql="UPDATE commande SET id_Menu=:id_Menu0, id_Assio=:id_Assio, Date_Commande=:Date_Commande WHERE id_Menu=:id_Menu";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$id_Menu0=$commande->getid_Menu();
        $id_Assio=$commande->getid_Assio();
        $Date_Commande=$commande->getDate_Commande();
		$datas = array(':id_Menu0'=>$id_Menu0, ':id_Assio'=>$id_Assio,':Date_Commande'=>$Date_Commande, ':id_Donation'=>$id_Donation);
		$req->bindValue(':id_Menu0',$id_Menu0);
		$req->bindValue(':id_Assio',$id_Assio);
        $req->bindValue(':Date_Commande',$Date_Commande);
		
		
            $s=$req->execute();
			

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    
    function recuperercommande($id_Donation)
    {
		$sql="SELECT * from commande where id_Donation=$id_Donation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
    function rechercherlistecommande($id_Donation)
    {
		$sql="SELECT * from commande where id_Donation=$id_Donation";
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