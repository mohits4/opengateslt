<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="fund_summary <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont margin_b mxs">
        <?php $clarification = get_sub_field('clarification'); if(!empty($clarification)): ?>
            <div class="plaintext text margin_b mxs notes upper"><?php echo $clarification; ?></div>
        <?php endif; ?>
        <div class="outer_wrapper">
            <?php if(have_rows('fund_summary')): ?>
            <div class="inner_wrapper columns c-3 flex wrap">
                <?php while(have_rows('fund_summary')): the_row(); ?>
                    <div class="c_block margin_b mxxxs">
                        <p class="desc plaintext text upper"><strong><?php the_sub_field('description'); ?></strong></p>
                        <p class="number"><?php the_sub_field('number'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>