<?php
namespace App\Model;

class Product
{
  //Table columns 
  public $ID;
  public $Name;
  public $ImagePath;
  public $Price;
  public $Description;
  public $Material;
  public $Year;
  public $History;

  //Foregin key
  public $IDBrand;
  public $IDState;
  public $IDClub;
  public $IDTypeOfKit;
}