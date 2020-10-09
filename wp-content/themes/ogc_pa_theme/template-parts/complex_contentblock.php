<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="complex_section <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont margin_b mm">
        <?php if(have_rows('fields')): ?>
            <?php while(have_rows('fields')): the_row(); ?>
                <?php if(get_row_layout() == 'title'): ?>
                    <h2><?php the_sub_field('title'); ?></h2>
                <?php elseif(get_row_layout() == 'subtitle'): ?>
                    <div class="subtitle text margin_b ms"><?php the_sub_field('subtitle'); ?></div> 
                <?php elseif(get_row_layout() == 'plaintext'): ?>
                    <div class="plaintext text margin_b mxs"><?php the_sub_field('plaintext'); ?></div>
                <?php elseif(get_row_layout() == 'notes'): ?>
                    <div class="plaintext text margin_b mxs notes"><?php the_sub_field('notes'); ?></div>            
                <?php elseif(get_row_layout() == 'buttons'): ?>
                    <?php if(have_rows('buttons')): ?>
                        <div class="buttons_outer_wrapper margin_r mrm flex justifyc valignc fauto">
                            <?php while(have_rows('buttons')): the_row(); ?>
                                <?php $button = get_sub_field('button'); if(!empty($button)): ?>
                                    <p class="upper">
                                        <a class="cursor button" <?php if(!empty($button['target'])): ?>target="<?php echo $button['target']; ?>"<?php endif; ?> href="<?php echo $button['url']; ?>"><span><?php if(!empty($button['title'])): echo $button['title']; else: echo ' Learn More'; endif; ?></span></a>
                                    </p>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                <?php elseif(get_row_layout() == 'link_block'):
                    $desc = get_sub_field('description');
                    $link = get_sub_field('link'); ?>
                    <a class="cursor link_block flex" <?php if(!empty($link['target'])): ?>target="<?php echo $link['target']; ?>"<?php endif; ?> href="<?php echo $link['url']; ?>">
                        <span class="link_block_desc flex valignc justifystart">
                            <span class="plaintext text upper"><strong><?php echo $desc; ?></strong></span>
                        </span>
                        <span class="link_block_body flex valignc justifyc tcenter">
                            <span class="plaintext text upper margin_r mrxxxs"><i class="far fa-link"></i><span><?php if(!empty($link['title'])): echo $link['title']; else: echo ' AltaReturn LP Portal'; endif; ?></span></span>
                        </span>
                    </a>
                <?php elseif(get_row_layout() == 'separator'): ?>
                    <hr class="separator" />
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>