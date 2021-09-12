<?php

//this controller class calls the view method of the main "Controller" class to see if corresponding view exists 
class Home extends  Controller{

    //defualt method
    function index(){
        
        //you can do this if passing data to view
        $data["Page_title"] = "Home page";
        $this->view("zac/index",$data);


      
    }

   
}