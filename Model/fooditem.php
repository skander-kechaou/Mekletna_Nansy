<?php
class fooditem
{
    private ?int $idfooditem = null;
    private ?string $Namefooditem= null;
    private ?int $Pricefooditem = null;

    public function __construct($id = null, $Namefd, $Pricefd)
    {
        $this->idfooditem = $id;
        $this->Namefooditem = $Namefd;
        $this->Pricefooditem = $Pricefd;
    
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
     * Get the value of nbPlaces
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set the value of nbPlaces
     *
     * @return  self
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get the value of datefooditem
     */
    public function getDatefooditem()
    {
        return $this->datefooditem;
    }

    /**
     * Set the value of datefooditem
     *
     * @return  self
     */
    public function setDatefooditem($datefooditem)
    {
        $this->datefooditem = $datefooditem;

        return $this;
    }
}
   