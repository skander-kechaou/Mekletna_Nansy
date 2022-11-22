<?php
class Client
{
    private ?int $idClient = null;
    private ?string $fnameClient = null;
    private ?string $lnameClient = null;
    private ?int $pnbClient = null;
    private ?string $mailClient = null;
    private ?string $pwdClient = null; 
    private ?DateTime $bdayClient = null;
    private ?int $pcodeClient = null;
    private ?string $regionClient = null;
    private ?string $addressClient = null;

    public function __construct($id = null, $fn, $ln, $pn, $ml, $pw, $bd, $pc, $rg, $a)
    {
        $this->idClient = $id;
        $this->fnameClient = $fn;
        $this->lnameClient = $ln;
        $this->pnbClient = $pn;
        $this->mailClient = $ml;
        $this->pwdClient = $pw;
        $this->bdayClient = $bd;
        $this->pcodeClient = $pc;
        $this->regionClient = $rg;
        $this->addressClient = $a;
    }

    /**
     * Get the value of idClient
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Get the value of fnameClient
     */
    public function getFirstName()
    {
        return $this->fnameClient;
    }

    /**
     * Set the value of fnameClient
     *
     * @return  self
     */
    public function setFirstName($fnameClient)
    {
        $this->fnameClient = $fnameClient;

        return $this;
    }

    /**
     * Get the value of lnameClient
     */
    public function getLastName()
    {
        return $this->lnameClient;
    }

    /**
     * Set the value of lnameClient
     *
     * @return  self
     */
    public function setLastName($lnameClient)
    {
        $this->lnameClient = $lnameClient;

        return $this;
    }

    /**
     * Get the value of pnbClient
     */
    public function getPhoneNumber()
    {
        return $this->pnbClient;
    }

    /**
     * Set the value of pnbClient
     *
     * @return  self
     */
    public function setPhoneNumber($pnbClient)
    {
        $this->pnbClient = $pnbClient;

        return $this;
    }

    /**
     * Get the value of mailClient
     */
    public function getMail()
    {
        return $this->mailClient;
    }

    /**
     * Set the value of mailClient
     *
     * @return  self
     */
    public function setMail($mailClient)
    {
        $this->mailClient = $mailClient;

        return $this;
    }

    /**
     * Get the value of pwdClient
     */
    public function getPassword()
    {
        return $this->pwdClient;
    }

    /**
     * Set the value of pwdClient
     *
     * @return  self
     */
    public function setPassword($pwdClient)
    {
        $this->pwdClient = $pwdClient;

        return $this;
    }

    /**
     * Get the value of bdayClient
     */
    public function getBirthdate()
    {
        return $this->bdayClient;
    }

    /**
     * Set the value of bdayClient
     *
     * @return  self
     */
    public function setBirthdate($bdayClient)
    {
        $this->bdayClient = $bdayClient;

        return $this;
    }

    /**
     * Get the value of pcodeClient
     */
    public function getPostal()
    {
        return $this->pcodeClient;
    }

    /**
     * Set the value of pcodeClient
     *
     * @return  self
     */
    public function setPostal($pcodeClient)
    {
        $this->pcodeClient = $pcodeClient;

        return $this;
    }

    /**
     * Get the value of regionClient
     */
    public function getRegion()
    {
        return $this->regionClient;
    }

    /**
     * Set the value of regionClient
     *
     * @return  self
     */
    public function setRegion($regionClient)
    {
        $this->regionClient = $regionClient;

        return $this;
    }

    /**
     * Get the value of addressClient
     */
    public function getAddress()
    {
        return $this->addressClient;
    }

    /**
     * Set the value of addressClient
     *
     * @return  self
     */
    public function setAddress($addressClient)
    {
        $this->addressClient = $addressClient;

        return $this;
    }
}