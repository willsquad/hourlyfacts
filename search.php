<?php

if(isset($_GET['q']) && ctype_alnum($_GET['q']) && strlen($_GET['q']) <= 25) {
    $search_query = (string)$_GET['q'];
} else {
    $search_query = '';
}

if(strlen($search_query) == 0) {
    $search = "Search";
} else if (strlen($search_query) > 0) {
    $search = "Search results for \"<strong>$search_query</strong>\"";
}

$title = "Search | Hourly Facts";
include('include/header.php');
?>

<!-- Content -->
<div class="container body_container">
    <div class="row category_2_white_bg">

       <div class="col-12">
           <h2 class="category_heading search_heading d-flex align-items-center"><i class="material-icons"> search</i> <?php echo $search; ?></h2>
       </div>



        <!--<div class="col-12 load_more_div">
            <button class="load_more_button">Load more</button>
        </div>-->
    </div>
    <!-- Top Row -->

    </div>
    <!-- Content -->

<?php include('include/footer.php'); ?>
