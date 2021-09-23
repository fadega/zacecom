<?php

 
class Ajax_products extends  Controller{

    //defualt method
    function index(){

      $data = file_get_contents("php://input");
      $data = json_decode($data); 
    
      
      if(is_object($data) && isset($data->data_type)){

        //create instance of product Model to access methods like create, editProduct, deleteproduct etc ..
        $product = $this->loadModel('Product');

        if($data->data_type == "add_new"){
         
                
          //add new product
          // $check = $product->create($data);
           $product->create($data);
    
          if(isset($_SESSION['error']) && $_SESSION['error']!=""){
            
            $arr['message'] = $_SESSION['error'];
            $_SESSION['error']=""; //unset session error
            $arr['message_type'] = 'error';
            $arr['data'] = "";
            $arr['data_type'] = "add_new";
  
            echo json_encode($arr);
  
          }else{
            
            $arr['message'] = "Product added successfully";
            $arr['message_type'] = 'info';
            $products = $product->getProducts();
            $arr['data'] = $product->make_table($products);
            $arr['data_type'] = "add_new";
  
            echo json_encode($arr);
          }

        }elseif($data->data_type == "delete_row"){

          $product->deleteProduct($data->id);
          $arr['message'] = "Record deleted successfully!";
          $_SESSION['error']=""; //unset session error
          $arr['message_type'] = 'info';
          $arr['data_type'] = "delete_row";
          $cats = $product->Products();
          $arr['data'] = $product->make_table($cats);
          
 
           echo json_encode($arr);

       }elseif($data->data_type == "edit_row"){

        $product->editProduct($data->id,$data->product);
        $arr['message'] = "Record updated successfully!";
        $_SESSION['error']=""; //unset session error
        $arr['message_type'] = 'info';
        $arr['data_type'] = "edit_row";
        $cats = $product->getProducts();
        $arr['data'] = $product->make_table($cats);
        

         echo json_encode($arr);

     }
  
      }



    


    } //Method index ends here


   
}