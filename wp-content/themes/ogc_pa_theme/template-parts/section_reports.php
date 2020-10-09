<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="reports <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont margin_b ml">
        <?php $title = get_sub_field('title'); if(!empty($title)): ?>
            <header class="block_header b_cover">
                <h2 class='upper tcenter'><?php echo $title; ?></h2>
            </header>
        <?php endif; ?>
        <?php global $show_filter_by_years; if(empty($show_filter_by_years)): $show_filter_by_years = get_sub_field('show_filter_by_years'); if(!empty($show_filter_by_years)): ?>
            <div class="doc_filters margin_b mm reports">
                <div class="doc_filters_outer_wrapper flex tcenter justifyc upper plaintext text user_sel">
                    <ul class="flex valignstart">
                        <li class="filter_by sort sort_title"><strong>FILTER By YEAR:</strong></li>
                        <span class="filters_body flex wrap"></span>
                        <li class="view_all active_all cursor flex valignc tcenter justifyc"><strong>View All</strong></li>
                    </ul>
                </div>
            </div>
        <?php endif; endif; ?>        
        <?php if(have_rows('reports_group')): while(have_rows('reports_group')): the_row(); ?>
            <div class="reports_outer_wrapper margin_b ms">
                <?php $group_title = get_sub_field('group_title'); if(!empty($group_title)): ?><h3 class="reports_group_title"><?php echo $group_title; ?></h3><?php endif; ?>
                <?php if(have_rows('reports')): ?>
                    <div class="reports_wrapper columns c-4 flex wrap">
                        <?php while(have_rows('reports')): the_row(); ?>
                            <div class='c_block <?php $link = get_sub_field('link'); if(empty($link)): echo ' notlink'; else: echo ' cursor'; endif; ?>' 
                                data-report-year-obj="<?php $year_title = get_sub_field('year'); echo $year_title; ?>">
                                <header class='el_header flex fauto valignc'>
                                    <div class='icon img_box'><img src='<?php echo get_template_directory_uri(); ?>/img/reports_icon.svg' /></div>
                                    <?php $badge = get_sub_field('report_badge'); if(!empty($badge)): ?>
                                        <p class='badge upper' style='background-color: <?php echo get_field('color_of_badge',$badge); ?>'><?php echo get_the_title($badge); ?></p>
                                    <?php endif; ?>
                                </header>
                                <div class='el_body margin_b mxs'>
                                    <header class="body_header margin_b mxxxs">
                                        <?php if(!empty($year_title)): ?><p class="year_title text plaintext"><?php echo $year_title; ?></p><?php endif; ?>
                                        <h5><?php the_sub_field('title'); ?></h5>
                                    </header>
                                    <?php $excerpt = get_sub_field('excerpt'); if(!empty($excerpt)): ?><p class='plaintext text margin_b mxs excerpt'><?php echo $excerpt; ?></p><?php endif; ?>
                                </div>
                                <?php if(!empty($link)): ?>
                                    <a class="stretch" href='<?php echo $link['url']; ?>' <?php if(!empty($link['target'])): echo "target='_blank'"; endif; ?>></a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>