<?PHP
include "../config.php";
include '../Model/order.php';

class OrderC
{
function listOrder ()
    {
		$sql = "SELECT * FROM orderse";
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
		$sql= "INSERT INTO orderse values 
        (NULL, :idMenu,:idClient,:priceOrder,:dateOrder,:statusOrder)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req->execute([
        'idMenu'=>$Order->getidMenu(),
        'idClient'=>$Order->getidClient(),
        'priceOrder'=>$Order->getpriceOrder(),
        'dateOrder'=>$Order->getdateOrder()->format("Y-m-d"),
        'statusOrder'=>$Order->getstatusOrder(),
            ]);
           
        }
        catch (Exception $e){
            echo 'error: '.$e->getMessage();
        }
		
	}
    
    function deleteOrder($idOrder)
    {
		$sql="DELETE FROM order where idOrder= :idOrder";
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
		$sql="UPDATE order SET idMenu=:idMenu0, nbOrder=:nbOrder, idClient=:idClient, priceOrder=:priceOrder, dateOrder=:dateOrder WHERE idMenu=:idMenu";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idMenu0=$Order->getidMenu();
        $nbOrder=$Order->getnbOrder();
        $idClient=$Order->getidClient();
        $priceOrder=$Order->getpriceOrder();
        $dateOrder=$Order->getdateOrder();
		$datas = array(':idMenu0'=>$idMenu0, ':idClient'=>$idClient, ':priceOrder'=>$priceOrder,':dateOrder'=>$dateOrder, ':idOrder'=>$idOrder);
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
   public function showOrder($idOrder){
    $sql ="SELECT * FROM orderse WHERE idOrder=".$idOrder;
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute();
        $order=$query->fetch();
        return $order;
    }
    catch (Exception $e){
        $e->getMessage();
    }
   }

    public function SortPrice (){
        $sql = "SELECT * FROM orderse ORDER BY priceOrder";
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