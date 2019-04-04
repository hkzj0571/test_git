<?php

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

/**
 * 
 */
 	class father{
     public function a(){
      echo "function a";
     }
     private function b(){
      echo "function b";
     }
     protected function c(){
      echo "function c";
     }
    }
    //子类
    class child extends father{
      function d(){
        parent::a();//调用父类的a方法
      }
      function e(){
       parent::c(); //调用父类的c方法
      }
     function f(){
        parent::b(); //调用父类的b方法
      }
    }