<?PHP 

class basket{
	private ?string $nameOrder=null;
  private ?int  $idOrder=null;
	private ?int  $priceOrder=null;
  private ?DateTime  $dateOrder=null;    
   


    function __construct($nameOrder,$idOrder=NULL,$priceOrder,$dateOrder)
    {
    $this->nameOrder=$nameOrder;
    $this->idOrder=$idOrder;
		$this->priceOrder=$priceOrder;
    $this->dateOrder=$dateOrder;
       
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


  
   

}

?>