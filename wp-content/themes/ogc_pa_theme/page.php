<?php get_header(); ?>
    <?php 
        $p_badge = get_field('page_badge');
        $main_title_ph = get_field('title_ph');
        $subtitle = get_field('subtitle_ph');
        $plaintext = get_field('plaintext_ph');
        if(!empty($subtitle)||!empty($plaintext)):
            $pageheader_info_exists = true;
        endif; 
        $user = wp_get_current_user();
        $menu = wp_get_nav_menu_object($GLOBALS['$custom_menu']);
        $c_menu_role = get_field('for_users',$menu);
        if( (in_array('subscriber',$user->roles) && strpos( home_url( $wp->request ), 'slt-home-page') != false) )
        {  ?>
            <script> 
              <?php
			    $hurl = site_url();
			 	$hurl1 = $hurl.'/home';
			 	$a= strval($hurl1);
              $url1=esc_url( add_query_arg( 'error', 'error',  $a ));
              ?>              
              window.location='<?php echo $url1 ?>';
            </script>
        <?php
        }        
        ?>
    <header class="pageheader flex valignend<?php 
    if($pageheader_info_exists): echo " ph_info_exists"; endif;
    if(!empty($p_badge)): echo " badge_exists"; endif; ?>">
        <div class="b_cover stretch" style="background-image: url(<?php $background_image = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $background_image; ?>);"></div>
        <div class="cont margin_b mxl">
            <?php if(!empty($main_title_ph)): ?>
                <div class="title_wrapper"><h1 class="tcenter upper"><?php echo $main_title_ph; ?></h1></div>
            <?php endif; ?>
            <?php if(!empty($p_badge)): ?>
            <p class='badge upper' style='background-color: <?php echo get_field('color_of_badge',$p_badge); ?>'><?php echo get_the_title($p_badge); ?></p>
            <?php endif; ?>                
            <?php if($pageheader_info_exists): ?>
                <div class="ph_content_wrapper margin_b ms">
                    <?php if(!empty($subtitle)): ?><div class="subtitle text margin_b ms"><?php echo $subtitle; ?></div><?php endif; ?>
                    <?php if(!empty($plaintext)): ?><div class="plaintext text margin_b mxs"><?php echo $plaintext; ?></div><?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </header>

    <main class="<?php if(is_front_page()): echo ' home'; endif; ?>">
        <?php 
        if(get_the_ID() !== 9):
            get_template_part('template-parts/main_header');
        endif;
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
        if(comments_open()||get_comments_number()): ?>
            <section class="comments_section cont">
                <?php comments_template(); ?>
            </section>
        <?php endif; ?>        
    </main>
    
<?php get_footer();