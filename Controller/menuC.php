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

		$sql="INSERT  INTO Menu VALUES (NULL,:itemsMenu,:priceMenu,:regionMenu,:chefMenu) ";
		$db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([

                    'itemsMenu' => $Menu->getitemsMenu(),
                    'priceMenu'=> $Menu->getpriceMenu(),
                    'chefMenu' => $Menu->getchefMenu(),
                    'regionMenu' => $Menu->getregionMenu()
               
                  
                ]);
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }

       

		
           
    
    function deleteMenu($id)
    {
		$sql="DELETE FROM Menu where idMenu= :id";
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
    
	function updateChef($Menu, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Menu SET 
                    itemsMenu = :itemsMenu, 
                    priceMenu = :priceMenu, 
                    chefMenu=:chefMenu,
                    regionMenu =:regionMenu,
                WHERE idMenu= :idMenu'
            );
            $query->execute([
                'idMenu' =>  $Menu-> getidMenu(),
                'itemsMenu ' => $Menu-> getitemsMenu(),
                'priceMenu' => $Menu->getpriceMenu(),
                'chefMenu' => $Menu->getchefMenu(),
                'regionMenu' => $Menu->getregionMenu(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
		
    }
    function showMenu($id)
    {
        $sql = "SELECT * from Menu where idMenu =". $id;
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $Menu = $query->fetch();
            return $Menu;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    
