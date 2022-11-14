<?PHP 
class commande{
	private $id_chef;
	private $Nom_chef;
	private $id_Assio;
	private $Prix;
  private $Date_Commande;
  private $id_Donation;
  private $Etat;


    function __construct($id_Menu,$Nom_Commande,$id_Assio,$Prix,$Date_Commande,$id_Donation,$Etat)
    {
		$this->id_Menu=$id_Menu;
		$this->Nom_Commande=$Nom_Commande;
		$this->id_Assio=$id_Assio;
		$this->Prix=$Prix;
    $this->Date_Commande=$Date_Commande;
    $this->Etat=$Etat;

	}
     
    //////////////////////////////////////////////////////////////

    function getid_Menu()
    {
		return $this->id_Menu;
    }
    
    function getNom_Commande()
    {
		return $this->Nom_Commande;
    }
    
    function getid_Assio()
    {
		return $this->id_Assio;
    }
    
    function getPrix()
    {
		return $this->Prix;
    }
    
    function getDate_Commande()
    {
		return $this->Date_Commande;
    }
    
    function getid_Donation()
    {
		return $this->id_Donation;
    }
    
    function getEtat()
    {
		return $this->Etat;
    }

    //////////////////////////////////////////////////////////////
    
    function setid_Menu($id_Menu)
    {
		$this->id_Menu=$id_Menu;
    }

    function setNom_Commande($Nom_Commande)
    {
		$this->Nom_Commande=$Nom_Commande;
    }
    
    function setid_Assio($id_Assio)
    {
		$this->id_Assio;
    }
    
    function setPrix($Prix)
    {
		$this->Prix=$Prix;
    }
    
    function setDate_Commande($Date_Commande)
    {
		$this->Date_Commande;
    }
    
    function setid_Donation($id_Donation)
    {
		$this->id_Donation=$id_Donation;
    }

    function setEtat($Etat)
    {
		$this->Etat=$Etat;
    }
	
}

?>