        <footer>
            <div class="cont">
                <div class="logo_wrapper">
                    <?php $ogc_logo = $GLOBALS['$options']['main_ogc_logo_white'];
                    $pos = strrpos($GLOBALS['$custom_menu'],'Fund');
                    if($pos > -1):
                        $logo_url = get_template_directory_uri().'/img/OGC_IP_logo_wh.svg';
                        $ogc_logo = array('url' => $logo_url,'alt' => 'OGC Investor portal logo');
                    endif;                    
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
        <?php $contact_popup = $GLOBALS['$options']['show_contact_popup'];
        if($contact_popup && $pos > -1): 
            get_template_part('template-parts/contact_popup');
        endif; ?>
        <script src="<?php echo bloginfo('template_url'); ?>/js/footer_scripts.js?ver=1.016"></script>
        <?php wp_footer(); ?>
        <div id="to_top" class="cursor flex justifyc valignc" style="display:none;"><i class="fal fa-chevron-up"></i></div>
    </body>
</html>