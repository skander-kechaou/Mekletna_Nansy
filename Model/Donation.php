<?PHP 
class donation
{
	private $id_menu= null;//food item to donate
	private $id_assiociation= null;// association id
  private ?DateTime $date= null;
  private $id_donation= null;
  private $location= null;
  private $reason= null;


    function __construct($id_donation=NULL,$id_menu,$id_assiociation,$date,$reason,$location)
    {
		$this->id_menu=$id_menu;
		$this->id_assiociation=$id_assiociation;
    $this->date=$date;
    $this->reason=$reason;
    $this->id_donation=$id_donation;
    $this->location=$location;

	}
     
    //////////////////////////////////////////////////////////////

    function getid_menu()
    {
		return $this->id_menu;
    }
  
    function getid_assiociation()
    {
		return $this->id_assiociation;
    }
    
    function getdate()
    {
		return $this->date;
    }
    
    function getid_Donation()
    {
		return $this->id_donation;
    }
    function get_reason()
    {
      return $this->reason;
    }
    function get_location()
    {
      return $this->location;
    }




    //////////////////////////////////////////////////////////////
    
    function setid_menu($id_menu)
    {
		$this->id_menu=$id_menu;
    }
    
    function setid_assiociation($id_assiociation)
    {
		$this->id_assiociation;
    }
    
    function setdate($date)
    {
		$this->date;
    }
    function set_reason($reason)
    {
      $this->reason;
    }
    function set_name($id_donation)
    {
      $this->$id_donation;
    }
    function set_email($location)
    {
      $this->location;
    }
	
}

?>