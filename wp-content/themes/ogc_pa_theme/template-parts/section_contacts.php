<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="contacts_section <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont margin_b ml">
        <header class="block_header b_cover">
            <h2 class='upper'><?php the_sub_field('title'); ?></h2>
        </header>
            <?php $cc = get_sub_field('content_contacts'); if(have_rows('content_contacts')): ?>
                <div class="contacts_wrapper columns c-3 flex wrap<?php if(count($cc) > 3): echo ' show_lines'; endif; ?>">
                    <?php while(have_rows('content_contacts')): the_row(); ?>
                        <div class='c_block margin_b mxs'>
                            <?php $name = get_sub_field('name'); if(!empty($name)): ?><h5><?php echo $name; ?></h5><?php endif; ?>
                            <?php $info = get_sub_field('info'); if(!empty($info)): ?><div class='plaintext text margin_b mxs'><?php echo $info; ?></div><?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
    </div>
</section>