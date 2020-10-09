<?php /* Template Name: Prospective Investor */ ?>
<?php
$GLOBALS['$user'] = wp_get_current_user();
$GLOBALS['$user_role'] = implode(" ",$GLOBALS['$user']->roles);
$pos_portco = strrpos($GLOBALS['$user_role'],'portco_');
$url = site_url();
$userCanAccess = ['prosp_inv','subscriber','opengate-slt','fund-i','fund-ii','fund-i-ii'];


if(in_array($GLOBALS['$user'], $userCanAccess)){
    wp_redirect($url); exit;
}
else if($GLOBALS['$user_role'] === 'participant'
        || $GLOBALS['$user_role'] === 'spectator'
        || $pos_portco > -1): 
    wp_redirect($url); exit;
endif;

$skip_tos = $_COOKIE['skip-tos'];
$agm_page = $GLOBALS['$options']['agm_page'];
$tos_page_id = 6452;

if(get_the_ID() === $tos_page_id && $skip_tos === 'true' && $GLOBALS['$user_role'] !== 'administrator'):
    wp_redirect($agm_page); exit;
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
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.cookie.js"></script>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/fonts/fontawesome-pro-5.13.0-web/css/all.css">        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <noscript>Your browser doesn't support JavaScript!</noscript>
        <div id="primary-menu" 
            class="user_sel hide_sub navbar">
            <div id='top_user_menu' class='flex margin_r mrxxs justifysb valignc upper fauto'>
                <div class="margin_r mrs flex justifystart">
                    <p class="text">
                        <a class="margin_r mrxxxxs cursor" 
                           target="_blank" 
                           href="https://opengatecapital.com/">
                            <i class="fal fa-globe"></i>
                            <span>OpenGate Capital Corporate website</span>
                        </a>
                    </p>
                    <?php $ir_contact = $GLOBALS['$options']['investor_relations_contact'];
                    if(!empty($ir_contact)): ?>
                        <p class="text">
                            <a class="margin_r mrxxxxs cursor" href="mailto:<?php echo $ir_contact; ?>">
                                <i class="far fa-envelope-open"></i>
                                <span>Contact Investor Relations</span>
                            </a>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="margin_r mrs flex justifyend">
                    <p class="user_name text margin_r mrxxxxs">
                        <span><?php echo $GLOBALS['$user'] -> data -> display_name; ?></span>
                        <i class="fas fa-user-tie"></i>
                    </p>
                    <p class="text">
                        <a class="margin_r mrxxxxs cursor" href="<?php echo wp_logout_url( site_url().'?logout=true'); ?>">
                            <span>Sign out</span>
                            <i class="far fa-sign-out"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <script src="<?php echo bloginfo('template_url'); ?>/js/header_scripts.js?ver=1.033"></script>
        
        <?php 
            $p_badge = get_field('page_badge');
            $main_title_ph = get_field('title_ph');
            $subtitle = get_field('subtitle_ph');
            $plaintext = get_field('plaintext_ph');
            if(!empty($subtitle)||!empty($plaintext)):
                $pageheader_info_exists = true;
            endif;
        ?>
        <header class="pageheader flex valignend<?php 
        if($pageheader_info_exists): echo " ph_info_exists"; endif;
        if(!empty($p_badge)): echo " badge_exists"; endif; ?>">
            <div class="b_cover stretch" 
                 style="background-image: url(<?php $background_image = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $background_image; ?>);"></div>
            <div class="cont margin_b mxl">
                <?php if(!empty($main_title_ph)): ?>
                    <div class="title_wrapper"><h1 class="tcenter upper"><?php echo $main_title_ph; ?></h1></div>
                <?php endif; ?>
                <?php if(!empty($p_badge)): ?>
                <p class='badge upper' 
                   style='background-color: <?php echo get_field('color_of_badge',$p_badge); ?>'><?php echo get_the_title($p_badge); ?></p>
                <?php endif; ?>                
                <?php if($pageheader_info_exists): ?>
                    <div class="ph_content_wrapper margin_b ms">
                        <?php if(!empty($subtitle)): ?><div class="subtitle text margin_b ms"><?php echo $subtitle; ?></div><?php endif; ?>
                        <?php if(!empty($plaintext)): ?><div class="plaintext text margin_b mxs"><?php echo $plaintext; ?></div><?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <main>
            <section class="main_header cont text margin_b mxs">
                <h1 class="tleft"><?php $ct = get_field('custom_title'); if(!empty($ct)): echo $ct; else: the_title(); endif; ?></h1>
            </section>            
            <?php 
            if(have_rows('page_сontent')): while(have_rows('page_сontent')): the_row();
                if(get_row_layout() == 'main_content'):
                    get_template_part('template-parts/section_main_content');
                elseif(get_row_layout() == 'columns'):
                    get_template_part('template-parts/section_columns');
                elseif(get_row_layout() == 'agenda'):
                    get_template_part('template-parts/section_agenda'); 
                elseif(get_row_layout() == 'complex_section'):
                    get_template_part('template-parts/complex_contentblock');
                elseif(get_row_layout() == 'contacts'):
                    get_template_part('template-parts/section_contacts');
                elseif(get_row_layout() == 'documents'):
                    get_template_part('template-parts/section_documents');
                elseif(get_row_layout() == 'fund_summary'):
                    get_template_part('template-parts/section_fund_summary');            
                elseif(get_row_layout() == 'portfolio'):
                    get_template_part('template-parts/section_portfolio');
                elseif(get_row_layout() == 'portfolio_company'):
                    get_template_part('template-parts/section_portco');
                elseif(get_row_layout() == 'press_releases'):
                    get_template_part('template-parts/section_press_releases');            
                elseif(get_row_layout() == 'reports'):
                    get_template_part('template-parts/section_reports');
                elseif(get_row_layout() == 'shortcode'):
                    get_template_part('template-parts/section_shortcode');
                endif;
            endwhile; endif;
            if(get_the_ID() === $tos_page_id): ?>
                <section id="tos_buttons"
                    class="complex_section <?php $ecc = get_sub_field('enable_custom_styles'); 
                    if($ecc): 
                        $cc = get_sub_field('custom_styles'); 
                        if(!empty($cc)): 
                            echo ' '. implode(' ',$cc); 
                        endif; 
                    endif; ?>">
                    <div class="cont margin_b mm">
                        <div class="margin_r mrm flex justifyc valignc fauto">
                            <p class="upper">
                                <a class="cursor button agree" href="<?php echo site_url().'/agm'; ?>">
                                    <span>Agree</span>
                                </a>
                            </p>
                            <p class="upper">
                                <a class="cursor button disagree" href="<?php echo wp_logout_url( site_url().'?logout=true'); ?>">
                                    <span>Disagree</span>
                                </a>
                            </p>                            
                        </div>
                    </div>
                    <script>
                        $('#tos_buttons .buttons_outer_wrapper a.agree').click(function(e){
                            e.preventDefault();
                            $.cookie('skip-tos','true');
                            window.location.href = $(this).attr('href');
                        });
                    </script>                    
                </section>
            <?php endif; ?>
        </main>        
        
        <footer>
            <div class="cont">
                <div class="logo_wrapper">
                    <?php 
                        $logo_url = get_template_directory_uri().'/img/OGC_IP_logo_wh.svg';
                        $ogc_logo = array('url' => $logo_url,'alt' => 'OGC Investor portal logo');                 
                    if(!empty($ogc_logo)): ?>
                        <div class="img_box">
                            <a class="cursor" href="<?php echo site_url().'/home'; ?>">
                                <img src="<?php echo $ogc_logo['url']; ?>" alt="<?php echo $ogc_logo['alt']; ?>" />
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </footer>
        <script src="<?php echo bloginfo('template_url'); ?>/js/footer_scripts.js?ver=1.016"></script>
        <?php wp_footer(); ?>
        <div id="to_top" class="cursor flex justifyc valignc" style="display:none;"><i class="fal fa-chevron-up"></i></div>
    </body>
</html>