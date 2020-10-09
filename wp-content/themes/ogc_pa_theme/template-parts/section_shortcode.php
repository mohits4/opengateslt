<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="shortcode <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont large margin_b mxs">
        <?php $clarification = get_sub_field('clarification'); if(!empty($clarification)): ?>
            <div class="plaintext text margin_b mxs notes upper"><?php echo $clarification; ?></div>
        <?php endif; ?>        
        <div class="shortcode_wrapper outer_wrapper">
            <?php $shortcodeID = get_sub_field('shortcode'); if($shortcodeID[0] === '['): ?>
            <!-- ******* Code for export report button start here *********** -->  
                <?php if(get_field('enable_report_export') == 'Yes'):?>
                    <p class="actionButton">
                        <?php
                            // check if custom plugin activated 
                            if(is_plugin_active('custom_api_plugin/custom_api_plugin.php')):
                                $newSubCode     = substr($shortcodeID,13,5);
                                $spaceRemoveCode = str_replace(' ','', $newSubCode);
                                $powerBiCode    = str_replace('"', '', $spaceRemoveCode);
                                //echo "powerBiCode - ".$powerBiCode;
                                $report_id  =   get_post_meta( $powerBiCode, '_power_bi_report_id', true );
                        ?>
                                <a href="<?php echo site_url(); ?>/export-report-tab?report_id=<?php echo $report_id; ?>&type=PDF" target="_blank" data-attr="PDF" style="font: 16px 'CeraPro-Medium'; padding: 8px 10px; " class="demoClass cursor expButton demoApi mr-2"> Export PDF </a>

                                <a href="<?php echo site_url(); ?>/export-report-tab?report_id=<?php echo $report_id; ?>&type=PPTX" style="font: 16px 'CeraPro-Medium'; padding: 8px 10px; " target="_blank" data-attr="PPTX" class="demoClass cursor expButton demoApi"> Export PPTX </a>

                        <?php
                                // echo do_shortcode('[custom-plugin-powerbi postID = '.$report_id.']');
                            endif;
                        ?>
                    </p>
                <?php endif; ?>
                <!-- ********** End export report button code ********** -->
            <div class="inner_wrapper">
                <?php echo do_shortcode($shortcodeID); ?>
            </div>
            <?php elseif($shortcodeID[0] === '<'): ?>
                <div class="inner_wrapper custom_iframe">
                    <?php echo $shortcodeID; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>