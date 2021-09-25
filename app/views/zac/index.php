
<?php
 
   $this->view("zac/header",$data);
?>
   <!-- Banner area starts here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h4>Buy Merch & Support Smart Communities</h4>
              <div class="line-dec"></div>
              <p><strong>My Smart Community</strong> offers consulting and media services with a focus on making our communities more accessible, liveable and sustainable for all.</p>
              <p> We have a focus on Smart Mobility, Smart project management, Smart technology in regional communities, dealing with disruption and facilitating genuine collaboration.</p>
              <div class="main-button">
                <a href="<?=ROOT?>shop" class="btn btn-lg btn-banner fw-bold ">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Banner area -->


    <!--Home featured area starts here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Merches</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">

            <?php if(is_array($ROWS)):?>
            <?php foreach($ROWS as $row):?>
              <a href="<?=ROOT?>singleproduct?id=150">
                <div class="featured-item">
                 <div style="overflow: hidden;"> <img class="product-image" src="<?=ROOT . $row['image1']?>" alt="product image"></div>
                  <h4><?=$row['name']?></h4>
                  <h6>$<?=$row['price']?></h6>
                  <h6><?=$row['description']?></h6>
                  <?php if($row['quantity']<10):?>
                    <p class="form-text text-danger fw-bold" ><?=$row['quantity']?> in stock</p>

                    <?php endif;?>
                  <button class="btn add-to-cart my-2 py-2">View item</button>
                  
                </div>
              </a>
              <?php endforeach;?>
              <?php endif;?>


            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- Home featured area  -->

   <!-- subscribe section -->
   <?php  $this->view("zac/subscribe",$data);?>


<!-- footer -->
<?php $this->view("zac/footer",$data);?>