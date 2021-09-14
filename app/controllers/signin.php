<?php



class Signin extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Signin";

        if($_SERVER['REQUEST_METHOD'] == "POST"){
           
            // this is a debuggin code
            // show($_POST);
            $user = $this->loadModel("User");
            $user->signin($_POST);
            
        }
        $this->view("zac/signin",$data);
        
    }


}