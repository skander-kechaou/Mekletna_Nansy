<?PHP
include "C:/xampp/htdocs/CRUD/config.php";
class OrderC
{
function listOrder ()
    {
		$sql = "SELECT * FROM order";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } 
        catch(Exception $e) {
            $e->getMessage();
        }
	}
	
	function addOrder($Order){
		$sql="insert into Order (idMenu,nbOrder,idClient,priceOrder,dateOrder,statusOrder) values (:idProduit, :nbOrder0,:idClient,:priceOrder0,:DateOrder,:statusOrder0)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $idMenu=$Order->getidMenu();
        $nbOrder=$Order->getnbOrder();
        $idClient=$Order->getidClient();
        $priceOrder=$Order->getpriceOrder();
        $dateOrder=date("Y-m-d") ;
        $idOrder=$Order->getidOrder();
        $statusOrder=$Order->getstatusOrder();
		$req->bindValue(':idMenu',$idMenu);
		$req->bindValue(':nbOrder0',$nbOrder);
		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':priceOrder',$price);
        $req->bindValue(':DateOrder',$dateOrder);
        $req->bindValue(':statusOrder',$statusOrder);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'error: '.$e->getMessage();
        }
		
	}
    
    function deleteOrder($idOrder)
    {
		$sql="DELETE FROM Order where idOrder= :idOrder";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idOrder',$idOrder);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('error: '.$e->getMessage());
        }
    }
    
	function updateOrder($Order,$idOrder){
		$sql="UPDATE Order SET idMenu=:idMenu0, nbOrder=:nbOrder, idClient=:idClient, priceOrder=:priceOrder, dateOrder=:dateOrder WHERE idMenu=:idMenu";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idMenu0=$Order->getidMenu();
        $nbOrder=$Order->getnbOrder();
        $idClient=$Order->getidClient();
        $priceOrder=$Order->getpriceOrder();
        $dateOrder=$Order->getdateOrder();
		$datas = array(':idMenu0'=>$idMenu0, ':nbOrder'=>$nbOrder, ':idClient'=>$idClient, ':priceOrder'=>$priceOrder,':dateOrder'=>$dateOrder, ':idOrder'=>$idOrder);
		$req->bindValue(':idMenu0',$idMenu0);
		$req->bindValue(':nbOrder',$nbOrder);
		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':priceOrder',$priceOrder);
        $req->bindValue(':dateOrder',$dateOrder);
		
		
            $s=$req->execute();
			

        }
        catch (Exception $e){
            echo " error ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    
    
}