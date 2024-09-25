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
                        <h3>Enter OTP Code</h3>
                        <form action="assets/php/otp_user.php" method="POST">
                            <div class="form-group form-box clearfix">
                                <input type="number" name="email_otp" class="form-control" autocomplete="off" placeholder="Enter OTP Code" aria-label="Password">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="otp_btn" class="btn btn-primary btn-lg btn-theme"><span>Create New Password</span></button>
                            </div>
                            <div class="extra-login form-group clearfix">
                                <span><p> <a href="">Resend OTP</a></p></span>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    
                        <span>Not Received Yet ?</span>
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