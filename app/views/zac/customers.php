<?php

$this->view("zac/adminheader",$data);

?>




<!-- Customers page  starts here -->
<section class="mt-5 p-4 bg-light" id="display-area">
      <h3>Customers </h3>
      <ul class="nav  nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link  " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">View</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Update</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Delete</button>
          </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show bg-light" id="pills-home" role="tabpanel" style ="border:none;" aria-labelledby="pills-home-tab">
            View the details here  
          </div>
          <div class="tab-pane fade bg-light" id="pills-profile" role="tabpanel" style ="border:none;" aria-labelledby="pills-profile-tab">
              update customer details here</div>
          <div class="tab-pane fade bg-light" id="pills-contact" role="tabpanel" style ="border:none;" aria-labelledby="pills-contact-tab">
              Delete customers from database, now that's a crazy move though
          </div>
      </div>


</section> 
<!-- customers page ends here-->







<!-- Admin assets and scripts are called by this line -->
<?php $this->view("zac/adminassets",$data); 

$this->view("zac/adminfooter",$data);

?>
