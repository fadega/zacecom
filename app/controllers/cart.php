<?php

//This is not considered a proper documentation
class Cart extends Controller{

    //defualt method
    function index(){

        // check if user is logged in
        $user = $this->loadModel('user');
        $user_info = $user->checkLogin();
        if(is_array($user_info)){
            $data['user_email'] = $user_info['email'];
            $data['name']=$user_info['name'];
            $data['role']=$user_info['role'];
            $data['userid']=$user_info['userid'];
            
           // show($data['user_email']);
           //show($user_info['role']);
           
        }

        //pass data to view
        $data["Page_title"] = "Shopping Cart";
       
        //load view -> cart.php
        $this->view("zac/cart",$data);
        
    }


}