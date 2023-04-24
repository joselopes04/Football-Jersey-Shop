<?php
namespace App\Model;

class Club
{
  //Table columns 
  public $ID;
  public $Name;
  public $ImagePath;
  //Foregin key
  public $IDLeague;
}