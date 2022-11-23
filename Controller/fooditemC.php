<?PHP
include "fooditem.php";
class fooditemC 
{

    
    function displayfooditem ($fooditem)
    {
		echo "idfooditem: ".$fooditem->getidfooditem()."<br>";
		echo "Namefooditem: ".$fooditem->getNamefooditem()."<br>";
		echo "Pricefooditem: ".$fooditem->getPricefooditem()."<br>";

	}
	
    function addfooditem($fooditem)
    {
		$sql="insert into fooditem (idfooditem,Namefooditem,Pricefooditem) values (:idfooditem, :Namefooditem0, :Pricefooditem)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $idfooditem=$fooditem->getidfooditem();
        $Namefooditem=$fooditem->getNamefooditem();
        $Pricefooditem=$fooditem->getPricefooditem();
		$req->bindValue(':idfooditem',$idfooditem);
		$req->bindValue(':Namefooditem0',$Namefooditem);
		$req->bindValue(':Pricefooditem',$Pricefooditem);
		

		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
    function displayfooditem()
    {
		$sql="SElECT * From fooditem";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    
    
    
    
    function retrievefooditem($idfooditem)
    {
		$sql="SELECT * from fooditem where idfooditem=$idfooditem";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
    function searchlistefooditem($idfooditem)
    {
		$sql="SELECT * from fooditem where idfooditem=$idfooditem";
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