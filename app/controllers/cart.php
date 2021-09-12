<?php

//This is not considered a proper documentation
class Cart extends Controller{

    //defualt method
    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Shopping Cart";
        $this->view("zac/cart",$data);
        
    }


}