<?php

if(isset($_GET['q']) && strlen($_GET['q']) > 0 && strlen($_GET['q']) <= 25) {
    $search_query = (string)$_GET['q'];
} else {
    $search_query = '';
}

if(isset($_GET['d']) && strlen($_GET['d']) > 0 && (($_GET['d'] === 'newest') || ($_GET['d'] === 'oldest'))) {
    $date_filter = (string)$_GET['d'];
} else {

}

if(strlen($search_query) == 0) {
    $search = "Search";
    $search_input = '';
} else if (strlen($search_query) > 0) {
    $search = "Search results for \"<strong>$search_query</strong>\"";
    $search_input = "$search_query";
}



$title = "Search | Hourly Facts";
include('include/header.php');
?>

<!-- Content -->
<div class="container body_container">
    <div class="row category_2_white_bg">

       <div class="col-12">
            <div class="search_heading_container d-flex align-items-center">
               <div class="search_icon">
                    <i class="material-icons"> search</i>
                </div>
                <h2 class="category_heading search_heading"><?php echo $search; ?></h2>
            </div>

            <div class="search_filter_container d-flex justify-content-between">
                <div class="lhs">
                    <span class="active">Everything</span>
                    <span class="hidden-xs-down">News</span>
                    <span class="hidden-xs-down">Entertainment</span>
                    <span>More <i class="material-icons">arrow_drop_down</i></span>
                </div>
                <div class="rhs">
                    <select name="date_filter" id="date_filter">
                        <option value="1" <?php echo ((isset($date_filter) && $date_filter === 'newest')?'selected':''); ?>>Newest</option>
                        <option value="2" <?php echo ((isset($date_filter) && $date_filter === 'oldest')?'selected':''); ?> >Oldest</option>
                    </select>
                </div>
            </div>

            <div class="search_results_container">

                   <div class="search_result row">
                    <div class="search_image_div col-12 col-sm-6 col-md-3 col-lg-4">
                        <img src="images/astronaut.jpg" alt="">
                    </div>
                    <div class="search_content_div col-12 col-sm-6 col-md-9 col-lg-8">
                       <div class="category_and_date">
                            <div class="category_label">
                                Science
                            </div>
                            <div class="search_result_date">
                                October 9, 2017
                            </div>
                       </div>

                        <h3 class="search_result_heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro necessit, inventore quaerat dolore officiis quis?</h3>

                        <div class="search_summary hidden-md-down">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima voluptas, cumque reiciendis. Recusandae repellendus architecto esse. Molestiae nihil at nostrum odit minima temporibus, voluptates ipsa. Magni harum nam est cum quaerat, quod saepe. Odio, assumenda?
                        </div>
                    </div>
                </div>

                <div class="search_result row">
                    <div class="search_image_div col-12 col-sm-6 col-md-3 col-lg-4">
                        <img src="images/tiger.jpg" alt="">
                    </div>
                    <div class="search_content_div col-12 col-sm-6 col-md-9 col-lg-8">
                       <div class="category_and_date">
                            <div class="category_label">
                                Nature
                            </div>
                            <div class="search_result_date">
                                October 9, 2017
                            </div>
                       </div>

                        <h3 class="search_result_heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro necessit, inventore quaerat dolore officiis quis?</h3>

                        <div class="search_summary hidden-md-down">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima voluptas, cumque reiciendis. Recusandae repellendus architecto esse. Molestiae nihil at nostrum odit minima temporibus, voluptates ipsa. Magni harum nam est cum quaerat, quod saepe. Odio, assumenda?
                        </div>
                    </div>
                </div>


            </div>
        </div>



        <!--<div class="col-12 load_more_div">
            <button class="load_more_button">Load more</button>
        </div>-->
    </div>
    <!-- Top Row -->

    </div>
    <!-- Content -->

<?php include('include/footer.php'); ?>
