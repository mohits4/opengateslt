<section class="main_header cont text margin_b mxs">
    <?php 
        if(!$GLOBALS['$pos1'] && $GLOBALS['$pos1'] !== 0): ?>
        <?php $hide_bc = get_field('hide_breadcrumbs'); if(!$hide_bc): ?>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/"><?php if(function_exists('bcn_display')): bcn_display(); endif; ?></div>
            <?php if($GLOBALS['$pos2'] > -1): ?>
                <script>
                    $('.breadcrumbs').find('.home span[property="name"]').text('OGC Investor Portal');
                </script>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
    <h1 class="tleft"><?php $ct = get_field('custom_title'); if(!empty($ct)): echo $ct; else: the_title(); endif; ?></h1>
</section>