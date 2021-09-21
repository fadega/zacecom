<?php

//This is not considered proper documentation
//This class not client facing  - admin section only
class Categories extends Controller{

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

        //pass data to the view
        $data["Page_title"] = "Categories";
        // $this->view("zac/categories",$data);

        if(isset($_SESSION['logged'])){

            if($_SESSION['logged']['role']=="admin"){
                $this->view("zac/categories",$data);
            }else if($_SESSION['logged']['role']=="customer"){
                $this->view("zac/profile",$data);
            }
            
        }else{
            //lead them to 404 page
            $this->view("zac/home",$data);
            // die;
        }
        
    }


}