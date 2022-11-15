<?PHP 
class commande{
	private $id_Menu;//food item to donate
	private $id_Assio;// association id
  private $Date_Commande;
  private $id_Donation;
  private $Name_Assio;
  private $mail;
  private $reason;


    function __construct($id_Menu,$id_Assio,$Date_Commande,$id_Donation,$Name_Assio,$mail,$reason)
    {
		$this->id_Menu=$id_Menu;
		$this->id_Assio=$id_Assio;
    $this->Date_Commande=$Date_Commande;
    $this->reason=$reason;
    $this->Name_Assio=$Name_Assio;
    $this->mail=$mail;

	}
     
    //////////////////////////////////////////////////////////////

    function getid_Menu()
    {
		return $this->id_Menu;
    }
  
    function getid_Assio()
    {
		return $this->id_Assio;
    }
    
    function getDate_Commande()
    {
		return $this->Date_Commande;
    }
    
    function getid_Donation()
    {
		return $this->id_Donation;
    }
    function get_reason()
    {
      return $this->reason;
    }
    function get_mail()
    {
      return $this->mail;
    }
    function get_name()
    {
      return $this->Name_Assio;
    }



    //////////////////////////////////////////////////////////////
    
    function setid_Menu($id_Menu)
    {
		$this->id_Menu=$id_Menu;
    }
    
    function setid_Assio($id_Assio)
    {
		$this->id_Assio;
    }
    
    function setDate_Commande($Date_Commande)
    {
		$this->Date_Commande;
    }
    function set_reason($reason)
    {
      $this->reason;
    }
    function set_name($Name_Assio)
    {
      $this->Name_Assio;
    }
    function set_email($email)
    {
      $this->email;
    }
	
}

?>