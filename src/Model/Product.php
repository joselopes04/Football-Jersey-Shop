<?php
namespace App\Model;

class Product
{
  //Table columns 
  public $ID;
  public $Name;
  public $ImagePath;
  public $ImagePath2;
  public $ImagePath3;
  public $ImagePath4;
  public $ImagePath5;
  public $Price;
  public $Description;
  public $Material;
  public $Year;
  public $History;
  public $Views;

  //Foregin key
  public $IDBrand;
  public $IDSeller;
  public $IDState;
  public $IDClub;
  public $IDTypeOfKit;
}