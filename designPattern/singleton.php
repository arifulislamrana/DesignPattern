<?php

class singleton{
    private static $obj;

    public function __construct(){
        if (empty(self::$obj)) {
            self::$obj = $this;
            echo 'new instance'.'<br>';
            return self::$obj;
        } else {
            echo 'old instance'.'<br>';
            return self::$obj;
        }
        
    }
}

new singleton();
new singleton();
new singleton();
new singleton();
?>