<?PHP
include "../config.php";
include '../Model/menu.php';
class MenuC
{
function listMenu ()
    {
		$sql = "SELECT * FROM Menu";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } 
        catch(Exception $e) {
            $e->getMessage();
        }
	}
	
	function addMenu($Menu){
		$sql="insert into Menu (idMenu,itemsMenu,priceMenu,priceMenu,chefMenu,regionMenu) values (:idProduit, :itemsMenu0,:priceMenu,:priceMenu0,:chefMenu,:regionMenu0)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $idMenu=$Menu->getidMenu();
        $itemsMenu=$Menu->getitemsMenu();
        $priceMenu=$Menu->getpriceMenu();
        $chefMenu=$Menu->getchefMenu();
        $regionMenu=$Menu->getregionMenu();
		$req->bindValue(':idMenu',$idMenu);
		$req->bindValue(':itemsMenu0',$itemsMenu);
		$req->bindValue(':priceMenu',$priceMenu);
        $req->bindValue(':chefMenu',$chefMenu);
        $req->bindValue(':regionMenu',$regionMenu);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'error: '.$e->getMessage();
        }
		
	}
    
    function deleteMenu($idMenu)
    {
		$sql="DELETE FROM Menu where idMenu= :idMenu";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idMenu',$idMenu);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }
    
	function updateMenu($Menu,$idMenu){
		$sql="UPDATE Menu SET idMenu=:idMenu0,regionMenu=:regionMenu, itemsMenu=:itemsMenu, priceMenu=:priceMenu, chefMenu=:chefMenu WHERE idMenu=:idMenu";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idMenu0=$Menu->getidMenu();
        $itemsMenu=$Menu->getitemsMenu();
        $priceMenu=$Menu->getpriceMenu();
        $regionMenu=$Menu->getregionMenu();
        $chefMenu=$Menu->getchefMenu();
		$datas = array(':idMenu0'=>$idMenu0, ':itemsMenu'=>$itemsMenu, ':regionMenu'=>$regionMenu, ':priceMenu'=>$priceMenu,':chefMenu'=>$chefMenu, ':idMenu'=>$idMenu);
		$req->bindValue(':idMenu0',$idMenu0);
		$req->bindValue(':itemsMenu',$itemsMenu);
		$req->bindValue(':priceMenu',$priceMenu);
		$req->bindValue(':regionMenu',$regionMenu);
        $req->bindValue(':chefMenu',$chefMenu);
		
		
            $s=$req->execute();
			

        }
        catch (Exception $e){
            echo " error ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    
    
}