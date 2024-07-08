<!-- traits Solve inheritence problem -->

<?php

   trait parentCompany1{
      function getTotalEmploye(){
         echo "100";
      }
   }
   trait parentCompany2{
      function getTotalOffice(){
         echo "18";
      }
   }
   class company{
      use parentCompany1 , parentCompany2;
   }

   $com = new company;
   $com->getTotalEmploye();
   echo "<br>";
   $com->getTotalOffice();

?>
<!-- <//?php
 
 trait logger{
   function log($message){
      echo $message;
   }
 }

   class store{
      use logger;
      function post(){
         $this->log('Post Created');
      }
   }
   class comment{
      use logger;
      function com(){
         $this->log('comment created');
      }
   }
   $store = new store;
   $store->post();
   $comment = new comment;
   $comment->com();

?> -->



   <!-- <//?php
   
      class class1{
         function fun1(){
            echo "Fun 1";
         }
      }
      class class2 extends class1{
         function fun2(){
            echo "Fun 2";
         }
      }
      class class3 extends class2{
         function fun3(){
            echo "Fun 3";
         }
      }
      class class4 extends class3{
         function fun4(){
            echo "Fun 4";
         }
      }
      $obj = new class4();
      $obj->fun4(); 
   
   
   
   
   
   ?> -->





<!-- <//?php

 trait hello
 {
   function sayhello()
   {
      echo "Hello EveryOne..!!";
   }
   function Morninggreet()
   {
      echo " Good Morning";
   }

 }
 trait bye{
   function saybye()
   {
      echo "Bye EveryOne..!!";
   }
   function nightGreet()
   {
      echo "Good Night..!!";
   }
 }
 class A 
 {
   use hello;
 }

 class B 
 {
   use bye;
 }

 $obj = new A();
 $obj->sayhello();
 $obj->Morninggreet();
echo "<br><br>";
 $obj2 = new B();
 $obj2->saybye();
 $obj2->nightGreet();

?> -->
<!-- <//?php

   trait salam{
      function greet(){
         echo "Good Morning";
      }
      function greet1(){
         echo "Good Night";
      }
   }
   trait salam1{
      function greet(){
         echo "Good Evening";
      }
   }

   class showSalam{
      use salam , salam1{
         salam::greet insteadOf salam1;
         salam1::greet as newgreet;
      }
   }

   $obj = new showSalam();
   $obj->greet();
   $obj->greet1();
   $obj->newgreet();

?> -->
<!-- <//?php
   trait hello{
      function morning(){
         echo "Good Morning";
      }
   }
   trait bye{
      function Night(){
         echo "Good Night";
      }
   }

   class Show{
      use hello;
   }
   class Show1{
      use bye;
   }

   $obj = new Show();
   $obj->morning();

   $obj1 = new Show1();
   $obj1->Night();

?> -->