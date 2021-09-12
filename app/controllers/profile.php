<?php


class Profile extends Controller{

     function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Profile";
        $this->view("zac/profile",$data);
        
    }


}