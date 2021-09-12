<?php    
 $this->view("zac/header",$data);
?>
 <section class=" mt-5 mb-5 text-center justifiy-content-center" style="background-image: #eee; ">
  <div class="mask d-flex align-items-center  gradient-custom-3">
    <div class="container mt-5" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card shadow rounded" >
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create account</h2>

              <form action="#" method="post">

                <div class="form-outline mb-5">
                     <input type="text" name="name" id="name" class="my-2 form-control form-control-lg" placeholder="Your Name.." />
                </div>

                <div class="form-outline mb-5">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Your Email.."/>
                </div>

                <div class="form-outline mb-5">
                   <input type="password" name="password" id="pass" class="form-control form-control-lg" placeholder="Password" />
                </div>

                <div class="form-outline mb-5">
                   <input type="password" name="repeatpass" id="repeatpass" class="form-control form-control-lg" placeholder="Repeat password" />
                </div>

                <div class="form-check d-flex justify-content-start mb-5">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="checkagree"
                  />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" id="register" class="btn btn-lg btn-lg px-5  " style="background:#06d6a0;">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have an account? <a href="<?=ROOT?>signin" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    <?php    
 $this->view("zac/footer",$data);
?>