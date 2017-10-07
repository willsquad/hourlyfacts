$(document).ready(function() {
    /** Menu element click **/
    $(document).on('click', '.tab_a', function(e) {
        e.preventDefault();
        var self = $(this);
        var tab_id = self.attr('data-tab');

        if(tab_id == 'change-password') {
            $('.tab_content_div').removeClass('active');
            $('#'+tab_id+'').addClass('active');
        } else if(tab_id == 'more') {

        } else {
            $('.tab_a').removeClass('active');
            $('.tab_content_div').removeClass('active');
            self.addClass('active');
            $('#'+tab_id+'').addClass('active');
        }

    });

    $(document).on('click', '.save_pass_cancel', function(){
        $('.settings_tab_js').click();
    });

    /** Category Name click **/
    $(document).on('click', '.header_categories_a_js', function(e) {
        e.preventDefault();
        var category_name = $(this).text();
        var href = $(this).attr('href');
        console.log(href);
        document.location = href + "?name=" + category_name;
    });

    $(document).on('click', '.title_and_time h2', function(){
        document.location = 'article.php';
    });

    $(document).on('click', '.newscard .category_label', function() {
        var category_name = $(this).text();
        console.log($.trim(category_name));
        document.location = "category.php?name="+$.trim(category_name);
    });

    /** Search input display **/
    $(document).on('click', '.search_div', function(){
        $('.search_input_div').animate({width:'show'},350);
    });

    $(document).on('click', '.close_search', function(){
        $('.search_input_div').animate({width:'hide'},350);
    });


});
