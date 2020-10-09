if($('[data-agenda]').length > 0 && $('section.agenda').length > 0){
    $('[data-agenda]').each(function(){
        $('section.agenda .cont').append('<p class="plaintext text"><a class="margin_r mrxxxs cursor prev_def" href="'+$(this).attr('id')+'"><i class="fal fa-chevron-square-right"></i><span>'+$(this).attr('data-agenda')+'</span></a></p>');
    });
} else if($('[data-agenda]').length <= 0 && $('section.agenda').length > 0){
    $('section.agenda').remove();
}

$(document).on('click','#to_top',function(){
    $('html, body').animate({scrollTop: 0},1000,'easeInOutCubic');
});

$('.wp-block-file__button,.wp-block-button__link').each(function(){
    var text = $(this).text();
    $(this).html('<span>'+text+'</span>');
});

if("ontouchstart" in document.documentElement){
    $('main,footer,.pageheader').tap(function(e){
        e.stopPropagation();
        if(!$('#primary-menu').hasClass('lock') && $(window).width()<=1006 && $('#primary-menu').find('li.active').length > 0){
            $('#primary-menu').addClass('lock');
            $('#primary-menu .sub-menu .sub-menu').removeClass('active tapped').parent().removeClass('active tapped');
            $(this).delay(10).queue(function(){
                $('#primary-menu nav > ul > li.menu-item-has-children > .sub-menu').slideUp(400,function(){           
                    $(this).find('.sub-menu').removeClass('active tapped');
                });
                $(this).delay(400).queue(function(){
                    $('#primary-menu li').removeClass('active tapped');
                $(this).dequeue();});            
                $(this).delay(800).queue(function(){
                    $('#primary-menu').removeClass('lock mobile_show');
                $(this).dequeue();});
            $(this).dequeue();});         
        } else if(!$('#primary-menu').hasClass('lock') && $(window).width() > 1006 && $('#primary-menu').find('li.active').length > 0){
            $('#primary-menu').addClass('lock');            
            $('#primary-menu').find('.active').removeClass('active tapped').delay(400).queue(function(){
                $('#primary-menu').removeClass('lock');
            $(this).dequeue();});
        }
    });    
}

if(!("ontouchstart" in document.documentElement)){
    $('.doc_filters_outer_wrapper > ul > li.menu-item-has-children').mouseenter(function(){
        $(this).find('.sub-menu').stop();
        $(this).addClass('active').siblings().removeClass('active').find('.sub-menu').removeClass('active');
        $(this).delay(10).queue(function(){
            $(this).find('.sub-menu').removeClass('active').first().addClass('active');
        $(this).dequeue();});
    });

    $('.doc_filters_outer_wrapper > ul > li').mouseleave(function(){
        $('.doc_filters_outer_wrapper > ul > li:not(.menu-item-has-children)').removeClass('active');
        $(this).find('.sub-menu').removeClass('active').delay(400).queue(function(){
            $(this).parent().removeClass('active');
        $(this).dequeue();});
    });
} else {
    $('.doc_filters_outer_wrapper > ul > li.menu-item-has-children').tap(function(){
        if(!$(this).hasClass('active')&&!$('.doc_filters_outer_wrapper').hasClass('lock')){
            $('.doc_filters_outer_wrapper').addClass('lock');
            $(this).find('.sub-menu').stop();
            $(this).addClass('active').siblings().removeClass('active').find('.sub-menu').removeClass('active');
            $(this).delay(10).queue(function(){
                $(this).find('.sub-menu').removeClass('active').first().addClass('active');
                $(this).delay(400).queue(function(){
                    $('.doc_filters_outer_wrapper').removeClass('lock');
                $(this).dequeue();});
            $(this).dequeue();});
        }
    });
}

$(document).on('click','.doc_filters_outer_wrapper > ul > li.menu-item-has-children.active > span',function(){    
    if(!$('.doc_filters_outer_wrapper').hasClass('lock')){
        $('.doc_filters_outer_wrapper').addClass('lock');
        $('.doc_filters_outer_wrapper > ul > li:not(.menu-item-has-children)').removeClass('active');
        $('.doc_filters_outer_wrapper > ul > li.menu-item-has-children').find('.sub-menu').removeClass('active').delay(400).queue(function(){
            $(this).parent().removeClass('active');
            $('.doc_filters_outer_wrapper').removeClass('lock');
        $(this).dequeue();});   
    }
});

$(document).on('click','.doc_filters_outer_wrapper > ul > li.menu-item-has-children.active > .sub-menu span.val',function(){
    var doc_items = $('.doc_body');
    var cur_par = $(this).parent();
    if(!cur_par.hasClass('active')){
        $('.doc_filters_outer_wrapper .view_all').removeClass('active_all');
        var filter_ind = cur_par.attr('data-filter');
        cur_par.addClass('active').siblings().removeClass('active');
        $('.doc_filters_indicator [data-ind="'+filter_ind+'"]').text($(this).text());
        if(cur_par.hasClass('sort_val')){
            $('.sort_val_target').text($(this).text());
            var sort_o;
            if(cur_par.hasClass('sort_date')){sort_o = 'date';} else {sort_o = 'abc';}
            docSort(sort_o);
        }
        if("ontouchstart" in document.documentElement){
            $('.doc_filters_outer_wrapper').addClass('lock');
            $('.doc_filters_outer_wrapper > ul > li:not(.menu-item-has-children)').removeClass('active');
            $('.doc_filters_outer_wrapper > ul > li.menu-item-has-children').find('.sub-menu').removeClass('active').delay(400).queue(function(){
                $(this).parent().removeClass('active');
                $('.doc_filters_outer_wrapper').removeClass('lock');
            $(this).dequeue();});            
        }
        docFiltering(doc_items);
    }
});

$(document).on('click','.doc_filters_outer_wrapper .view_all',function(){
    var doc_items = $('.doc_body');
    if(!$(this).hasClass('active_all')){
        $('.doc_filters_outer_wrapper .view_all').removeClass('active_all');
        $('[data-filter].all').addClass('active').siblings().removeClass('active');
        $('.doc_filters_indicator [data-ind]').text('All');
        docFiltering(doc_items);
    }
});

function docFiltering(doc_items){
    var filter_flag1,
        filter_flag2,
        filter_flag3,
        filter_flag4;
    doc_items.addClass('hidden').filter(function(){
        if($('.doctype_group').length > 0 && $('[data-filter="data-dt"].active .val').text() !== 'All'){
            if($(this).attr('data-type') !== '' && $(this).attr('data-type').indexOf($('[data-filter="data-dt"].active .val').text()) !== -1){
                filter_flag1 = false;
                return $(this);
            }
        } else {
            filter_flag1 = true;            
            return $(this);
        }
    }).filter(function(){
        if($('.filetype_group').length > 0 && $('[data-filter="data-ft"].active .val').text() !== 'All'){
            if($(this).attr('data-ext') !== '' && $(this).attr('data-ext').indexOf($('[data-filter="data-ft"].active .val').text()) !== -1){
                filter_flag2 = false;                
                return $(this);
            }
        } else {
            filter_flag2 = true;            
            return $(this);
        }
    }).filter(function(){
        if($('.author_group').length > 0 && $('[data-filter="data-a"].active .val').text() !== 'All'){
            if($(this).attr('data-author') !== '' && $(this).attr('data-author').indexOf($('[data-filter="data-a"].active .val').text()) !== -1){
                filter_flag3 = false;                
                return $(this);
            }
        } else {
            filter_flag3 = true;            
            return $(this);
        }
    }).filter(function(){
        if($('.company_group').length > 0 && $('[data-filter="data-company"].active .val').text() !== 'All'){
            if($(this).attr('data-user') !== '' && $(this).attr('data-user').indexOf($('[data-filter="data-company"].active').attr('data-user-slug')) !== -1){
                filter_flag4 = false;                
                return $(this);
            }
        } else {
            filter_flag4 = true;            
            return $(this);
        }
    }).removeClass('hidden');
    if(filter_flag1&&filter_flag2&&filter_flag3&&filter_flag4){$('.doc_filters_outer_wrapper .view_all').addClass('active_all');}
    hideEmptyDocSections();
}

function hideEmptyDocSections(){
    var count = 0;
    $('.documents_inner_wrapper').each(function(){
        if($(this).find('.doc_body:not(.hidden)').length === 0){
            $(this).addClass('hidden').prev().addClass('hidden');
        } else {
            $(this).removeClass('hidden').prev().removeClass('hidden');
            count++;
        }
        if(count === 0){
            $('.no_documents').removeClass('hidden');
        } else {
            $('.no_documents').addClass('hidden');
        }
    });
}

function docSort(sort_order){
    $('.documents_inner_wrapper').each(function(){
        var cur_box = $(this);
        var docs = cur_box.find('.doc_body');
        var docs_arr = [];
        docs.each(function(){
            var el;
            if(sort_order === 'date'){
                el = {
                    date: $(this).attr('data-date'),
                    obj: $(this)
                }
            } else {
                el = {
                    title: $(this).attr('data-title'),
                    obj: $(this)
                }
            }
            docs_arr.push(el);
        });
        if(sort_order === 'date'){
            sortByDate(docs_arr);
        } else {
            sortByTitle(docs_arr);
        }
        cur_box.empty();
        for(key in docs_arr) {
            cur_box.append(docs_arr[key].obj);
        }
    });    
}

function sortByTitle(arr){
    arr.sort(function(a,b){
        if(a.title > b.title){
            return 1;
        } else {
            return -1;
        }
    });
}

function sortByDate(arr){
    arr.sort(function(a,b){
        if($('html').hasClass('safari')){
            var myDate1 = a.date.replace(/ /g,"T");
            var myDate2 = b.date.replace(/ /g,"T");
            var c = new Date(myDate1);
            var d = new Date(myDate2);              
        } else {
            var c = new Date(a.date);
            var d = new Date(b.date);            
        }
        return d-c;
    });
}
        
if($('[data-report-year-obj]').length > 0 && $('.doc_filters.reports').length > 0){
    var reports_year_arr = [];
    $('[data-report-year-obj]').each(function(){
        var value = $(this).attr('data-report-year-obj');
        reports_year_arr[value] = value;
    });

    reports_year_arr.sort().reverse();
    
    reports_year_arr = cleanArray(reports_year_arr);
    
    function cleanArray(arr) {
        var newArray = new Array();
        for (var i = 0; i < arr.length; i++) {
            if(arr[i]){
                newArray.push(arr[i]);
            }
        }
        return newArray;
      }

    for (var i = 0, max = reports_year_arr.length; i < max; i++) {
        $('.doc_filters.reports ul .filters_body').append('<li class="cursor" data-report-year-target='+reports_year_arr[i]+'><span>'+reports_year_arr[i]+'</span></li>');
    }
    
    $(document).on('click','[data-report-year-target]',function(){
        $('section.reports.hidden').removeClass('hidden');
        $('section.reports').removeClass('shift');
        $('.reports_outer_wrapper.hidden').removeClass('hidden');
        $('.doc_filters.reports .view_all').removeClass('active_all');
        if(!$(this).hasClass('active')){
            $(this).addClass('active').siblings().removeClass('active');
            reportsFiltering($(this).attr('data-report-year-target'));
        } else {
            $(this).removeClass('active');
            $('.doc_filters.reports .view_all').addClass('active_all');
            $('[data-report-year-obj]').removeClass('hidden');
        }
    });
    
    $('.doc_filters.reports .view_all').click(function(){
        $('section.reports.hidden').removeClass('hidden');
        $('section.reports').removeClass('shift');
        $('.reports_outer_wrapper.hidden').removeClass('hidden');        
        $('[data-report-year-target]').removeClass('active');
        $(this).addClass('active_all');
        $('[data-report-year-obj]').removeClass('hidden');
    });
    
    function reportsFiltering(targetYear){
        $('[data-report-year-obj]').addClass('hidden').filter(function(){
            if($(this).attr('data-report-year-obj') == targetYear){ 
                return $(this);
            }
        }).removeClass('hidden');
        hideEmptySections($('.reports_outer_wrapper'));
        hideEmptySections($('section.reports'));
    }
    
    function hideEmptySections(section){
        section.each(function(){
            var total_eq = $(this).find('[data-report-year-obj]').length;
            var total_hidden_eq = $(this).find('[data-report-year-obj].hidden').length;
            if(total_eq === total_hidden_eq) {
                $(this).addClass('hidden');
                if($(this).find('.doc_filters.reports').length > 0){$(this).removeClass('hidden').addClass('shift');}                
            }
        });
    }
}