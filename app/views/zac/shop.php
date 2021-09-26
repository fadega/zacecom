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
              <?php if(is_array($categories)):?>
                  <?php foreach($categories as $category): ?>
                   <button class="btn btn-primary" data-filter=".clothes"><?=$category['categoryName']?></button>
 
                    <?php endforeach;?>
                <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
        <?php if(is_array($items_inshop)):?>
            <?php foreach($items_inshop as $item):?>
            <div id="1" class="item new col-md-4">
              <a href="<?=ROOT?>singleproduct/<?=$item['slug']?>">
                <div class="featured-item">
                 
                  <div style="overflow: hidden;"><img class="product-image" src="<?=ROOT . $item['image1']?>" alt="product image"></div>
                  <h4><?=$item['name']?></h4>
                  <h6><?=$item['price']?></h6>
                  <p><?=$item['description']?></p>
                  <button class="btn add-to-cart my-2 py-2">More Details </button>
                </div>
              </a>
            </div>
            <?php endforeach;?>
            <?php endif;?>

       </div>
    </div>
    <?php if($data['items_inshop']>0):?>
      <?php if(count($items_inshop)>9):?>
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
      <?php endif;?>
    <?php endif;?>
    
    <!-- Shop page starts here -->

    <?php $this->view("zac/subscribe",$data);?>


    <?php
 
   $this->view("zac/footer",$data);
?>