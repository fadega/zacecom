<?php
 
   $this->view("zac/header",$data);
?>

    <!-- Shop page starts here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
              <button class="btn btn-primary active" data-filter="*">All Products</button>
              <button class="btn btn-primary" data-filter=".clothes">Clothing</button>
              <button class="btn btn-primary" data-filter=".stationery">Stationery</button>
              <button class="btn btn-primary" data-filter=".house">House</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
            <div id="1" class="item new col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                 
                  <img src="<?=ASSETS?>zac/images/1.png" alt="">
                  <h4>Fila Style Cap</h4>
                  <h6>$13.00</h6>
                  <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="2" class="item high col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                 
                  <img src="<?=ASSETS?>zac/images/2.png" alt="">
                  <h4>NoteBook </h4>
                  <h6>$7.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="3" class="item low col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                
                  <img src="<?=ASSETS?>zac/images/3.png" alt="">
                  <h4>T-shirt (100% cotton)</h4>
                  <h6>$19.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="4" class="item low col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                
                  <img src="<?=ASSETS?>zac/images/4.png" alt="">
                  <h4>Marble Mug</h4>
                  <h6>$8.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="5" class="item new high col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                 
                  <img src="<?=ASSETS?>zac/images/5.png" alt="">
                  <h4>Business Card(20pack)</h4>
                  <h6>$19.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="6" class="item new col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                  
                  <img src="<?=ASSETS?>zac/images/6.png" alt="">
                  <h4>Business Card(20pack)</h4>
                  <h6>$17.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="7" class="item new high col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                  
                  <img src="<?=ASSETS?>zac/images/7.png" alt="">
                  <h4>Sticker</h4>
                  <h6>$12.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="8" class="item low new col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
                 
                  <img src="<?=ASSETS?>zac/images/1.png" alt="">
                  <h4>Navy -Flexible Cap</h4>
                  <h6>$10.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
            <div id="9" class="item new col-md-4">
              <a href="<?=ROOT?>singleproduct">
                <div class="featured-item">
             
                  <img src="<?=ASSETS?>zac/images/4.png" alt="">
                  <h4>White Marble Coffe Mug</h4>
                  <h6>$9.00</h6>
                   <button class="btn add-to-cart my-2 py-2">Add to cart</button>
                </div>
              </a>
            </div>
        </div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Shop page starts here -->

    <?php $this->view("zac/subscribe",$data);?>


    <?php
 
   $this->view("zac/footer",$data);
?>