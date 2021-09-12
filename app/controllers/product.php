<?php



class Product extends Controller{

      function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Products";
        $this->view("zac/product",$data);
        
    }

   
}