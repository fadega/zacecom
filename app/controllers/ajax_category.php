<?php

 
class Ajax_category extends  Controller{

    //defualt method
    function index(){

      $data = file_get_contents("php://input");
      $data = json_decode($data); 
      
      if(is_object($data) && isset($data->data_type)){

        //create instance of Category Model to access methods like create, editCategory, deleteCategory etc ..
        $category = $this->loadModel('Category');

        if($data->data_type == "add_new"){
         
                
          //add new category
          // $check = $category->create($data);
           $category->create($data);
    
          if(isset($_SESSION['error']) && $_SESSION['error']!=""){
            
            $arr['message'] = $_SESSION['error'];
            $_SESSION['error']=""; //unset session error
            $arr['message_type'] = 'error';
            $arr['data'] = "";
            $arr['data_type'] = "add_new";
  
            echo json_encode($arr);
  
          }else{
            
            $arr['message'] = "Category added successfully";
            $arr['message_type'] = 'info';
            $cats = $category->getCategories();
            $arr['data'] = $category->make_table($cats);
            $arr['data_type'] = "add_new";
  
            echo json_encode($arr);
          }

        }elseif($data->data_type == "delete_row"){

          $category->deleteCategory($data->id);
          $arr['message'] = "Record deleted successfully!";
          $_SESSION['error']=""; //unset session error
          $arr['message_type'] = 'info';
          $arr['data_type'] = "delete_row";
          $cats = $category->getCategories();
          $arr['data'] = $category->make_table($cats);
          
 
           echo json_encode($arr);

       }elseif($data->data_type == "edit_row"){

        $category->editCategory($data->id,$data->category);
        $arr['message'] = "Record updated successfully!";
        $_SESSION['error']=""; //unset session error
        $arr['message_type'] = 'info';
        $arr['data_type'] = "edit_row";
        $cats = $category->getCategories();
        $arr['data'] = $category->make_table($cats);
        

         echo json_encode($arr);

     }
  
      }



      // if(is_object($data)){
      //   echo "data_type is set <br>";
      //   if($data->data_type == "add_new"){
      //     //add new category
      //      $category = $this->loadModel('Category');
      //      $check =  $category->create($data);

      //      if($check && $_SESSION['error']=="" ){
      //          $arr['message'] ="Category added successfully";
      //          $arr['message_type'] = "info";
      //          $cats = $category->getCategories();
      //         //  print_r($cats);
      //          $arr['data'] = $category->make_table($cats);

      //          echo json_encode($arr);

      //      }else{
      //         $arr['message'] = $_SESSION['error'];
      //         $arr['message_type'] = "error";
      //         $arr['data'] = "";
           
      //         echo json_encode($arr);

      //         unset($_SESSION['error']);
          
      //      }
     
      //      }
       
      // }
    


    } //Method index ends here


   
}