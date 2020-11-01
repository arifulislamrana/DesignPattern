<?php

// before Interface Segregation
interface Worker {
 
    public function takeBreak();
   
    public function code();
   
    public function callToClient();
   
    public function attendMeetings();
   
    public function getPaid();
  }

  class Manager implements Worker {
    public function code() {
      return false;
    }
  }

  class Developer implements Worker {
    public function callToClient() {
      echo "I'll ask my manager.";
    }
  }


// after Interface Segregation

  interface Worker {
    public function takeBreak()
    public function getPaid()
  }
   
  interface Coder {
    public function code()
  }
   
  interface ClientFacer {
    public function callToClient()
    public function attendMeetings()
  }

  class Developer implements Worker, Coder {
}
 
class Manager implements Worker, ClientFacer {
}

?>