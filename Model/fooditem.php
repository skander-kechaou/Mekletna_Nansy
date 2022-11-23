<?PHP 
class fooditem{
	private $idfooditem;
	private $Namefooditem;
	private $Pricefooditem;



    function __construct($idfooditem,$Namefooditem,$Pricefooditem)
    {
		$this->idfooditem=$idfooditem;
		$this->Namefooditem=$Namefooditem;
		$this->Pricefooditem=$Pricefooditem;
		

	}
     
    //////////////////////////////////////////////////////////////

    function getidfooditem()
    {
		return $this->idfooditem;
    }
    
    function getNamefooditem()
    {
		return $this->Namefooditem;
    }

    function getPricefooditem()
    {
		return $this->Pricefooditem;
    }
    
    //////////////////////////////////////////////////////////////
    
    function setidfooditem($idfooditem)
    {
		$this->idfooditem=$idfooditem;
    }

    function setNamefooditem($Namefooditem)
    {
		$this->Namefooditem=$Namefooditem;
    }

    function setPricefooditem($Pricefooditem)
    {
		$this->Pricefooditem=$Pricefooditem;
    }
    
?>