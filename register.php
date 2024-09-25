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
                        <h3>Create An Account</h3>


<!-- Ajax Code Start -->

                        <script>
                    jQuery(document).ready(function($){
                    $("#RegisterForm").submit(function(e) {
                        $("#RegisterForm button").text('Sending Request....');
                        e.preventDefault();
                            $.ajax( {
                                url: "assets/php/registration.php",
                                method: "post",
                                data: $("#RegisterForm").serialize(),
                                dataType: "html",
                                success: function(respond) {
                                    $("#success").html(respond);
                                    $("#RegisterForm button").text('Register');
                                    $("#RegisterForm")[0].reset();
                                }
                            });
                        });
                    });
                    </script>

    <!-- Ajax Code end -->

                        <div id="success"></div>

                        <form id="RegisterForm">
                            <div class="form-group form-box">
                                <input name="reg_name" type="text" required class="form-control" placeholder="Full Name" aria-label="Full Name">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="form-group form-box">
                                <input name="reg_email" type="email" required class="form-control" placeholder="Email Address" aria-label="Email Address">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box clearfix">
                                <input name="reg_password" type="password" required class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="form-group checkbox form-box clearfix">
                                <div class="clearfix float-start">
                                    <div class="form-check">
                                        <input class="form-check-input" required name="reg_agree" type="checkbox" id="rememberme">
                                        <label class="form-check-label" for="rememberme">
                                            I agree to the terms of service
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="reg_btn" class="btn btn-primary btn-lg btn-theme"><span>Register</span></button>
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