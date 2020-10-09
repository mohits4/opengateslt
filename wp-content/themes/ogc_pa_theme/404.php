<?php get_header(); ?>

    <header class="pageheader homepage p404 flex valignc justifyc">
        <div class="b_cover stretch" style="background-image: url(<?php $background_image = get_the_post_thumbnail_url(9,'full'); echo $background_image; ?>);"></div>
        <div class="cont margin_b mxl">
            <div class="ph_content_wrapper margin_b ms">
                <div class="title_wrapper"><h1 class="tcenter upper">404</h1></div>
                <p class="subtitle text tcenter">Page Not Found</p>
                <p class="upper button_box tcenter">
                    <a class="cursor button" href="<?php echo site_url().'/home'; ?>"><span>Go to the Homepage</span></a>
                </p>
            </div>
        </div>
    </header>