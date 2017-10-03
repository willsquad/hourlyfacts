<?php

$title = 'Hourly Facts | Dashboard';
include('include/header.php');
?>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="dashboard_div">

                   <!-- Dashboard top_div -->
                    <div class="top_div">
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3 profile_img_div d-flex align-items-center justify-content-center">
                                <img src="images/profile-picture.jpg" alt="">
                            </div>
                            <div class="col-12 col-sm-8 col-md-9 col-lg-9 profile_name_div d-flex flex-column justify-content-around">
                                <div class="name_designation_container">
                                    <h2 class="user_name">John Doe</h2>
                                    <span class="user_designation">Author</span>
                                </div>
                                <div class="about_me">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, odio quidem exercitationem autem libero fuga consequuntur.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard top_div -->

                    <!-- Dashboard Tab_div -->
                    <div class="tab_div">
                       <div class="tab_div_lhs">
                            <a class="tab_a active" href="" data-tab="tasks">Tasks</a>
                            <a class="tab_a" href="" data-tab="earnings">Earnings</a>
                            <a class="tab_a hidden-xs-down" href="" data-tab="history">History</a>
                            <a class="tab_a settings_tab_js hidden-xs-down" href="" data-tab="settings">Settings</a>
                       </div>
                       <div class="tab_div_rhs">
                           <a class="tab_a logout_a hidden-xs-down" href="" data-tab="logout">Logout</a>
                           <a class="tab_a hidden-sm-up" href="" data-tab="more">more <i class="ml-5 fa fa-caret-down"></i></a>
                       </div>

                    </div>
                    <!-- Dashboard Tab_div -->

                    <!-- Dashboard Tab content div -->
                    <div id="tasks" class="tab_content_div active">
                        <!--<h2>Tasks</h2>-->
                        <h2 class="earnings_div_header">Tasks</h2>

                        <div class="earning_box_container task_box_container">
                            <div class="earning_box task_box">
                                <h3>Completed</h3>
                                <div class="amount">
                                    <span class="fw_500 amount_value">15</span>
                                </div>
                            </div>
                            <div class="earning_box task_box">
                                <h3>In-progress</h3>
                                <div class="amount">
                                    <span class="fw_500 amount_value">1</span>
                                </div>
                            </div>
                            <div class="earning_box task_box">
                                <h3>Available</h3>
                                <div class="amount">
                                    <span class="fw_500 amount_value">3</span>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive-vertical shadow-z-1">
                          <!-- Table starts here -->
                          <table id="table" class="table table-hover table-mc-light-blue">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Tasks</th>
                                  <th>Source</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>

                                <tr>
                                  <td data-title="#">1</td>
                                  <td data-title="Task">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                  <td data-title="Source">
                                    <a href="http://demos.willsquad.com/hourlyfacts/dashboard.php" target="_blank" rel="noreferrer noopener"><i class="fa fa-external-link"></i></a>
                                  </td>
                                  <td data-button=""><button class="accept_task_button">Accept</button></td>
                                </tr>

                                <tr>
                                  <td data-title="#">2</td>
                                  <td data-title="Task">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, vel.</td>
                                  <td data-title="Source">
                                    <a href="https://www.google.com" target="_blank" rel="noreferrer noopener"><i class="fa fa-external-link"></i></a>
                                  </td>
                                  <td data-button=""><button class="accept_task_button">Accept</button></td>
                                </tr>

                                <tr>
                                  <td data-title="#">3</td>
                                  <td data-title="Task">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                  <td data-title="Source">
                                    <a href="https://www.google.com" target="_blank" rel="noreferrer noopener"><i class="fa fa-external-link"></i></a>
                                  </td>
                                  <td data-button=""><button class="accept_task_button">Accept</button></td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                    </div>
                    <!-- Dashboard Tab content div -->

                    <!-- Dashboard Tab content div -->
                    <div id="earnings" class="tab_content_div">
                        <h2 class="earnings_div_header">Earnings</h2>
                        <h4 class="earning_header_subtitle">Balance updated as of <span class="fw_500 earnings_date">October 2nd, 2017</span></h4>

                        <div class="earning_box_container">
                            <div class="earning_box">
                                <h3>Available</h3>
                                <div class="amount">
                                    $ <span class="fw_500 amount_value">85.00</span>
                                </div>
                            </div>
                            <div class="earning_box">
                                <h3>Pending</h3>
                                <div class="amount">
                                    $ <span class="fw_500 amount_value">15.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="earnings_button_container">
                            <button class="earnings_withdraw_button">Withdraw Earnings</button>
                        </div>
                    </div>
                    <!-- Dashboard Tab content div -->

                    <!-- Dashboard Tab content div -->
                    <div id="history" class="tab_content_div">
                        <!--<h2>History</h2>-->
                        <div class="table-responsive-vertical shadow-z-1">
                          <!-- Table starts here -->
                          <table id="table" class="table table-hover table-mc-light-blue">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Description</th>
                                  <th data-title="Status">Status</th>
                                  <th data-title="Date">Date</th>
                                </tr>
                              </thead>
                              <tbody>

                                <tr>
                                  <td data-title="#">1</td>
                                  <td data-title="Description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                  <td data-title="Status">
                                    <i class="fa fa-hourglass-half" title="pending"></i>
                                  </td>
                                  <td data-title="Date">09/28/2017</td>
                                </tr>

                                 <tr>
                                  <td data-title="#">2</td>
                                  <td data-title="Description">Lorem ipsum dolor sit amet.</td>
                                  <td data-title="Status">
                                    <i class="fa fa-check" title="success"></i>
                                  </td>
                                  <td data-title="Date">09/24/2017</td>
                                </tr>

                                 <tr>
                                  <td data-title="#">3</td>
                                  <td data-title="Description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit.</td>
                                  <td data-title="Status">
                                    <i class="fa fa-check" title="success"></i>
                                  </td>
                                  <td data-title="Date">09/08/2017</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <!-- Table Constructor change table classes, you don't need it in your project -->
                          <!--<div style="width: 45%; display: inline-block; vertical-align: top">
                          <h2>Table Constructor</h2>
                          <p>
                            <label for="table-bordered">Style: bordered</label>
                            <select id="table-bordered" name="table-bordered">
                              <option selected value="">No</option>
                              <option value="table-bordered">Yes</option>
                            </select>
                          </p>
                          <p>
                            <label for="table-striped">Style: striped</label>
                            <select id="table-striped" name="table-striped">
                              <option selected value="">No</option>
                              <option value="table-striped">Yes</option>
                            </select>
                          </p>
                          <p>
                            <label for="table-hover">Style: hover</label>
                            <select id="table-hover" name="table-hover">
                              <option value="">No</option>
                              <option selected value="table-hover">Yes</option>
                            </select>
                          </p>
                          <p>
                            <label for="table-color">Style: color</label>
                            <select id="table-color" name="table-color">
                              <option value="">Default</option>
                              <option value="table-mc-red">Red</option>
                              <option value="table-mc-pink">Pink</option>
                              <option value="table-mc-purple">Purple</option>
                              <option value="table-mc-deep-purple">Deep Purple</option>
                              <option value="table-mc-indigo">Indigo</option>
                              <option value="table-mc-blue">Blue</option>
                              <option selected value="table-mc-light-blue">Light Blue</option>
                              <option value="table-mc-cyan">Cyan</option>
                              <option value="table-mc-teal">Teal</option>
                              <option value="table-mc-green">Green</option>
                              <option value="table-mc-light-green">Light Green</option>
                              <option value="table-mc-lime">Lime</option>
                              <option value="table-mc-yellow">Yellow</option>
                              <option value="table-mc-amber">Amber</option>
                              <option value="table-mc-orange">Orange</option>
                              <option value="table-mc-deep-orange">Deep Orange</option>
                            </select>
                          </p>
                          </div>-->

                    </div>
                    <!-- Dashboard Tab content div -->

                    <!-- Dashboard Tab content div -->
                    <div id="change-password" class="tab_content_div">

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">

                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-7 input_label_container">
                                <div class="input_label_container">
                                    <label><span class="label_text">Current Password</span> <input class="col" type="password"></label>
                                </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">New Password</span> <input class="col" type="password"></label>
                                </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">Confirm Password</span> <input class="col" type="password"></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2">

                            </div>
                        </div>

                        <div class="row save_cancel_button_div">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">

                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-7 text-center">
                               <button class="button_save">save changes</button>
                               <button class="button_cancel save_pass_cancel">cancel</button>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2">

                            </div>
                        </div>

                    </div>
                    <!-- Dashboard Tab content div -->

                    <!-- Dashboard Tab content div -->
                    <div id="settings" class="tab_content_div">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">

                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-7 input_label_container">
                                <div class="input_label_container">
                                    <label><span class="label_text">First Name</span> <input class="col" type="text"></label>
                                </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">Last Name</span> <input class="col" type="text"></label>
                                </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">Email</span> <input class="col" type="text"></label>
                                </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">Password</span> <input class="col" value="password" type="password" disabled></label>
                                    <a class="tab_a change_password_a" href="" data-tab="change-password">Change Password</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">

                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-7 input_label_container">
                               <div class="social_links_title">
                                   <h2>Social Links</h2>
                                   <div class="title_line">

                                   </div>
                               </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">Facebook</span> <input class="col" type="text"></label>
                                </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">Twitter</span> <input class="col" type="text"></label>
                                </div>
                                <div class="input_label_container">
                                    <label><span class="label_text">Google</span> <input class="col" type="text"></label>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2">

                            </div>
                        </div>

                        <div class="row save_cancel_button_div">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">

                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-7 text-center">
                               <button class="button_save">save changes</button>
                               <button class="button_cancel">cancel</button>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2">

                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Tab content div -->


                </div>
            </div>

        </div>
    </div>
    <!-- Content -->

<?php

include('include/footer.php');

?>
