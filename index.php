<?php
  class Person{
    //atributtes
    public $name = array();
    public $lastname = array();

    //methods
    public function save($name,$lastname){
      $this->name[]=$name;
      $this->lastname[]=$lastname;
    }

    public function show(){
      for ($i=0; $i < count($this->name); $i++) {
        $this->format($this->name[$i],$this->lastname[$i]); # self:: for static methods
      }
    }

    public function format($name,$lastname){
      echo "Name: " . $name . " Apellido: " . $lastname . "<br>";
    }
  }
  $person = new Person(); //creating the object
  $person->save("Carlos","Fernandez");
  $person->save("Uriel", "Perez");
  $person->show();
 ?>
