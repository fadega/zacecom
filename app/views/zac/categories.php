<?php

$this->view("zac/adminheader",$data);

?>

<style type="text/css">
    /* .add_category{
      width: 500px;
      height: 300px;
      background-color: #90999740;
      position: absolute ;
      padding: 5px;
    }
     */
     .hide{
       display:none;
     }

</style>


<!-- Dashboard right side section-->
<section class="mt-5 p-4 bg-light" id="display-area">

<h3 class="my-4">Admin</h3>
    

<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <!-- <h4><i class="fa fa-angle-right"></i>Product Categories</h4> -->
	                  	  	  <h4> Product Categories <button class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#addCategoryModal"><i class="fa fa-plus"></i>Add New</button></h4>
	                  	  	  
                               <!-- Pop up when we click add new -->
                          <!-- add categoty -->
                              <!-- Add Category Modal -->
                                  <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="addCategoryModal">Add Category</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <input type="text" name="categoryname" id ="catname" class="form-control form-control-lg" placeholder="Enter category name" >
                                          <select id = "status" class="form-select form-control-lg my-2" aria-label="Default select example" placeholder="Status">
                                              <option selected>Select Status</option>
                                              <option value="0">0</option>
                                              <option value="1">1</option>
                                          </select>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary" id="btnsave" onclick="collect_data(event)">Save </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              <!-- END Add category Modal up when we click add new -->

                    
                            <!-- <hr> -->
                              <thead>
                              <tr>
                                  <th class="hidden-phone"><i class="fa faa-question-circle"></i> ID #</th>
                                  <th><i class="fa faa-bullhorn"></i> Category Name</th>
                                  <th><i class=" fa faa-edit"></i> Status</th>
                                  <th><i class=" fa faa-edit"></i>Action</th>
                              </tr>
                              </thead>
                              <tbody id="table_body">
                                  <?php
                                       
                                    //this line prints table [check full code on admin.php]
                                    // echo $data['tbl_rows'];
                                    // if($data['tbl_rows']!=""){
                                    //         echo $tbl_rows;
                                    // }
                                   
                                    echo $tbl_rows;
                                    //echo  $data['tbl_rows'];
                                   
                                   
                                    
                              
                                ?>
                              <!-- <tr>
                                  <td><a href="basic_table.html#" class="text-dark">Clothing</a></td>
                                  <td class="hidden-phone">Cloth items (T-shirts, Cap/Hat)</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr> -->
            
                              </tbody>
                          </table>

                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->


              <!-- Javascript code to handle  -->




<script>

    // $(document).ready(function(){
        // alert("readyy");
        function collect_data(e){
        // let category = document.querySelector("#catname").value;
        let category = document.getElementById("catname").value;
        let select = document.getElementById('status');
        let status = select.options[select.selectedIndex].value;
        if(category.trim() == "" || !isNaN(category.trim())){
            alert("please enter a valid category name");
            
        }
        let catetory = category.trim();
        send_data({
            category:category,
            data_type:'addcategory',
            status:status
            
        });
       

    }
    function send_data(data ={}){
                
        let ajax = new XMLHttpRequest();
        ajax.addEventListener('readystatechange', function(){
            //check if there is response
             if(ajax.readyState == 4 && ajax.status == 200){
                handle_results(ajax.responseText);

            }
        });
        //send data
        ajax.open("POST","<?=ROOT?>ajax", true);
        ajax.send(JSON.stringify(data));

    function  handle_results(result){
        // console.log(result);
          if(result !==""){
        
            let obj= JSON.parse(result);
            // console.log(obj);

            // alert(typeof obj);
            if(typeof obj.message_type!='undefined'){
                // alert("test 2222");
                if(obj.message_type=="info"){
                    
                    alert(obj.message);
                    // alert("successsss");
                    document.getElementById("catname").value = "";

                    let table_body = document.getElementById("table_body");
                    table_body.innerHTML=obj.data;

 
                }else{
                    
                    alert("Error adding category");
                    //  alert(obj.message);
                }

               
            }
           

        }
        

    }

    //here are the function the it complain about
  
    function edit_row(event,rowid){
      
        console.log(id);
        console.log("Test Edit clicked");
    }

    function delete_row(event,rowid){
        console.log(id);
        console.log("Test Delete clicked");
        
    }


    }   
    



   // });

    
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

$this->view("zac/adminfooter",$data);

?>
