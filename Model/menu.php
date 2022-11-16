<?PHP 
class menu{
	private $idMenu;
	private $priceMenu;
	private $regionMenu;
    private $chefMenu;
    private $itemsMenu;


    function __construct($idMenu,$priceMenu,$regionMenu,$chefMenu,$itemsMenu)
    {
		$this->idMenu=$idMenu;
		$this->itemsMenu=$priceMenu;
		$this->regionMenu=$regionMenu;
     $this->chefMenu=$chefMenu;
    $this->itemsMenu=$itemsMenu;

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
    
    function getidOrder()
    {
		return $this->idOrder;
    }
    
    function getitemsMenu()
    {
		return $this->itemsMenu;
    }

    //////////////////////////////////////////////////////////////
    
    function setidMenu($idMenu)
    {
		$this->idMenu=$idMenu;
    }

  
    function setpriceMenu($priceMenu)
    {
		$this->priceMenu;
    }
    
    function setregionMenu($regionMenu)
    {
		$this->regionMenu=$regionMenu;
    }
    
    function setchefMenu($chefMenu)
    {
		$this->chefMenu;
    }
    
    function setidOrder($idOrder)
    {
		$this->idOrder=$idOrder;
    }

    function setitemsMenu($itemsMenu)
    {
		$this->itemsMenu=$itemsMenu;
    }
	
}