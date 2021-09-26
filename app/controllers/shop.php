<?php



class Shop extends Controller{

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
       

        $db = Database::newInstance();
        $categories = $db->read("SELECT *FROM category");

        $conn = Database::newInstance();
        // $items_inshop = $conn->read("SELECT *FROM product limit 10");
        $items_inshop = $conn->read("SELECT *FROM product");
        
        $data["items_inshop"] = $items_inshop;
        $data["categories"] = $categories;

        //pass data to view
        $data["Page_title"] = "Products";
        // load view - product.php
        $this->view("zac/shop",$data);
        
    }

   
}