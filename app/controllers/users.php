<?php



class Users extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Users";
        $this->view("zac/users",$data);
        
    }


}