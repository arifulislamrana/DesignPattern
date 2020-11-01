<?php
//without liskov principle
class Rectangle {
    public function setWidth($w) { 
        $this->width = $w;
    }
   
    public function setHeight($h) {
        $this->height = $h;
    }
   
    public function getArea() {
        return $this->height * $this->width;
    }
  }
class Square extends Rectangle {
    public function setWidth($w) {
      $this->width = $w;
      $this->height = $w;
    }
   
    public function setHeight($h) {
      $this->height = $h;
      $this->width = $h;
    }
  }




  //with liskov principle

  interface Quadrilateral {
    public function setHeight($h);
   
    public function setWidth($w);
   
    public function getArea();
  }
   
  class Rectangle implements Quadrilateral;
   
  class Square implements Quadrilateral;

?>