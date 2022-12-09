<?php
class Assio
{
    private ?int $id_association = null;
    private ?string $name_assio = null;
    private ?string $mail = null;
    private ?string $phone = null;
    private ?int $president = null;

    public function __construct($ida = null, $na, $mla, $pha, $pr)
    {
        $this->id_association = $ida;
        $this->name_assio = $na;
        $this->mail= $mla;
        $this->phone = $pha;
        $this->president = $pr;
    }

    /**
     * Get the value of idClient
     */
    public function getid_association()
    {
        return $this->id_association;
    }

    /**
     * Get the value of fnameClient
     */
    public function getname_assio()
    {
        return $this->name_assio;
    }

    /**
     * Set the value of fnameClient
     *
     * @return  self
     */
    public function setname_assio($name_assio)
    {
        $this->name_assio = $name_assio;

        return $this;
    }

    /**
     * Get the value of lnameClient
     */
    public function getmail()
    {
        return $this->mail;
    }

    /**
     * Set the value of lnameClient
     *
     * @return  self
     */
    public function setmail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of pnbClient
     */
    public function getphone()
    {
        return $this->phone;
    }

    /**
     * Set the value of pnbClient
     *
     * @return  self
     */
    public function setphone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of mailClient
     */
    public function getpresident()
    {
        return $this->president;
    }

    /**
     * Set the value of mailClient
     *
     * @return  self
     */
    public function setpresident($president)
    {
        $this->president = $president;

        return $this;
    }
}