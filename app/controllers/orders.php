<?php

//This is not considered a proper documentation
//This class is not client facing  - admin section only
class Orders extends Controller{

     function index(){

        //you can do this if passing data to view
        $data["Page_title"] = "Orders";
        $this->view("zac/orders",$data);
        
    }


}