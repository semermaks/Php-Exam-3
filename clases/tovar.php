<?php
class Tovar {
    public $name;
    public $cost;
    public $PostName;

    function __construct($name, $cost, $PostName) {
        $this->name = $name;
        $this->cost = $cost;
        $this->PostName = $PostName;
      }

    function toString() {
      return "Name: ".$this->name."; Cost: ".$this->cost."; Postav name: ".$this->PostName;
    }
  }

  class PechatniuTovar extends Tovar{
    public $Autor;

    function __construct($name, $cost, $PostName, $Autor) {
        $this->name = $name;
        $this->cost = $cost;
        $this->PostName = $PostName;
        $this->Autor = $Autor;
      }

    function toString() {
        return "Name: ".$this->name."; Cost: ".$this->cost."; Postav name: ".$this->PostName."; Autor: ".$this->Autor;
    }
  }

  class ElectroTovat extends Tovar{
    public $Emk;

    function __construct($name, $cost, $PostName, $Emk) {
        $this->name = $name;
        $this->cost = $cost;
        $this->PostName = $PostName;
        $this->Autor = $Autor;
      }

    function toString() {
        return "Name: ".$this->name."; Cost: ".$this->cost."; Postav name: ".$this->PostName."; Emkost: ".$this->Emk."mb";
    }
  }
  ?>