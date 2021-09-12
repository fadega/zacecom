<?php



class Signin extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Signin";
        $this->view("zac/signin",$data);
        
    }


}