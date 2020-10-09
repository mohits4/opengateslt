<section <?php $anchor = get_sub_field('anchor'); if(!empty($anchor)): $anchor_str = str_replace(array(' ','%','/','\\','.','-','&','?','!','<','>','~','#','@','&','^','|','+','$'),'',$anchor); echo "id='".$anchor_str."'"; echo "data-agenda='".$anchor."'"; endif; ?>
    class="press_releases content_hide <?php $ecc = get_sub_field('enable_custom_styles'); if($ecc): $cc = get_sub_field('custom_styles'); if(!empty($cc)): echo ' '. implode(' ',$cc); endif; endif; ?>">
    <div class="cont margin_b ml">
        <div class="doc_filters margin_b mm news">
            <div class="doc_filters_outer_wrapper flex tcenter justifyc upper plaintext text user_sel">
                <ul class="flex valignstart">
                    <li class="filter_by sort sort_title"><strong>FILTER By YEAR:</strong></li>
                    <span class="filters_body flex wrap"></span>
                </ul>
            </div>
        </div>
        <div class="news_outer_wrapper margin_b ms"></div>
        <script>
        
        const TARGET_URL = 'https://opengatecapital.com/wp-json/v1/get_array';        
        var news_year_arr = [];
        var first_year;
        var fund_filter = '<?php the_sub_field('display_funds'); ?>';
        
        
        fetch(TARGET_URL).then(res => res.json()).then(response => appendNewsEl(response));
        
        function appendNewsEl(prArray){
            if(prArray.length > 0){
                for (var i = 0, max = prArray.length; i < max; i++) {
                    var title = prArray[i]['title'];
                    var date = prArray[i]['date'];
                    var year = prArray[i]['year'];
                    if(i === 0){ first_year = year; }
                    if(first_year === year){ var add_news_class = ''; } else { var add_news_class = ' hidden'; }
                    var url = prArray[i]['url'];
                    var img = prArray[i]['img'];
                    var logo = prArray[i]['logo'];
                    if(logo){
                        var logo_str = '<span class="img_box logo_news"><img src="'+logo+'" alt="OGC PR Logo" /></span>';
                    } else {
                        var logo_str = '';
                    }
                    if(img){
                        var img_str = '<span class="img_box cover left_side flex" style="background-image: url('+img+');">'+logo_str+'</span>';
                    } else {
                        var img_str = '';
                    }                    
                    var funds = prArray[i]['funds'];
                    var news_item_el = '<a echo target="_blank" href="'+url+'" class="news_item flex'+add_news_class+'" data-news-year="'+year+'">'+img_str+'\n\
                        <span class="margin_b mxxxs right_side">\n\
                            <h3>'+title+'</h3>\n\
                            <p class="date">'+date+'</p>\n\
                        </span>\n\
                    </a>';
                    if(fund_filter !== "all"){
                        if(funds !== '' && funds.indexOf(fund_filter) > -1){
                            $('section.press_releases .news_outer_wrapper').append(news_item_el);
                            news_year_arr[year] = year;
                        }
                    } else if(fund_filter === "all") {
                        $('section.press_releases .news_outer_wrapper').append(news_item_el);
                        news_year_arr[year] = year;
                    }
                }
            }
            return newsFilterFilling();
        }
        
        function newsFilterFilling(){

            news_year_arr.sort().reverse();
            news_year_arr = cleanArray(news_year_arr);

            function cleanArray(arr) {
                var newArray = new Array();
                for (var i = 0; i < arr.length; i++) {
                    if(arr[i]){
                        newArray.push(arr[i]);
                    }
                }
                return newArray;
            }            

            for (var i = 0, max = news_year_arr.length; i < max; i++) {
                if(i === 0){ var add_news_class = ' active'; } else { var add_news_class = ''; }
                $('.doc_filters.news ul .filters_body').append('<li class="cursor'+add_news_class+'" data-news-year-target='+news_year_arr[i]+'><span>'+news_year_arr[i]+'</span></li>');
            }
            $('section.press_releases').removeClass('content_hide').find('.loader').remove();   
        } 
        
        $(document).on('click','[data-news-year-target]',function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active').siblings().removeClass('active');
                newsFiltering($(this).attr('data-news-year-target'));
            }
        });

        function newsFiltering(targetYear){
            $('[data-news-year]').addClass('hidden').filter(function(){
                if($(this).attr('data-news-year') == targetYear){ 
                    return $(this);
                }
            }).removeClass('hidden');
        }        
        
        </script>
    </div>
    <div class="loader">Loading...</div>
</section>