<?php

//This is not considered a proper documentation
//This class not client facing  - admin section only
class Admin extends Controller{

    //defualt method
    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "admin";
        $this->view("zac/admin",$data);
        
    }


}