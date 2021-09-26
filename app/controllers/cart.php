<?php

//This is not considered a proper documentation
class Cart extends Controller{

    //defualt method
    function index($id = ''){

     
        $id = esc($id);
        $conn = Database::newInstance();
        $CARTROWS = false;
        $product = $conn->read("SELECT *FROM product where id = :id limit 1",["id"=>$id]);

        //does the product exist [check before adding to acrt]
        if($product){
            
            $product = (object)$product[0]; // just get the single product details 
         
            // check if it exists in a cart
            if(isset($_SESSION['CART'])){
                $ids = array_column($_SESSION['CART'],'id');
                if(in_array($product->id, $ids )){ // if already exist -add quantity
                    $key = array_search($product->id, $ids);//get the key
                    $_SESSION['CART'][$key]['qty']++;

                }else{
                    $arr        = [];
                    $arr['id']  = $product->id;
                    $arr['name'] =  $product->name;   
                    $arr['price'] =  $product->price;   
                    $arr['qty'] = 1;       
                    $_SESSION['CART'][]  = $arr;

                }


            }else{ //it means it's not in the cart already
                
                $arr        = [];
                $arr['id']  = $product->id;
                $arr['name'] =  $product->name;   
                $arr['price']  = $product->price;
                $arr['qty'] = 1;       
                $_SESSION['CART'][]  = $arr;
               

            }
            
        }
        
        $product_ids = [];
        if(isset($_SESSION['CART'])){
            $product_ids = array_column($_SESSION['CART'],'id');

            $str_ids = "'" . implode("','", $product_ids) ."'";
            $CARTROWS = $conn->read("SELECT *FROM product WHERE id in ($str_ids)");
            
            
        }
       
        // show($ROWS); just as they come from the database
     
        if(is_array($CARTROWS)){  //loop through items only if we have items returned from the product table
            foreach ($CARTROWS as $key => $row) {
                foreach($_SESSION['CART'] as $item){
                    if($row['id'] == $item['id']){
                        $CARTROWS[$key]['cart_qty'] = $item['qty'];
                        break;
    
                    }
                }
                
            }

        }
      
    //    show($ROWS);//modified with the above code to hold how many of each are there
       $data["Page_title"] = "Shopping Cart";
       $data['CARTROWS'] = $CARTROWS;

        //load view -> cart.php
       $this->view("zac/cart",$data);
      //header("Location:" .ROOT."shop");
       
        
    }


}