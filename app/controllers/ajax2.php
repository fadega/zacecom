<?php

 
class Ajax2 extends  Controller{

    //defualt method
    function index(){

    //   echo "sent from ajax222222 - post data";
        
      //print_r($_POST);
      
    

    echo "sent as JSON object<br/>";
      $data = file_get_contents("php://input");
      print_r(json_decode($data)); //returns  object
      print_r(json_decode($data,true)); //returns array
    



    }

   
}