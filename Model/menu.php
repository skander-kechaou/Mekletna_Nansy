<?PHP 
class menu{
	private ?int $idMenu=null;
	private ?int $priceMenu=null;
	private ?string $regionMenu=null;
  private ?string $chefMenu=null;
    private ?string $itemsMenu=null;


    function __construct($idMenu=null,$itemsMenu,$priceMenu,$regionMenu,$chefMenu)
    {
		$this->idMenu=$idMenu;
    $this->itemsMenu=$itemsMenu;
		$this->priceMenu=$priceMenu;
		$this->regionMenu=$regionMenu;
    $this->chefMenu=$chefMenu;
  

	}
     
    //////////////////////////////////////////////////////////////

    function getidMenu()
    {
		return $this->idMenu;
    }
    

    function getpriceMenu()
    {
		return $this->priceMenu;
    }
    
    function getregionMenu()
    {
		return $this->regionMenu;
    }
    
    function getchefMenu()
    {
		return $this->chefMenu;
    }

    function getitemsMenu()
    {
		return $this->itemsMenu;
    }

    //////////////////////////////////////////////////////////////
    
    /**
     * @return self
     */
    function setidMenu($idMenu)
    {
		$this->idMenu=$idMenu;
    return $this;
    }

   /**
     * @return self
     */
    function setpriceMenu($priceMenu)
    {
		$this->priceMenu=$priceMenu;
    return $this;
    }
     /**
     * @return self
     */
    function setregionMenu($regionMenu)
    {
		$this->regionMenu=$regionMenu;
    return $this;
    }
     /**
     * @return self
     */
    function setchefMenu($chefMenu)
    {
		$this->chefMenu=$chefMenu;
    return $this;
    }
     /**
     * @return self
     */

    function setitemsMenu($itemsMenu)
    {
		$this->itemsMenu=$itemsMenu;
    return $this;
    }
	
}