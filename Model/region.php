<?PHP 
class region {
	private ?int $id_region=null;
	private ?string $name_region=null;
	private ?int $nb_people=null;

 


    function __construct($id= null, $name,$nb)
    {
		$this->id_region=$id;
		$this->name_region=$name;
        $this->nb_people=$nb;
	}
     
    //////////////////////////////////////////////////////////////

    function getid_region()
    {
		return $this->id_region;
    }
    
    function getname_region()
    {
		return $this->name_region;
    }
    
    function getnb_people()
    {
		return $this->nb_people;
    }
    
    

    //////////////////////////////////////////////////////////////
    /**
     * Set the value of idchef
     *
     * @return  self
     */
    function setid_region($id_region)
    {
		$this->id_region=$id_region;

    return $this;
    }
/**
     * Set the value of chef_name
     *
     * @return  self
     */
    function setName_chef($name_region)
    {
		$this->name_region=$name_region;

    return $this;
    }
    /**
     * Set the value of address of the chef
     *
     * @return  self
     */
    
    function setAdd_chef($nb_people)
    {
		$this->nb_people=$nb_people;

    return $this;
    }
	
}

?>