<?php

//This is not considered a proper documentation
//This class not client facing  - admin section only
class Admin extends Controller{

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
            
        
        }
        

        //check if a session for login is set and if it is set, and user is admin, get them to the dashboard
        //otherwise, get them to signin 
        $data["Page_title"] = "admin";
        if(isset($_SESSION['logged'])){

            if($_SESSION['logged']['role']=="admin"){
                $this->view("zac/admin",$data);
            } else if($_SESSION['logged']['role']=="customer"){
                $this->view("zac/home",$data); //will take non admin to 404 page
            }
            
        }else{
            //intentionally lead them to 404
            $this->view("zac/home",$data);
        }
  
    }


     //defualt method
     function categories(){
      
        // check if user is logged in
        $user = $this->loadModel('user');
        $user_info = $user->checkLogin();
        if(is_array($user_info)){
            $data['user_email'] = $user_info['email'];
            $data['name']=$user_info['name'];
            $data['role']=$user_info['role'];
            $data['userid']=$user_info['userid'];
    
        }
      
        


        //get table displayed in the categories area
        $conn =  Database::newInstance();
        $categories = $conn->read("SELECT *FROM category order by categoryName asc"); 
        
        $category = $this->loadModel('Category');
        $tbl_rows = $category->make_table($categories);
        // print_r($tbl_rows);
        if(is_array($categories)){
             $data["tbl_rows"] = $tbl_rows;
            
        }


        $data["Page_title"] = "admin";
        //check loggin and credential status
        if(isset($_SESSION['logged'])){

            if($_SESSION['logged']['role']=="admin"){
                $this->view("zac/categories",$data);
            } else if($_SESSION['logged']['role']=="customer"){
                $this->view("zac/home",$data); //will take non admin to 404 page
            }
            
        }else{
            //intentionally lead them to 404
            $this->view("zac/home",$data);
        }
       
  
    }





    //defualt method
    function products(){
      
        // check if user is logged in
        $user = $this->loadModel('user');
        $user_info = $user->checkLogin();
        if(is_array($user_info)){
            $data['user_email'] = $user_info['email'];
            $data['name']=$user_info['name'];
            $data['role']=$user_info['role'];
            $data['userid']=$user_info['userid'];
    
        }
      
        $data["Page_title"] = "admin";
        if(isset($_SESSION['logged'])){

            if($_SESSION['logged']['role']=="admin"){
                $this->view("zac/products",$data);
            } else if($_SESSION['logged']['role']=="customer"){
                $this->view("zac/home",$data); //will take non admin to 404 page
            }
            
        }else{
            //intentionally lead them to 404
            $this->view("zac/home",$data);
        }
  
    }


}