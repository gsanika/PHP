<?php 
class Percentage 
{ 
 public $l; 
 public $w; 
 public $a; 
 function area($l,$w) 
 { 
  $this->l=$l; 
  $this->w=$w; 
  $this->a=$this->l*$this->w; 
  echo "Area of rectangle = " . $this->a; 
 } 
} 
$p1=new Percentage();
$p1->area(2,3);   
$p2=new Percentage(); 
$p2->area(5,6);   
?> 