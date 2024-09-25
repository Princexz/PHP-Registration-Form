<?php
include"header.php";
?>

<!-- Login 1 start -->
<div class="login-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-section">
                    <div class="form-inner">
                        <a href="login-1.html" class="logo">
                            <img src="assets/img/logos/logo-2.png" alt="logo">
                        </a>
                        <h3>Sign Into Your Account</h3>


<!-- Ajax Code Start -->

                        <script>
                    jQuery(document).ready(function($){
                    $("#LoginForm").submit(function(e) {
                        $("#LoginForm button").text('Sending Request....');
                        e.preventDefault();
                            $.ajax( {
                                url: "assets/php/login_user.php",
                                method: "post",
                                data: $("#LoginForm").serialize(),
                                dataType: "html",
                                success: function(respond) {
                                    $("#success").html(respond);
                                    $("#LoginForm button").text('Login');
                                    $("#LoginForm")[0].reset();
                                }
                            });
                        });
                    });
                    </script>

    <!-- Ajax Code end -->

                        <div id="success"></div>


                        <form id="LoginForm">
                            <div class="form-group form-box clearfix">
                                <input name="login_email" required type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box clearfix">
                                <input name="login_password" required type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="checkbox form-group form-box">
                                <div class="form-check float-start">
                                    <input class="form-check-input" name="login_remember" type="checkbox" id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot.php" class="link-light float-end forgot-password">Forgot your password?</a>
                            </div>
                            <div class="form-group">
                                <button type="login_submit" class="btn btn-primary btn-lg btn-theme"><span>Login</span></button>
                            </div>
                            <div class="extra-login form-group clearfix">
                                <span>Or Login With</span>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div class="social-list">
                            <div class="buttons">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="#" class="dribbble-bg"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>

                        <p>Don't have an account? <a href="register.php" class="thembo"> Register here</a></p>
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