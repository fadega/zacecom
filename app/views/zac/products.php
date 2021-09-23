<?php

$this->view("zac/adminheader",$data);
$conn = Database::newInstance();
// if($conn){
//     echo "<br /><br /><br /><br /><br /><br />connected from products php dsgsaaaaaaaaa <br />";
// }

$query = "select *from category";
$result= $conn->read($query);

?>





<!-- Dashboard right side section-->
<section class="mt-5 p-4 bg-light" id="display-area">

<h3 class="my-4">Admin</h3>
    

<div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <!-- <h4><i class="fa fa-angle-right"></i>Product Categories</h4> -->
                    <h4> Products  <button class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#addProductsModal"><i class="fa fa-plus"></i>Add Product</button></h4>
                    
                
                    <!-- Add Product Modal -->
                        <div class="modal fade" id="addProductsModal" tabindex="-1" aria-labelledby="addProductsModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProduct">Add Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    
                                    <div class="col-md-6 left">
                                        <input type="text" name="name" id ="productname" class="form-control form-control-lg mb-3" placeholder="Product name" >
                                        <input type="text" name="price" id ="price" class="form-control form-control-lg mb-3" placeholder="Price"  >
                                        <input type="text" name="quantity" id ="quantity" class="form-control form-control-lg mb-3" placeholder="Quantity"  >
                                       
                                        <select  id="category" class="form-select form-select-lg mb-3" aria-label=".form-select ">
                                            <option selected>Select Category</option>
                                            <?php
                                            if($result){
                                                for($count =0; $count < count($result); $count++){?>
                                                     <option value="<?php echo (int)$result[$count]['id'];?>"><?php echo $result[$count]['categoryName'];?></option>
                                               <?php }
                                            } ?>
                                        </select>

                                        
                                    </div>

                                    <div class="col-md-6 right">
                                        <div>
                                            <label for="formFileLg" class="form-label">Upload Image1</label>
                                            <input class="form-control form-control-lg mb-3" id="image1" type="file">
                                        </div>
                                        <div>
                                            <label for="formFileLg" class="form-label">Upload Image2</label>
                                            <input class="form-control form-control-lg mb-3" id="image2" type="file">
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" placeholder="Description" id="description" style="height: 100px" ></textarea>
                                            <label for="description">Description</label>
                                        </div>
           
                                    </div>
                                </div> <!--Row inside card-->
                             </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="savepro" onclick=" collect_data(event)">Save </button>
                            </div>
                            </div>
                         </div>
                        </div>
                    <!-- END Add product Modal -->

                     <!-- EDIT Product Modal -->
                    <div class="modal fade" id="editProductsModal" tabindex="-1" aria-labelledby="addProductsModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCategoryModal">Edit Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    
                                    <div class="col-md-6 left">
                                        <input type="text" name="name" id ="name" class="form-control form-control-lg mb-3" >
                                        <input type="text" name="price" id ="price" class="form-control form-control-lg mb-3" >
                                        <input type="text" name="quantity" id ="quaintity" class="form-control form-control-lg mb-3" >
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select example">
                                            <option selected id="category"></option>
                                            <option value="1">Clothing</option>
                                            <option value="2">House</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 right">
                                        <div>
                                            <label for="formFileLg" class="form-label">Upload Image1</label>
                                            <input class="form-control form-control-lg mb-3" id="image1" type="file">
                                        </div>
                                        <div>
                                            <label for="formFileLg" class="form-label">Upload Image2</label>
                                            <input class="form-control form-control-lg mb-3" id="image2" type="file">
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control mb-3" placeholder="Description" id="description" style="height: 100px" ></textarea>
                                            <label for="description">Description</label>
                                        </div>
           
                                    </div>
                                </div> 
                             </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="btnupdate" onclick="collect_edit_data(event)">update </button>
                            </div>
                            </div>
                         </div>
                        </div>

                    <!-- END  EDIT Product Modal -->

        
                <!-- <hr> -->
                    <thead>
                    <tr>
                    
                      
                        <th><i class="fa faa-bullhorn"></i> Name</th>
                        <th><i class=" fa faa-edit"></i> Description</th>
                        <th><i class=" fa faa-edit"></i>Price</th>
                        <th><i class="fa faa-bullhorn"></i> Quatity</th>
                        <th><i class="fa faa-bullhorn"></i> Category</th>
                        <th><i class="bi bi-file-earmark-image"></i>Image 1</th>
                        <th><i class="bi bi-file-earmark-image"></i>Image 2</th>
                       <!-- <th><i class="bi bi-calendar3"></i> Date</th> -->
                        <th><i class="bi bi-calendar3"></i> Action </th>
                    </tr>
                    </thead>
                    <tbody id="product_table_body">
                        <?php
                            
                        //this line prints table [check full code on admin.php]
                                            
                        echo $tbl_rows;
                        //echo  $data['tbl_rows'];                              
                    ?>

                    </tbody>
                </table>

            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->



                  

 <!-- Javascript code to handle  -->

    


<script>

    var EDIT_ID =0;
    // function allert(e){
    //     alert("clicked");
    // }
    function collect_data(e){
        let name = document.getElementById("productname").value.trim();
        let description = document.getElementById("description").value.trim();
        let price = document.getElementById("price").value.trim();
        let quantity = document.getElementById("quantity").value.trim();
        // let slag = document.getElementById("slag").value.trim();
        let image1 = "";
        let image2 = "";
       
        let selectElement = document.querySelector('#category');
        let category  = selectElement.options[selectElement.selectedIndex].value;

        // if(productname == "" || !isNaN(productname)){
        //     alert("please enter a valid product name");
        // }

        console.log(name);
        console.log(description);
        console.log(price);
        console.log(category);
        console.log(quantity);  
       

 
        send_data({
            name:name,
            description:description,
            price:price,          
            category:category,
            quantity:quantity,
            // image1:"",
            // image2:"",
            data_type:"add_new"
            }); 

    }


    function send_data(data ={}){

        var ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', function(){
            //check if there is response
             if(ajax.readyState == 4 && ajax.status == 200){
                 //handle the response
                handle_results(ajax.responseText);

            }
        });
        //send data
        ajax.open("POST","<?=ROOT?>ajax_products", true);
        ajax.send(JSON.stringify(data));

   
    }  

    /**
     * This is a complex function that handles ajax response 
     * New line braces { } are used to make where each condition ends - this style isn't followed in the rest of the code
     * @param mixed result - ajax response data
     * @return void - prints table and error messages
     */
    function  handle_results(result)
    {      
        //  alert(typeof result);
        //   console.log(result);
          if(result!=="")
          {
            // console.log(result);
            let obj= JSON.parse(result);
            // alert("Obje alert ", obj);
            // alert(obj.data_type);
            if(typeof obj.data_type!=='undefined')
            {
                if(obj.data_type == "add_new")
                {
                    alert("add reached");
                    if(obj.message_type=="info")
                    {
                        alert(obj.message);
                        document.getElementById("productname").value = "";

                        let table_body = document.getElementById("product_table_body");
                        table_body.innerHTML=obj.data;
                        // alert(obj.message);
                    }else
                    {
                        // alert("Error adding category");

                        alert(obj.message);
                    }

                }else if(obj.data_type == "delete_row")
                {
                    alert(obj.message);
                    let table_body = document.getElementById("product_table_body");
                    table_body.innerHTML=obj.data;
                    // alert(obj.message);
                    
                }else if(obj.data_type == "edit_row")
                {    alert(obj.message);
                    let table_body = document.getElementById("product_table_body");
                    table_body.innerHTML=obj.data;
                    alert(obj.message);
                    
                }

            }
        }
     }
    
      
    /**
     * Function to bring data to be edited
     * @param event e
     * @param number id
     * @returnvoid
     */
    function edit_record(id, category){
        let txt_category = document.getElementById("editcatname");
        txt_category.value = category;

        EDIT_ID =id;
       
    }

    /**
     * Function to actually pass data to pushed to database
     * @param event e
     * @return void
     */
    function update_category_data(e){
        let category = document.getElementById("editcatname").value.trim();
        if (category == "" || !isNaN(category)) {
            alert("Check if characteres entered are valid");
        }

        send_data({
            id:EDIT_ID,
            category:category,
            data_type: "edit_row"   
        });

    }

    /**
     * Function to delete a record
     * @param event e
     * @param number id
     * @return void
     */
    function delete_record(e,id){
        
        if(!confirm("Are you sure to delete the record?")){
            return; //exit
        }
        send_data({
            id:id,
            data_type: "delete_row"   
        });
        
    }

   
    
    
 </script>
 


 <!-- Table backup -->

 
<!-- div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Product Categories</h4> -->
	                  	  	  <!-- <h4> Product Categories <button class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#addCategoryModal"><i class="fa fa-plus"></i>Add New</button></h4>
	                  	                           
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa faa-bullhorn"></i> Category</th>
                                  <th class="hidden-phone"><i class="fa faa-question-circle"></i> Descrpition</th>
                                   <th><i class=" fa faa-edit"></i> Status</th>
                                   <th><i class=" fa faa-edit"></i>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="basic_table.html#" class="text-dark">Clothing</a></td>
                                  <td class="hidden-phone">Cloth items (T-shirts, Cap/Hat)</td>
                                  
                                  <td><span class="label label-info label-mini">1</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> 
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
            
                              </tbody>
                          </table>

                      </div><!-- End content-panel -->
                  <!--/div><!-- End col-md-12 -->
              <!--/div> <!-- row -->
 <!-- End Table backup -->



 


</section> 
<!-- End Dashboard right side section-->







<!-- Admin footer and  assets  -->
<?php $this->view("zac/adminassets",$data); 

// $this->view("zac/adminfooter",$data);

?>
