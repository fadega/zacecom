<?php


class Settings extends Controller{

    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Settings";
        $this->view("zac/settings",$data);
        
    }


}