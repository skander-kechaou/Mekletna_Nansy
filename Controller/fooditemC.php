<?PHP
include "../config.php";
include '../Model/fooditem.php';
class fooditemC
{
    function showfooditem($idfooditem)
    {
        $sql = "SELECT * FROM fooditem WHERE idfooditem = $idfooditem";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $fooditem = $query->fetchAll();
            return $fooditem;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function upcomingfooditem()
    {
        echo date("Y/m/d");
        $sql = "SELECT * FROM fooditem WHERE datefooditem >= '" . date("Y-m-d") . "'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $fooditem = $query->fetchAll();
            return $fooditem;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listfooditem()
    {
        $sql = "SELECT * FROM fooditem";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function bookfooditem($idfooditem, $idClient)
    {
        $sql = "INSERT INTO reservation  
        VALUES (NULL, :idClient,:idfooditem)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idClient' => $idClient,
                'idfooditem' => $idfooditem
            ]);
            $fooditem = $this->getfooditem($idfooditem);
            echo $fooditem['nbPlaces'] - 1;
            $query = $db->prepare(
                'UPDATE fooditem SET nbPlaces = ' . $fooditem['nbPlaces'] - 1
                    . ' WHERE idfooditem= ' . $idfooditem
            );
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function getfooditem($id)
    {
        $sql = "SELECT * from fooditem where idfooditem = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $fooditem = $query->fetch();
            return $fooditem;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}