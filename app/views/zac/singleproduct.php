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
              <h1> <?=$singlerow[0]['name']?></h1>
            </div>
          </div>

          <div class="col-md-6 py-3" style="border:1px solid #eee;">
            <div id="single-product-main-img">
                <?php if(is_array($singlerow)):?>
                   
                <div class=" justify-content-center mb-3" >
                   <img src="<?=ROOT . $singlerow[0]['image1']?>"  alt="Product image "/>
                   
                </div>
                <?php //endforeach;?>
                <?php endif;?>

             </div>

             <div id ="single-product-slider" class="owl-carousel owl-theme">
                <?php if(is_array($singlerow)):?>
                    <div class="item">
                      <div class=" py-3 "style="border:1px solid #eee;">
                      <img src="<?=ROOT . $singlerow[0]['image2']?>"  alt="Product image "/>
                      </div>
                    </div> 
                    <div class="item">
                      <div class=" py-3 "style="border:1px solid #eee;">
                      <img src="<?=ROOT . $singlerow[0]['image3']?>"  alt="Product image "/>
                      </div>
                    </div>
                    <div class="item">
                      <div class=" py-3 "style="border:1px solid #eee;">
                      <img src="<?=ROOT . $singlerow[0]['image1']?>"  alt="Product image "/>
                      </div>
                    </div>
                    <div class="item">
                      <div class=" py-3 "style="border:1px solid #eee;">
                      <img src="<?=ROOT . $singlerow[0]['image2']?>"  alt="Product image "/>
                      </div>
                    </div>
                    <div class="item">
                      <div class=" py-3 "style="border:1px solid #eee;">
                      <img src="<?=ROOT . $singlerow[0]['image3']?>"  alt="Product image "/>
                      </div>
                    </div>
               <?php endif;?>
              </div> 
          </div>          
        
          <div class="col-md-6">
            <div class="right-content">
              <?php if(is_array($singlerow)):?>
              <h4> <?=$singlerow[0]['name']?></h4>
              <h6> $ <?=$singlerow[0]['price']?></h6>
              <p> <?=$singlerow[0]['description']?> </p>
              <?php if($singlerow[0]['quantity'] < 5):?>
              <span><?=$singlerow[0]['quantity']?> left in stock</span>
              <?php endif;?>
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
                  <h6>Category: <span><a href="#"><?=$categoryName[0]['categoryName']?></a></span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
            <?php endif;?>
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
            <?php if(is_array($products)):?>
            <?php foreach($products as $product):?>
              <a href="<?=ROOT?>singleproduct/<?=$product['slug']?>">
                <div class="featured-item">
                  <img src="<?=ROOT . $product['image1']?>" alt="product image">
                  <h4><?=$product['name']?></h4>
                  <h6><?=$product['price']?></h6>
                  <h6><?=$product['description']?></h6>
                </div>
              </a>
              <?php endforeach;?>
            <?php endif;?>

              <!-- <a href="<?=ROOT?>product?id=13">
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
            
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Similar products here -->


    <!-- include subscribe section -->
    <?php  $this->view("zac/subscribe",$data);?>

    <!-- footer -->
    <?php   $this->view("zac/footer",$data); ?>