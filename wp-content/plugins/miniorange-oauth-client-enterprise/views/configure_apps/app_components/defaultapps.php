<?php


function mo_oauth_client_show_default_apps()
{
    wp_enqueue_script("\155\x6f\137\157\x61\165\x74\x68\137\141\x64\155\x69\156\137\x61\x70\160\x5f\x73\x65\x61\162\143\150\x5f\x73\143\x72\151\160\x74", plugins_url("\163\x65\x61\x72\143\150\x5f\141\x70\160\x73\x2e\152\163", __FILE__));
    ?>
	<input type="text" id="mo_oauth_client_default_apps_input" onkeyup="mo_oauth_client_default_apps_input_filter()" placeholder="Select application" title="Type in a Application Name">
	
	<h3>OAuth Providers</h3>
	<hr />
	<ul id="mo_oauth_client_default_apps">
		
		<?php 
    $sw = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "\x64\145\146\141\165\x6c\x74\x61\x70\160\163\x2e\x6a\163\x6f\x6e");
    $Tw = json_decode($sw);
    foreach ($Tw as $jz => $Dj) {
        echo "\74\154\x69\40\144\x61\x74\141\55\141\160\x70\x69\x64\x3d\x22" . $jz . "\x22\76\74\x61\40\150\x72\145\146\x3d\x22\43\x22\x3e\74\x69\155\x67\x20\143\154\141\x73\x73\x3d\42\155\x6f\x5f\x6f\141\x75\164\x68\137\143\154\x69\145\x6e\164\137\144\145\146\x61\x75\x6c\x74\x5f\141\x70\x70\x5f\151\x63\157\156\x22\40\163\x72\143\x3d\42" . plugins_url("\56\57\x69\x6d\x61\x67\x65\x73\x2f" . $Dj->image, __FILE__) . "\42\76\74\x62\162\76" . $Dj->label . "\74\x2f\141\x3e\x3c\x2f\x6c\x69\x3e";
        tdT:
    }
    taX:
    ?>
	</ul>
	<div id="mo_oauth_client_search_res"></div>
	<script>
		
		jQuery("#mo_oauth_client_default_apps li").click(function(){
			var appId = jQuery(this).data("appid");
				window.location.href += "&appId="+appId;
		});
		
	</script>

<?php 
}
function mo_oauth_client_get_app($Yg)
{
    $sw = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "\144\145\x66\141\x75\x6c\x74\x61\x70\x70\x73\x2e\x6a\163\157\x6e");
    $Tw = json_decode($sw);
    foreach ($Tw as $jz => $Dj) {
        if (!($jz == $Yg)) {
            goto yyK;
        }
        $Dj->appId = $jz;
        return $Dj;
        yyK:
        Wrl:
    }
    oBp:
    return false;
}
?>
