<?php

$title = 'Hourly Facts | Forgot Password';
include('include/header.php');
?>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-6 offset-md-3">
                <div class="login_div">
                    <div class="col-12 login_header d-flex justify-content-between align-items-baseline">
                        <h2>Reset Password</h2>
                        <img src="images/hourly_facts_logo.png">
                    </div>
                    <div class="col-12 login_body">
                        <div class="input_elements_div">
                            <label>
                                <p>Registered Email Address</p>
                                <input type="email" name="forgot_email" class="input_field" autofocus>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 login_footer d-flex justify-content-between">
                        <a class="footer_elements lhs_button d-flex align-items-center justify-content-center" href="register.php">Sign in to account</a>
                        <button class="footer_elements rhs_button d-flex align-items-center justify-content-center">Reset <i class="material-icons">trending_flat</i></button>
                    </div>
                </div>
                <!-- Forgot Password Div -->
            </div>

        </div>
    </div>
    <!-- Content -->

<?php

$footer_include = "";

include('include/footer.php');

?>
