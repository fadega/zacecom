<?php
/**
 * Undocumented class
 */
class Category{
    
   
    public function create($data){
       $_SESSION['error']="";
       $conn =  Database::db_connect();
       $arr['category'] = ucwords($data->category);
       $arr['status'] = $data->status;
    //    $arr['status'] = $data['status'];
       if(!preg_match("/^[a-zA-Z ]+$/",trim($arr['category']))){
        //    echo "<br/> if you see this, the preg_match is bulshiting<br />";
           $_SESSION['error'] = "Please enter valid category name";

       }
       if (!isset($_SESSION['error']) || $_SESSION['error']=="") {

            //check if the category already exists
           $sql = "SELECT *FROM category where categoryName = :category && status=:status";
           $check1 = $conn->read($sql,$arr);
           if (is_array($check1) && count($check1) >=1) {
               $_SESSION['error']="ERROR: Duplicate Record";
               return false;
           } 

            //if it gets in here, no duplicate record found
            $query = "INSERT INTO category (categoryName,status) values(:category, :status)";
            $check = $conn->write($query, $arr);
            if ($check) {
                return true;
            }
          
       }

        

    }

    public function editCategory($data){

        
    }

    public function deleteCategory($data){
        
    }

    public function getCategories(){
        $conn =  Database::newInstance();
       
        return $conn->read("SELECT *FROM category order by id desc");        
    }

    
    function make_table($cats){
        $res="";

        if(is_array($cats)){
          foreach ($cats as $row) {
            
            // print_r($cat_row['categoryName']);
            $row['status'] = $row['status']? "Enabled" : "Disabled";

            //converting the array to object, just to use arrow instead of 
            $row = (object) $row;
            $id= $row->id;
         
            $res .= "<tr>";
         
              $res.='                    
                   <td><a href="basic_table.html#" class="text-dark">'.$row->id.'</a></td>
                   <td><a href="basic_table.html#" class="text-dark">'.$row->categoryName .'</a></td>
                   <td><a href="basic_table.html#" class="text-dark">'.$row->status.'</a></td>
                   <td>
                       <button id="editrow" class="btn btn-primary btn-xs" onclick="edit_row(event,'.$row->id.')"><i class="fa fa-pencil"></i></button>
                       <button id="deleterow"class="btn btn-danger btn-xs"  onclick="delete_row(event,'.$row->id.')"><i class="fa fa-trash-o "></i></button>
                   </td>';
         
            $res.= "</tr>";
  
          }
    
  
        }
        if($res){
          return $res;
        }else{
          return false;
        }
        
  
      }

} //end of class

