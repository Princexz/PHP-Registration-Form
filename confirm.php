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
                        <h3>Enter New Password</h3>
                        <form action="assets/php/confirm_user.php" method="POST">
                            <div class="form-group form-box clearfix">
                                <input  type="password" name="confirm_newpswrd" class="form-control" autocomplete="off" placeholder="New Password" aria-label="Password">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="form-group form-box clearfix">
                                <input  type="password" name="confirm_retypepswrd" class="form-control" autocomplete="off" placeholder="Retype Password" aria-label="Password">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="confirm_btn" class="btn btn-primary btn-lg btn-theme"><span>Create Password</span></button>
                            </div>
                            
                        </form>
                        <div class="clearfix"></div>
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