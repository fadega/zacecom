<?php

 
$this->view("zac/header",$data);



?>
   <!-- Cart page row starts  -->
    <div class="row justify-content-center" style="margin:100px 0px;">
     <div class="col-sm-12 col-md-6 col-lg-8 py-3" style="border:1px solid #eee;">
       <h4 class="text-secondary">Your Shopping Cart</h4>
              <div class="table-responsive">
                  <table class="table align-middle table-borderless">

                      <tbody>

                      <?php if($CARTROWS):?>
                        <?php foreach($CARTROWS as $row):?>
                        <tr>
                            <td width="93"></td>
                            <td>
                                <h3> <a href="#" class="text-success"> <?=$row['name']?></a></h3>
                                <p class="small"> Items details </p>
                                <dl class="small m-b-none">
                                    <dt><?=$row['description']?></dt>
                                    <dd>product ID: EI<?=$row['id']?></dd>
                                </dl>

                                <div class="m-t-sm">
                                    <a href="#" class="text-muted"><i class="fa fa-trash" style="color:#e63946;"></i> Remove item</a>
                                </div>
                            </td>

                            <td><?=$row['price']?></td>
                            <td  >
                                <div class="row">
                                    <div class="col-md-4 ">
                                    <a href="cart_quantity_up "><i class="bi bi-plus-lg"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                    <input type="text" class="form-control " readonly placeholder="0" value="<?=$row['cart_qty']?>">
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-start">
                                    <a href="cart_quantity_down text-dark"><i class="bi bi-dash-lg"></i></a>
                                    </div>
                                </div>
                                  
                               
                            </td>
                            <td> <h5> $ <?= $row['cart_qty'] * $row['price']?> </h5> </td>
                        </tr>

                        <?php endforeach;?>
                        <?php else:?>
                            <h4 class="fw-bold text-danger"> Your cart is empty! <span> <a href="<?=ROOT?>shop">Shop here</a> </span> </h4>
                        <?php endif;?>
                 

                      
                     </tbody>

                  </table>

                  <div  class= "d-flex justify-content-end my-5">
                    
                      <?php if($CARTROWS):?>
                        <h4 class=" mx-2 ">Total:</h4> <span>
                        <?php $total = 0; 
                         foreach($CARTROWS as $row):?>
                            <?php $total += $row['cart_qty'] * $row['price'] ; ?>
                           
                      <?php endforeach; ?>

                      <h4 class= "me-2"> $ <?=$total?></h4> </span>

                        <?php endif;?>
                        

                  </div>
                  <?php if($CARTROWS):?>
                    <div  class= "d-flex justify-content-end">
                        <a href="<?=ROOT?>shop" class=" btn btn-outline-warning mx-2 ">Cancel</a> <span>
                        <a href="#" class=" btn btn-outline-success text-dark" style="background-color:#06d6a0;">Checkout</a> </span>
                    </div>
                    <?php endif; ?>
                  
               </div>
              </div>
           </div>
        <!--End Cart page row -->


        <!-- Including the footer here -->
<?php $this->view("zac/footer",$data);?>