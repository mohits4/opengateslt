<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="columns_section <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont large">
        <?php $colc = get_sub_field('columns_count'); if($colc === 'Two'): $col_two = get_sub_field('content_two'); if(!empty($col_two)): if(have_rows('content_two')): ?>
            <div class="columns flex wrap c-2">
                <?php while(have_rows('content_two')): the_row(); ?>
                    <div class="c_block margin_b mm">
                        <?php if(have_rows('fields')): while(have_rows('fields')): the_row(); ?>
                            <?php if(get_row_layout() == 'title'): ?>
                                <h3 class="upper"><?php the_sub_field('title'); ?></h3>
                            <?php elseif(get_row_layout() == 'plaintext'): ?>
                                <div class="plaintext text margin_b mxs"><?php the_sub_field('plaintext'); ?></div>
                            <?php elseif(get_row_layout() == 'shortcode'): ?>
                                <div class="shortcode_wrapper outer_wrapper">
                                    <div class="inner_wrapper">
                                        <?php $shortcode = get_sub_field('shortcode'); echo do_shortcode($shortcode); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; endif; else: $col_three = get_sub_field('content_three'); if(!empty($col_three)): if(have_rows('content_three')): ?>
            <div class="columns flex wrap c-3">
                <?php while(have_rows('content_three')): the_row(); ?>
                    <div class="c_block margin_b mm">
                        <?php if(have_rows('fields')): while(have_rows('fields')): the_row(); ?>
                            <?php if(get_row_layout() == 'title'): ?>
                                <h3 class="upper"><?php the_sub_field('title'); ?></h3>
                            <?php elseif(get_row_layout() == 'plaintext'): ?>
                                <div class="plaintext text margin_b mxs"><?php the_sub_field('plaintext'); ?></div>
                            <?php elseif(get_row_layout() == 'shortcode'): ?>
                                <div class="shortcode_wrapper outer_wrapper">
                                    <div class="inner_wrapper">
                                        <?php $shortcode = get_sub_field('shortcode'); echo do_shortcode($shortcode); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; endif; endif; ?>
    </div>
</section>