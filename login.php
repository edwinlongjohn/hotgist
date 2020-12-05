  <?php include 'header.php'?>
  <!-- Breadcrumb -->
  <section class="breadcrumb-outer text-center bg-orange">
      <div class="container">
          <div class="breadcrumb-content">
              <h2>Login/Register Page</h2>
              <nav aria-label="breadcrumb">
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Shop</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Login/Register Page</li>
                  </ul>
              </nav>
          </div>
      </div>
  </section>
  <!-- BreadCrumb Ends -->

  <section class="login">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="login-form">
                      <form action="login_action.php" method="POST">
                          <div class="row">
                              <div class="col-xs-12">
                                  <div class="form-title">
                                      <h2>Login</h2>
                                      <p>Register if you don't have an account.</p>
                                  </div>
                              </div>
                              <div class="form-group col-xs-12">
                                  <label>Email</label>
                                  <input type="email" class="form-control" name="email" id="Name1" placeholder="Enter username or email id">
                              </div>
                              <div class="form-group col-xs-12">
                                  <label>Password</label>
                                  <input type="password" name="password" class="form-control" id="email1" placeholder="Enter correct password">
                              </div>

                              <div class="col-xs-12">
                                  <div class="comment-btn mar-bottom-20">
                                   <button class="btn btn-blog">Login</button>
                                  </div>
                              </div>
                              <div class="col-xs-12">
                                  <div class="checkbox-outer pull-left">
                                      <input type="checkbox" name="vehicle2" value="Car"> Remember Me?
                                  </div>
                                  <div class="login-accounts pull-right">
                                      <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="register-form">
                      <form action="register_action.php" method="POST">
                          <div class="row">
                              <div class="col-xs-12">
                                  <div class="form-title">
                                      <h2>Register</h2>
                                      <p>Enter your details to be a member.</p>
                                  </div>
                              </div>
                              <div class="form-group col-xs-12">
                                  <label>Name:</label>
                                  <input type="text" class="form-control" name="name" id="Name" placeholder="Enter full name">
                              </div>
                              <div class="form-group col-xs-12">
                                  <label>Email:</label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="abc@xyz.com">
                              </div>
                              <div class="form-group col-xs-12">
                                  <label>Phone Number:</label>
                                  <input type="tel" class="form-control" id="date1" name="phone" placeholder="enter number">
                              </div>
                              <div class="form-group col-xs-6">
                                  <label>Select Password :</label>
                                  <input type="password" class="form-control" id="date" name="password" placeholder="Enter Password">
                              </div>
                              <div class="form-group col-xs-6 col-left-padding">
                                  <label>Confirm Password :</label>
                                  <input type="password" class="form-control" id="phnumber" name="c_password" placeholder="Re-enter Password">
                              </div>
                              <div class="col-xs-12">
                                  <div class="checkbox-outer">
                                      <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms and conditions.</a>
                                  </div>
                              </div>
                              <div class="col-xs-12">
                                  <div class="comment-btn mar-top-30">
                                     <button class="btn btn-blog">Register</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

 
  <!-- back to top start -->
  <div id="back-to-top">
      <a href="#"></a>
  </div>
  <?php include 'footer.php' ?>
  <!-- search popup -->
  <div id="search">
      <button type="button" class="close">×</button>
      <form>
          <input type="search" value="" placeholder="type keyword(s) here" />
          <button type="submit" class="btn btn-primary">Search</button>
      </form>
  </div>

  <!--*Scripts*-->
  <!-- Latest jquery -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <!-- Plugin Jquery -->
  <script src="js/plugin.js"></script>
  <!-- custom nav jquery -->
  <script src="js/custom-nav.js"></script>
  <!-- main default Jquery -->
  <script src="js/main.js"></script>
  </body>

  <!-- Mirrored from cyclonethemes.com/demo/html/suchana/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:40:24 GMT -->

  </html>