<?PHP 

class basket{
	private ?string $nameOrder=null;
  private ?int  $idOrder=null;
	private ?int  $priceOrder=null;
  private ?DateTime  $dateOrder=null;
  private ?int $statusOrder=null;
    
   


    function __construct($nameOrder,$idOrder=NULL,$priceOrder,$dateOrder,$statusOrder)
    {
    $this->nameOrder=$nameOrder;
    $this->idOrder=$idOrder;
		$this->priceOrder=$priceOrder;
    $this->dateOrder=$dateOrder;
    $this->statusOrder=$statusOrder;
       
	}
     
    //////////////////////////////////////////////////////////////
    function getnameOrder()
    {
		return $this->nameOrder;
    }
    function getidOrder()
    {
		return $this->idOrder;
    }
    
    function getpriceOrder()
    {
		return $this->priceOrder;
    }
    
    function getdateOrder()
    {
		return $this->dateOrder;
    }
    
    function getstatusOrder()
    {
		return $this->statusOrder;
    }
    //////////////////////////////////////////////////////////////
    function setnameOrder($nameOrder)
    {
		$this->nameOrder=$nameOrder;
    }
    function setidOrder($idOrder)
    {
		$this->idOrder=$idOrder;
    }
    function setpriceOrder($priceOrder)
    {
		$this->priceOrder=$priceOrder;
    }
    
    function setdateOrder($dateOrder)
    {
		$this->dateOrder;
    }

    function setstatusOrder($statusOrder)
    {
		$this->statusOrder=$statusOrder;
    }

  
   

}

?>