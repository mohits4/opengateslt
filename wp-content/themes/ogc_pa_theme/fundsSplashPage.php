<?php /* Template Name: Funds Splash Page */ ?>
<?php
$GLOBALS['$user'] = wp_get_current_user();
$GLOBALS['$user_role'] = $GLOBALS['$user']->roles[0];
$url = site_url();
if(in_array('fund-i-ii', $GLOBALS['$user']->roles) || $GLOBALS['$user_role'] === 'administrator' || $GLOBALS['$user_role'] === 'subscriber'):
    $access_granted = 'true';
else:
    $access_granted = 'false';
endif;

if(!$access_granted):
    wp_redirect($url,307); exit;
endif;
?>
<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/jquery-ui.min.css">
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.mobile.custom.js"></script>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/fonts/fontawesome-pro-5.13.0-web/css/all.css">        
        <?php wp_head(); ?>
        
        <style>
        .hideNotify{
            transition: 0.5s;
            opacity: 0;
        }
        .notify{
            display: none;
            position: fixed;
            top: 20px;
            right: 30px;
            z-index: 999999999;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #e65d5d;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }
        </style>
    </head>
    <body <?php body_class(); ?>>
    <div id="notification" class="notify"> <span class="alert alert-danger">You are not authorized to view this page. Please contact us to request access.</span></div>
        
        <noscript>Your browser doesn't support JavaScript!</noscript>
        <div id="primary-menu" 
            class="user_sel hide_sub navbar">
            <?php $show_user_menu = get_fields('options')['show_user_menu']; if($show_user_menu): ?>
                <div id='top_user_menu' class='flex margin_r mrxl justifysb valignc upper fauto'>
                    <div class="margin_r mrm flex justifystart">
                        <p class="text"><a class="margin_r mrxxxs cursor" target="_blank" href="https://opengatecapital.com/"><i class="fal fa-globe"></i><span>OpenGate Capital Corporate website</span></a></p>
                        <p class="text"><a class="margin_r mrxxxs cursor" target="_blank" href="mailto:ir@opengatecapital.com"><i class="far fa-envelope-open"></i><span>Contact Investor Relations</span></a></p>
                    </div>
                    <div class="margin_r mrm flex justifyend">
                        <p class="user_name text margin_r mrxxxs"><span><?php $user = wp_get_current_user(); echo $user -> data -> display_name; ?></span><i class="fas fa-user-tie"></i></p>
                        <p class="text"><a class="margin_r mrxxxxs cursor" href="<?php echo wp_logout_url( site_url().'?logout=true'); ?>"><span>Sign out</span><i class="far fa-sign-out"></i></a></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <main>
            <section id="login_page" class="b_cover flex valignc splash_page" style="background-image: url(<?php $background_image = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $background_image; ?>);">
                <div class="cont flex tcenter wrap margin_b mxxxl">
                    <div class="logo_wrapper">
                        <?php $ip_logo_black = get_template_directory_uri().'/img/OGC_IP_logo_black.svg'; if(!empty($ip_logo_black)): ?><div class="img_box"><img src="<?php echo $ip_logo_black; ?>" alt="OGC-investor-portal-logo" /></div><?php endif; ?>
                    </div>
                    <header class="margin_b mm">
                        <h1 class="upper"><?php the_field('title_ph'); ?></h1>
                        <?php $subtitle = get_field('subtitle_ph'); if(!empty($subtitle)): ?><div class="plaintext text margin_b mxxs"><?php echo $subtitle; ?></div><?php endif; ?>
                    </header>
                    <?php if(have_rows('page_сontent')): while(have_rows('page_сontent')): the_row();
                        if(get_row_layout() == 'complex_section'):
                            get_template_part('template-parts/complex_contentblock');
                        endif;
                    endwhile; endif; ?>
                </div>
            </section>
        </main>
        <?php get_template_part('template-parts/contact_popup'); ?>
        <?php wp_footer(); ?>
        
        <script>
        <?php
            if(!empty($_REQUEST['error'])) { ?>
                $('#notification').show();
                setTimeout(function(){ $('#notification').fadeOut(); }, 3000);
        <?php }  ?>
        
        </script>
    </body>
</html>        