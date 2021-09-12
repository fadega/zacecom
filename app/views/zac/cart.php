<?php

 
$this->view("zac/header",$data);
//will check for items on cart session and display them


?>
   <!-- Cart page row starts  -->
    <div class="row justify-content-center" style="margin:100px 0px;">
     <div class="col-sm-12 col-md-6 col-lg-8 py-3" style="border:1px solid #eee;">
       <h4 class="text-secondary">Items in your cart</h4>
              <div class="table-responsive">
                  <table class="table align-middle table-borderless">

                      <tbody>
                      <tr>
                          <td width="93">
                              
                          </td>
                          <td>
                              <h3> 
                                  <a href="#" class="text-success"> T-shirt</a>
                              </h3>
                              <p class="small">
                                  Some product description goes here ... this comes from the database
                              </p>
                              <dl class="small m-b-none">
                                  <dt>More stuff to describe product..</dt>
                                  <dd>Size and more stuff to describe it.</dd>
                              </dl>

                              <div class="m-t-sm">
                                   <a href="#" class="text-muted"><i class="fa fa-trash" style="color:#e63946;"></i> Remove item</a>
                              </div>
                          </td>

                          <td>
                              $19.00
                          </td>
                          <td width="67">
                              <input type="text" class="form-control" placeholder="1">
                          </td>
                          <td>
                              <h5>
                                  $19.00
                              </h5>
                          </td>
                      </tr>
                      <tr>
                          <td width="93">
                              <div class="cart-product-imitation">
                              </div>
                          </td>
                          <td>
                              <h3>
                                  <a href="#" class="text-success">Marble Mug </a>
                               </h3>
                              <p class="small">
                                  Some product description goes here ... this comes from the database
                              </p>
                              <dl class="small m-b-none">
                                  <dt>More stuff to describe product..</dt>
                                  <dd>Size and more stuff to describe it.</dd>
                              </dl>

                              <div class="m-t-sm">
                                   <a href="#" class="text-muted"><i class="fa fa-trash" style="color:#e63946;"></i> Remove item</a>
                              </div>
                          </td>

                          <td>
                              $11.00
                          </td>
                          <td width="67">
                              <input type="text" class="form-control" placeholder="2">
                          </td>
                          <td>
                              <h5>
                                  $22.00
                              </h5>
                          </td>

                      </tr>
                     </tbody>
                  </table>
                  <div  class= "d-flex justify-content-end my-5">
                      <h4 class=" mx-2 ">Total:</h4> <span>
                      <h4 class=" me-2  ">$41.00</h4> </span>
                  </div>
                  <div  class= "d-flex justify-content-end">
                      <a href="#" class=" btn btn-outline-warning mx-2 ">Cancel</a> <span>
                      <a href="#" class=" btn btn-outline-success text-dark" style="background-color:#06d6a0;">Checkout</a> </span>
                  </div>
                  
               </div>
              </div>
           </div>
        <!--End Cart page row -->


        <!-- Including the footer here -->
<?php $this->view("zac/footer",$data);?>