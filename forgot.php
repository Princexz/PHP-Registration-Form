<?php
include"header.php";
?>

<!-- Login 1 start -->
<div class="login-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 align-self-center">
                <div class="form-section">
                    <div class="form-inner">
                        <a href="login-1.html" class="logo">
                            <img src="assets/img/logos/logo-2.png" alt="logo">
                        </a>
                        <h3>Recover Your Password</h3>
                        <form action="assets/php/forgot_user.php" method="POST">
                            <div class="form-group form-box mb-35">
                                <input name="forget_email" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="forget_btn" class="btn btn-primary btn-lg btn-theme"><span>Send Me Email</span></button>
                            </div>
                            <div class="extra-login form-group clearfix">
                                <span>Or Login With</span>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <p>Already a member? <a href="login.php">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 1 end -->

<?php
include"footer.php";
?>