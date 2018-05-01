<?php
  class Lottery{

    //attributes
    public $number;
    public $chances;
    public $result = false;

    //methods
    public function __construct($number,$chances){
      $this->number=$number;
      $this->chances=$chances;
    }

    public function random(){
      $min=$this->number / 2;
      $max=$this->number * 2;
      for ($i=0; $i < $this->chances; $i++) {
        $int=rand($min,$max);
        $this->chances($int);
      }
    }

    public function chances($int){
      if ($int == $this->number) {
        $this->result=true;
        echo "<b>".$int." == ".$this->number."</b><br>";
      }
      else{
        echo $int."!=".$this->number."<br>";
      }
    }

    public function __destruct(){
      if ($this->result) {
        echo "Congratulations, you win in ". $this->chances." chances.<br>";
      }
      else{
        echo "You Lost in ". $this->chances." chances.<br>";
      }
    }
  }

  $lotery=new Lottery(5,7);
  $lotery->random();
 ?>
