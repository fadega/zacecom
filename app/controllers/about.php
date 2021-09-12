<?php
/**
 * Sample documentation 
 * About class makes use of the contrller's view method and feeds the about view  to the url if it exists
 * 
 */

class About extends Controller{

    //defualt method
    function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "About";
        
        $this->view("zac/about",$data);
        
    }


}