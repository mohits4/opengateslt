<?php 
$GLOBALS['$user'] = wp_get_current_user(); 

if(isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views']+1; 
} 
else {
    $_SESSION['views']=1; 
}
    

      $url = site_url(); 
      $GLOBALS['$user_role'] = $GLOBALS['$user']->roles[0];      
        if($GLOBALS['$user_role'] == ''): wp_redirect($url); endif; 
        $redir = get_field('redirect_to'); 
                
        if(!empty($redir)): wp_redirect( $redir, 307 ); endif;
        $GLOBALS['$custom_menu'] = get_field('custom_menu');
        $GLOBALS['$options'] = get_fields('options');
    if(empty($GLOBALS['$custom_menu'])):
        $c_menu = false;
        $GLOBALS['$custom_menu'] = 'Main menu';
    else:
        $c_menu = true;
        $menu = wp_get_nav_menu_object($GLOBALS['$custom_menu']);
        $menu_flag = get_field('enable_custom_styles',$menu);
    endif;
$pos1 = strrpos($GLOBALS['$user_role'],'portco_');
$GLOBALS['$pos2'] = strrpos($GLOBALS['$user_role'],'fund-');
global $wp;

if($pos1 > -1 || $GLOBALS['$pos2'] > -1):
    $user_common_flag = false;
    $c_menu_role = get_field('for_users',$menu);
    if($GLOBALS['$user_role'] != 'fund-i-ii' ):
        if($GLOBALS['$user_role'] != $c_menu_role):         
            $role_distr = $GLOBALS['$options']['role_distribution'];
            foreach ($role_distr as $value): 
                if($value['role'] == $GLOBALS['$user_role']): 
                    if($_SESSION['views'] > 1) {
                        $redir = $value['homepage']."?error=error"; 
                    } else {
                        $redir = $value['homepage']; 
                    }
                    if(!empty($redir)){
                        wp_redirect( $redir, 307 ); } endif;
            endforeach;            
        endif;

    else:
        if($GLOBALS['$user_role'] == 'fund-i-ii'):
            $role_distr = $GLOBALS['$options']['role_distribution'];
            if(strrpos($c_menu_role,'portco_') > -1 || get_field('for_users',$menu) == '' ){

                foreach ($role_distr as $value): 
                    if($value['role'] == $GLOBALS['$user_role']): 
                        
                        if($_SESSION['views'] > 1) {
                            $redir = $value['homepage']."?error=error"; 
                        } else {
                            $redir = $value['homepage']; 
                        }
                        if(!empty($redir)){
                            wp_redirect( $redir, 307 ); } endif;
                endforeach;  
            }
        endif;
    endif;

else:
    $user_common_flag = true;

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
            class="user_sel hide_sub navbar <?php if(is_front_page()): echo ' homepage'; endif; if($menu_flag): echo ' custom'; endif; ?>" <?php if($menu_flag): ?>
            style="--main-bg-color: <?php the_field('main_color',$menu); ?>;--main-hover-color: <?php the_field('hover_color',$menu); ?>;"<?php endif; ?>>
            <?php $show_user_menu = $GLOBALS['$options']['show_user_menu']; if($show_user_menu): ?>
                <div id='top_user_menu' class='flex margin_r mrxxs justifysb valignc upper fauto'>
                    <div class="margin_r mrs flex justifystart">
                        <p class="text"><a class="margin_r mrxxxxs cursor" target="_blank" href="https://opengatecapital.com/"><i class="fal fa-globe"></i><span>OpenGate Capital Corporate website</span></a></p>
                        <?php $ir_contact = $GLOBALS['$options']['investor_relations_contact'];
                        if(!empty($ir_contact)): ?>
                            <p class="text"><a class="margin_r mrxxxxs cursor" href="mailto:<?php echo $ir_contact; ?>"><i class="far fa-envelope-open"></i><span>Contact Investor Relations</span></a></p>
                        <?php endif; ?>
                        <?php $ip_link = $GLOBALS['$options']['investor_portal_link']; 
                        if(empty($GLOBALS['$custom_menu'])): 
                            $pos_custom_funds = strrpos($GLOBALS['$custom_menu'],'Fund');
                            if($pos_custom_funds > -1): 
                                $pos_custom_flag = false;
                            else:
                                $pos_custom_flag = true;
                            endif;
                        else:
                            $pos_custom_flag = true;
                        endif;
                        if(!empty($ip_link)&&!$c_menu&&$pos_custom_flag): ?>
                            <p class="text">
                                <a class="margin_r mrxxxxs cursor" 
                                   <?php if(!empty($ip_link['target'])): ?>
                                   target="_blank" 
                                   <?php endif; ?>
                                   href="<?php echo $ip_link['url'] ?>">
                                    <i class="fas fa-briefcase"></i>
                                    <span>
                                        <?php 
                                            if(!empty($ip_link['title'])): 
                                                echo $ip_link['title']; 
                                            else: 
                                                echo 'Investor Portal'; 
                                            endif; 
                                        ?>
                                    </span>
                                </a>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="margin_r mrs flex justifyend">
                        <?php if($user_common_flag&&$c_menu): ?>
                            <p class="text back_home"><a class="margin_r mrxxxxs cursor upper" href="<?php echo site_url().'/home'; ?>"><i class="fas fa-home-lg-alt"></i><span>Back to Analytics Portal</span></a></p>
                        <?php endif; ?>
                        <p class="user_name text margin_r mrxxxxs"><span><?php echo $GLOBALS['$user'] -> data -> display_name; ?></span><i class="fas fa-user-tie"></i></p>
                        <p class="text"><a class="margin_r mrxxxxs cursor" href="<?php echo wp_logout_url( site_url().'?logout=true'); ?>"><span>Sign out</span><i class="far fa-sign-out"></i></a></p>
                    </div>
                </div>
            <?php endif; ?>
            <div class="flex cont cont_large justifyc valignc">
                <div class="nav_wrapper"><nav class="flex tcenter justifyc upper"><?php wp_nav_menu(array('menu' => $GLOBALS['$custom_menu'],'container' => '','menu_class' => 'flex')); ?></nav></div>
                <div id="mobile_trigger" class="flex"><span></span></div>
                <div id="mobile-logo" class="logo img_box">
                    <a href="<?php $mobile_logo = $GLOBALS['$options']['main_ogc_logo_white']; echo get_home_url(); ?>">
                        <img src="<?php if(!$c_menu): echo $mobile_logo['url']; endif; ?>" alt="<?php if(!$c_menu): echo $mobile_logo['alt']; endif; ?>" />
                    </a>
                    <?php if($c_menu): ?>
                        <script> var clone = $('#primary-menu.custom .invest_logo a').clone(); $('#mobile-logo').html(clone); </script>
                    <?php endif; ?>
                </div>                
            </div>
        </div>
        <script src="<?php echo bloginfo('template_url'); ?>/js/header_scripts.js?ver=1.031"></script>
        <script>
            jQuery(window).load(function() {
                $('#primary-menu').addClass('init').removeClass('hide_sub');
            });
        </script>

        <script>
        <?php
            if(!empty($_REQUEST['error'])) { ?>
                $('#notification').show();
                setTimeout(function(){ $('#notification').fadeOut(); }, 3000);
        <?php }  ?>
        
        </script>