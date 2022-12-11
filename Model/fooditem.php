<?php
class fooditem
{
    private ?int $idfooditem = null;
    private ?string $Namefooditem= null;
    private ?int $Pricefooditem = null;
    private ?int $IDmen = null;

    public function __construct($id = null, $Namefd, $Pricefd, $IDmen)
    {
        $this->idfooditem = $id;
        $this->Namefooditem = $Namefd;
        $this->Pricefooditem = $Pricefd;
        $this->IDmen = $IDmen;
    
    }

    /**
     * Get the value of idfooditem
     */
    public function getIdfooditem()
    {
        return $this->idfooditem;
    }

    /**
     * Get the value of Namefooditem
     */
    public function getNamefooditem()
    {
        return $this->Namefooditem;
    }

    /**
     * Get the value of Namefooditem
     */
    public function getIDmen()
    {
        return $this->IDmen;
    }

    /**
     * Set the value of Namefooditem
     *
     * @return  self
     */
    public function setNamefooditem($Namefooditem)
    {
        $this->Namefooditem = $Namefooditem;

        return $this;
    }

    /**
     * Get the value of Pricefooditem
     */
    public function getPricefooditem()
    {
        return $this->Pricefooditem;
    }

    /**
     * Set the value of Pricefooditem
     *
     * @return  self
     */
    public function setPricefooditem($Pricefooditem)
    {
        $this->Pricefooditem = $Pricefooditem;

        return $this;
    }

    /**
     * Set the value of IDmen
     *
     * @return  self
     */
    public function setIDmen($IDmen)
    {
        $this->IDmen = $IDmen;

        return $this;
    }
    
}
   