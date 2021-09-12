<?php

$this->view("zac/adminheader",$data);

?>




<!-- User section starts here-->
<section class="mt-5 p-4 bg-light" id="display-area">
      <h3>Users</h3>
      <ul class="nav  nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link  " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Add user</button>
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
        <section class=" mt-5 mb-5 text-center justifiy-content-center" style="background-image: #eee; ">
       
          <div class="mask d-flex align-items-center  gradient-custom-3">
            <div class="container mt-5" >
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                  <div class="card shadow rounded" >
                    <div class="card-body p-5">
                      <h2 class="text-uppercase text-center mb-5">Add User</h2>

                      <form action="#" method="post">

                        <div class="form-outline mb-5">
                        
                          <input type="text" id="form3Example1cg" class="my-2 form-control form-control-lg" placeholder="Name.." />
                          
                        </div>

                        <div class="form-outline mb-5">
                          <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="user Email.."/>
                        </div>

                        <div class="form-outline mb-5">
                          <input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="user Password" />
                        </div>

                        <div class="form-outline mb-5">
                          <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Repeat password" />
                        </div>
                        <p>Send credential to the new user <a href="#">Email</a>  </p>
                
                        <div class="d-flex justify-content-center">
                          <button type="button" id="register" class="btn btn-lg btn-lg px-5  " style="background:#06d6a0;">Add user</button>
                        </div>

                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </section>  
      </div>

        <div class="tab-pane fade bg-light" id="pills-profile" role="tabpanel" style ="border:none;" aria-labelledby="pills-profile-tab">
        <section class=" mt-5 mb-5 text-center justifiy-content-center" style="background-image: #eee; ">
        <div class="mask d-flex align-items-center  gradient-custom-3">
          <div class="container mt-5" >
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card shadow rounded" >
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Update User</h2>

                    <form action="#" method="post">

                      <div class="form-outline mb-5">
                      
                        <input type="text" id="form3Example1cg" class="my-2 form-control form-control-lg" placeholder="Abun A." />
                        
                      </div>

                      <div class="form-outline mb-5">
                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="abun@whatever.com"/>
                      </div>

                      <div class="form-outline mb-5">
                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="abun's password" />
                      </div>
                      <p>Send update confirmation email <a href="#">Email</a>  </p>
                      <div class="d-flex justify-content-center">
                        <button type="button" id="register" class="btn btn-lg btn-lg px-5  " style="background:#06d6a0;">Add user</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</section> 
    
    </div>
  <div class="tab-pane fade bg-light" id="pills-contact" role="tabpanel" style ="border:none;" aria-labelledby="pills-contact-tab">
      Delete user from database
    </div>
</div>


</section> 
<!-- End User section -->



<!-- Admin assets and scripts are called by this line -->
<?php $this->view("zac/adminassets",$data); ?>
