<?php

//This is not considered a proper documentation
//This class not client facing  - admin section only
class Customers extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Customers";
        $this->view("zac/customers",$data);
        
    }


}