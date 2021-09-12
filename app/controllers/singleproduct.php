<?php


class Singleproduct extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Product";
        $this->view("zac/singleproduct",$data);
        
    }

   
}