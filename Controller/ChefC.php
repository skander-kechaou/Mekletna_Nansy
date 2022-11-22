<?php
include '../config.php';
include '../Model/chef.php';

class ChefC
{
    public function listChefs()
    {
        $sql = "SELECT * FROM chef ";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteChef($id)
    {
        $sql = "DELETE FROM chef WHERE id_chef = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addChef($chef)
    {
        $sql = "INSERT INTO chef VALUES (NULL,:Name_chef, :Add_chef,:mail_chef,:Phone,:Date_Birth,:Cv)";
        $db = config::getConnexion();
        try {
            print_r($chef->getDate_Birth()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
              
                'Name_chef' => $chef->getName_chef(),
                'Add_chef' => $chef->getAdd_chef(),
                'mail_chef'=> $chef->getmail_chef(),
                'Phone' => $chef->getPhone(),
                'Date_Birth' => $chef->getDate_Birth()->format('Y-m-d'),
                'Cv' => $chef->getCv()
           
              
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateChef($chef, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE chef SET 
                    Name_chef = :Name_chef, 
                    Add_chef = :Add_chef, 
                    Date_Birth=:Date_Birth,
                    mail_chef =:mail_chef ,
                    Phone=:Phone,
                    Cv = :Cv,
                WHERE id_chef= :id_chef'
            );
            $query->execute([
                'id_chef' =>  $chef-> getid_chef(),
                'Name_chef ' => $chef-> getName_chef(),
                'Add_chef' => $chef->getAdd_chef(),
                'mail_chef' => $chef->getmail_chef(),
                'Date_Birth' => $chef->getDate_Birth()->format('Y/m/d'),
                'Phone' => $chef->getPhone(),
                'Cv'=> $chef->getCv()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showChef($id)
    {
        $sql = "SELECT * from chef where id_chef =". $id;
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $chef = $query->fetch();
            return $chef;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}