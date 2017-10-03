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
});
