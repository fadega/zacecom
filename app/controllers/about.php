<?php
/**
 * Sample documentation 
 * About class makes use of the contrller's view method and feeds the about view  to the url if it exists
 * 
 */

class About extends Controller{

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
        $data["Page_title"] = "About";
       
        //load view ->about.php
        $this->view("zac/about",$data);
        
    }


}