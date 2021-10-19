<?php


class Stationery extends Controller{

      function index(){

        //check if search was made 
        $search = false;
        $find   = '';
        if(isset($_GET['find'])){
            $find   = addslashes($_GET['find']);
            $search = true;
        }

        // check if user is logged in
        $user      = $this->loadModel('user');
        $user_info = $user->checkLogin();

        if(is_array($user_info)){
            $data['user_email'] = $user_info['email'];
            $data['name']       = $user_info['name'];
            $data['role']       = $user_info['role'];
            $data['userid']     = $user_info['userid'];
           
        }
       

        $db         = Database::newInstance();
        $categories = $db->read("SELECT *FROM category");

        $conn = Database::newInstance();

      
        if($search){
         
            $arr['slug']  = "%".$find."%"; 
            $query        = "SELECT *FROM product WHERE slug like :slug";
            $items_inshop = $conn->read($query,$arr);
            $data['item_searched'] = true;

        }else{
            //this will show if you are not searching, also, if you are using filters | it will show specific category, stationery in this case
            $db             = Database::newInstance();
            $arr['catname'] = "stationery";
            $cats           = $db->read("SELECT *FROM category WHERE categoryName =:catname limit 1",$arr);
           
            if($cats){
         
                $catid['category'] = (int)$cats[0]['id'];
                $sql               = "SELECT *FROM product WHERE category =:category";
                $items_inshop      = $conn->read($sql, $catid);
              
            }
               
        }
       
        
        $data["items_inshop"] = $items_inshop;
        $data["categories"]   = $categories;

        
        //pass data to view
        $data["Page_title"] = "Prouduts | Clothing";
        $data['search']     = true; //search box will show
        // load view - clothing.php
        $this->view("zac/clothing",$data);
        
    }

   
}