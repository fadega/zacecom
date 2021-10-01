<?php

//this controller class calls the view method of the main "Controller" class to see if corresponding view exists 
class Checkout extends  Controller{

    //defualt method
    function index(){
        
        // checkout custom form
        $conn = Database::newInstance();


        //load checkout model
        // $checkout = $this->loadModel('Checkout');
        // $check = $checkout->savecheckout($_POST,$_SESSION['checkout']);

        // $ROWS = $conn->read("SELECT *FROM product limit 10");
        // $data['ROWS'] = $ROWS;

        // if(count($_POST)>0){
        //     show($_POST);
        // }



       $data["Page_title"] = "Checkout";
        
    //    load the home view - > index.php
        $this->view("zac/checkout",$data);

     
    }

   
}