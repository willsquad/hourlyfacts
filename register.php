<?php

$title = 'Hourly Facts | Register';
include('include/header.php');
?>

    <!-- Content -->
    <div class="container body_container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-6 offset-md-3">
                <div class="login_div">
                    <div class="col-12 login_header d-flex justify-content-between align-items-baseline">
                        <h2>Create Account</h2>
                        <img src="images/hourly_facts_logo.png">
                    </div>
                    <div class="col-12 login_body">
                        <div class="input_elements_div">
                            <label>
                                <p>First Name</p>
                                <input type="text" name="register_fname" class="input_field" autofocus>
                            </label>
                        </div>
                        <div class="input_elements_div">
                            <label>
                                <p>Last Name</p>
                                <input type="text" name="register_lname" class="input_field">
                            </label>
                        </div>
                        <div class="input_elements_div">
                            <label>
                                <p>Email Address</p>
                                <input type="email" name="register_email" class="input_field" autocomplete="off">
                            </label>
                        </div>
                        <div class="input_elements_div">
                            <label>
                                <p>Password</p>
                                <input type="password" name="register_pass" class="input_field" autocomplete="off">
                            </label>
                        </div>
                    </div>
                    <div class="col-12 login_footer d-flex justify-content-between">
                        <a class="footer_elements lhs_button d-flex align-items-center justify-content-center" href="login.php">Sign in to account</a>
                        <button class="footer_elements rhs_button d-flex align-items-center justify-content-center">Register <i class="material-icons">trending_flat</i></button>
                    </div>
                </div>

                <a href="forgot-password.php" class="forgot_password_a">Retrieve your password</a>

                <!-- Register Div -->
            </div>

        </div>
    </div>
    <!-- Content -->

<?php

$footer_include = "";

include('include/footer.php');

?>
