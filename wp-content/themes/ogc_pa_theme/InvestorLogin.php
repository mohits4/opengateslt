<?php /* Template Name: Investor Login */ ?>
<?php
$GLOBALS['$user'] = wp_get_current_user();
$GLOBALS['$user_role'] = $GLOBALS['$user']->roles[0];
$tos_page_id = 6463;
if(is_user_logged_in() && $GLOBALS['$user_role'] !== 'administrator'):
    wp_redirect(get_permalink($tos_page_id)); exit;
endif;
?>
<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/favicon.png" type="image/x-icon" />
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/header_scripts.js"></script> 
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <noscript>Your browser doesn't support JavaScript!</noscript>
        
        <main>
            <?php
            
            $background_image = get_the_post_thumbnail_url(get_the_ID(),'full');
            $ip_logo_black = get_template_directory_uri().'/img/OGC_IP_logo_black.svg';
            $title = get_field('title');
            $subtitle = get_field('subtitle');
            $form = get_field('form');
            $registration_form = get_fields('options')['user_registration_form'];
            
            ?>
            <section id="login_page" class="b_cover flex valignc investor_login" style="background-image: url(<?php echo $background_image; ?>);">
                <div class="cont flex tcenter wrap margin_b ml">
                    <div class="logo_wrapper">
                        <?php if(!empty($ip_logo_black)): ?>
                            <div class="img_box">
                                <img src="<?php echo $ip_logo_black; ?>" alt="OGC-investor-portal-logo" />
                            </div>
                        <?php endif; ?>
                    </div>
                    <header class="margin_b mm">
                        <div class="il_form_box_wrapper margin_b ms">
                            <?php if(!empty($title)): ?>
                                <h2 class="upper"><?php echo $title; ?></h2>
                            <?php endif; ?>
                            <?php if(!empty($subtitle)): ?>
                                <div class="plaintext text margin_b mxxs">
                                    <?php echo $subtitle; ?>
                                </div>
                            <?php endif; ?>                            
                            <div class="form_box">
                                <?php echo do_shortcode($form); ?>
                            </div>
                        </div>                    
                    </header>
                    <div class="buttons_outer_wrapper flex justifyc valignc margin_r mrm fauto">
                        <button class="button cursor request_access_trigger"><span>Request Access</span></button>
                    </div>
                </div>
            </section>
        </main>
        
        <?php if(!empty($registration_form)): ?>
            <div class="popup stretch flex valignc justifyc">
                <div class="popup_outer_wrapper cont">
                    <div class="popup_inner_wrapper margin_b ms">
                        <h2 class="upper">Request Access</h2>
                        <div class="form_box"><?php echo do_shortcode($registration_form); ?></div>
                    </div>
                    <p class="close-button contact_popup_close_trigger"></p>
                </div>
                <div class="overlay stretch contact_popup_close_trigger"></div>
            </div>
            <script>

                $('.request_access_trigger,.contact_popup_close_trigger').click(function(){
                    $('html,body').toggleClass('lock');
                    $('.popup').toggleClass('active');
                });       

            </script>        
        <?php endif; ?>
        <script>

            $('.form_box .wpforms-form button[type="submit"]').html('<span>Submit</span>');

        </script>            
        <?php wp_footer(); ?>
    </body>
</html>