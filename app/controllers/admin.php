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
            
           // show($data['user_email']);
           //show($user_info['role']);;
            
        }

        //you can do this if passing data to view
        $data["Page_title"] = "admin";
        $this->view("zac/admin",$data);

       
        
    }


}