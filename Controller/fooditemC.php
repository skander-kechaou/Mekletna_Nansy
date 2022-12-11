<?PHP
include "../config.php";
include "../Model/fooditem.php";

class fooditemC 
{

    
    function showfooditem ($fooditem)
    {
<<<<<<< HEAD
		echo "idfooditem: ".$fooditem->getidfooditem()."<br>";
		echo "Namefooditem: ".$fooditem->getNamefooditem()."<br>";
		echo "Pricefooditem: ".$fooditem->getPricefooditem()."<br>";
=======
        $sql = "SELECT * FROM fooditem WHERE idfooditem = $idfooditem";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
>>>>>>> 35a0e6e95ce7b0154df165fbb866ae3ee0d0e7bf

	}
	
    function addfooditem($fooditem)
    {
		$sql="INSERT INTO fooditem  values (null, :Namefd, :Pricefd, :IDmen)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
            $req->execute([
        'Namefd'=>$fooditem->getNamefooditem(),
        'Pricefd'=>$fooditem->getPricefooditem(),
        'IDmen'=>$fooditem->getIDmen(),
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
    function listfooditem()
    {
		$sql="SElECT * From fooditem";
		$db = config::getConnexion();
		try{
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function deletefooditem($id)
    {
		$sql="DELETE FROM fooditem where idfooditem= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }
    
    public function SortPrice (){
        $sql = "SELECT * FROM fooditem ORDER BY Pricefooditem";
        $db  = config ::getConnexion();
        try {
         $list = $db->query($sql);
         return $list;
        }
    
    catch (Exception $e){
        echo($e->getMessage());
    }
    }
    
    
    
    // function retrievefooditem($idfooditem)
    // {
	// 	$sql="SELECT * from fooditem where idfooditem=$idfooditem";
	// 	$db = config::getConnexion();
	// 	try{
	// 	$liste=$db->query($sql);
	// 	return $liste;
	// 	}
    //     catch (Exception $e){
    //         die('Erreur: '.$e->getMessage());
    //     }
	// }
	
    // function searchlistefooditem($idfooditem)
    // {
	// 	$sql="SELECT * from fooditem where idfooditem=$idfooditem";
	// 	$db = config::getConnexion();
	// 	try{
	// 	$liste=$db->query($sql);
	// 	return $liste;
	// 	}
    //     catch (Exception $e){
    //         die('Erreur: '.$e->getMessage());
    //     }
    // }
   
}

?>