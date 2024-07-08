<?php

    class myClass{
        function __construct()
        {
            $this->name = "Hello World..!!";
        }
        function __invoke(){
            echo $this->name;
        }
    }
    $obj = new myClass();
    $obj();


?>