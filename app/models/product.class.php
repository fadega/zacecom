<?php
/**
 * Undocumented class
 */
class Product{
    
   
    public function create($data){
       $_SESSION['error']="";
       $conn =  Database::db_connect();
       
       $pro_data['name'] = $data->name;   
       $pro_data['description'] = $data->description;                
       $pro_data['price'] = $data->price;                            
       $pro_data['category'] = (int)$data->category;                    
       $pro_data['quantity'] = $data->quantity;                      
       $pro_data['image1'] = NULL;                                 
       $pro_data['image2'] = NULL; 
      //  $pro_data['enteredon'] = date('Y/m/d H:i:s');          

  
       if(!preg_match("/^[a-zA-Z ]+$/",trim($pro_data['name']))){
              $_SESSION['error'] = "Please enter valid product name";

       }
       if (!isset($_SESSION['error']) || $_SESSION['error']=="") {

            //check if the category already exists
         
           $sql = "SELECT name FROM product where name = :name limit 1";
           $arr['name']= $pro_data['name'];
           $check1 = $conn->read($sql,$arr);
           if (is_array($check1) && count($check1) >=1) {
               $_SESSION['error']="ERROR: Duplicate Product";
               return false;
           } 

            //if it gets in here, no duplicate record found
           
          //  The complete query is this one
            // $query = "INSERT INTO product (name, description, price, category, quantity, enteredby, image1,image2, date) VALUES (:name, :description, :price, :category, :quantity, :enteredby, :image1,:image2, :date)";
            
            $query = "INSERT INTO product (name, description, price, category, quantity, image1,image2) VALUES (:name, :description, :price, :category, :quantity, :image1,:image2)";
     
           $check = $conn->write($query,$pro_data);
            if ($check) {
                 return true;
            }else{
              return $_SESSION['error'] = "Problem with write - insertion query";
            }
          
       }

        

    }

    public function editProduct($id,$name){

      $conn =  Database::newInstance();
      $arr['id'] = (int)$id;
      $arr['category'] = $name;
      $query = "UPDATE product SET name = :name WHERE id = :id limit 1 ";
      $conn->write($query,$arr); 

        
    }

    /**
     * Function to delete category
     * @param int $id
     * 
     * @return void
     */
    public function deleteProduct($id){
      $conn =  Database::newInstance();
      $id = (int)$id;
      $query = "DELETE FROM product WHERE id ='$id' limit 1 ";
      $conn->write($query); 
        
    }

    public function getProducts(){
        $conn =  Database::newInstance();
       
        return $conn->read("SELECT *FROM product order by id asc");        
    }

    
    function make_table($products){
      $db =  Database::newInstance();

      
        $result="";

        if(is_array($products)){
          $products = (object)$products; // this is not object
              
          $counter = 0;
          foreach ($products as $product) {
          
            
     
            $args = $product["id"]. ",'". $product["name"]."'";
         
            //From the category table get the categoryname  associated with this product
            $catarr['id']= $product['category'];
            $sql = "SELECT categoryName FROM category where id =:id";
            $response = $db->read($sql,$catarr);
            $category = "";
            if($response){
               $category = $response[$counter]["categoryName"];
             }
            
         
            $result .= "<tr>";

             
              $result.='                    
                   
              <td>'.$product["name"].'</td>
              <td>'.$product["description"].'</td>
              <td>'.$product["price"].'</td>
              <td>'.$product["quantity"] .'</td>
              <td>'.$category .'</td>              
              <td>'.$product["image1"] .'</td>
              <td>'.$product["image2"] .'</td>
            
          
                  
                   <td>
                       <button class="btn btn-primary btn-xs"  data-bs-toggle="modal" data-bs-target="#editProductsModal" onclick="edit_record('.$args.')"><i class="fa fa-pencil"></i></button>
                       <button class="btn btn-danger btn-xs"  onclick="delete_record(event,'.$product["id"].')"><i class="fa fa-trash-o "></i></button>
                   </td>';
         
            $result.= "</tr>";
            
          }
          $counter++;
    
  
        }
        return $result;
  
      }

      // <td><span onclick="disable_record('.$args.')" class ="label label-info label-mini text-secondary p-2 rounded" style="cursor:pointer; background-color:'.$color.'">'.$cat_row->status.'</span></td>

} //end of class

