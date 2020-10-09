<div class="popup stretch flex valignc justifyc">
    <div class="popup_outer_wrapper cont">
        <div class="popup_inner_wrapper margin_b ms">
            <h2 class="upper">Contact OGC Team</h2>
            <div class="form_box"><?php echo do_shortcode('[wpforms id="6133"]'); ?></div>
        </div>
        <script>

            var user_name = '<?php echo $GLOBALS['$user'] -> data -> display_name; ?>';    
            var user_email = '<?php echo $GLOBALS['$user'] -> data -> user_email; ?>';

            $('.form_box .wpforms-form [placeholder="Name*"]').attr('value',user_name);
            $('.form_box .wpforms-form [placeholder="Email*"]').attr('value',user_email);
            $('.form_box .wpforms-form button[type="submit"]').html('<span>Submit</span>');

        </script>
        <p class="close-button contact_popup_close_trigger"></p>
    </div>
    <div class="overlay stretch contact_popup_close_trigger"></div>
</div>
<div class="contact_popup_open_trigger">
    <p class="cursor button upper margin_r mrxxxs">
        <i class="far fa-envelope"></i>
        <span>Contact OGC Team</span>
    </p>
</div>
<script>

    $('.contact_popup_open_trigger,.contact_popup_close_trigger').click(function(){
        $('html,body').toggleClass('lock');
        $('.popup').toggleClass('active');
    });       

</script>