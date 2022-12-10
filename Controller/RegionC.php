<?php
include '../config.php';
include '../Model/region.php';

class RegionC
{
    public function listRegions()
    {
        $sql = "SELECT * FROM region";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteRegion($id)
    {
        $sql = "DELETE FROM region WHERE id_region= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
//do add thing

    function addRegion($region)
    {
        $sql = "INSERT INTO region 
        VALUES (NULL, :name,:nb)";
        $db = config::getConnexion();
        try {
          
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $region->getname_region(),
                'nb' => $region->getnb_people()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    //do the update

    function updateRegion($region, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE region SET 
                    name_region = :name_region, 
                   nb_people = : nb_people 
                WHERE id_region= :id_region'
            );
            $query->execute([
                'id_region' => $id,
                'name_region' => $region->getname_region(),
                'nb_people' =>  $region->getnb_people()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showRegion($id)
    {
        $sql = "SELECT * from region where id_region = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $region = $query->fetch();
            return $region;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
