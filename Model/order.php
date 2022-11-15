<?PHP 
class commande{
	private $idMenu;
	private $idClient;
	private $priceOrder;
  private $dateOrder;
  private $idOrder;
  private $statusOrder;


    function __construct($idMenu,$idClient,$priceOrder,$dateOrder,$idOrder,$statusOrder)
    {
		$this->idMenu=$idMenu;
		$this->idClient=$idClient;
		$this->priceOrder=$priceOrder;
    $this->dateOrder=$dateOrder;
    $this->statusOrder=$statusOrder;

	}
     
    //////////////////////////////////////////////////////////////

    function getidMenu()
    {
		return $this->idMenu;
    }
    

    function getidClient()
    {
		return $this->idClient;
    }
    
    function getpriceOrder()
    {
		return $this->priceOrder;
    }
    
    function getdateOrder()
    {
		return $this->dateOrder;
    }
    
    function getidOrder()
    {
		return $this->idOrder;
    }
    
    function getstatusOrder()
    {
		return $this->statusOrder;
    }

    //////////////////////////////////////////////////////////////
    
    function setidMenu($idMenu)
    {
		$this->idMenu=$idMenu;
    }

  
    function setidClient($idClient)
    {
		$this->idClient;
    }
    
    function setpriceOrder($priceOrder)
    {
		$this->priceOrder=$priceOrder;
    }
    
    function setdateOrder($dateOrder)
    {
		$this->dateOrder;
    }
    
    function setidOrder($idOrder)
    {
		$this->idOrder=$idOrder;
    }

    function setstatusOrder($statusOrder)
    {
		$this->statusOrder=$statusOrder;
    }
	
}

?>