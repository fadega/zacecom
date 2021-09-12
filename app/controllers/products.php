<?php

//This is not considered a proper documentation
//This class not client facing  - admin section only
class Products extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Products";
        $this->view("zac/products",$data);
        
    }


}