    $('#primary-menu').addClass('init').removeClass('hide_sub');

    // browser and device

    var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

    var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    if(getInternetExplorerVersion()>0) {$('html').addClass('ie notchrome');}

    if(getEdgeVersion()>0) {$('html').addClass('edge notchrome');}

    if(isFirefox){$('html').addClass('firefox notchrome');}

    if(isSafari) {$('html').addClass('safari notchrome');}

    if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){$('html').addClass('chrome');} 

    function getInternetExplorerVersion(){
        var rv = -1;
        if (navigator.appName == 'Microsoft Internet Explorer') {
          var ua = navigator.userAgent;
          var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
          if (re.exec(ua) != null)
            rv = parseFloat( RegExp.$1 );
        } else if (navigator.appName == 'Netscape') {
          var ua = navigator.userAgent;
          var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
          if (re.exec(ua) != null)
            rv = parseFloat( RegExp.$1 );
        }
        return rv;
    }

    function getEdgeVersion(){if (/Edge\/\d./i.test(navigator.userAgent)){return 1;}}

    if("ontouchstart" in document.documentElement){
        $('html').addClass('touch'); 
    }

    // common actions

    $(document).on('click','.prev_def,.prev_def a,.prev_def_menu > a',function(e){
        e.preventDefault();
    });

    $(document).on('click','section.agenda a',function(e){
        e.preventDefault();
        var target = $('#'+$(this).attr('href'));
        $('html, body').animate({scrollTop: target.offset().top - 100},1000,'easeInOutCubic');
    });

    //menu actions

    var cur_scroll = $('html').scrollTop();
    if (isSafari||getEdgeVersion()>0) { cur_scroll = $('body').scrollTop(); }  

    menu_scroll_trigger(cur_scroll);

    function menu_scroll_trigger(cur_scroll){
        if (cur_scroll > 180 && !$('#primary-menu').hasClass("scroll")){
            if($(window).width() > 1006 && "ontouchstart" in document.documentElement){
                $('#primary-menu').addClass('scroll');
            } else if($(window).width() > 1006 && !("ontouchstart" in document.documentElement)){
                $('#primary-menu').addClass('scroll').find('#top_user_menu').slideUp(150);
            } else if($(window).width() <= 1006){
                $('#primary-menu').addClass('scroll').find('#top_user_menu').slideUp(150);
            }
            $('#to_top').slideDown(250);
        } else if(cur_scroll < 180 && $('#primary-menu').hasClass("scroll")) {
            if($(window).width() > 1006 && "ontouchstart" in document.documentElement){
                $('#primary-menu').removeClass('scroll');
            } else if($(window).width() > 1006 && !("ontouchstart" in document.documentElement)){
                $('#primary-menu').removeClass('scroll').find('#top_user_menu').delay(600).queue(function(){
                    $(this).slideDown(150);
                $(this).dequeue();});
            } else if($(window).width() <= 1006){
                $('#primary-menu').removeClass('scroll').find('#top_user_menu').delay(600).queue(function(){
                    $(this).slideDown(150);
                $(this).dequeue();});
            }
            $('#to_top').slideUp(250);
        }
    }

    $(window).scroll(function(){
        cur_scroll = $(this).scrollTop();
        menu_scroll_trigger(cur_scroll);
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

    var def_width = $(window).width();

    $(window).resize(function(){
        if(def_width !== $(window).width()){
            cur_scroll = $(this).scrollTop();
            menu_scroll_trigger(cur_scroll);
            if(!$('#primary-menu').hasClass('lock')&& $(window).width()<=1006 && $('#primary-menu').find('li.active').length > 0){
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
                        def_width = $(window).width();
                    $(this).dequeue();});
                $(this).dequeue();});
            } else if(!$('#primary-menu').hasClass('lock') && $(window).width() > 1006 && $('#primary-menu').find('li.active').length > 0){
                $('#primary-menu').addClass('lock');            
                $('#primary-menu').find('.active').removeClass('active tapped').delay(400).queue(function(){
                    $('#primary-menu').removeClass('lock');
                    def_width = $(window).width();
                $(this).dequeue();});
            }
        }
    });

    if(!("ontouchstart" in document.documentElement)){
        $('#primary-menu nav li').mouseenter(function(){
            if($(window).width()>1006){
                $(this).find('.sub-menu').stop();
                $(this).addClass('active').siblings().removeClass('active').find('.sub-menu').removeClass('active');
                $(this).delay(10).queue(function(){
                    $(this).find('.sub-menu').removeClass('active').first().addClass('active');
                $(this).dequeue();});
            }
        });

        $('#primary-menu nav').mouseleave(function(){
            if($(window).width()>1006){
                $('#primary-menu nav > ul > li:not(.menu-item-has-children)').removeClass('active');
                $(this).find('.sub-menu').removeClass('active').delay(400).queue(function(){
                    $(this).parent().removeClass('active');
                $(this).dequeue();});
            } 
        });
    }

    if("ontouchstart" in document.documentElement){
        $('#primary-menu nav .menu-item-has-children > a').tap(function(e){
            e.preventDefault();
            // Open 1s level - First tap on the menu - mobile
            if($(window).width()<=1006 && !$(this).parent().hasClass('tapped') && !$(this).parent().parent().hasClass('sub-menu') && $('#primary-menu').find('li.active').length <= 0){
                var cur_menu_item = $(this).parent();
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock');                        
                    cur_menu_item.addClass('active tapped');                        
                    cur_menu_item.find('.sub-menu').first().slideDown(400,function(){
                        $('#primary-menu').removeClass('lock'); 
                    });
                }
            // Open 1s level - mobile
            } else if($(window).width()<=1006 && !$(this).parent().hasClass('tapped') && !$(this).parent().parent().hasClass('sub-menu') && $('#primary-menu').find('li.active').length > 0){       
                var cur_menu_item = $(this).parent();
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock');
                    cur_menu_item.addClass('active tapped').siblings().find('.sub-menu').each(function(){
                        if($(this).parent().parent().hasClass('sub-menu')){
                            $(this).removeClass('active tapped').parent().removeClass('active tapped');
                        } else {
                            $(this).slideUp(400,function(){
                                $(this).removeClass('active tapped').parent().removeClass('active tapped');
                            });
                        }
                    });
                    cur_menu_item.find('.sub-menu').first().slideDown(400,function(){
                        $('#primary-menu').removeClass('lock'); 
                    });
                }  
            // Open 2s level - mobile
            } else if($(window).width()<=1006 && !$(this).parent().hasClass('tapped') && $(this).parent().parent().hasClass('sub-menu')){     
                var cur_menu_item = $(this).parent();
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock');
                    cur_menu_item.addClass('active tapped').siblings().removeClass('active tapped').find('.sub-menu').removeClass('active tapped');
                    cur_menu_item.delay(10).queue(function(){
                        cur_menu_item.find('.sub-menu').removeClass('active tapped').first().addClass('active tapped').delay(400).queue(function(){
                            $('#primary-menu').removeClass('lock'); 
                        $(this).dequeue();});
                    $(this).dequeue();});
                }
            // Open 1s level - tablet
            } else if($(window).width()>1006 && !$(this).parent().hasClass('tapped') && !$(this).parent().parent().hasClass('sub-menu')){
                var cur_menu_item = $(this).parent();
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock');            
                    cur_menu_item.addClass('active tapped').siblings().removeClass('active tapped').find('.active').removeClass('active tapped');
                    $(this).delay(10).queue(function(){
                        cur_menu_item.find('.sub-menu').first().addClass('active tapped').delay(400).queue(function(){
                            $('#primary-menu').removeClass('lock');
                        $(this).dequeue();});
                    $(this).dequeue();});
                }
            // Open 2s level - tablet
            } else if($(window).width()>1006 && !$(this).parent().hasClass('tapped') && $(this).parent().parent().hasClass('sub-menu')){
                var cur_menu_item = $(this).parent();
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock');            
                    cur_menu_item.addClass('active tapped').siblings().removeClass('active tapped').find('.sub-menu').removeClass('active tapped');
                    $(this).delay(10).queue(function(){
                        cur_menu_item.find('.sub-menu').first().addClass('active tapped').delay(400).queue(function(){
                            $('#primary-menu').removeClass('lock');
                        $(this).dequeue();});
                    $(this).dequeue();});
                }
            // Toggle not-clickable menu item - mobile
            } else if($(window).width()<1006 && $(this).parent().hasClass('prev_def_menu')){

            // Toggle not-clickable menu item - tablet
            } else if($(window).width()>1006 && $(this).parent().hasClass('prev_def_menu')){
                var cur_menu_item = $(this).parent();
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock');            
                    cur_menu_item.find('.active').removeClass('active tapped').delay(150).queue(function(){
                        cur_menu_item.removeClass('active tapped').delay(400).queue(function(){
                            $('#primary-menu').removeClass('lock');
                        $(this).dequeue();});
                    $(this).dequeue();});
                }
            } else if(!$(this).parent().hasClass('prev_def_menu')){
                window.location = $(this).attr('href');
            }
        });
        $('#primary-menu nav li.prev_def_menu:not(.menu-item-has-children) > a').tap(function(){
            if($(window).width()>1006){
                var cur_menu_item = $(this).parent();
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock');            
                    cur_menu_item.siblings().removeClass('active tapped').find('.active').removeClass('active tapped');
                    $(this).delay(400).queue(function(){
                        $('#primary-menu').removeClass('lock');
                    $(this).dequeue();});
                }
            } else if($(window).width()>1006 && !$(this).parent().hasClass('tapped') && !$(this).parent().parent().hasClass('sub-menu')){

            }
        });
        $(document).on('click','main',function(e){
            e.stopPropagation();
            if(!$(this).closest('#primary-menu').length > 0){
                if($(window).width()>1006){
                    $('#primary-menu').addClass('lock');            
                    $('#primary-menu').find('.active').removeClass('active tapped').delay(400).queue(function(){
                        $('#primary-menu').removeClass('lock');
                    $(this).dequeue();});
                } else if($(window).width()>1006 && !$(this).parent().hasClass('tapped') && !$(this).parent().parent().hasClass('sub-menu')){

                }
            }
        });    
    }

    if($('#mobile_trigger').length > 0){
        $(document).on('click','#mobile_trigger',function(){
            if(!$('#primary-menu').hasClass('mobile_show')){
                if(!$('#primary-menu').hasClass('lock')){
                    $('#primary-menu').addClass('lock mobile_show').delay(400).queue(function(){
                        $('#primary-menu').removeClass('lock');
                    $(this).dequeue();});
                }
            } else {
                if(!$('#primary-menu').hasClass('lock')){
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
                }    
            }
        });
    }
document.addEventListener('DOMContentLoaded',function(){
    primaryMenuHeightDisplayAppearance();
    function primaryMenuHeightDisplayAppearance(){
        var top_str = $('#top_user_menu').outerHeight() + $('#primary-menu .cont').outerHeight() - 1 + 'px';
        var height_str = $(window).innerHeight() - $('#top_user_menu').outerHeight() + $('#primary-menu .cont').outerHeight() + 1 + 'px';    
        function primaryMenuHeighSet(top_str,height_str){
            $('#primary-menu .sub-menu .sub-menu').each(function(){
                $(this).css({top:top_str,height:height_str});
            });        
        }
        if($(window).innerWidth()<=1023){
            primaryMenuHeighSet(top_str,height_str);
        } else {
            primaryMenuHeighSet('100%','auto');
        }
    }

    $(window).resize(function(){
        $(this).delay(100).queue(function(){
            primaryMenuHeightDisplayAppearance();            
        $(this).dequeue();});
    });
});