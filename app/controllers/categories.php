<?php

//This is not considered proper documentation
//This class not client facing  - admin section only
class Categories extends Controller{

    //defualt method
    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Categories";
        $this->view("zac/categories",$data);
        
    }


}