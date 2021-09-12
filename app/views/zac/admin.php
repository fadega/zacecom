<?php

$this->view("zac/adminheader",$data);

?>





<!-- Display Area  the whole right section starts here-->
<section class="mt-5 p-4 bg-light" id="display-area">

  <!-- Top Add Category button -->
  <div class="row justify-content-center py-3 mb-3 align-items-center">
    <div class="col-md-8">
    
      <!-- Modal triggerring buttons -->
      <div class="btn-group d-none " role="group" aria-label="Add Category Button">
            <button class="btn btn-outline-success" data-bs-toggle="modal"
                  data-bs-target="#add-category-modal">
                  Add Category
            </button>
              <button class="btn btn-outline-success" data-bs-toggle="modal"
                  data-bs-target="#add-product-modal">
                  Add Product
              </button>
        </div>
    </div>
    <!-- Search form on display aread -->
    <div class="col-lg-4 ">
         <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Search"
                aria-label="Search" />
              <button class="btn" type="submit" style="background:#06d6a0;">
                 Search
              </button>
            </div>
          </form>

      </div>
      <!-- END search form on display area -->
  </div>
  <!-- End Modal Triggering buttons -->


  <div class="row">
      <div class="col-6 my-3 " id="category-right">
          <div class="card pb-4 border-0" >
              <div class="card-body">
                <h4 class="card-title pt-3">Quick Dashboard Info</h4>
                <h6 class="card-subtitle mb-2 text-muted">Get Conmfy  & Explore</h6>
                <p class="card-subtitle py-2 "> By clicking the menu items on the left side bar, you'll be able to </p>
                <p class="card-text"> <span class="price">Access features of this web app.</span> </p>
                
              </div>
            </div>
      </div>
  </div>

   <!-- Charts start Here -->
   <div class="row g-2">

        <div class="col-md-3  shadow p-3">
          <h6> Monthly Sales by Category</h6>
           <canvas id="salesChart"></canvas>
        </div>

        <div class="col-md-4 shadow p-3">
          <h6> Visitors vs Customers</h6>
          <canvas id="customervisitor"></canvas>
        </div>

        <div class="col-md-5 shadow p-3">
          <h6> Semi Annual Saltes Trend</h6>
          <canvas id="myChart"></canvas>
        </div>
     
      </div>   

      <!-- End Charts Here  -->
 



</section> 
<!-- End Display Area(section)  the whole right section ends here-->


<!-- Admin assets and scripts are called by this line -->
<?php $this->view("zac/adminassets",$data); ?>
