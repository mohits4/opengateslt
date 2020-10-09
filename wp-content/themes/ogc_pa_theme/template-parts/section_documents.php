<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="documents_section <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont margin_b ml">
        <?php $show_all_doc = get_sub_field('show_all_documents');
            $show_columns = get_sub_field('show_columns');
            $show_company_filter = get_sub_field('show_company_filter');
            $categories = get_categories([
                'taxonomy'     => 'documents-type',
                'type'         => 'ogc-pa-documents',
                'hide_empty'   => 1,
                'orderby'      => 'name',
                'order'        => 'ASC'                              
            ]);
            $z = 0; foreach($categories as $cat):  
                $doc_cat_ar[$z]['order'] = get_field('order',$cat);
                $doc_cat_ar[$z]['term'] = $cat;
                $doc_cat_ar[$z]['slug'] = $cat -> slug;

                $abbr = get_field('abbreviation',$cat); if(empty($abbr)): $abbr = $cat -> name; endif;
                $doc_cat_ar[$z]['abbr'] = $abbr;
                $doc_cat_ar[$z]['color'] = get_field('color',$cat);
            $z++; endforeach;
            array_multisort($doc_cat_ar);
            
            $categories_user = get_categories([
                'taxonomy'     => 'documents-user',
                'type'         => 'ogc-pa-documents',
                'hide_empty'   => 1,
                'orderby'      => 'name',
                'order'        => 'ASC'                              
            ]);
            $z = 0; foreach($categories_user as $cat):  
                $doc_cat_u[$z]['name'] = $cat -> name;
                $doc_cat_u[$z]['slug'] = $cat -> slug;
            $z++; endforeach;
            array_multisort($doc_cat_u);            
            
        foreach($doc_cat_u as $value):     
            $filters_company[$value['slug']] = $value['name'];
        endforeach;
        // sort by date
        $count = 0; foreach($doc_cat_ar as $value): 
            $filters_dt[$value['abbr']] = '';
            if(!$show_all_doc):
                $show_doc = get_sub_field('show_documents');
                foreach($show_doc as $val): $show_doc_arr[] = $val -> slug; endforeach;
                $args = array('post_type' => 'ogc-pa-documents','post_status' => 'publish','orderby' => 'date','order' => 'DESC','posts_per_page' => -1,'tax_query' => ['relation' => 'AND',
                    [
                        'taxonomy' => 'documents-type',
                        'field'    => 'slug',
                        'terms' => $value['slug'],
                    ],
                    [
                        'taxonomy' => 'documents-user',
                        'field'    => 'slug',
                        'terms' => $show_doc_arr
                    ]
                ]);
            else:
                $args = array('post_type' => 'ogc-pa-documents','post_status' => 'publish','orderby' => 'date','order' => 'DESC','posts_per_page' => -1,'documents-type' => $value['slug']);
            endif;
            $p_count = 0; $query = new WP_Query($args); if(have_posts()): while($query->have_posts()) : $query->the_post();
            $file = get_field('file',$post -> ID);
            $docs[$value['slug']][$p_count]['title'] = $file['title'];

            if($show_columns['date']): 
                $docs[$value['slug']][$p_count]['date_show'] = get_the_time('m/d/y');
                $docs[$value['slug']][$p_count]['date_data'] = $post -> post_date;
            endif;

            if($show_columns['upload_by']):
                $display_name = get_the_author_meta( 'display_name',$post -> post_author);
                $docs[$value['slug']][$p_count]['author'] = $display_name;
                $filters_a[$display_name] = '';
            endif;

            if($show_columns['file_type']):
                $ext = pathinfo($file['url'], PATHINFO_EXTENSION);
                $docs[$value['slug']][$p_count]['filetype'] = $ext; 
                $filters_ext[$ext] = '';

                if($ext === 'docx'):
                    $icon = '<i class="fas fa-file-word"></i>';
                elseif($ext === 'pdf'):
                    $icon = '<i class="fas fa-file-pdf"></i>';
                elseif($ext === 'pptx'):
                    $icon = '<i class="fas fa-file-powerpoint"></i>';
                elseif($ext === 'xlsx'):
                    $icon = '<i class="fas fa-file-excel"></i>';
                elseif($ext === 'zip'):
                    $icon = '<i class="fas fa-file-archive"></i>';
                else:
                    $icon = '<i class="fas fa-file"></i>';
                endif;
                $docs[$value['slug']][$p_count]['icon'] = $icon;
            endif;

            if($show_columns['size']):
                $filesize = size_format($file['filesize'], 1);
                $filesize = str_replace(' ','',$filesize);
                $docs[$value['slug']][$p_count]['filesize'] = $filesize;
            endif;
            
            if($show_company_filter):
                $companies = get_the_terms($post -> ID,'documents-user');
                $companies_str = '';
                foreach ($companies as $cat):
                    $companies_str = $companies_str.$cat -> slug.'; ';
                endforeach;
                $docs[$value['slug']][$p_count]['company'] = $companies_str;
            endif;

            $docs[$value['slug']][$p_count]['url'] = $file['url'];
            $p_count++; endwhile; endif; wp_reset_postdata();
            if($p_count === 0): $doc_cat_ar[$count]['posts_count'] = 0; endif; $count++;
        endforeach;

        // sort by title
        $count = 0; foreach($doc_cat_ar as $value):
            if(!$show_all_doc):
                $show_doc = get_sub_field('show_documents');
                foreach($show_doc as $val): $show_doc_arr[] = $val -> slug; endforeach;
                $args = array('post_type' => 'ogc-pa-documents','post_status' => 'publish','meta_key' => 'file','orderby' => 'meta_value','order' => 'ASC','posts_per_page' => -1,'tax_query' => ['relation' => 'AND',
                    [
                        'taxonomy' => 'documents-type',
                        'field'    => 'slug',
                        'terms' => $value['slug'],
                    ],
                    [
                        'taxonomy' => 'documents-user',
                        'field'    => 'slug',
                        'terms' => $show_doc_arr
                    ]
                ]);
            else:
                $args = array('post_type' => 'ogc-pa-documents','post_status' => 'publish','meta_key' => 'file','orderby' => 'meta_value','order' => 'ASC','posts_per_page' => -1,'documents-type' => $value['slug']);
            endif;
            $p_count = 0; $query = new WP_Query($args); if(have_posts()): while($query->have_posts()) : $query->the_post();
            $file = get_field('file',$post -> ID);
            $docs_abc[$value['slug']][$p_count]['title'] = $file['title'];

            if($show_columns['date']): 
                $docs_abc[$value['slug']][$p_count]['date_show'] = get_the_time('m/d/y');
                $docs_abc[$value['slug']][$p_count]['date_data'] = $post -> post_date;
            endif;

            if($show_columns['upload_by']):
                $display_name = get_the_author_meta( 'display_name',$post -> post_author);
                $docs_abc[$value['slug']][$p_count]['author'] = $display_name;
                $filters_a[$display_name] = '';
            endif;

            if($show_columns['file_type']):
                $ext = pathinfo($file['url'], PATHINFO_EXTENSION);
                $docs_abc[$value['slug']][$p_count]['filetype'] = $ext; 
                $filters_ext[$ext] = '';

                if($ext === 'docx'):
                    $icon = '<i class="fas fa-file-word"></i>';
                elseif($ext === 'pdf'):
                    $icon = '<i class="fas fa-file-pdf"></i>';
                elseif($ext === 'pptx'):
                    $icon = '<i class="fas fa-file-powerpoint"></i>';
                elseif($ext === 'xlsx'):
                    $icon = '<i class="fas fa-file-excel"></i>';
                elseif($ext === 'zip'):
                    $icon = '<i class="fas fa-file-archive"></i>';
                else:
                    $icon = '<i class="fas fa-file"></i>';
                endif;
                $docs_abc[$value['slug']][$p_count]['icon'] = $icon;
            endif;

            if($show_columns['size']):
                $filesize = size_format($file['filesize'], 1);
                $filesize = str_replace(' ','',$filesize);
                $docs_abc[$value['slug']][$p_count]['filesize'] = $filesize;
            endif;
            
            if($show_company_filter):
                $companies = get_the_terms($post -> ID,'documents-user');
                $companies_str = '';
                foreach ($companies as $cat):
                    $companies_str = $companies_str.$cat -> slug.'; ';
                endforeach;
                $docs_abc[$value['slug']][$p_count]['company'] = $companies_str;
            endif;            

            $docs_abc[$value['slug']][$p_count]['url'] = $file['url'];
            $p_count++; endwhile; endif; wp_reset_postdata();
            if($p_count === 0): $doc_cat_ar[$count]['posts_count'] = 0; endif; $count++;
        endforeach;

            if($filters_a): ksort($filters_a); $filters_arr['author'] = $filters_a; endif;
            if($filters_ext): ksort($filters_ext); $filters_arr['ext'] = $filters_ext; endif;
            $filters_arr['doctype'] = $filters_dt;
            $filters_arr['company'] = $filters_company; ?>
        <?php $show_filters = get_sub_field('show_filters'); if($show_filters): ?>
            <div class="doc_filters margin_b mm">
                <div class="doc_filters_outer_wrapper flex tcenter justifyc upper plaintext text user_sel">
                    <ul class="flex">
                        <?php if($show_columns['date']): ?>
                            <li class="sort sort_title"><strong>Sort By:</strong></li>
                            <li class="sort sort_menu menu-item-has-children">
                                <span><span class="sort_val_target">Upload Date</span> <i class="fal fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li class="sort_val sort_date active"><i class="far fa-check"></i><span class="val">Upload Date</span></li>
                                    <li class="sort_val sort_abc"><i class="far fa-check"></i><span class="val">A - Z</span></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li class="filter_by"><strong>Filter By:</strong></li>
                        <?php if($filters_arr['doctype']&&count($filters_arr['doctype'])> 1): ?>
                            <li class="doctype doctype_group menu-item-has-children">
                                <span><span>Documents Type</span> <i class="fal fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li class="active all" data-filter='data-dt'><i class="far fa-check"></i><span class="val">All</span></li>
                                    <?php foreach ($filters_arr['doctype'] as $key => $value): ?>
                                        <li data-filter='data-dt'><i class="far fa-check"></i><span class="val"><?php echo $key; ?></span></li>                                             
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if($filters_arr['author']&&count($filters_arr['author'])> 1): ?>
                            <li class="author author_group menu-item-has-children">
                                <span><span>Upload User</span> <i class="fal fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li class="active all" data-filter='data-a'><i class="far fa-check"></i><span class="val">All</span></li>
                                    <?php foreach ($filters_arr['author'] as $key => $value): ?>
                                        <li data-filter='data-a'><i class="far fa-check"></i><span class="val"><?php echo $key; ?></span></li>                                             
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if($filters_arr['ext']&&count($filters_arr['ext'])> 1): ?>
                            <li class="filetype filetype_group menu-item-has-children">
                                <span><span>File Type</span> <i class="fal fa-chevron-down"></i></span>
                                <ul class="sub-menu">
                                    <li class="active all" data-filter='data-ft'><i class="far fa-check"></i><span class="val">All</span></li>
                                    <?php foreach ($filters_arr['ext'] as $key => $value): ?>
                                        <li data-filter='data-ft'><i class="far fa-check"></i><span class="val"><?php echo $key; ?></span></li>                                             
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>                                               
                        <li class="view_all active_all cursor"><strong>View All</strong></li>
                    </ul>
                </div>
                <?php if($show_company_filter): ?>
                    <div class="company doc_filters_outer_wrapper flex tcenter justifyc upper plaintext text user_sel">
                        <ul class="flex">
                            <?php if($filters_arr['company']&&count($filters_arr['company'])> 1): ?>
                                <li class="company company_group menu-item-has-children">
                                    <span><span>Company</span> <i class="fal fa-chevron-down"></i></span>
                                    <ul class="sub-menu">
                                        <li class="active all" data-filter='data-company' data-user-slug="ogc_u"><i class="far fa-check"></i><span class="val">All</span></li>
                                        <?php foreach ($filters_arr['company'] as $key => $value):
                                            if($key !== 'ogc_u'): ?>
                                            <li data-filter='data-company' data-user-slug="<?php echo $key; ?>"><i class="far fa-check"></i><span class="val"><?php echo $value; ?></span></li>
                                            <?php endif;
                                        endforeach; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>                                               
                        </ul>
                    </div>                
                <?php endif; ?>
                <div class="doc_filters_indicator flex fauto margin_r mrm">
                    <div class="doctype">
                        <p class="plaintext text margin_r mrxxxxs"><span class="ind_title">Document Type:</span><span class="ind_val upper" data-ind='data-dt'>All</span></p>
                    </div>
                    <div class="fyletype">
                        <p class="plaintext text margin_r mrxxxxs"><span class="ind_title">File Type:</span><span class="ind_val upper" data-ind='data-ft'>All</span></p>
                    </div>
                    <div class="author">
                        <p class="plaintext text margin_r mrxxxxs"><span class="ind_title">Uploaded By:</span><span class="ind_val upper" data-ind='data-a'>All</span></p>
                    </div>
                    <?php if($show_company_filter): ?>
                        <div class="company">
                            <p class="plaintext text margin_r mrxxxxs"><span class="ind_title">Company:</span><span class="ind_val upper" data-ind='data-company'>All</span></p>
                        </div>     
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="documents_outer_wrapper">
            <div class="doc_row upper doc_header justifysb">
                <div class="title_box"><p>Document</p></div>
                <?php if($show_columns['date']): ?><div class="date_box tcenter"><p>Date</p></div><?php endif; ?>
                <div class="doctype_box tcenter"><p>DOCUMENT TYPE</p></div>
                <?php if($show_columns['upload_by']): ?><div class="author_box tcenter"><p>Uploaded by</p></div><?php endif; ?>
                <?php if($show_columns['file_type']): ?><div class="filetype_box tcenter"><p>FILE TYPE</p></div><?php endif; ?>
                <?php if($show_columns['size']): ?><div class="size_box tcenter"><p>Size</p></div><?php endif; ?>
                <div class="download_box tcenter"><p>Download</p></div>
            </div>
            <div class="documents_middle_wrapper">
                <?php foreach($doc_cat_ar as $value): if($value['posts_count'] !== 0): ?>
                    <header class="block_header b_cover" data-type="<?php echo $value['abbr']; ?>"><h2 class='upper'><?php echo $value['term'] -> name; ?></h2></header>
                    <div class="documents_inner_wrapper" data-type="<?php echo $value['abbr']; ?>">
                        <?php if($show_columns['date']): $docs_display = $docs; else: $docs_display = $docs_abc; endif; ?>
                        <?php foreach($docs_display as $key => $val_arr): if($key === $value['slug']): ?>
                            <?php foreach($val_arr as $val_doc): ?>
                                <div class="doc_row doc_body" 
                                    data-type="<?php echo $value['abbr']; ?>" 
                                    <?php if($show_columns['date']): ?>
                                        data-date="<?php echo $val_doc['date_data']; ?>"
                                    <?php endif; ?>
                                        data-title="<?php echo $val_doc['title']; ?>"                                                     
                                    <?php if($show_columns['upload_by']): ?>
                                        data-author="<?php echo $val_doc['author']; ?>"
                                    <?php endif; ?>
                                    <?php if($show_company_filter): ?>
                                        data-user="<?php echo $val_doc['company']; ?>"
                                    <?php endif; ?>                                        
                                    <?php if($show_columns['file_type']): ?>
                                        data-ext="<?php echo $val_doc['filetype']; ?>"
                                    <?php endif; ?>
                                    <?php if($show_columns['size']): ?>
                                        data-size="<?php echo $val_doc['filesize']; ?>"
                                    <?php endif; ?>>
                                    <div class="title_box plaintext text margin_r mrxxs flex valignc"><?php echo $val_doc['icon']; ?><p><?php echo $val_doc['title']; ?></p></div>
                                    <?php if($show_columns['date']): ?>
                                        <div class="date_box plaintext text tcenter"><p><?php echo $val_doc['date_show']; ?></p></div>
                                    <?php endif; ?>
                                    <div class="doctype_box plaintext text upper tcenter"><p style="background-color:<?php echo $value['color']; ?>;"><?php echo $value['abbr']; ?></p></div>
                                    <?php if($show_columns['upload_by']): ?>
                                        <div class="author_box plaintext text tcenter"><p><?php echo $val_doc['author']; ?></p></div>
                                    <?php endif; ?>
                                    <?php if($show_columns['file_type']): ?>
                                        <div class="filetype_box plaintext text upper tcenter"><p><?php echo $val_doc['filetype']; ?></p></div>
                                    <?php endif; ?>
                                    <?php if($show_columns['size']): ?>
                                        <div class="size_box plaintext text upper tcenter"><p><?php echo $val_doc['filesize']; ?></p></div>
                                    <?php endif; ?>
                                    <div class="download_box plaintext text tcenter"><p><a href="<?php echo $val_doc['url']; ?>" download><i class="fal fa-arrow-to-bottom"></a></i></p></div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; endforeach; ?>
                    </div>
                <?php endif; endforeach; ?>
            </div>
        </div>
        <h3 class="no_documents hidden tcenter">No documents found</h3>
    </div>
</section>