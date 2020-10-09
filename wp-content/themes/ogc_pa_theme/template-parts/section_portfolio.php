<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="portfolio set <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <?php $investor_portal_content = get_sub_field('investor_portal_content'); ?>
    <div class="cont">
        <div class="portfolio_wrapper columns c-4 flex wrap">
            <?php $fund = get_sub_field('fund');
            if(!empty($fund)):
                $portfolio_terms = array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'portfolio-fund',
                        'terms' => $fund
                    )
                );
            endif;
            $args = array( 
                'post_type' => array( 
                    'ogc-pa-portfolio'
                    ),
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => -1,
                'tax_query' => array( $portfolio_terms )
            ); 
            $query = new WP_Query($args); if (have_posts()): while ($query->have_posts()) : $query->the_post(); ?>
                <div class="c_block">
                    <div class="logo_wrapper cursor">
                        <div class="stretch b_cover" style="background-image: url(<?php $logo = get_field('logo',$post -> ID); if(!empty($logo)): echo $logo['url']; endif; ?>);" ></div>
                        <?php 
                        if($investor_portal_content):
                            $main_page = get_field('main_page_ip',$post -> ID);
                        else:
                            $main_page = get_field('main_page',$post -> ID);
                        endif;
                        if(!empty($main_page)): ?>
                            <a class="stretch" href="<?php echo $main_page; ?>"></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>