$(document).ready(function() {

    var absolute_url = "http://localhost:55001/hourlyfacts_git";
    //var absolute_url = "http://demos.willsquad.com/hourlyfacts";

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



    /** INITIALIZE NICE SELECT **/
    $("select").niceSelect();


    /** Function to get url parameters **/
    function getQueryVariable(url, variable) {
        var query = url.substring(1);
        var vars = query.split('&');
        for (var i=0; i<vars.length; i++) {
            var pair = vars[i].split('=');
            if (pair[0] == variable) {
                return pair[1];
            }
        }

        return false;
    }

    var url = window.location.search;

    var q = getQueryVariable(url, 'q');
    var c = getQueryVariable(url, 'c');
    var d = getQueryVariable(url, 'd');
    /** End of Function to get url parameters **/

    /** NICE SELECT FILTER **/
    $('#date_filter').on('change', function() {
        var value = $(this).find(":selected").val();
        if(value == 1) {
            //Newest
            if(c) {
                var new_url = absolute_url+'/search.php?q='+q+'&c='+c+'&d=newest';
                history.pushState(null, '', new_url);
                window.location = new_url;
            } else if(c === false) {
                var new_url = absolute_url+'/search.php?q='+q+'&d=newest';
                history.pushState(null, '', new_url);
                window.location = new_url;
            }

        } else if(value == 2) {
            //Oldest
            //history.pushState(null, '', absolute_url+'/');
            if(c) {
                var new_url = absolute_url+'/search.php?q='+q+'&c='+c+'&d=oldest';
                history.pushState(null, '', new_url);
                window.location = new_url;
            } else if(c === false) {
                var new_url = absolute_url+'/search.php?q='+q+'&d=oldest';
                history.pushState(null, '', absolute_url+'/search.php?q='+q+'&d=oldest');
                window.location = new_url;
            }
        }
    });


      // http://www.example.com/hello.png?w=200&h=200&bg=white
      var params = { 'w':200, 'h':200, 'bg':bg };
      var new_url = 'http://www.example.com/hello.png?' + jQuery.param(params);

});
