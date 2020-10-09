<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="portfolio single <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont">
        <div class="portfolio_single_outer_wrapper">
            <?php $comp_id = get_sub_field('portfolio_company'); $args = array( 'post_type' => array( 'ogc-pa-portfolio' ),'p' => $comp_id,'post_status' => 'publish'); $query = new WP_Query($args); if (have_posts()): while ($query->have_posts()) : $query->the_post(); ?>
                <div class='portfolio_single_inner_wrapper flex valignstart'>
                    <div class='logo_outer_wrapper'>
                        <div class="logo_wrapper">
                            <div class="stretch b_cover" style="background-image: url(<?php $logo = get_field('logo'); if(!empty($logo)): echo $logo['url']; endif; ?>);" ></div>
                        </div>
                    </div>
                    <?php if(have_rows('key_information')): ?>
                        <div class='portfolio_info flex wrap columns c-3'>
                            <?php while(have_rows('key_information')): the_row(); ?>
                                <div class='c_block margin_b mxxxs'>
                                    <?php if(get_row_layout() == 'investment_date'): ?>
                                        <p class='plaintext text upper'><strong>Investment Date</strong></p>
                                        <p class='plaintext text'><?php the_sub_field('investment_date'); ?></p>
                                    <?php elseif(get_row_layout() == 'industry'): ?>
                                        <p class='plaintext text upper'><strong>Industry</strong></p>
                                        <p class='plaintext text'><?php the_sub_field('industry'); ?></p>
                                    <?php elseif(get_row_layout() == 'investment_status'): ?>
                                        <p class='plaintext text upper'><strong>Investment status</strong></p>
                                        <p class='plaintext text'><?php the_sub_field('investment_status'); ?></p>
                                    <?php elseif(get_row_layout() == 'transaction_type'): ?>
                                        <p class='plaintext text upper'><strong>Transaction type</strong></p>
                                        <p class='plaintext text'><?php the_sub_field('transaction_type'); ?></p>                                                        
                                    <?php elseif(get_row_layout() == 'fund'): ?>
                                        <p class='plaintext text upper'><strong>Fund</strong></p>
                                        <p class='plaintext text'><?php the_sub_field('fund'); ?></p>
                                    <?php elseif(get_row_layout() == 'geography'): ?>
                                        <p class='plaintext text upper'><strong>Geography</strong></p>
                                        <p class='plaintext text'><?php the_sub_field('geography'); ?></p>
                                    <?php elseif(get_row_layout() == 'headquarter'): ?>
                                        <p class='plaintext text upper'><strong>Headquarter</strong></p>
                                        <div>
                                            <p class='plaintext text'><?php the_sub_field('headquarter'); ?></p>
                                            <?php $link = get_sub_field('google_maps_link'); if(!empty($link)): ?><p class='plaintext text'><a href='<?php echo $link; ?>' target='_blank'>View on Google Maps</a></p><?php endif; ?>
                                        </div>
                                    <?php elseif(get_row_layout() == 'custom'): ?>
                                        <p class='plaintext text upper'><strong><?php the_sub_field('title'); ?></strong></p>
                                        <div class='plaintext text'><?php the_sub_field('plaintext'); ?></div>                                                        
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php $website = get_field('website'); endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <?php if(!empty($website)): ?>
            <p class="upper button_box">
                <a class="cursor button" target="_blank" href="<?php echo $website; ?>"><span>Visit Website</span></a>
            </p>
        <?php endif; ?>
    </div>                 
</section>