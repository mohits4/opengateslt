<?php


namespace MoOauthClient;

use MoOauthClient\App;
use MoOauthClient\App\UpdateAppUI;
class AppUI
{
    private $app_config;
    private $apps_list;
    public function __construct()
    {
        $this->app_config = array("\143\154\151\x65\156\164\x5f\151\144", "\143\x6c\x69\145\156\164\x5f\x73\145\143\x72\x65\x74", "\163\x63\157\x70\x65", "\162\145\144\x69\x72\x65\x63\164\x5f\165\x72\x69", "\141\x70\x70\137\x74\171\x70\145", "\x61\x75\164\x68\157\x72\x69\172\145\165\x72\154", "\x61\143\143\x65\x73\163\164\x6f\x6b\x65\156\x75\x72\x6c", "\162\x65\163\x6f\165\x72\143\x65\x6f\167\156\145\162\x64\145\164\141\151\x6c\163\165\x72\x6c", "\x67\162\157\165\x70\144\x65\164\x61\x69\x6c\x73\x75\x72\154", "\x6a\x77\x6b\163\x5f\165\162\x69", "\x64\151\163\160\x6c\141\x79\x61\x70\x70\x6e\x61\x6d\x65", "\x61\x70\160\111\x64");
        self::populate_appslist();
    }
    public function get_apps_list()
    {
        return $this->apps_list;
    }
    public function set_apps_list($Li)
    {
        global $Sk;
        $this->apps_list = $Li;
        $Sk->mo_oauth_client_update_option("\x6d\157\137\157\x61\x75\164\150\x5f\141\160\x70\x73\137\x6c\x69\x73\164", $Li);
    }
    public function delete_app($nd)
    {
        global $Sk;
        $Li = $this->apps_list;
        $s5 = admin_url("\141\x64\x6d\x69\156\x2e\x70\150\160\77\x70\141\147\145\x3d\155\157\x5f\157\x61\x75\x74\x68\137\x73\145\164\x74\x69\156\x67\x73");
        if (!($Li && count($Li) > 0)) {
            goto pL;
        }
        foreach ($Li as $qi => $U3) {
            if (!($nd === $qi)) {
                goto QT;
            }
            unset($Li[$qi]);
            if (!("\145\x76\x65\157\156\154\151\x6e\x65" === $nd)) {
                goto WF;
            }
            $Sk->mo_oauth_client_update_option("\x6d\x6f\137\157\x61\165\x74\x68\x5f\x65\x76\x65\x6f\x6e\x6c\x69\156\145\x5f\145\x6e\x61\142\x6c\x65", 0);
            WF:
            QT:
            qy:
        }
        Bc:
        $this->set_apps_list($Li);
        pL:
        echo "\74\163\164\x72\157\156\147\76\120\154\x65\141\x73\145\x20\x57\x61\151\x74\x2e\56\56\x3c\x2f\x73\x74\162\157\156\147\76";
        ?>
		<script>
			window.onload = function() {
				window.location.href = "<?php 
        echo $s5;
        ?>
";
			}
		</script>
		<?php 
        die;
    }
    public function get_app_by_name($nd)
    {
        global $Sk;
        $Li = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\157\x61\x75\x74\x68\137\141\160\160\163\x5f\154\x69\x73\164") ? $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\165\x74\x68\137\141\x70\x70\x73\137\154\x69\x73\x74") : false;
        if ($Li) {
            goto ol;
        }
        return false;
        ol:
        foreach ($Li as $qi => $U3) {
            if (!($nd === $qi)) {
                goto Ku;
            }
            return $U3;
            Ku:
            Bk:
        }
        c6:
        return false;
    }
    private function populate_appslist()
    {
        global $Sk;
        $Li = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\165\164\x68\x5f\141\160\x70\x73\137\x6c\x69\163\x74") ? $Sk->mo_oauth_client_get_option("\155\157\137\x6f\x61\165\x74\x68\x5f\x61\x70\160\163\x5f\x6c\151\x73\x74") : array();
        if (!(is_array($Li) && 0 < count($Li))) {
            goto ll;
        }
        foreach ($Li as $qi => $sh) {
            if (is_array($sh) && !empty($sh)) {
                goto Tg;
            }
            $this->apps_list[$qi] = $sh;
            goto K8;
            Tg:
            if (!(!isset($sh["\143\154\x69\x65\x6e\164\x5f\x69\x64"]) || empty($sh["\143\154\151\x65\x6e\x74\137\151\x64"]))) {
                goto h3;
            }
            $sh["\x63\x6c\x69\145\x6e\x74\x5f\x69\144"] = isset($sh["\143\154\x69\145\156\164\x69\x64"]) ? $sh["\143\x6c\151\145\x6e\x74\x69\x64"] : '';
            h3:
            if (!(!isset($sh["\143\x6c\x69\x65\156\x74\x5f\163\145\143\162\x65\x74"]) || empty($sh["\143\x6c\151\145\156\164\137\x73\x65\x63\162\x65\164"]))) {
                goto zH;
            }
            $sh["\143\x6c\x69\x65\156\164\x5f\163\145\x63\x72\145\x74"] = isset($sh["\x63\154\151\145\x6e\x74\163\x65\x63\x72\x65\164"]) ? $sh["\x63\154\x69\x65\156\x74\x73\x65\x63\x72\x65\x74"] : '';
            zH:
            unset($sh["\x63\154\x69\145\x6e\164\x69\x64"]);
            unset($sh["\x63\x6c\151\x65\x6e\x74\163\145\x63\x72\x65\x74"]);
            $U3 = new App();
            $U3->migrate_app($sh, $qi);
            $this->apps_list[$qi] = $U3;
            K8:
            Du:
        }
        kY:
        ll:
        $Sk->mo_oauth_client_update_option("\155\157\137\157\x61\165\164\150\x5f\141\160\160\163\137\x6c\151\163\164", $this->apps_list);
    }
    private function show_default_apps()
    {
        wp_enqueue_script("\x6d\157\x5f\157\x61\x75\x74\x68\x5f\141\x64\x6d\x69\x6e\x5f\x61\160\x70\x5f\x73\145\141\162\x63\150\137\163\x63\x72\x69\160\x74", MOC_URL . "\x72\145\x73\x6f\165\162\x63\x65\x73\x2f\x61\160\160\137\143\157\x6d\160\157\x6e\x65\156\164\163\x2f\x73\x65\x61\x72\143\x68\137\x61\x70\x70\x73\x2e\152\x73", array(), $fX = null, $vI = true);
        ?>
	<input type="text" id="mo_oauth_client_default_apps_input" onkeyup="mo_oauth_client_default_apps_input_filter()" placeholder="Select application" title="Type in a Application Name">
	<h3>OAuth Providers</h3>
	<hr />
	<ul id="mo_oauth_client_default_apps">
		<?php 
        $NO = file_get_contents(MOC_DIR . "\162\145\x73\x6f\x75\162\143\x65\163\57\x61\160\x70\137\x63\157\x6d\x70\157\x6e\145\x6e\x74\163\x2f\x64\x65\146\x61\165\154\x74\141\x70\160\x73\56\152\163\x6f\x6e", true);
        $uT = json_decode($NO);
        foreach ($uT as $vf => $x3) {
            echo "\x3c\x6c\151\40\144\x61\164\x61\55\x61\x70\x70\x69\x64\x3d\x22" . $vf . "\42\x3e\74\141\x20\x68\162\145\146\75\x22\x23\42\76\74\x69\155\x67\40\x63\x6c\141\x73\x73\x3d\x22\155\157\x5f\x6f\141\x75\x74\x68\137\143\x6c\x69\x65\156\164\137\144\145\x66\x61\x75\154\x74\x5f\x61\160\160\x5f\151\x63\157\156\42\40\163\x72\x63\75\42" . MOC_URL . "\x72\x65\163\157\x75\x72\143\145\x73\x2f\x61\x70\160\x5f\x63\x6f\x6d\160\x6f\x6e\145\156\x74\x73\x2f\x69\155\x61\x67\145\x73\x2f" . $x3->image . "\42\x3e\x3c\x62\162\76" . $x3->label . "\74\x2f\x61\x3e\74\x2f\x6c\151\76";
            Jb:
        }
        Qa:
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
    public function add_app_ui()
    {
        ?>
		<div id="mo_oauth_client_default_apps_container" class="mo_table_layout">
			<div id="toggle2" class="mo_panel_toggle">
				<table class="mo_settings_table">
					<tr>
						<td><h3>Add Application</h3></td>
						<?php 
        if (isset($_GET["\141\x70\160\111\x64"])) {
            goto Ud;
        }
        ?>
							<td align="right"><span style="position: relative; float: right;padding-left: 13px;padding-right:13px;background-color:white;border-radius:4px;">
								<!-- <button type="button" id="restart_tour_id" class="button button-primary button-large" onclick="jQuery('#show_pointers').submit();"><em class="fa fa-refresh"></em>Restart Tour</button> -->
							</span></td>
							<?php 
        goto l9;
        Ud:
        $ex = $_GET["\141\160\160\111\x64"];
        if (isset($_GET["\x61\x63\x74\x69\x6f\x6e"]) && "\151\x6e\163\x74\x72\x75\x63\164\151\157\x6e\163" === $_GET["\x61\x63\164\151\157\156"] || isset($_GET["\163\x68\157\167"]) && "\x69\156\x73\164\x72\165\x63\x74\151\x6f\x6e\163" === $_GET["\x73\150\157\x77"]) {
            goto lv;
        }
        echo "\xd\12\11\11\x9\x9\11\x9\11\x9\74\164\x64\40\141\154\x69\x67\x6e\x3d\x22\x72\151\147\150\x74\x22\76\74\x61\40\150\x72\x65\x66\75\x22\141\144\x6d\x69\156\56\x70\150\x70\x3f\160\141\147\145\x3d\155\157\137\157\141\x75\164\150\137\163\145\x74\164\151\x6e\147\163\46\x61\143\164\x69\x6f\x6e\75\x61\144\x64\46\x73\150\x6f\167\x3d\x69\156\x73\x74\x72\165\x63\x74\x69\x6f\x6e\163\46\141\x70\x70\111\x64\75" . $ex . "\42\76\x3c\144\x69\166\x20\151\144\75\x22\155\157\x5f\x6f\x61\165\164\x68\137\143\x6f\x6e\146\x69\147\137\x67\165\x69\x64\145\42\40\163\164\x79\x6c\145\75\x22\x64\151\163\160\154\141\x79\72\151\x6e\x6c\x69\156\x65\x3b\142\141\143\x6b\147\162\157\x75\x6e\144\x2d\x63\x6f\x6c\157\x72\x3a\x23\x30\x30\x38\x35\x62\141\73\143\x6f\154\x6f\162\x3a\x23\x66\x66\x66\x3b\160\141\x64\x64\151\156\x67\x3a\64\x70\170\x20\70\x70\170\73\142\x6f\x72\144\145\x72\x2d\x72\141\144\151\x75\x73\x3a\64\160\x78\x3b\x22\76\110\x6f\x77\x20\164\x6f\x20\103\157\x6e\x66\x69\x67\x75\162\145\77\74\x2f\x64\151\x76\x3e\x3c\x2f\141\x3e\x3c\x2f\164\x64\76";
        goto Jk;
        lv:
        echo "\xd\xa\x9\11\x9\11\x9\11\x9\x9\x3c\x74\144\40\x61\x6c\x69\147\x6e\x3d\x22\162\x69\x67\150\164\x22\x3e\x3c\141\40\150\162\145\146\75\x22\141\x64\x6d\x69\156\56\x70\x68\160\77\160\x61\147\145\75\x6d\157\137\x6f\x61\x75\164\x68\137\x73\x65\164\164\151\156\147\x73\46\141\143\x74\x69\x6f\x6e\75\x61\x64\x64\46\x61\160\160\x49\x64\75" . $ex . "\x22\76\x3c\144\151\166\40\x69\x64\x3d\42\155\157\x5f\157\141\165\164\x68\x5f\143\x6f\156\146\x69\147\x5f\147\x75\x69\x64\x65\x22\x20\x73\x74\171\154\x65\75\x22\x64\151\x73\160\154\141\171\x3a\x69\156\x6c\x69\x6e\x65\x3b\x62\141\x63\153\147\x72\x6f\165\x6e\144\x2d\143\157\154\x6f\162\x3a\x23\x30\60\x38\65\x62\141\x3b\x63\x6f\154\157\162\x3a\x23\x66\x66\x66\x3b\x70\141\x64\x64\x69\x6e\147\x3a\x34\x70\x78\40\70\160\170\x3b\142\x6f\162\144\145\x72\x2d\x72\x61\x64\x69\165\x73\x3a\64\160\x78\x3b\42\x3e\110\151\x64\x65\x20\x69\156\163\164\x72\165\x63\x74\x69\x6f\x6e\163\x20\x5e\x3c\x2f\x64\x69\x76\x3e\x3c\x2f\x61\76\x3c\57\x74\x64\x3e\40";
        Jk:
        l9:
        ?>
					</tr>
				</table>
				<form name="f" method="post" id="show_pointers">
					<input type="hidden" name="option" value="clear_pointers"/>
					<?php 
        wp_nonce_field("\143\x6c\x65\141\162\x5f\x70\x6f\151\x6e\164\x65\162\163", "\143\154\145\141\162\x5f\x70\x6f\151\156\x74\x65\x72\163\x5f\x6e\157\156\x63\x65");
        ?>
				</form>
			</div>
				<?php 
        if (!isset($_GET["\x61\x70\160\x49\x64"])) {
            goto sF;
        }
        self::show_add_app_page();
        goto x5;
        sF:
        self::show_default_apps();
        x5:
        ?>
		</div>
		<?php 
    }
    public function show_add_app_page()
    {
        global $Sk;
        wp_enqueue_style("\x6d\x6f\55\167\x70\x2d\146\x6f\x6e\164\55\141\167\x65\x73\157\155\145\55\x6d", MOC_URL . "\x72\x65\x73\157\165\162\x63\x65\163\57\143\163\163\57\x66\x6f\x6e\x74\x2d\141\x77\x65\163\x6f\x6d\x65\56\155\151\x6e\56\x63\163\163\77\166\145\162\x73\x69\157\x6e\75\x34\x2e\x37\x2e\60", array(), $fX = null, $vI = false);
        $ex = isset($_GET["\x61\160\x70\111\x64"]) ? $_GET["\141\160\x70\111\144"] : false;
        $W3 = $Sk->get_default_app($ex);
        if (!(false === $W3)) {
            goto Ir;
        }
        $s5 = admin_url() . "\x2f\x61\x64\155\x69\x6e\x2e\160\150\160\77\x70\141\147\x65\75\155\157\x5f\x6f\141\x75\x74\150\137\x73\x65\x74\164\x69\156\147\x73\x26\x74\141\142\x3d\x63\157\156\x66\x69\147";
        echo "\117\x6f\x70\163\41\40\123\157\155\145\x74\150\151\156\x67\40\167\x65\x6e\164\40\x77\x72\157\x6e\x67\x2e\x20\x50\x6c\145\141\x73\145\x20\167\141\x69\164\x2e\56\x2e";
        ?>
			<script>
				window.location.replace("<?php 
        echo $s5;
        ?>
");
			</script>
			<?php 
        Ir:
        ?>
	<div id="mo_oauth_add_app">
	<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings">
	<input type="hidden" name="option" value="mo_oauth_add_app" />
		<?php 
        wp_nonce_field("\x6d\x6f\x5f\x6f\x61\165\164\150\137\x61\144\x64\x5f\141\160\160", "\x6d\157\x5f\x6f\141\x75\164\150\137\141\x64\144\137\x61\x70\x70\x5f\x6e\x6f\156\143\145");
        ?>
	<table class="mo_settings_table">
		<tr>
		<td><strong><span class="mo_premium_feature">*</span>Application:<br><br></strong></td>
		<td>
			<input type="hidden" name="mo_oauth_app_name" value="<?php 
        echo esc_html($ex);
        ?>
">
			<input type="hidden" name="mo_oauth_app_type" value="<?php 
        echo esc_html($W3->type);
        ?>
">
			<?php 
        echo $W3->label;
        ?>
 &nbsp;&nbsp;&nbsp;&nbsp; <a style="text-decoration:none" href ="admin.php?page=mo_oauth_settings&action=add"><div style="display:inline;background-color:#0085ba;color:#fff;padding:4px 8px;border-radius:4px">Change Application</div></a><br><br>
		</td>
		</tr>
		<tr><td><strong>Redirect / Callback URL</strong></td>
		

		<td><input class="mo_table_textbox" required="true" id="callbackurl" type="text" name="mo_update_url" value='<?php 
        echo site_url();
        ?>
'>

		&nbsp;&nbsp;<div class="tooltip"><span class="tooltiptext" id="moTooltip">Copy to clipboard</span><i class="fa fa-clipboard" style="font-size:20px; align-items: center;vertical-align: middle;" aria-hidden="true" onclick="copyUrl()" onmouseout="outFunc()"></i></div></td>
		
		<script>
			function outFunc() {
  					var tooltip = document.getElementById("moTooltip");
  					tooltip.innerHTML = "Copy to clipboard";
			}
			function copyUrl() {
  				var copyText = document.getElementById("callbackurl");
  				outFunc();
  				copyText.select();
  				copyText.setSelectionRange(0, 99999); 
  				document.execCommand("copy");
  				var tooltip = document.getElementById("moTooltip");
  				tooltip.innerHTML = "Copied";
  				
				document.getElementById("redirect_url_change_warning").style.display = "none";
			} 

			jQuery("#callbackurl").on('focus',function(){
					document.getElementById("redirect_url_change_warning").style.display = "table-row";
				});
			jQuery("#callbackurl").on('click',function(){
					document.getElementById("redirect_url_change_warning").style.display = "table-row";
			});
			jQuery("#callbackurl").on('focusout',function(){
				document.getElementById("redirect_url_change_warning").style.display = "none";
			});
		</script>
			</tr>
		<tr style="display:none;" id="redirect_url_change_warning">
			<td colspan="2"><strong><span id="mo_redirect_url_warning" style="color:red;">Note: Editing redirect URL will break your SSO. Only change if you are moving from staging to production.</span></strong></td>
		</tr>

		<tr id="mo_oauth_custom_app_name_div">
			<td><strong><span class="mo_premium_feature">*</span>App Name:</strong></td>
			<td><input class="mo_table_textbox" type="text" id="mo_oauth_custom_app_name" name="mo_oauth_custom_app_name" value="" pattern="[a-zA-Z0-9]+" required title="Please do not add any special characters."></td>
		</tr>
		<tr id="mo_oauth_display_app_name_div">
			<td><strong>Display App Name:<?php 
        echo !$Sk->check_versi(1) ? "\74\x62\x72\76\x26\145\x6d\163\x70\x3b\74\x73\x70\141\156\x20\x63\154\141\163\163\75\x22\155\157\137\x70\162\145\x6d\x69\x75\x6d\137\x66\x65\x61\164\165\x72\145\x22\76\133\x53\124\101\x4e\x44\x41\x52\x44\135\x3c\x2f\163\x70\x61\156\x3e" : '';
        ?>
</strong></td>
			<td><input <?php 
        echo !$Sk->check_versi(1) ? "\x64\x69\163\x61\x62\x6c\145\144" : '';
        ?>
 class="mo_table_textbox" type="text" id="mo_oauth_display_app_name" name="mo_oauth_display_app_name" value="" pattern="[a-zA-Z0-9\s]+" title="Please do not add any special characters."></td>
		</tr>
		<tr>
			<td><strong><span class="mo_premium_feature">*</span>Client ID:</strong></td>
			<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_id" value=""></td>
		</tr>
		<tr>
			<td><strong><span class="mo_premium_feature">*</span>Client Secret:</strong></td>
			<td><input class="mo_table_textbox" required="" type="text"  name="mo_oauth_client_secret" value=""></td>
		</tr>
		<tr>
			<td><strong>Scope:</strong></td>
			<td><input class="mo_table_textbox" type="text" name="mo_oauth_scope" value="<?php 
        echo isset($W3->scope) ? esc_html(trim($W3->scope)) : '';
        ?>
"></td>
		</tr>
		<tr id="mo_oauth_authorizeurl_div">
			<td><strong><span class="mo_premium_feature">*</span>Authorize Endpoint:</strong></td>
			<td><input class="mo_table_textbox" required type="url" id="mo_oauth_authorizeurl" name="mo_oauth_authorizeurl" value="<?php 
        echo isset($W3->authorize) ? esc_url(trim($W3->authorize)) : '';
        ?>
"></td>
		</tr>
		<tr id="mo_oauth_accesstokenurl_div">
			<td><strong><span class="mo_premium_feature">*</span>Access Token Endpoint:</strong></td>
			<td><input class="mo_table_textbox" required type="url" id="mo_oauth_accesstokenurl" name="mo_oauth_accesstokenurl" value="<?php 
        echo isset($W3->token) ? esc_url($W3->token) : '';
        ?>
 "></td>
		</tr>
		<tr>
			<td></td>
			<td><div style="padding:5px;"></div><input type="checkbox" name="mo_oauth_authorization_header" value ="1" checked />Set client credentials in Header<span style="padding:0px 0px 0px 8px;"></span><input type="checkbox" name="mo_oauth_body" value ="1"/>Set client credentials in Body<div style="padding:5px;"></div></td>
		</tr>
		<?php 
        if (!(!isset($W3->type) || "\157\141\x75\x74\150" === $W3->type)) {
            goto vb;
        }
        ?>
			<tr id="mo_oauth_resourceownerdetailsurl_div">
				<td><strong><span class="mo_premium_feature">*</span>Get User Info Endpoint:</strong></td>
				<td><input class="mo_table_textbox" <?php 
        echo !isset($W3->type) || "\157\141\165\x74\150" === $W3->type ? "\x72\x65\161\165\151\162\x65\144\x20" : '';
        ?>
 type="url" id="mo_oauth_resourceownerdetailsurl" name="mo_oauth_resourceownerdetailsurl" value="<?php 
        echo isset($W3->userinfo) ? esc_url($W3->userinfo) : '';
        ?>
"></td>
			</tr>
		<?php 
        vb:
        ?>
		<tr>
			<td><strong>login button:</strong></td>
			<td><div style="padding:5px;"></div><input type="checkbox" name="mo_oauth_show_on_login_page" value ="1" checked/>Show on login page</td>
		</tr>
		<tr>
			<td><br></td>
			<td><br></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Save settings"
				class="button button-primary button-large" /></td>
		</tr>
		</table>
	</form>
	<div id="instructions">

	</div>
	</div>
		<?php 
    }
    public function show_apps_list_page()
    {
        global $Sk;
        ?>
	<style>
		.tableborder {
			border-collapse: collapse;
			width: 100%;
			border-color:#eee;
		}

		.tableborder th, .tableborder td {
			text-align: left;
			padding: 8px;
			border-color:#eee;
		}

		.tableborder tr:nth-child(even){background-color: #f2f2f2}
	</style>
	<div id="mo_oauth_app_list" class="mo_table_layout">
		<?php 
        if ($Sk->mo_oauth_client_get_option("\x6d\157\x5f\157\141\x75\164\150\137\x61\160\160\163\137\154\151\x73\x74")) {
            goto Ra;
        }
        self::show_add_app_page();
        goto ph;
        Ra:
        $Li = $Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\x61\165\164\150\x5f\141\x70\160\x73\x5f\x6c\x69\x73\x74");
        if (count($Li) > 0 && !$Sk->check_versi(3)) {
            goto Bi;
        }
        echo "\74\x62\162\x3e\74\x61\x20\x68\162\145\146\75\x27\141\x64\155\x69\156\x2e\x70\150\x70\x3f\x70\x61\147\x65\x3d\155\157\x5f\x6f\141\165\x74\x68\x5f\x73\145\x74\164\151\156\147\163\46\x61\x63\164\151\157\x6e\75\x61\x64\144\137\156\x65\167\x27\x3e\74\x62\165\164\x74\157\x6e\40\x63\154\x61\163\163\75\47\142\x75\x74\x74\157\x6e\x20\x62\x75\x74\x74\x6f\156\55\160\x72\151\x6d\x61\162\171\x20\142\165\x74\164\x6f\x6e\55\154\141\x72\x67\145\x27\40\x73\x74\x79\154\145\x3d\47\146\154\x6f\x61\x74\x3a\x72\x69\x67\150\164\x27\x3e\x41\x64\x64\40\x41\x70\x70\x6c\151\143\x61\x74\x69\x6f\156\74\57\x62\x75\x74\164\x6f\156\x3e\x3c\x2f\x61\x3e";
        goto Vg;
        Bi:
        echo "\74\x62\162\x3e\x3c\x61\40\x68\x72\145\146\x3d\x27\x23\47\76\x3c\x62\x75\x74\164\157\x6e\40\x64\151\x73\141\x62\x6c\145\x64\x20\143\x6c\141\x73\163\x3d\47\x62\x75\x74\x74\x6f\x6e\40\142\165\x74\164\x6f\156\55\160\x72\151\x6d\141\162\171\40\x62\165\x74\x74\x6f\156\x2d\154\141\x72\x67\x65\x27\x20\163\164\x79\154\x65\x3d\47\146\x6c\157\x61\164\72\x72\x69\147\x68\x74\x27\76\x41\x64\144\x20\101\160\160\x6c\x69\143\x61\x74\x69\x6f\x6e\x3c\x2f\142\x75\164\164\x6f\156\x3e\x3c\x2f\x61\x3e";
        Vg:
        echo "\74\x68\x33\x3e\x41\160\x70\154\x69\x63\x61\164\x69\x6f\x6e\x73\40\114\151\163\x74\74\x2f\x68\x33\x3e";
        if (!(is_array($Li) && count($Li) > 0 && !$Sk->check_versi(3))) {
            goto c1;
        }
        echo "\x3c\160\40\163\x74\171\154\x65\x3d\x27\143\x6f\154\157\162\72\43\x61\71\64\64\64\x32\73\142\x61\x63\x6b\147\x72\157\x75\x6e\x64\x2d\143\157\154\157\x72\x3a\x23\146\62\x64\x65\x64\x65\x3b\x62\x6f\162\144\145\162\55\143\157\154\x6f\162\72\x23\x65\142\143\143\144\61\73\142\157\162\x64\145\162\55\162\x61\x64\151\x75\x73\72\x35\x70\x78\x3b\160\x61\x64\144\x69\156\x67\x3a\61\62\x70\x78\47\x3e\131\157\165\x20\x63\x61\x6e\x20\x6f\x6e\x6c\x79\x20\x61\144\x64\x20\x31\40\141\x70\x70\x6c\151\143\141\x74\x69\157\x6e\x20\x77\151\164\x68\40" . esc_html(strtolower($Sk->get_versi_str())) . "\x20\x76\145\x72\x73\x69\x6f\156\56\x20\125\x70\147\x72\141\x64\x65\40\164\157\x20\74\x61\x20\150\162\145\x66\75\47\141\144\x6d\151\156\x2e\x70\x68\160\77\x70\x61\147\145\x3d\x6d\157\x5f\157\141\165\x74\150\137\x73\145\164\x74\151\156\147\x73\x26\164\141\142\75\x6c\x69\x63\145\x6e\x73\x69\x6e\x67\47\76\74\x73\x74\162\x6f\x6e\147\76\145\156\164\145\x72\x70\162\x69\x73\145\x3c\x2f\x73\x74\162\157\156\x67\x3e\x3c\57\x61\x3e\40\x74\157\40\141\144\144\x20\155\157\x72\145\56\74\x2f\x70\76";
        c1:
        echo "\x3c\164\141\x62\154\x65\x20\x63\154\x61\163\x73\x3d\x27\164\x61\x62\x6c\145\x62\157\162\x64\x65\162\x27\x3e";
        echo "\74\x74\x72\x3e\x3c\x74\x68\76\74\163\164\162\157\x6e\x67\x3e\116\141\x6d\x65\x3c\x2f\x73\164\x72\x6f\156\147\x3e\x3c\x2f\164\x68\76\x3c\164\150\76\x41\143\164\x69\157\156\x3c\57\x74\x68\76\x3c\x2f\x74\x72\76";
        $cd = '';
        foreach ($Li as $qi => $U3) {
            $cd .= "\x3c\164\x72\x3e\x3c\164\x64\x3e" . $qi . "\74\57\x74\x64\x3e\74\164\144\x3e\74\x61\40\x68\x72\x65\x66\75\x27\x61\x64\x6d\151\156\56\x70\x68\x70\77\160\x61\x67\x65\x3d\155\x6f\x5f\157\141\165\164\x68\x5f\x73\145\164\x74\151\156\147\163\x26\x74\141\x62\x3d\143\157\156\146\x69\147\46\x61\143\x74\x69\x6f\x6e\x3d\x75\160\x64\x61\x74\x65\46\141\160\160\75" . rawurlencode($qi) . "\47\x3e\x45\x64\x69\164\40\x41\160\x70\154\151\x63\x61\164\x69\157\x6e\74\57\x61\76\x20\x7c\40\x3c\x61\40\x68\x72\145\146\x3d\47\x61\x64\155\x69\156\x2e\160\x68\160\x3f\x70\141\147\x65\75\x6d\157\x5f\157\141\x75\164\x68\x5f\x73\145\x74\x74\x69\156\x67\x73\x26\164\141\x62\75\143\x6f\156\x66\151\147\x26\x61\x63\x74\x69\157\156\75\165\x70\144\x61\x74\x65\46\x61\160\160\75" . rawurlencode($qi) . "\x23\141\164\x74\x72\x6d\141\160\160\x69\156\x67\x27\x3e\101\164\x74\x72\x69\142\165\164\x65\40\x4d\141\160\x70\x69\x6e\147\x3c\57\141\76\x20\x7c\40\x3c\x61\x20\x68\x72\145\146\x3d\47\141\x64\x6d\x69\x6e\x2e\x70\x68\160\x3f\160\x61\147\x65\75\155\157\x5f\157\141\x75\164\150\137\163\x65\x74\164\151\156\147\163\x26\164\x61\142\75\x63\157\156\146\x69\x67\46\141\143\164\151\157\156\x3d\x75\160\144\x61\164\x65\46\141\x70\x70\75" . rawurlencode($qi) . "\x23\162\157\x6c\x65\155\x61\x70\160\x69\x6e\x67\x27\x3e\x52\x6f\154\x65\x20\x4d\141\160\x70\151\156\147\x3c\x2f\x61\76\x20\174\x20\74\141\40\x6f\156\x63\154\x69\143\153\x3d\47\x72\145\x74\165\162\x6e\40\143\x6f\156\146\x69\x72\x6d\50\42\101\x72\145\x20\171\157\x75\x20\163\x75\x72\145\40\171\157\165\x20\x77\141\x6e\x74\40\x74\157\40\x64\x65\154\x65\x74\145\40\x74\x68\x69\x73\x20\151\164\x65\155\x3f\x22\x29\x27\40\150\162\145\x66\x3d\x27\x61\x64\x6d\151\156\x2e\x70\150\160\x3f\x70\x61\147\x65\75\155\x6f\137\x6f\141\x75\164\150\x5f\163\145\164\164\x69\x6e\147\x73\x26\x74\x61\x62\75\143\157\x6e\146\x69\147\x26\141\143\164\x69\x6f\156\75\x64\x65\154\x65\164\x65\x26\x61\x70\x70\x3d" . rawurlencode($qi) . "\47\76\x44\145\x6c\145\x74\145\x3c\57\141\76\40\174\x20";
            if (isset($_GET["\141\x63\164\151\157\x6e"]) && "\x69\x6e\163\x74\162\x75\143\164\151\157\x6e\x73" === $_GET["\141\143\x74\x69\x6f\156"] && isset($_GET["\x66\157\162"]) && rawurlencode($qi) === $_GET["\146\x6f\x72"]) {
                goto jv;
            }
            $cd .= "\x3c\141\40\150\x72\145\146\75\47\x61\144\x6d\x69\x6e\x2e\160\150\160\x3f\x70\141\147\145\x3d\x6d\157\x5f\x6f\141\165\x74\x68\x5f\163\x65\164\x74\x69\x6e\x67\x73\46\164\141\142\75\143\x6f\156\x66\151\x67\46\x61\143\164\x69\x6f\x6e\75\x69\156\x73\x74\x72\165\x63\x74\x69\157\156\163\46\141\x70\x70\111\x64\x3d" . ($U3->get_app_config("\x61\160\160\x49\x64") ? $U3->get_app_config("\141\x70\x70\x49\x64") : '') . "\x26\146\x6f\162\x3d" . rawurlencode($qi) . "\47\x3e\110\157\x77\40\x74\x6f\40\x43\157\x6e\x66\151\147\x75\x72\x65\x3f\74\x2f\141\76\74\57\164\144\x3e\x3c\x2f\164\x72\76";
            goto hN;
            jv:
            $cd .= "\x3c\x61\40\150\x72\145\146\x3d\x27\141\144\x6d\151\156\56\160\150\160\x3f\160\x61\147\x65\75\155\157\x5f\x6f\141\x75\164\x68\137\x73\x65\x74\x74\x69\156\147\163\46\164\141\x62\75\143\x6f\156\x66\151\147\x27\x3e\x48\151\144\x65\x20\x49\156\163\x74\x72\165\x63\164\x69\157\x6e\163\74\57\141\x3e\74\x2f\164\x64\76\74\57\x74\x72\x3e";
            hN:
            s1:
        }
        M4:
        $cd .= "\x3c\x2f\x74\x61\x62\x6c\x65\76";
        $cd .= "\x3c\x62\x72\x3e\74\x62\x72\76";
        echo $cd;
        ph:
        ?>
		</div>
		<?php 
    }
}
