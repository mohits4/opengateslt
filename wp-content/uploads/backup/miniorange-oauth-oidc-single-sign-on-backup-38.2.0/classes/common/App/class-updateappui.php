<?php


namespace MoOauthClient\App;

class UpdateAppUI
{
    private $app;
    public function __construct($nd, $U3)
    {
        if (!(false === $U3)) {
            goto xq;
        }
        $s5 = admin_url() . "\57\x61\144\155\151\156\x2e\x70\x68\160\77\x70\x61\147\x65\75\x6d\157\137\157\x61\x75\x74\150\x5f\x73\145\x74\164\x69\156\x67\163\46\x74\x61\142\x3d\143\157\156\146\x69\x67";
        echo "\x4f\157\x70\163\x21\40\123\157\155\x65\x74\150\x69\x6e\x67\40\167\x65\156\x74\40\x77\x72\157\x6e\147\x2e\x20\x50\154\145\141\163\x65\x20\167\x61\151\164\56\56\x2e";
        ?>
			<script>
				window.location.replace("<?php 
        echo wp_kses($s5, \get_valid_html());
        ?>
");
			</script>
			<?php 
        xq:
        $this->app = $U3;
        $this->render_update_app_page($nd, $U3->get_app_config());
    }
    public function render_update_app_page($X3, $W3)
    {
        global $Sk;
        global $Rd;
        ?>
		<div class="mo_table_layout" id="app_config_panel">
		<div id="toggle2" class="mo_panel_toggle">
			<h3>Update Application</h3>
		</div>
		<div id="mo_oauth_update_app">
		<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings&tab=config&action=update&app=<?php 
        echo $X3;
        ?>
">
		<input type="hidden" name="option" value="mo_oauth_add_app" />
		<?php 
        wp_nonce_field("\155\x6f\137\x6f\x61\165\164\150\137\x61\144\144\x5f\x61\x70\x70", "\155\157\x5f\157\x61\x75\x74\150\137\x61\144\144\137\x61\160\x70\137\x6e\157\x6e\x63\145");
        ?>
		<table class="mo_settings_table">
			<tr>
			<td><strong><span class="mo_premium_feature">*</span>Application:</strong></td>
			<td>
				<input class="mo_table_textbox" required="" type="hidden" name="mo_oauth_app_name" value="<?php 
        echo $X3;
        ?>
">
				<input class="mo_table_textbox" required="" type="hidden" name="mo_oauth_custom_app_name" value="<?php 
        echo $X3;
        ?>
">
				<input type="hidden" name="mo_oauth_app_type" value="<?php 
        echo $W3["\x61\160\x70\x5f\x74\x79\160\145"];
        ?>
">
				<?php 
        echo $X3;
        ?>
<br><br>
			</td>
			</tr>
			<tr id="mo_oauth_display_app_name_div">
				<td><strong>Display App Name:</strong><?php 
        echo !$Sk->check_versi(1) ? "\x3c\142\x72\76\x26\x65\x6d\x73\x70\x3b\74\163\160\x61\156\x20\143\x6c\141\x73\163\x3d\42\155\x6f\x5f\160\x72\145\155\151\165\155\137\146\x65\x61\x74\x75\x72\145\x22\x3e\133\123\124\x41\116\x44\x41\122\104\135\x3c\57\163\160\x61\x6e\76" : '';
        ?>
</td>
				<td><input <?php 
        echo !$Sk->check_versi(1) ? "\144\x69\x73\x61\142\x6c\x65\x64" : '';
        ?>
 class="mo_table_textbox" type="text" id="mo_oauth_display_app_name" name="mo_oauth_display_app_name" value="<?php 
        echo wp_kses(isset($W3["\x64\x69\x73\x70\x6c\141\171\x61\160\x70\x6e\141\155\x65"]) ? $W3["\144\151\x73\x70\154\141\171\141\x70\160\156\x61\155\x65"] : '', \get_valid_html());
        ?>
" pattern="[a-zA-Z0-9\s]+" title="Please do not add any special characters."></td>
			</tr>
			<tr><td><strong>Redirect / Callback URL</strong></td>

			<?php 
        $Li = $Sk->get_app_list();
        foreach ($Li as $qi => $U3) {
            if (!($Rd == $qi)) {
                goto ED;
            }
            $W3 = $U3;
            goto mj;
            ED:
            YN:
        }
        mj:
        ?>
			<td><input class="mo_table_textbox" id="callbackurl" required="true" type="text" name="mo_update_url" value='<?php 
        echo "\145\166\145\157\x6e\x6c\151\156\145" !== $X3 ? $W3["\x72\x65\144\x69\162\x65\143\164\x5f\x75\162\x69"] : "\x68\x74\164\x70\x73\x3a\57\57\x6c\157\x67\151\156\56\170\145\143\165\162\151\146\171\x2e\x63\157\155\57\x6d\157\141\x73\57\x6f\x61\x75\164\150\57\x63\154\x69\x65\x6e\x74\57\143\141\x6c\x6c\142\x61\x63\x6b";
        ?>
'>
			&nbsp;&nbsp;<div class="tooltip"><span class="tooltiptext" id="moTooltip">Copy to clipboard</span><i class="fa fa-clipboard fa-border" style="font-size:20px; vertical-align: middle;" aria-hidden="true" onclick="copyUrl()" onmouseout="outFunc()"></i></div></td>
			<?php 
        $Li = $Sk->get_app_list();
        foreach ($Li as $qi => $U3) {
            if (!($Rd == $qi)) {
                goto jR;
            }
            $W3 = $U3;
            goto nY;
            jR:
            ro:
        }
        nY:
        ?>
 

  
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

			<tr>
				<td><strong><span class="mo_premium_feature">*</span>Client ID:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_id" value="<?php 
        echo $W3["\x63\154\x69\x65\156\164\x5f\151\x64"];
        ?>
"></td>
			</tr>
			<tr>
				<td><strong><span class="mo_premium_feature">*</span>Client Secret:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_secret" value="<?php 
        echo $W3["\143\154\151\145\156\164\x5f\x73\x65\143\162\145\x74"];
        ?>
"></td>
			</tr>
			<tr>
				<td><strong>Scope:</strong></td>
				<td><input class="mo_table_textbox" type="text" name="mo_oauth_scope" value="<?php 
        echo $W3["\163\143\157\160\145"];
        ?>
"></td>
			</tr>
			<tr  id="mo_oauth_authorizeurl_div">
				<td><strong><span class="mo_premium_feature">*</span>Authorize Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required="" type="url" id="mo_oauth_authorizeurl" name="mo_oauth_authorizeurl" value="<?php 
        echo $W3["\x61\165\164\150\157\162\x69\172\145\x75\162\154"];
        ?>
"></td>
			</tr>
			<tr id="mo_oauth_accesstokenurl_div">
				<td><strong><span class="mo_premium_feature">*</span>Access Token Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required="" type="url" id="mo_oauth_accesstokenurl" name="mo_oauth_accesstokenurl" value="<?php 
        echo $W3["\141\x63\x63\x65\163\x73\x74\157\x6b\145\x6e\165\162\154"];
        ?>
"></td>
			</tr>
			<tr>
				<td></td>
				<td><div style="padding:5px;"></div><input type="checkbox" name="mo_oauth_authorization_header" value ="1" <?php 
        echo isset($W3["\163\x65\156\x64\x5f\150\145\141\144\145\162\163"]) ? 1 === $W3["\x73\x65\x6e\144\137\150\x65\x61\144\x65\162\163"] ? "\x63\150\x65\143\x6b\x65\144" : '' : "\143\150\145\143\153\145\144";
        ?>
 />Set client credentials in Header<span style="padding:0px 0px 0px 8px;"></span><input type="checkbox" name="mo_oauth_body" value ="1" <?php 
        echo isset($W3["\163\x65\156\x64\137\x62\x6f\144\x79"]) ? 1 === $W3["\x73\145\x6e\144\137\142\x6f\x64\x79"] ? "\x63\x68\145\143\153\145\144" : '' : "\143\150\145\x63\x6b\145\144";
        ?>
 />Set client credentials in Body<div style="padding:5px;"></div></td>
			</tr>
				<?php 
        $CG = isset($W3["\141\x70\160\137\x74\x79\160\145"]) && "\157\160\145\x6e\x69\x64\x63\x6f\x6e\156\145\x63\x74" !== $W3["\141\x70\x70\137\x74\x79\x70\x65"] ? false : true;
        ?>
				<tr id="mo_oauth_resourceownerdetailsurl_div">
					<td><strong><?php 
        echo false === $CG ? "\74\163\x70\x61\156\x20\143\x6c\141\x73\163\x3d\x22\155\157\x5f\x70\162\145\155\151\x75\155\137\146\x65\141\x74\x75\x72\x65\42\76\52\x3c\57\163\x70\141\x6e\x3e" : '';
        ?>
Get User Info Endpoint:</strong></td>
					<td><input class="mo_table_textbox" type="url" id="mo_oauth_resourceownerdetailsurl" name="mo_oauth_resourceownerdetailsurl" <?php 
        echo false === $CG ? "\162\145\161\165\151\x72\145\144" : '';
        ?>
 value="<?php 
        echo isset($W3["\x72\x65\163\x6f\165\162\143\x65\x6f\167\x6e\x65\162\x64\145\164\141\151\x6c\x73\165\162\x6c"]) ? $W3["\162\145\163\x6f\165\162\143\x65\157\167\156\x65\x72\144\x65\164\x61\x69\154\163\165\162\x6c"] : '';
        ?>
"></td>
				</tr>
			<tr><td><strong>Client Authentication:</strong></td><td><div style="padding:5px;"></div><input class="mo_table_textbox" type="radio" name="disable_authorization_header" id="disable_authorization_header" <?php 
        echo intval($Sk->mo_oauth_client_get_option("\155\x6f\137\x6f\141\x75\x74\x68\x5f\143\x6c\x69\x65\x6e\164\x5f\144\151\163\141\142\x6c\x65\x5f\x61\165\x74\x68\157\x72\x69\172\x61\x74\151\157\156\137\x68\x65\x61\x64\x65\162")) ? '' : "\x63\x68\145\143\x6b\x65\x64";
        ?>
 value="0">HTTP Basic (Recommended)<div style="padding:5px;"></div><input class="mo_table_textbox" type="radio" name="disable_authorization_header" id="disable_authorization_header" value="1" <?php 
        echo intval($Sk->mo_oauth_client_get_option("\x6d\157\x5f\157\141\x75\164\x68\x5f\143\x6c\151\145\156\164\x5f\144\151\x73\x61\142\154\145\137\x61\165\164\150\x6f\162\151\x7a\141\x74\151\157\x6e\137\150\x65\141\144\x65\x72")) ? "\143\x68\x65\x63\153\145\x64" : '';
        ?>
>Request Body<div style="padding:5px;"></div></td></tr>
			<?php 
        do_action("\x6d\x6f\x5f\157\x61\x75\x74\150\137\x63\154\151\145\x6e\164\x5f\x67\162\x61\156\x74\x5f\x64\144\x5f\x69\156\164\x65\x72\x6e\141\154", $W3);
        ?>
			<?php 
        if (!$Sk->check_versi(2)) {
            goto Sn;
        }
        ?>
			<tr id="mo_oauth_groupdetailsurl_div">
				<td><strong>Group User Info Endpoint:</strong></td>
				<td><input class="mo_table_textbox" type="url" id="mo_oauth_groupdetailsurl" name="mo_oauth_groupdetailsurl" value="<?php 
        echo isset($W3["\147\162\x6f\x75\160\x64\145\164\141\x69\x6c\x73\x75\x72\154"]) ? $W3["\147\162\157\x75\x70\144\x65\x74\141\151\154\x73\x75\x72\x6c"] : '';
        ?>
"></td>
			</tr>
			<tr id="mo_oauth_jwksurl_div">
				<td><strong>JWKS URL:</strong></td>
				<td><input class="mo_table_textbox" type="url" id="mo_oauth_jwksurl" name="mo_oauth_jwksurl" value="<?php 
        echo isset($W3["\x6a\x77\153\163\x75\x72\154"]) ? $W3["\x6a\x77\x6b\x73\165\162\154"] : '';
        ?>
"></td>
			</tr>
			<?php 
        Sn:
        ?>
			<tr>
				<td><strong>login button:</strong></td>
				<td><div style="padding:5px;"></div><input type="checkbox" name="mo_oauth_show_on_login_page" value ="1" <?php 
        echo isset($W3["\x73\x68\157\x77\x5f\x6f\x6e\x5f\x6c\157\147\x69\x6e\x5f\160\141\x67\145"]) ? 1 === $W3["\x73\150\157\167\137\157\156\x5f\154\157\147\151\x6e\x5f\160\x61\x67\x65"] ? "\143\150\145\x63\153\x65\x64" : '' : '';
        ?>
/>Show on login page</td>
			</tr>
			<tr>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="submit" value="Save settings" class="button button-primary button-large" />
					<input id="mo_oauth_test_configuration" type="button" name="button" value="Test Configuration" class="button button-primary button-large" onclick="testConfiguration()" />
				</td>
			</tr>
		</table>
		</form>
		</div>
		</div>

		<?php 
        do_action("\155\x6f\x5f\157\x61\x75\164\x68\x5f\143\154\151\x65\x6e\164\x5f\x67\162\141\x6e\164\x5f\x73\145\x74\x74\x69\156\x67\x73\x5f\x69\156\164\x65\162\156\141\154", $W3, $X3);
        $this->mo_oauth_attribute_mapping($W3, $X3);
        $this->mo_oauth_client_rolemapping($W3, $X3);
        if (!(isset($W3["\147\x72\x61\156\x74\x5f\x74\171\x70\145"]) && "\x50\141\x73\x73\x77\x6f\162\144\40\107\162\x61\x6e\x74" === $W3["\147\x72\141\156\x74\x5f\x74\x79\160\x65"])) {
            goto AS1;
        }
        do_action("\155\157\x5f\x6f\x61\165\x74\x68\137\143\154\151\x65\x6e\x74\x5f\141\x64\x64\137\160\167\144\137\x6a\x73");
        AS1:
        ?>
		<script>
		function HandleOnCloseEvent() {
			window.location.href = window.location.href;
		}
		function testConfiguration(){
			var mo_oauth_app_name = jQuery("#mo_oauth_app_name").val();
			if ( typeof moOAuthLoginPwd === 'function' ) {
				moOAuthLoginPwd(mo_oauth_app_name, true, '<?php 
        echo site_url();
        ?>
');
				return;
			}
			var myWindow = window.open('<?php 
        echo site_url();
        ?>
' + '/?option=testattrmappingconfig&app='+mo_oauth_app_name, "Test Attribute Configuration", "width=600, height=600");
			
			myWindow.onbeforeunload = function(){
		       myWindow.opener.HandleOnCloseEvent();
		    }
			while(1) {
				if(myWindow.closed()) {
					$(document).trigger("config_tested");
					break;
				} else {continue;}
			}
		}
		</script>
			<?php 
    }
    public function mo_oauth_attribute_mapping($W3, $X3)
    {
        global $Sk;
        $af = !$Sk->check_versi(1);
        $H8 = $af ? "\x64\x69\x73\141\x62\x6c\145\x64\x3d\42\164\162\165\145\42" : '';
        $S7 = $af ? "\162\x65\x71\165\x69\162\x65\144\75\x22\146\141\154\163\145\42" : '';
        $jc = $Sk->get_plugin_config();
        $cO = $Sk->mo_oauth_client_get_option("\155\157\x5f\x6f\x61\x75\164\x68\137\x61\x74\x74\x72\x5f\x6e\141\155\145\x5f\x6c\x69\x73\x74" . $X3);
        ?>
		<div class="mo_table_layout" id="attrmapping">
			<form name="form-common" method="post" action="admin.php?page=mo_oauth_settings">
			<h3>Attribute Mapping</h3>
			<p style="font-size:10px">Do <strong>Test Configuration</strong> above to configure attribute mapping.<br></p>
			<input type="hidden" name="option" value="mo_oauth_attribute_mapping" />
			<?php 
        wp_nonce_field("\x6d\157\137\157\141\x75\x74\150\137\141\164\164\162\151\x62\165\164\145\x5f\x6d\x61\x70\x70\x69\x6e\147", "\155\x6f\x5f\x6f\141\165\164\x68\x5f\x61\164\x74\162\x69\x62\x75\164\145\x5f\155\x61\160\160\x69\156\147\137\x6e\157\x6e\143\x65");
        ?>
			<input class="mo_table_textbox" required="" type="hidden" id="mo_oauth_app_name" name="mo_oauth_app_name" value="<?php 
        echo $X3;
        ?>
">
			<input class="mo_table_textbox" required="" type="hidden" name="mo_oauth_custom_app_name" value="<?php 
        echo $X3;
        ?>
">
			<table class="mo_settings_table" id="attributemappingtable">
				<tr id="mo_oauth_name_attr_div">
					<td><strong><span class="mo_premium_feature">*</span>Username Attribute:</strong></td>
					<td>
						<?php 
        if (is_array($cO)) {
            goto Fs;
        }
        ?>
							<input class="mo_table_textbox" required="" type="text" id="mo_oauth_username_attr" name="mo_oauth_username_attr" placeholder="Username Attributes Name" value="<?php 
        echo isset($W3["\165\163\145\x72\x6e\x61\155\145\137\x61\164\x74\x72"]) ? $W3["\165\163\145\162\x6e\x61\x6d\145\x5f\x61\164\x74\162"] : '';
        ?>
"><?php 
        goto uo;
        Fs:
        ?>
							<select class="mo_table_textbox" id="mo_oauth_username_attr" name="mo_oauth_username_attr">
							<option value="">---------------- Select an Attribute ----------------</option>
								<?php 
        foreach ($cO as $qi => $sh) {
            echo "\x3c\x6f\160\164\x69\x6f\156\40\x76\x61\x6c\x75\145\75\47" . $sh . "\47";
            if (isset($W3["\x75\x73\x65\162\x6e\141\x6d\145\x5f\141\164\x74\x72"]) && $W3["\165\x73\145\x72\x6e\x61\155\145\x5f\141\x74\x74\x72"] === $sh) {
                goto rY;
            }
            echo '';
            goto at;
            rY:
            echo "\x20\x73\145\x6c\145\x63\x74\x65\x64";
            at:
            echo "\40\76" . $sh . "\x3c\57\x6f\x70\x74\151\157\156\76";
            T0:
        }
        xM:
        ?>
							</select>
							<?php 
        uo:
        ?>
					</td>
				</tr>
				<?php 
        echo $af ? "\74\x74\162\x3e\x3c\x74\x64\x3e\46\x6e\x62\x73\x70\x3b\x3c\x2f\x74\144\76\x3c\164\144\x3e\74\x70\x3e\x41\x64\x76\x61\x6e\143\x65\x64\40\x61\164\x74\162\151\142\x75\164\145\40\x6d\141\160\160\151\156\x67\40\151\163\x20\x61\x76\141\151\154\141\142\154\145\x20\x69\156\40\x3c\x61\x20\150\162\x65\146\75\x22\141\144\155\x69\x6e\56\x70\150\x70\x3f\x70\x61\147\x65\x3d\155\157\x5f\157\141\x75\164\x68\x5f\x73\x65\164\164\x69\156\x67\163\46\141\155\160\73\164\141\142\x3d\x6c\151\143\145\156\163\151\156\147\42\76\74\x73\164\162\x6f\156\x67\x3e\x70\x72\145\155\x69\165\x6d\x3c\57\x73\164\x72\x6f\156\x67\x3e\74\x2f\141\x3e\x20\x76\x65\162\163\x69\157\156\x2e\x3c\x2f\160\76\x3c\57\164\x64\x3e\x3c\x2f\164\x72\76" : '';
        ?>
				<tr id="mo_oauth_name_attr_div">
					<td><strong><span class="mo_premium_feature"></span>First Name Attribute:</strong></td>
					<td><input class="mo_table_textbox" type="text"
					<?php 
        echo $H8;
        echo !$af ? "\x69\x64\75\x22\155\157\137\157\x61\165\164\x68\137\146\x69\x72\163\x74\x6e\x61\155\x65\x5f\141\x74\164\162\42\x20\156\x61\x6d\x65\x3d\42\155\x6f\x5f\157\141\165\x74\x68\137\x66\x69\162\x73\x74\x6e\x61\x6d\x65\137\141\164\164\x72\x22\40\x76\x61\x6c\x75\x65\x3d\42" . (isset($W3["\146\x69\x72\163\x74\x6e\x61\x6d\145\x5f\141\164\164\162"]) ? $W3["\146\151\x72\163\x74\x6e\x61\155\x65\x5f\141\x74\x74\162"] : '') . "\42\40" : "\40";
        ?>
					placeholder="FirstName Attributes Name"></td>
				</tr>
				<tr id="mo_oauth_name_attr_div">
					<td><strong><span class="mo_premium_feature"></span>Last Name Attribute:</strong></td>
					<td><input class="mo_table_textbox" type="text"
					<?php 
        echo $H8;
        echo !$af ? "\x69\x64\75\x22\x6d\x6f\137\157\141\165\164\150\x5f\154\141\163\164\x6e\141\x6d\x65\x5f\141\164\x74\162\42\40\156\141\x6d\x65\x3d\42\155\x6f\x5f\x6f\x61\x75\164\x68\x5f\x6c\141\163\x74\x6e\141\x6d\145\137\x61\164\164\x72\42\40\x76\x61\154\165\145\75\x22" . (isset($W3["\x6c\x61\x73\x74\x6e\141\x6d\145\x5f\141\164\x74\162"]) ? $W3["\x6c\141\163\x74\156\x61\155\145\137\141\164\164\x72"] : '') . "\x22\x20" : "\x20";
        ?>
					placeholder="LastName Attributes Name"></td>
				</tr>
				<tr id="mo_oauth_email_attr_div">
					<td><strong>Email Attribute:</strong></td>
					<td><input class="mo_table_textbox" type="text"
						<?php 
        echo $H8;
        echo !$af ? "\151\x64\x3d\42\x6d\x6f\137\157\141\165\x74\150\137\x65\x6d\141\x69\x6c\137\x61\164\x74\x72\42\40\156\x61\x6d\x65\75\42\x6d\157\x5f\x6f\x61\x75\x74\x68\137\x65\x6d\x61\x69\x6c\137\x61\164\164\162\42\x20\x76\141\x6c\165\x65\x3d\42" . (isset($W3["\145\155\141\x69\x6c\x5f\x61\164\164\x72"]) ? $W3["\x65\x6d\x61\151\154\x5f\141\164\164\162"] : '') . "\42\x20" : "\40";
        ?>
					placeholder="Email Attributes Name"></td>
				</tr>
				<tr id="mo_oauth_name_attr_div">
					<td><strong><span class="mo_premium_feature"></span>Group Attributes Name:</strong></td>
					<td>
						<?php 
        $Xe = isset($W3["\147\162\157\x75\160\x6e\x61\155\x65\137\141\x74\x74\162\151\142\165\x74\x65"]) ? $W3["\x67\x72\x6f\x75\x70\x6e\141\155\145\137\141\x74\164\x72\x69\x62\x75\164\145"] : '';
        ?>
						<input type="text"  class="mo_table_textbox"
						<?php 
        echo $H8;
        echo !$af ? "\x69\144\75\x22\155\x61\160\x70\x69\156\147\137\147\162\157\x75\x70\x6e\141\155\x65\137\141\164\164\162\151\142\x75\x74\145\42\x20\156\141\155\x65\x3d\x22\x6d\x61\x70\x70\x69\x6e\x67\x5f\x67\x72\157\x75\x70\156\141\x6d\145\x5f\141\x74\x74\162\x69\142\x75\x74\x65\x22\x20\166\x61\x6c\165\145\75\42" . $Xe . "\42\40" : "\x20";
        ?>
						placeholder="Group Attributes Name">
					</td>
				</tr>
				<?php 
        $lI = isset($W3["\147\162\157\x75\160\137\141\164\164\162"]) ? $W3["\147\162\x6f\x75\x70\x5f\x61\x74\x74\162"] : '';
        $dL = isset($W3["\x64\151\x73\160\154\141\171\137\x61\x74\x74\x72"]) ? $W3["\144\151\x73\x70\154\141\171\x5f\x61\164\164\x72"] : '';
        echo "\15\xa\x9\11\x9\x9\40\40\x3c\x74\x72\x3e\xd\xa\11\x9\x9\x9\x9\74\x74\x64\76\x3c\x73\x74\162\157\156\x67\76\104\x69\x73\x70\154\x61\x79\40\x4e\141\x6d\x65\x3a\x3c\57\x73\x74\x72\157\156\147\x3e\74\x2f\x74\144\76\15\12\x9\11\x9\11\x9\x3c\164\x64\x3e\15\12\11\11\11\x9\11\x9\74\x73\145\x6c\x65\x63\164\x20" . $H8 . "\x6e\x61\x6d\x65\x3d\42\x6f\x61\x75\x74\x68\137\143\x6c\151\145\156\164\x5f\x61\x6d\x5f\144\151\x73\160\154\x61\171\137\156\141\x6d\145\x22\x20\x69\144\x3d\42\x6f\141\x75\164\150\137\x63\x6c\151\145\x6e\x74\137\141\155\x5f\144\151\163\160\x6c\141\171\x5f\x6e\x61\155\x65\42\x20\76";
        echo "\74\157\x70\x74\x69\157\156\40\x76\141\154\x75\145\x3d\42\x55\x53\x45\122\116\101\x4d\x45\x22";
        echo "\x55\x53\x45\x52\116\x41\115\x45" === $dL ? "\x73\145\154\145\143\164\x65\x64\75\42\163\x65\154\x65\143\x74\x65\144\42" : '';
        echo "\76\x55\x73\x65\162\156\141\155\x65\74\57\x6f\160\164\151\157\x6e\x3e\x3c\157\x70\x74\x69\x6f\x6e\40\x76\x61\154\165\145\75\42\x46\x4e\x41\x4d\105\x22";
        echo "\x46\116\101\x4d\105" === $dL ? "\x73\145\x6c\x65\x63\164\x65\x64\75\42\163\x65\x6c\145\143\164\145\144\42" : '';
        echo "\x3e\106\151\x72\163\164\x4e\141\155\x65\x3c\57\x6f\160\x74\151\x6f\x6e\x3e\74\x6f\x70\x74\x69\157\156\x20\166\x61\154\x75\145\x3d\42\114\116\101\x4d\x45\42";
        echo "\114\116\101\115\x45" === $dL ? "\163\145\x6c\x65\143\164\145\x64\x3d\42\163\145\154\x65\x63\164\145\144\42" : '';
        echo "\76\114\141\x73\164\116\141\x6d\145\x3c\57\157\x70\x74\x69\x6f\156\76\74\157\x70\x74\x69\x6f\x6e\x20\166\141\x6c\165\145\75\x22\106\x4e\x41\115\105\137\x4c\116\x41\115\x45\x22";
        echo "\x46\116\x41\115\105\137\114\x4e\101\115\x45" === $dL ? "\163\x65\x6c\x65\x63\x74\x65\x64\x3d\x22\163\x65\154\x65\x63\x74\145\x64\x22" : '';
        echo "\x3e\x46\151\162\163\164\x4e\141\x6d\145\40\x4c\x61\163\x74\x4e\x61\x6d\145\x3c\x2f\x6f\x70\x74\x69\x6f\x6e\76\x3c\157\160\164\x69\x6f\x6e\40\166\x61\154\165\145\75\42\114\x4e\101\x4d\x45\137\106\x4e\x41\x4d\x45\x22";
        echo "\114\x4e\x41\115\x45\x5f\106\116\x41\115\105" === $dL ? "\163\145\x6c\145\143\164\145\144\75\42\163\145\x6c\x65\143\x74\145\144\x22" : '';
        echo "\76\x4c\141\x73\x74\116\x61\x6d\x65\x20\106\151\x72\x73\x74\x4e\x61\155\x65\x3c\57\157\x70\164\x69\157\x6e\x3e\xd\12\11\11\11\11\11\x9\74\57\x73\145\154\145\143\164\76\15\12\x9\11\x9\x9\x9\x3c\57\x74\144\76\15\xa\x9\x9\x9\x9\x20\40\x3c\57\x74\162\76\xd\12\x9\11\x9\11\x20\x20\x3c\164\x72\x3e\74\164\144\40\143\x6f\x6c\x73\160\x61\x6e\x3d\42\62\x22\x3e";
        $af = !$Sk->check_versi(2);
        $H8 = $af ? "\x64\151\x73\141\x62\x6c\x65\x64\x3d\42\x74\x72\165\x65\x22" : '';
        $S7 = $af ? "\162\145\x71\x75\x69\x72\x65\x64\75\x22\x66\x61\154\163\145\42" : '';
        echo "\74\x68\63\76\x4d\x61\x70\40\103\x75\163\x74\x6f\155\40\x41\x74\164\x72\151\142\x75\164\x65\163";
        echo $af ? "\46\145\155\x73\160\73\x3c\x73\155\141\154\x6c\40\x63\x6c\x61\163\x73\x3d\x22\x6d\x6f\137\x70\162\x65\x6d\x69\x75\155\137\146\x65\x61\x74\165\162\145\42\76\133\x50\122\105\x4d\x49\125\x4d\135\x3c\x2f\x73\155\141\154\154\76" : '';
        echo "\x3c\57\x68\63\x3e\x4d\141\160\40\145\170\x74\162\141\x20\117\101\x75\x74\150\x20\x50\162\157\x76\151\x64\x65\x72\40\x61\x74\164\x72\x69\142\x75\x74\x65\x73\x20\x77\150\x69\143\150\40\x79\x6f\x75\x20\167\151\163\x68\40\164\x6f\40\x62\145\40\151\x6e\x63\x6c\x75\144\145\144\40\x69\156\40\164\150\145\40\165\x73\x65\x72\40\x70\162\x6f\x66\x69\x6c\145\40\x62\x65\154\x6f\x77\15\xa\x9\x9\11\11\x3c\x2f\164\x64\76\x3c\x74\x64\76\74\x69\x6e\x70\x75\x74\40\164\171\160\x65\x3d\x22\142\x75\x74\x74\x6f\x6e\x22\40";
        echo $af ? $H8 : '';
        echo "\x6e\x61\155\x65\x3d\x22\x61\144\144\x5f\x61\x74\x74\162\x69\x62\x75\x74\x65\x22\x20\166\141\154\x75\x65\75\x22\53\42\40\157\156\143\154\151\143\x6b\75\x22\x61\x64\144\x5f\143\165\163\164\x6f\155\x5f\x61\164\164\x72\151\x62\x75\164\x65\50\x29\x3b\x22\40\143\154\141\x73\163\75\x22\142\165\x74\164\157\156\x20\142\165\164\164\157\156\x2d\x70\162\151\155\x61\x72\x79\x22\40\40\57\76\x3c\x2f\x74\144\x3e";
        echo "\74\164\x64\76\74\x69\x6e\x70\165\x74\40\164\x79\x70\x65\75\x22\x62\165\x74\x74\157\156\x22\40";
        echo $af ? $H8 : '';
        echo "\156\x61\x6d\145\x3d\42\x72\x65\x6d\157\166\x65\137\141\164\164\x72\151\x62\x75\164\x65\42\x20\x76\x61\154\x75\145\75\42\55\x22\x20\157\156\x63\154\151\x63\153\75\42\162\145\x6d\157\x76\145\x5f\x63\165\163\164\x6f\x6d\x5f\141\x74\164\x72\151\142\165\x74\x65\50\x29\x3b\x22\40\143\x6c\141\163\x73\75\x22\142\x75\x74\164\x6f\156\x20\142\x75\164\x74\x6f\156\55\x70\x72\151\x6d\141\162\x79\42\x20\40\x20\x2f\x3e\74\x2f\164\144\76\x3c\x2f\x74\x72\76\xd\12\x9\11\11\11";
        if (isset($W3["\x63\165\163\164\x6f\155\x5f\x61\x74\x74\x72\163\x5f\x6d\x61\x70\x70\151\x6e\147"]) && !empty($W3["\x63\165\x73\164\x6f\155\137\141\164\x74\x72\x73\137\155\x61\x70\160\x69\156\147"])) {
            goto O3;
        }
        echo "\74\x74\162\40\x63\154\x61\x73\x73\x3d\42\162\x6f\x77\163\42\x3e\74\x74\x64\x3e\74\x69\x6e\x70\165\164\40" . $H8 . "\x20\x74\x79\160\145\75\x22\x74\145\170\164\x22";
        echo !$af ? "\x20\x6e\141\155\145\x3d\42\155\157\137\x6f\141\x75\x74\150\x5f\143\x6c\151\145\156\x74\137\x63\x75\163\x74\157\155\x5f\x61\164\164\x72\151\x62\165\164\145\137\153\x65\x79\x5f\61\42\40" : "\40";
        echo "\x20\160\154\x61\143\145\150\x6f\x6c\x64\x65\x72\75\42\105\x6e\x74\x65\x72\40\x66\x69\145\154\x64\x20\x6d\145\164\141\40\156\141\155\x65\42\x20\40\40\57\76\74\x2f\164\144\76";
        echo "\74\164\x64\76\x3c\x69\156\160\165\164\x20" . $H8;
        echo !$af ? "\40\x6e\141\x6d\145\75\x22\155\x6f\x5f\157\x61\165\164\x68\137\x63\154\x69\x65\156\164\x5f\x63\165\163\164\157\155\137\x61\x74\164\162\x69\142\x75\x74\x65\137\x76\141\154\165\145\x5f\x31\42" : "\40";
        echo "\x20\164\x79\x70\145\75\x22\x74\145\170\x74\42\40\160\x6c\x61\x63\145\x68\x6f\154\144\145\162\x3d\x22\x45\x6e\x74\145\x72\40\141\164\164\x72\x69\142\x75\x74\145\x20\x6e\141\x6d\145\40\146\x72\157\x6d\40\117\101\x75\164\150\x20\x50\x72\x6f\x76\x69\144\x65\x72\x22\40\x73\164\x79\154\x65\x3d\42\167\151\x64\x74\x68\72\x37\x34\45\73\42\40\x20\57\x3e\x3c\x2f\x74\x64\76";
        echo "\x3c\57\x74\x72\76";
        goto hV;
        O3:
        $cE = $W3["\x63\x75\x73\x74\157\155\137\141\x74\164\x72\163\x5f\155\141\160\160\151\x6e\x67"];
        $nH = 0;
        foreach ($cE as $qi => $sh) {
            $nH++;
            echo "\74\x74\162\x20\143\x6c\x61\x73\x73\x3d\x22\162\157\167\x73\x22\x3e\74\164\x64\x3e\74\151\x6e\160\x75\164\40" . $H8 . "\x20\164\171\x70\x65\x3d\x22\x74\x65\170\x74\x22\x20\156\141\x6d\x65\75\42\x6d\x6f\x5f\157\141\165\x74\x68\137\x63\x6c\151\x65\156\164\137\x63\x75\163\x74\x6f\x6d\x5f\x61\164\x74\x72\x69\142\165\x74\145\x5f\153\x65\171\137" . $nH . "\x22\x20\x70\154\141\143\x65\x68\157\154\144\145\x72\x3d\42\105\x6e\x74\x65\x72\40\146\x69\x65\x6c\x64\x20\155\145\164\x61\40\x6e\141\x6d\145\42\40\x20\166\141\x6c\165\145\x3d\42" . $qi . "\42\x20\57\x3e\x3c\57\x74\144\x3e\74\164\144\x3e\74\151\x6e\x70\165\x74\x20" . $H8;
            echo !$af ? "\40\x6e\141\x6d\145\x3d\x22\x6d\157\137\157\141\165\164\x68\137\x63\154\151\145\x6e\164\137\143\x75\163\164\157\x6d\x5f\x61\164\x74\x72\151\x62\165\x74\145\x5f\x76\141\154\x75\x65\x5f" . $nH . "\x22" : "\40";
            echo "\x20\x74\171\x70\145\75\42\x74\x65\x78\x74\x22\40\x70\154\x61\143\x65\150\x6f\x6c\x64\145\x72\75\x22\105\156\x74\145\x72\x20\141\x74\164\162\151\x62\165\164\145\x20\156\x61\155\145\x20\146\x72\x6f\155\x20\117\101\x75\x74\150\40\120\x72\x6f\x76\x69\144\x65\x72\42\x20\163\164\x79\154\x65\x3d\x22\x77\x69\144\x74\150\x3a\67\x34\x25\73\42\40\x76\x61\154\165\145\x3d\x22" . $sh . "\x22\x20\x2f\x3e\x3c\x2f\x74\144\76\x3c\x2f\164\162\76";
            vi:
        }
        B0:
        hV:
        ?>
				<tr id="save_config_element">
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="Save settings"
						class="button button-primary button-large" /></td>
				</tr>
				</table>
			</form>
			<?php 
        echo "\74\163\143\x72\x69\x70\x74\x3e\15\12\11\x9\11\11\x76\141\162\x20\143\x6f\x75\156\x74\x41\164\x74\x72\151\x62\165\x74\x65\x73\x20\x3d\x20\x6a\121\x75\145\x72\x79\50\x22\43\141\x74\164\162\151\x62\x75\164\x65\x6d\141\x70\x70\151\x6e\147\x74\x61\142\x6c\x65\x20\x74\162\56\x72\x6f\167\x73\42\x29\56\x6c\x65\x6e\147\x74\x68\x3b\15\xa\x9\11\11\x9\x66\165\156\143\164\x69\x6f\x6e\x20\x61\x64\x64\137\x63\x75\163\164\157\x6d\x5f\x61\164\x74\162\151\x62\165\x74\145\50\51\173\15\12\x9\x9\11\11\x9\x63\x6f\x75\x6e\x74\x41\164\x74\x72\151\142\165\x74\x65\x73\x20\x2b\x3d\40\x31\x3b\xd\12\11\11\x9\x9\x9\162\x6f\167\x73\40\75\40\x22\74\164\x72\x20\x69\x64\x3d\134\42\x72\157\x77\137\x22\40\53\143\x6f\x75\156\164\101\164\164\162\x69\142\x75\164\x65\163\x20\53\x20\x22\134\x22\76\74\x74\x64\76\x3c\151\156\160\165\164\40\x74\x79\160\x65\x3d\x5c\42\x74\145\x78\164\x5c\42\40\156\x61\x6d\x65\x3d\x5c\x22\x6d\x6f\x5f\157\141\x75\x74\150\137\x63\154\151\145\156\164\137\143\165\163\x74\x6f\155\137\141\x74\x74\162\x69\142\165\164\x65\137\x6b\145\x79\x5f\x22\40\x2b\x20\143\x6f\x75\156\164\101\x74\x74\162\x69\142\165\164\x65\163\x20\x2b\40\42\134\x22\40\x69\144\x3d\x5c\42\x6d\157\x5f\x6f\x61\165\164\x68\x5f\143\154\151\145\156\164\x5f\143\165\x73\164\x6f\155\137\141\x74\164\x72\151\x62\x75\164\x65\137\x6b\x65\171\137\42\x20\x2b\x63\157\x75\x6e\164\101\x74\x74\162\151\142\165\164\145\163\x20\x2b\40\42\134\42\x20\x20\x70\x6c\x61\x63\x65\150\x6f\154\144\145\x72\75\x5c\42\105\156\x74\x65\162\40\x66\x69\x65\x6c\144\x20\155\145\164\x61\40\x6e\141\155\x65\134\42\x20\40\76\x3c\x2f\x74\x64\76\x3c\x74\x64\76\x3c\151\x6e\160\165\x74\40\x74\x79\160\x65\75\134\x22\164\145\x78\x74\x5c\x22\x20\x6e\x61\x6d\145\x3d\134\42\x6d\x6f\x5f\x6f\x61\x75\x74\150\137\x63\x6c\151\145\x6e\x74\137\x63\165\x73\x74\157\x6d\x5f\141\x74\164\162\151\x62\x75\x74\145\137\x76\x61\x6c\165\x65\137\42\40\53\x63\157\165\x6e\x74\x41\x74\x74\162\x69\x62\x75\x74\x65\x73\x20\x2b\x20\42\x5c\x22\40\151\x64\75\x5c\x22\155\x6f\137\x6f\x61\x75\x74\x68\137\x63\x6c\x69\145\x6e\x74\137\143\165\163\164\x6f\155\x5f\141\164\x74\162\151\x62\x75\x74\145\137\166\141\154\165\x65\x5f\42\x20\53\x63\157\165\156\x74\101\x74\164\x72\x69\142\x75\164\x65\x73\x20\x2b\40\x22\134\42\x20\x70\154\x61\143\145\x68\157\x6c\144\145\162\x3d\134\42\x45\156\164\145\x72\x20\101\164\164\162\151\x62\165\164\145\x20\x4e\x61\x6d\145\40\146\x72\x6f\x6d\x20\117\x41\x75\164\150\x20\120\x72\x6f\166\x69\144\x65\162\x5c\x22\40\x73\x74\x79\154\145\x3d\134\42\x77\151\144\164\x68\72\67\64\45\x3b\x5c\42\40\57\76\74\x2f\x74\x64\x3e\74\57\164\x72\x3e\42\73\xd\xa\xd\12\x9\11\x9\x9\x9\x6a\x51\165\x65\x72\171\x28\x72\x6f\167\x73\x29\56\x69\156\x73\145\162\x74\102\x65\x66\x6f\162\x65\x28\152\x51\x75\145\x72\x79\50\42\x23\x73\x61\166\145\137\x63\x6f\156\x66\x69\147\137\145\154\x65\155\x65\x6e\x74\42\x29\x29\73\xd\xa\x9\11\x9\x9\175\15\xa\xd\12\11\x9\x9\11\146\165\156\143\164\151\x6f\156\x20\162\x65\x6d\157\166\x65\137\143\165\x73\x74\157\x6d\x5f\141\164\x74\x72\151\142\x75\164\x65\x28\51\x7b\15\12\x9\x9\11\11\x9\x6a\121\x75\x65\x72\x79\50\x22\x23\x72\157\x77\137\42\x20\x2b\40\143\x6f\x75\x6e\164\101\164\x74\x72\x69\x62\x75\x74\145\x73\51\56\x72\145\155\x6f\x76\145\x28\x29\x3b\xd\xa\11\11\11\x9\11\x63\157\x75\156\164\101\x74\x74\x72\151\142\x75\x74\x65\163\40\x2d\x3d\x20\61\x3b\15\xa\11\x9\11\11\x9\151\x66\50\x63\157\x75\x6e\x74\101\164\164\162\151\142\x75\x74\x65\163\x20\x3d\x3d\x20\x30\x29\15\12\x9\11\11\11\11\x9\143\x6f\165\156\164\x41\x74\x74\162\151\142\x75\164\x65\x73\x20\x3d\x20\x31\73\xd\12\11\11\x9\x9\175\15\12\x9\x9\11\11\x3c\57\163\143\162\x69\x70\164\76";
        ?>
			</div>
		<?php 
    }
    public function mo_oauth_client_rolemapping($W3, $X3)
    {
        global $Sk;
        $af = !$Sk->check_versi(2);
        $H8 = $af ? "\x64\151\163\141\142\x6c\x65\144\75\42\164\162\165\x65\x22" : '';
        $S7 = $af ? "\162\x65\x71\165\x69\x72\x65\144\x3d\x22\146\141\x6c\163\x65\42" : '';
        $W3["\x6b\x65\145\160\x5f\145\x78\x69\x73\x74\x69\x6e\147\137\165\x73\x65\162\137\x72\x6f\x6c\145\x73"] = isset($W3["\x6b\x65\x65\x70\x5f\145\x78\151\x73\x74\151\156\x67\137\x75\163\145\162\137\162\x6f\154\x65\x73"]) ? $W3["\153\x65\x65\x70\x5f\x65\170\151\163\x74\151\156\147\x5f\165\x73\145\162\137\162\x6f\154\x65\x73"] : 0;
        $W3["\162\x65\x73\x74\162\x69\x63\164\x5f\x6c\x6f\147\x69\x6e\x5f\x66\x6f\x72\137\155\x61\x70\x70\145\144\x5f\162\157\154\145\x73"] = isset($W3["\x72\145\163\x74\x72\151\143\x74\137\154\157\147\x69\156\x5f\146\x6f\x72\x5f\155\x61\x70\160\145\x64\137\x72\x6f\154\x65\x73"]) ? $W3["\x72\x65\x73\164\162\x69\143\164\x5f\x6c\x6f\147\151\x6e\x5f\x66\x6f\x72\x5f\x6d\x61\x70\160\145\x64\x5f\162\157\154\145\x73"] : false;
        $W3["\137\x6d\141\x70\x70\x69\156\x67\137\166\x61\x6c\x75\145\137\144\x65\146\x61\165\154\x74"] = isset($W3["\x5f\155\x61\160\x70\x69\156\147\x5f\x76\x61\154\165\x65\x5f\x64\145\x66\x61\165\154\x74"]) ? $W3["\137\x6d\141\x70\160\x69\156\x67\x5f\166\x61\154\165\x65\137\144\145\146\x61\x75\x6c\x74"] : false;
        $W3["\162\157\154\145\x5f\155\x61\160\x70\151\156\147\x5f\143\x6f\x75\156\x74"] = isset($W3["\162\157\154\145\x5f\155\x61\x70\160\x69\x6e\147\x5f\x63\157\x75\x6e\164"]) ? $W3["\162\x6f\154\145\137\x6d\x61\x70\160\151\156\147\137\x63\157\x75\156\x74"] : 0;
        $W3["\x67\162\x6f\165\x70\156\x61\x6d\145\x5f\141\x74\x74\x72\x69\142\165\164\x65"] = isset($W3["\147\x72\x6f\x75\160\156\x61\155\145\x5f\141\164\x74\162\151\x62\165\164\145"]) ? $W3["\147\162\x6f\165\160\x6e\x61\x6d\145\x5f\141\164\x74\162\x69\x62\x75\164\x65"] : '';
        ?>
		<div class="mo_table_layout" id="rolemapping">
		<div class="mo_oauth_client_small_layout" style="margin-top:0px;">
		<br><h3>Role Mapping (Optional)</h3>
		<?php 
        $Xe = $W3["\147\162\157\165\160\156\141\155\145\137\x61\x74\164\x72\151\x62\x75\164\x65"];
        if (!empty($Xe)) {
            goto mx;
        }
        echo "\74\x70\x20\x73\164\x79\154\145\75\x63\157\154\x6f\162\x3a\162\x65\144\76\x43\157\156\x66\151\x67\x75\x72\145\x20\x3c\x73\x74\162\157\156\x67\x3e\107\162\x6f\x75\x70\40\101\164\x74\162\x69\142\x75\x74\x65\40\116\x61\155\x65\x3c\x2f\163\x74\162\x6f\x6e\x67\76\x20\151\156\40\x61\164\x74\162\151\142\165\x74\x65\40\x6d\x61\160\x70\x69\156\x67\x20\x61\x62\157\x76\145\x20\164\157\x20\145\x6e\141\142\x6c\x65\x20\162\x6f\x6c\145\x20\155\141\x70\160\x69\x6e\147\x2e\74\x2f\160\76";
        mx:
        ?>
		<strong>NOTE: </strong>Role will be assigned only to non-admin users (user that do NOT have Administrator privileges). You will have to manually change the role of Administrator users.<br>
		<form id="role_mapping_form" name="f" method="post" action="">
			<input class="mo_table_textbox" required="" type="hidden"  name="mo_oauth_app_name" value="<?php 
        echo $X3;
        ?>
">
			<input  type="hidden" name="option" value="mo_oauth_client_save_role_mapping" />
			<?php 
        wp_nonce_field("\155\157\137\x6f\x61\x75\x74\x68\x5f\x63\x6c\151\x65\x6e\x74\137\163\141\166\x65\137\x72\157\x6c\145\137\155\x61\x70\x70\151\156\147", "\x6d\157\x5f\157\x61\165\x74\150\137\x63\154\x69\x65\156\164\137\163\x61\x76\x65\137\162\157\154\145\x5f\155\x61\160\x70\151\x6e\147\137\x6e\x6f\156\143\145");
        ?>
			<p><input type="checkbox"
			<?php 
        echo $H8;
        echo !$af ? "\x6e\141\155\x65\x3d\x22\153\145\x65\160\x5f\x65\170\x69\163\164\151\156\147\x5f\165\163\145\162\137\x72\x6f\154\145\x73\x22\x20\x76\141\x6c\165\145\75\x22\x31\42\x20" . checked(intval($W3["\153\x65\x65\x70\x5f\x65\170\151\163\x74\151\156\x67\137\165\x73\x65\162\x5f\162\157\x6c\145\163"]) === 1) . "\x22\40" : "\40";
        ?>
			/><strong> Keep existing user roles</strong> <?php 
        echo $af ? "\x26\x65\155\163\x70\x3b\74\x73\155\141\x6c\x6c\40\143\154\x61\163\163\x3d\42\155\x6f\x5f\x70\x72\x65\x6d\151\x75\x6d\137\146\x65\141\164\165\x72\x65\x22\76\133\120\122\105\115\111\x55\115\135\74\x2f\x73\x6d\x61\x6c\154\x3e" : '';
        ?>
 <br><small>Role mapping won't apply to existing WordPress users.</small></p>
			<p><input type="checkbox"
			<?php 
        echo $H8;
        echo !$af ? "\156\x61\155\x65\75\x22\162\x65\163\164\162\151\x63\x74\x5f\x6c\157\147\x69\156\137\x66\157\162\x5f\155\141\x70\x70\x65\144\137\x72\157\154\145\163\x22\40\x76\141\154\x75\145\75\42\x74\162\165\145\42\40" . checked(boolval($W3["\162\145\x73\164\162\151\x63\164\x5f\x6c\x6f\147\151\x6e\x5f\x66\157\162\x5f\155\x61\x70\160\x65\144\137\162\157\154\x65\x73"]) === true) . "\x22\40" : "\x20";
        ?>
			/><strong> Do Not allow login if roles are not mapped here </strong><?php 
        echo $af ? "\46\145\x6d\x73\160\x3b\74\163\x6d\x61\154\x6c\x20\x63\154\x61\163\163\75\x22\x6d\x6f\x5f\160\x72\x65\x6d\151\165\x6d\x5f\x66\x65\141\x74\x75\162\x65\x22\x3e\133\x50\x52\x45\x4d\x49\x55\x4d\135\74\x2f\163\x6d\x61\154\154\76" : '';
        ?>
</p><small>We won't allow users to login if we don't find users role/group mapped below.</small></p>

			<div id="panel1">
				<table class="mo_oauth_client_mapping_table" id="mo_oauth_client_role_mapping_table" style="width:90%">
						<tr><td>&nbsp;</td></tr>
						<tr>
						<td><span style="font-size:13px;font-weight:bold;">Default Role </span>
						</td>
						<td>
							<select name="mapping_value_default" style="width:100%" id="default_group_mapping" <?php 
        echo $W3["\x72\x65\x73\x74\162\151\x63\164\137\x6c\x6f\147\x69\x6e\137\146\x6f\162\x5f\155\x61\x70\160\145\144\x5f\x72\x6f\x6c\x65\163"] ? "\x64\151\163\x61\x62\154\x65\144\75\x22\x74\x72\x75\x65\42" : "\x20";
        ?>
>
							<?php 
        $pC = $W3["\137\155\x61\x70\x70\151\x6e\x67\137\166\141\154\x75\145\137\144\145\x66\141\165\x6c\x74"] ? $W3["\137\x6d\141\160\x70\x69\156\x67\x5f\166\141\x6c\x75\x65\137\x64\145\x66\x61\x75\154\164"] : $Sk->mo_oauth_client_get_option("\144\x65\x66\x61\165\x6c\x74\137\162\157\x6c\145");
        wp_dropdown_roles($pC);
        ?>
							</select>
							<select style="display:none" id="wp_roles_list">
							<?php 
        wp_dropdown_roles($pC);
        ?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan=2><em> Default role will be assigned to all users for which mapping is not specified.</em></td>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr>
						<td style="width:50%"><strong>Group Attribute Value</strong><?php 
        echo $af ? "\46\x65\x6d\163\x70\x3b\x3c\x73\x6d\x61\154\x6c\x20\x63\154\x61\163\163\75\x22\155\157\137\160\x72\x65\x6d\151\165\155\137\146\x65\141\x74\165\x72\145\42\76\133\x50\x52\105\x4d\111\125\115\135\x3c\x2f\x73\155\x61\x6c\154\76" : '';
        ?>
</td>
						<td style="width:50%"><strong>WordPress Role</strong></td>
					</tr>

					<?php 
        $Om = is_numeric($W3["\x72\x6f\154\145\x5f\155\x61\x70\x70\151\156\147\x5f\x63\157\165\156\164"]) ? intval($W3["\x72\x6f\x6c\145\x5f\155\x61\160\160\x69\156\147\x5f\x63\x6f\x75\x6e\164"]) : 1;
        $nH = 1;
        UR:
        if (!($nH <= $Om)) {
            goto O1;
        }
        ?>
					<tr>
						<td><input class="mo_oauth_client_table_textbox" type="text" name="mapping_key_<?php 
        echo wp_kses($nH, \get_valid_html());
        ?>
"
							value="<?php 
        echo isset($W3["\137\x6d\141\x70\160\x69\x6e\x67\x5f\153\145\171\x5f" . $nH]) ? $W3["\137\x6d\x61\160\x70\151\x6e\147\x5f\153\x65\171\137" . $nH] : '';
        ?>
"  placeholder="group name"  />
						</td>
						<td>
							<select name="mapping_value_<?php 
        echo wp_kses($nH, \get_valid_html());
        ?>
" id="role" style="width:100%" >
							<?php 
        wp_dropdown_roles(isset($W3["\x5f\x6d\x61\x70\160\x69\x6e\x67\137\166\141\154\165\145\137" . $nH]) ? $W3["\x5f\155\141\x70\160\x69\x6e\x67\137\166\x61\x6c\165\145\137" . $nH] : '');
        ?>
							</select>
						</td>
					</tr>
						<?php 
        y3:
        $nH++;
        goto UR;
        O1:
        if (!(0 === $Om)) {
            goto xE;
        }
        ?>
					<tr>
						<td><input class="mo_oauth_client_table_textbox" type="text"
							<?php 
        echo $H8;
        echo !$af ? "\40\x6e\141\x6d\x65\x3d\42\x6d\141\x70\x70\151\156\147\137\153\x65\171\137\x31\x22\40\166\141\154\x75\145\x3d\x22\42" : "\x20";
        ?>
							placeholder="group name" />
						</td>
						<td>
							<select style="width:100%"
							<?php 
        echo $H8;
        echo !$af ? "\x20\156\141\x6d\145\75\x22\155\x61\x70\160\151\156\x67\x5f\x76\x61\x6c\165\145\137\x31\42\40\x69\x64\x3d\42\x72\x6f\x6c\145\42" : "\40";
        ?>
							>
							<?php 
        wp_dropdown_roles();
        ?>
							</select>
						</td>
					</tr>
						<?php 
        xE:
        ?>
					</table>
					<table class="mo_oauth_client_mapping_table" style="width:90%;">
						<tr><td><a style="cursor:pointer" id="add_mapping">Add More Mapping</a><br><br></td><td>&nbsp;</td></tr>
						<tr>
							<td><input type="submit" class="button button-primary button-large" value="Save Mapping" /></td>
							<td>&nbsp;</td>
						</tr>
					</table>
					</div>
				</form>
			</div>
		</div>
		<script>
			jQuery( document ).ready(function() {
				jQuery("#default_group_mapping option[value='administrator']").remove();
				<?php 
        if (!empty($Xe)) {
            goto Qw;
        }
        ?>
				jQuery("#rolemapping :input").prop("disabled", true);
				<?php 
        Qw:
        ?>

			});

			jQuery('#add_mapping').click(function() {
				var last_index_name = jQuery('#mo_oauth_client_role_mapping_table tr:last .mo_oauth_client_table_textbox').attr('name');
				var splittedArray = last_index_name.split("_");
				var last_index = parseInt(splittedArray[splittedArray.length-1])+1;
				var dropdown = jQuery("#wp_roles_list").html();
				var new_row = '<tr><td><input class="mo_oauth_client_table_textbox" type="text" placeholder="group name" name="mapping_key_'+last_index+'" value="" /></td><td><select name="mapping_value_'+last_index+'" style="width:100%" id="role">'+dropdown+'</select></td></tr>';
				jQuery('#mo_oauth_client_role_mapping_table tr:last').after(new_row);
			});

		</script>
		<?php 
    }
}
