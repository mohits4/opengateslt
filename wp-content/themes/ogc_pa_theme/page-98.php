<!-- LOGIN PAGE -->
<?php $user = wp_get_current_user(); 
$GLOBALS['$options'] = get_fields('options');
$role_distr = $GLOBALS['$options']['role_distribution'];
if($user->roles[1] == 'fund-i-ii'){
    foreach ($role_distr as $value){
        if($user->roles[1] == $value['role']){
            $redir = $value['homepage'];
            wp_redirect( $redir, 307 ); exit;
        }    
    }
}
$url = site_url().'/home'; if( $user -> roles[0] != "" ): wp_redirect($url, 307); endif; ?>
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
            $ogc_logo_black = get_fields('options')['main_ogc_logo_black'];
            $subtitle = get_field('subtitle');
            $investor_login_button = get_fields('options')['investor_login_button'];
            
            ?>
            <section id="login_page" class="b_cover flex valignc" style="background-image: url(<?php echo $background_image; ?>);">
                <div class="cont flex tcenter wrap margin_b mxxxl">
                    <div class="logo_wrapper">
                        <?php if(!empty($ogc_logo_black)): ?>
                            <div class="img_box">
                                <img src="<?php echo $ogc_logo_black['url']; ?>" alt="OGC-analytics-portal-logo" />
                            </div>
                        <?php endif; ?>
                    </div>
                    <header class="margin_b mm">
                        <h1 class="upper"><?php the_field('title'); ?></h1>
                        <?php if(!empty($subtitle)): ?>
                            <div class="plaintext text margin_b mxxs">
                                <?php echo $subtitle; ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    <div class="buttons_outer_wrapper flex justifyc valignc margin_r mrm fauto">
                        <button class="button cursor login"><span>Portfolio Login</span></button>
                        <a class="cursor button" <?php if(!empty($investor_login_button['target'])): ?>
                           target="<?php echo $investor_login_button['target']; ?>"<?php endif; ?> 
                           href="<?php echo $investor_login_button['url']; ?>">
                            <span>
                                <?php if(!empty($investor_login_button['title'])): echo $investor_login_button['title']; else: echo 'Investor Login'; endif; ?>
                            </span>
                        </a>
                        <a class="button cursor" href="https://opengatecapital.com/"><span>OpenGate Home</span></a>                        
                    </div>
                </div>
            </section>
        </main>
        
        <script>
            
            $('button.login').click(function(){moOAuthLoginNew('OpenGateCapital');});
            
            jQuery(document).ready(function(){
                if(window.location.href.indexOf("logout=true")>-1){window.location.href = "https://login.windows.net/05ae0207-0ae4-44d8-9e14-6e6aed27db0b/oauth2/logout?post_logout_redirect_uri=https://opengateanalytics.com/";}
            });            
        
        </script>
        <?php get_sidebar('right'); wp_footer(); ?>
    </body>
</html>