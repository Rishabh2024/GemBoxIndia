<?php include('header.php'); ?>
<section class=top-banner-sce>
         <div class="container-fluid">
             <div class="row">
               <div class="col-12 p-0">
                    <div class="top-banner">
                        <div class="banner-text"><h1>LOGIN & SIGNUP</h1></div>
                        <img src="images/reg-banner.jpg" alt="Banner Image" />
                    </div>
                </div>
             </div>
         </div>
     </section>
<section class="authSection">
      <div class="container">
         <div class="authSection-wrapper">
             <div class="row">
                  <div class="col-md-6">
                       <div class="login-wrapper">
                           <form>
                         <h4 class="">REGISTERED CUSTOMERS<hr></h4>
                         <p>If you have an account with us, Please login!</p>
                         <input type="email" placeholder="Email Here.." required />
                         <input type="password" placeholder="Password.." required />
                         <p><a href="">Forget your password?</a></p>
                         <button type="submit" data-text="LOGIN">LOGIN</button>
                         </form>
                       </div>
                  </div>
                    <div class="col-md-6">
                      <div class="signup-wrapper">
                          <form>
                         <h4>NEW CUSTOMERS<hr></h4>
                         <p>If you are new, Please Register!</p>
                            <input type="text" placeholder="Name Here.." required />
                         <input type="email" placeholder="Email Here..." required />
                         <input type="password" placeholder="Password.." required />
                         <input type="password" placeholder="Confirm Your Password.." required />
                         <p>
                         <a href="">Forget your password?</a>
                         </p>
                         <p> 
                            <input type="checkbox" class="w-auto" name="newsletter" checked required />
                            <label for="newsletter">Sign up for our newsletter!</label>
                         </p>
                         <button type="submit" data-text="SIGNUP">SIGNUP</button>
                         </form>
                      </div>
                    </div>
             </div>
         </div>
      </div>
</section>
<?php include('footer.php'); ?>