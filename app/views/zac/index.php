
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
                <a href="<?=ROOT?>products" class="btn btn-lg btn-banner fw-bold ">Shop Now</a>
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
              <a href="<?=ROOT?>singleproduct?id=150">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/1.png" alt="Item 1">
                  <h4>Fila Style Cap</h4>
                  <h6>$13.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                  
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct?id=14">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/2.png" alt="Item 2">
                  <h4>Notebook</h4>
                  <h6>$7.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct?id=83">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/3.png" alt="Item 3">
                  <h4>T-shirt</h4>
                  <h6>$19.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct?id=100">
                <div class="featured-item">
                 <img src="<?=ASSETS?>zac/images/4.png" alt="Item 4">
                  <h4>White Marble Mug</h4>
                  <h6>$8.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/5.png" alt="Item 5">
                  <h4>Business Card</h4>
                  <h6>$19.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct?id=51">
                <div class="featured-item">
                 <img src="<?=ASSETS?>zac/images/6.png" alt="Item 6">
                  <h4>Business card</h4>
                  <h6>$15.00</h6>
                  <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct?id=25">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/7.png" alt="Item 7">
                  <h4>Sticker</h4>
                  <h6>$11.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct?id=11">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/3.png" alt="Item 8">
                  <h4>T-shirt</h4>
                  <h6>$22.00</h6>
                  <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
              <a href="<?=ROOT?>singleproduct?id=15">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/5.png" alt="Item 9">
                  <h4>Business card</h4>
                  <h6>$15.00</h6>
                  <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
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