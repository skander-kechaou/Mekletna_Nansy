<?php
class donation
{

  private $id_donation= null;
  private $id_menu= null;
  private ?DateTime $date= null;
  private $location= null;
  private $reason= null;
  private $id_client= null;


    function __construct($idd = NULL,$idm,$d,$loc,$rea,$idc)
    {
    $this->id_donation=$idd;
		$this->id_menu=$idm;
    $this->date=$d;
    $this->location=$loc;
    $this->reason=$rea;
    $this->id_client=$idc;
	}
     
    //////////////////////////////////////////////////////////////

    function getid_menu()
    {
		return $this->id_menu;
    }
  
    function getid_donation()
    {
		return $this->id_donation;
    }
    
    function getdate()
    {
		return $this->date;
    }
    
    function get_reason()
    {
      return $this->reason;
    }
    function get_location()
    {
      return $this->location;
    }
function get_id_client()
    {
      return $this->id_client;
    }




    //////////////////////////////////////////////////////////////
     
    function setid_menu($id_menu)
    {
		$this->id_menu=$id_menu;
    return $this;
    }
    
    function setdate($date)
    {
		$this->date;
    return $this;
    }
    function set_reason($reason)
    {
      $this->reason;
      return $this;
    }

    function set_location($location)
    {
      $this->location;
      return $this;
    }
    function set_client($id_client)
    {
      $this->id_client;
      return $this;
    }
	}