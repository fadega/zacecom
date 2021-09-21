<?php

 
class Ajax extends  Controller{

    //defualt method
    function index(){

      $data = file_get_contents("php://input");
      $data = json_decode($data); 
      //print_r(json_decode($data,true)); //returns array


      if(is_object($data)){
        if($data->data_type == "addcategory"){
          //add new category
           $category = $this->loadModel('Category');
           $check =  $category->create($data);

           if($check && $_SESSION['error']=="" ){
               $arr['message'] ="Category added successfully";
               $arr['message_type'] = "info";
               $cats = $category->getCategories();
              //  print_r($cats);
               $arr['data'] = $category->make_table($cats);

               echo json_encode($arr);

           }else{
              $arr['message'] = $_SESSION['error'];
              $arr['message_type'] = "error";
              $arr['data'] = "";
           
              echo json_encode($arr);

              unset($_SESSION['error']);
          
           }
     
           }
       
      }
    


    }


   
}