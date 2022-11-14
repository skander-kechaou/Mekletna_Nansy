<?PHP 
class Chef{
	private ?int $id_chef=null;
	private ?string $Name_chef=null;
  private ?string $Add_chef=null;
	private ?string $mail_chef=null;
	private ?int $Phone=null;
  private ?DateTime $Date_Birth=null;
  private ?file $Cv=null;


    function __construct($id_chef = null, $Name_chef,$Add_chef,$mail_chef,$Phone,$Date_Birth,$Cv)
    {
		$this->id_chef=$id_chef;
		$this->Name_chef=$Name_chef;
		$this->Add_chef=$Add_chef;
		$this->mail_chef=$mail_chef;
    $this->Phone=$Phone;
    $this->Date_Birth=$Date_Birth;
    $this->Cv=$Cv;
	}
     
    //////////////////////////////////////////////////////////////

    function getid_chef()
    {
		return $this->id_chef;
    }
    
    function getName_chef()
    {
		return $this->Name_chef;
    }
    
    function getAdd_chef()
    {
		return $this->Add_chef;
    }
    
    function getmail_chef()
    {
		return $this->mail_chef;
    }
    
    function getPhone()
    {
		return $this->Phone;
    }
    
    function getDate_Birth()
    {
		return $this->Date_Birth;
    }
    
    function getCv()
    {
		return $this->Cv;
    }

    //////////////////////////////////////////////////////////////
    /**
     * Set the value of idchef
     *
     * @return  self
     */
    function setid_chef($id_chef)
    {
		$this->id_chef=$id_chef;

    return $this;
    }
/**
     * Set the value of chef_name
     *
     * @return  self
     */
    function setName_chef($Name_chef)
    {
		$this->Name_chef=$Name_chef;

    return $this;
    }
    /**
     * Set the value of address of the chef
     *
     * @return  self
     */
    
    function setAdd_chef($Add_chef)
    {
		$this->Add_chef=$Add_chef;

    return $this;
    }
    /**
     * Set the value of the mail of the chef
     *
     * @return  self
     */
    
    function setmail_chef($mail_chef)
    {
		$this->mail_chef=$mail_chef;

    return $this;

    }
    /**
     * Set the value of the phone 
     *
     * @return  self
     */
    
    function setPhone($Phone)
    {
		$this->Phone=$Phone;

    return $this;
    }
    /**
     * Set the value of date_birth
     *
     * @return  self
     */
    function setDate_Birth($Date_Birth)
    {
		$this->Date_Birth=$Date_Birth;

    return $this;

    }
    /**
     * Set the value of cv
     *
     * @return  self
     */

    function setCv($Cv)
    {
		$this->Cv=$Cv;

    return $this;

    }
	
}

?>