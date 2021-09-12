<?php


//This is not considered a proper documentation
class Contact extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Contact us";
        $this->view("zac/contact",$data);
        
    }


}