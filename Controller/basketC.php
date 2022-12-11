<?PHP
include "../config.php";

class basketC
{
        function listBasket ()
            {
        		$sql = "SELECT * FROM basket";
                $db = config::getConnexion();
                try {
                    $list = $db->query($sql);
                    return $list;
                } 
                catch(Exception $e) {
                    $e->getMessage();
            }
        }
    function list($var){

        $query = "SELECT * FROM basket LIMIT $var,6";

        $db = config::getConnexion();
        try{

            return ( $db->query($query));
        }
        catch (Exception $err){
            echo 'Error: '.$err->getMessage();

        }

    }
	
	function addBasket($basket){
		$sql="INSERT INTO basket values (:nameOrder,:idOrder,:priceOrder,:dateOrder)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);    
        $req->execute([
            'nameOrder'=>$basket->getnameOrder(),
            'idOrder'=>$basket->getidOrder(),
            'priceOrder'=>$basket->getpriceOrder(),
            'dateOrder'=>$basket->getdateOrder()->format('Y-m-d'),
                ]);
        }
        catch (Exception $e){
            echo 'Error: '.$e->getMessage();
        }
		
	}
	public function showBasket($id) {
        $sql = "SELECT * FROM basket WHERE idOrder=".$id;
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $basket=$query->fetch();
            return $basket;
        }
        catch (Exception $e) {
            $e->getMessage();
        }
    }
    
    function deleteBasket($idOrder)
    {
		$sql="DELETE FROM basket where idOrder= :idOrder";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idBasket',$idOrder);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    
	function updateBasket($basket,$idOrder){
		$sql="UPDATE basket SET   nameOrder=:nameOrder,idOrder=:idOrder,priceOrder=:priceOrder, dateOrder=:dateOrder, WHERE idOrder=:idOrder";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        $nameOrder=$basket->getnameOrder();
		$idProduct0=$basket->getidOrder();
        $priceOrder=$basket->getpriceOrder();
        $dateOrder=$basket->getdateOrder();
      
        
		$datas = array(':nameOrder'=>$nameOrder,':idOrder'=>$idOrder,  ':priceOrder'=>$priceOrder,':dateOrder'=>$dateOrder);
		
		$req->bindValue(':nameOrder',$nameOrder);
        $req->bindValue(':idOrder',$idOrder);
		$req->bindValue(':priceOrder',$priceOrder);
        $req->bindValue(':dateOrder',$dateOrder);
       
     
        
		
		
            $s=$req->execute();
			

        }
        catch (Exception $e){
            echo " Error ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
	
//     //function rechercherlistebasket($idBasket)
//   {
// 		$sql="SELECT * from basket where idProduct=$idProduct";
// 	   $db = config::getConnexion();
// 		try{
// 		$liste=$db->query($sql);
// 		return $liste;
// 		}
//         catch (Exception $e){
//             die('Error: '.$e->getMessage());
//         }
//     }
    
    // function sum()
    // {
    //     $sql="SELECT SUM(priceOrder) AS priceOrder_Total FROM basket ";
    //     $db = config::getConnexion();
    //     try{
    //     $liste= $db->query($sql);
    //     $row = $liste->fetch_assoc(); 
    //     $sum = $row['priceOrder_Total'];
    //     return $sum;
	// 	}
    //     catch (Exception $e){
    //     die('Error: '.$e->getMessage());
    //     }
    // }

//    // function recupererbasket($idBasket)
//     {
// 		$sql="SELECT * from basket where idBasket=$idBasket";
// 		$db = config::getConnexion();
// 		try{
// 		$liste=$db->query($sql);
// 		return $liste;
// 		}
//         catch (Exception $e){
//             die('Error: '.$e->getMessage());
//         }
//     }


//     //function createNewCartWithRows($commandes,$mail){
// 		$sql="INSERT INTO basket (mail) VALUES('$mail')";
// 		$db = config::getConnexion();
// 		try{
//         $db->query($sql);
//         foreach($commandes as $order){
//             $idc=$order['idOrder'];
//             $cartId=$db->lastInsertId();
//             $price=$order['priceOrder'];
//             $sql2="INSERT INTO commande_pannier (idOrder,idBasket,priceOrder) VALUES('$idc','$cartId','$price')";
//             try {
//                 $db->query($sql2);
//             }
 
//             catch (Exception $e){
//                 die('Error: '.$e->getMessage());
//             }
            
//         }
//         return "done";

//         }
//         catch (Exception $e){
//             die('Error: '.$e->getMessage());
//         }


//     }
//    // public function updatestatusOrder($statusOrder,$idBasket)
// 	{
// 		$sql="UPDATE basket SET statusOrder=:statusOrder WHERE idBasket=:idBasket";
// 			$db=config::getConnexion();
// 			try{
// 			$req=$db->prepare($sql);
			
// 			$req->bindValue(':idBasket',$idBasket);
// 			$req->bindValue(':statusOrder',$statusOrder);
// 			$req->execute();
// 		}
// 	//	catch (Exception $e)
//         {
//             echo " Error ! ".$e->getMessage();
//    			echo " Les datas : " ;
//   			print_r($datas);
//         }
// 	}

//  //   function tridate()
//     {
//         $sql= "SELECT * from basket ORDER BY dateOrder";
//         $db= config::getConnexion();
//         try{
//             $liste=$db->query($sql);
// 		return $liste;
// 		}
//         catch (Exception $e){
//             die('Error: '.$e->getMessage());
//         }
//     }


    
    
// }

}
