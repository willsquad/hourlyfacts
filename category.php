<?php

if(isset($_GET['name']) && ctype_alnum($_GET['name']) && strlen($_GET['name']) <= 25) {
    $category_name = (string)$_GET['name'];
} else {
    $category_name = 'Technology';
}

$title = "$category_name | Hourly Facts";
include('include/header.php');
?>

<!-- Content -->
<div class="container body_container">
    <div class="row category_2_white_bg">

       <div class="col-12">
           <h2 class="category_heading"><?php echo $category_name; ?></h2>
       </div>
        <div class="col-12 col-md-6 col-lg-8 landing_lhs category_lhs">
            <div class="newscard">
                <div class="image_div">
                    <img src="images/protest.jpg" alt="Protest">
                    <div class="overlay  d-flex flex-column justify-content-end">
                        <div class="title_and_time">
                            <div class="category_label">
                                <?php echo $category_name; ?>
                            </div>
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, perferendis.</h2>
                            <p>Posted 22 minutes ago</p>
                        </div>
                    </div>
                </div>
                <div class="footer_div d-flex align-items-center justify-content-between">
                   <div class="d-flex align-items-center">
                        <span class="views">123 <span class="views_text">Views</span></span>
                        <span class="views separator"></span>
                        <span class="views">63 <span class="views_text">Shares</span></span>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
             <!-- End of Newscard -->
        </div>
        <!-- Landing LHS -->

        <!-- Landing RHS -->
        <div class="col-12 col-md-6 col-lg-4 landing_rhs hidden-md-down">
           <div class="latest_news">
                <h2 class="landing_headings category_rhs_heading">Top Stories</h2>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/popcorn.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, cons ectetur.</div>
                </div>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/protest.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, consec tetur</div>
                </div>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/popcorn.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, con sectetur adipisic.</div>
                </div>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/protest.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, conse ctetur.</div>
                </div>
            </div>
        </div>
        <!-- Landing RHS -->



        <div class="col-12 col-md-6 col-lg-4">
            <div class="newscard">
                <div class="image_div">
                    <img src="images/astronaut.jpg" alt="Protest">
                    <div class="overlay  d-flex flex-column justify-content-end">
                        <div class="title_and_time">
                            <div class="category_label">
                                <?php echo $category_name; ?>
                            </div>
                            <h2>Lorem ipsum dolor sit amet adipisicing.</h2>
                            <p>Posted 22 minutes ago</p>
                        </div>
                    </div>
                </div>
                <div class="footer_div d-flex align-items-center justify-content-between">
                   <div class="d-flex align-items-center">
                        <span class="views">123 <span class="views_text">Views</span></span>
                        <span class="views separator"></span>
                        <span class="views">63 <span class="views_text">Shares</span></span>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
             <!-- End of Newscard -->
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="newscard">
                <div class="image_div">
                    <img src="images/popcorn.jpg" alt="Protest">
                    <div class="overlay  d-flex flex-column justify-content-end">
                        <div class="title_and_time">
                            <div class="category_label">
                                <?php echo $category_name; ?>
                            </div>
                            <h2>Lorem ipsum dolor sit amet perferendis.</h2>
                            <p>Posted 22 minutes ago</p>
                        </div>
                    </div>
                </div>
                <div class="footer_div d-flex align-items-center justify-content-between">
                   <div class="d-flex align-items-center">
                        <span class="views">123 <span class="views_text">Views</span></span>
                        <span class="views separator"></span>
                        <span class="views">63 <span class="views_text">Shares</span></span>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
             <!-- End of Newscard -->
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="newscard">
                <div class="image_div">
                    <img src="images/tiger.jpg" alt="Protest">
                    <div class="overlay  d-flex flex-column justify-content-end">
                        <div class="title_and_time">
                            <div class="category_label">
                                <?php echo $category_name; ?>
                            </div>
                            <h2>Lorem ipsum dolor sit amet, consectetur elit.</h2>
                            <p>Posted 22 minutes ago</p>
                        </div>
                    </div>
                </div>
                <div class="footer_div d-flex align-items-center justify-content-between">
                   <div class="d-flex align-items-center">
                        <span class="views">123 <span class="views_text">Views</span></span>
                        <span class="views separator"></span>
                        <span class="views">63 <span class="views_text">Shares</span></span>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
             <!-- End of Newscard -->
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <!-- Newscard No Media Without Summary-->
                <div class="newscard no_media">
                    <div class="summary">
                        <div class="title_and_time">
                           <div class="category_label">
                                <?php echo $category_name; ?>
                            </div>
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus accusamus quia omnis.</h2>
                            <p>Posted 45 minutes ago</p>
                        </div>
                    </div>
                    <div class="footer_div footer_bg d-flex align-items-center justify-content-between">
                       <div class="d-flex align-items-center">
                            <span class="views">724 <span class="views_text">Views</span></span>
                            <span class="views separator"></span>
                            <span class="views">50 <span class="views_text">Shares</span></span>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                 <!-- End of Newscard -->
        </div>

         <div class="col-12 col-md-6 col-lg-4">
            <!-- Newscard Media With Summary-->
                <div class="newscard">
                      <div class="image_div">
                        <img src="images/astronaut.jpg" alt="Astronaut">
                        <div class="overlay  d-flex flex-column justify-content-end">
                            <div class="title_and_time">
                               <div class="category_label">
                                    <?php echo $category_name; ?>
                                </div>
                                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque nesciunt.</h2>
                                <p>Posted 30 minutes ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="summary">
                        <div class="summary_content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fugit, accusantium vel doloribus quibusdam. Assumenda esse optio, non iure, delectus dolore at nesciunt fuga velit, quas est et odio debitis.
                            <a href="">Read more...</a>
                        </div>
                    </div>
                    <div class="footer_div footer_bg d-flex align-items-center justify-content-between">
                       <div class="d-flex align-items-center">
                            <span class="views">503 <span class="views_text">Views</span></span>
                            <span class="views separator"></span>
                            <span class="views">97 <span class="views_text">Shares</span></span>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                 <!-- End of Newscard -->
         </div>

         <div class="col-12 col-md-6 col-lg-4">
             <!-- Newscard No Media With Summary-->
                <div class="newscard no_media no_media_summary">
                    <div class="summary">
                        <div class="title_and_time">
                           <div class="category_label">
                                <?php echo $category_name; ?>
                            </div>
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus accusamus quia omnis.</h2>
                            <p>Posted 45 minutes ago</p>

                            <div class="summary_content">
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea fugit, accusantium vel doloribus quibusdam. Assumenda esse optio, non iure, delectus dolore at nesciunt fuga velit, quas est et odio debitis.
                                <a href="">Read more...</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_div footer_bg d-flex align-items-center justify-content-between">
                       <div class="d-flex align-items-center">
                            <span class="views">908 <span class="views_text">Views</span></span>
                            <span class="views separator"></span>
                            <span class="views">81 <span class="views_text">Shares</span></span>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                 <!-- End of Newscard -->
         </div>

         <!-- Landing RHS -->
        <div class="col-12 col-md-6 col-lg-4 landing_rhs hidden-lg-up">
           <div class="latest_news">
                <h2 class="landing_headings category_rhs_heading">Top Stories</h2>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/popcorn.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, cons ectetur.</div>
                </div>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/protest.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, consec tetur</div>
                </div>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/popcorn.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, con sectetur adipisic.</div>
                </div>

                <div class="top_story row no-gutters d-flex align-items-center">
                    <div class="col-2 col-md-3 col-lg-2 image_div"><img src="images/protest.jpg"></div>
                    <div class="col-10 col-md-9 col-lg-10 headline_div">Lorem ipsum dolor sit amet, conse ctetur.</div>
                </div>
            </div>
        </div>
        <!-- Landing RHS -->

        <div class="col-12 load_more_div">
            <button class="load_more_button">Load more</button>
        </div>
    </div>
    <!-- Top Row -->

    </div>
    <!-- Content -->

<?php include('include/footer.php'); ?>
