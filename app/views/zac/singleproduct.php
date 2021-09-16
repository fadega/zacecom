<?php
    //we are requiring the header in here
   $this->view("zac/header",$data);
?>

     <!-- Main single page starts here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Product Name</h1>
            </div>
          </div>

          <div class="col-md-6 py-3" style="border:1px solid #eee;">
            <div id="single-product-main-img">
                <div class=" justify-content-center mb-3" >
                    <img src="<?=ASSETS?>zac/images/7.png"  alt="Product image 1"/>
                </div>
             </div>
             <div id ="single-product-slider" class="owl-carousel owl-theme">
                <div class="item">
                  <div class=" py-3 "style="border:1px solid #eee;">
                      <img src="<?=ASSETS?>zac/images/7.png" alt="Product image 1"/>
                   </div>
                </div> 
                <div class="item">
                  <div class=" py-3 "style="border:1px solid #eee;" >
                      <img src="<?=ASSETS?>zac/images/7.png" alt="Product image 1"/>
                   </div>
                </div> 
                <div class="item">
                  <div class=" py-3 "style="border:1px solid #eee;" >
                      <img src="<?=ASSETS?>zac/images/7.png" alt="Product image 1"/>
                   </div>
                </div> 
                <div class="item">
                  <div class=" py-3 "style="border:1px solid #eee;" >
                      <img src="<?=ASSETS?>zac/images/7.png" alt="Product image 1"/>
                   </div>
                </div> 
                <div class="item">
                  <div class=" py-3 "style="border:1px solid #eee;" >
                      <img src="<?=ASSETS?>zac/images/7.png" alt="Product image 1"/>
                   </div>
                </div> 
                <div class="item">
                  <div class=" py-3 "style="border:1px solid #eee;" >
                      <img src="<?=ASSETS?>zac/images/7.png" alt="Product image 1"/>
                   </div>
                </div> 
              </div> 
          </div>          
        
          <div class="col-md-6">
            <div class="right-content">
              <h4>Product Name</h4>
              <h6>$29.00</h6>
              <p> Price description ...bla bla bla Lorem ipsum dolor sit amet.bla bla bla Lorem ipsum dolor sit amet.bla bla bla Lorem ipsum dolor sit amet.bla bla bla Lorem ipsum dolor sit amet. </p>
              <span>3 left on stock</span>
              <form action="" method="get">
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
                <input type="submit" class="button btn-order "  value="Add to cart!">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><a href="#">House</a></span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
          <!-- End right section -->
        </div>
      </div>
    </div>
    <!-- End main single page -->


    <!-- Similar products starts here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>You May Also Like</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <a href="<?=ROOT?>product?id=12>">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/1.png" alt="Item 1">
                  <h4>Marble  - Whitea</h4>
                  <h6>$13.00</h6>
                </div>
              </a>
              <a href="<?=ROOT?>product?id=13">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/2.png" alt="Item 2">
                  <h4>Coffe cup</h4>
                  <h6>$15.00</h6>
                </div>
              </a>
              <a href="<?=ROOT?>product?id=14">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/3.png" alt="Item 3">
                  <h4>T-shirt</h4>
                  <h6>$25.00</h6>
                </div>
              </a>
              <a href="<?=ROOT?>product?id=44">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/4.png" alt="Item 4">
                  <h4>Notebook</h4>
                  <h6>$21.00</h6>
                </div>
              </a>
              <a href="<?=ROOT?>product?id=5">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/5.png" alt="Item 5">
                  <h4>Sticker</h4>
                  <h6>$9.00</h6>
                </div>
              </a>
              <a href="<?=ROOT?>product?id=7">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/6.png" alt="Item 6">
                  <h4>GMG Cap</h4>
                  <h6>$11.00</h6>
                </div>
              </a>
              <a href="<?=ROOT?>product?id=8">
                <div class="featured-item">
                  <img src="<?=ASSETS?>zac/images/7.png" alt="Item 7">
                  <h4>Proin eget imperdiet</h4>
                  <h6>$75.00</h6>
                </div>
              </a>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Similar products here -->


    <!-- include subscribe section -->
    <?php  $this->view("zac/subscribe",$data);?>

    <!-- footer -->
    <?php   $this->view("zac/footer",$data); ?>