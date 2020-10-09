<?php


require "\x64\145\146\141\x75\154\x74\x61\x70\x70\x73\x2e\x70\150\160";
function add_app_page()
{
    $vQ = mo_oauth_client_get_option("\x6d\157\137\x6f\x61\165\x74\150\137\141\x70\160\x73\137\x6c\151\x73\164");
    ?>
	
	<div id="toggle2" class="mo_panel_toggle">
		<table class="mo_settings_table">
			<tr>
				<td><h3>Add Application</h3></td>
				<?php 
    if (isset($_GET["\x61\x70\160\111\x64"])) {
        goto zN;
    }
    ?>
						<td align="right"><span style="position: relative; float: right;padding-left: 13px;padding-right:13px;background-color:white;border-radius:4px;">
							<!-- <button type="button" id="restart_tour_id" class="button button-primary button-large" onclick="jQuery('#show_pointers').submit();"><i class="fa fa-refresh"></i>Restart Tour</button> -->
						</span></td> <?php 
    goto Tg;
    zN:
    $Yg = $_GET["\141\160\x70\x49\144"];
    if (isset($_GET["\141\x63\x74\x69\157\156"]) && $_GET["\141\x63\x74\x69\x6f\156"] == "\151\156\163\164\162\165\143\164\x69\157\x6e\163" || isset($_GET["\x73\150\x6f\x77"]) && $_GET["\163\150\x6f\x77"] == "\151\156\163\164\162\165\x63\164\x69\157\156\x73") {
        goto Sm;
    }
    echo "\12\x9\11\x9\11\11\x9\11\74\164\144\40\141\x6c\151\x67\x6e\75\42\x72\x69\147\x68\164\42\x3e\74\x61\x20\x68\x72\x65\146\75\x22\141\144\x6d\151\x6e\56\x70\x68\160\77\160\141\x67\x65\x3d\155\157\x5f\157\x61\x75\x74\150\137\x73\145\164\x74\x69\x6e\x67\x73\46\x61\x63\164\x69\157\x6e\75\x61\144\144\46\x73\x68\157\x77\x3d\x69\156\x73\x74\162\x75\x63\x74\x69\x6f\x6e\x73\46\141\160\x70\111\144\x3d" . $Yg . "\x22\x3e\74\x64\151\166\40\151\144\75\x27\155\x6f\137\157\141\x75\x74\150\x5f\x63\x6f\156\x66\151\x67\x5f\x67\x75\151\144\x65\x27\40\163\164\x79\x6c\x65\x3d\42\x64\151\x73\160\154\141\171\72\151\x6e\x6c\151\156\x65\73\142\x61\x63\153\147\162\x6f\x75\156\x64\55\143\157\x6c\157\162\72\43\60\x30\x38\x35\142\141\73\x63\157\154\x6f\x72\72\43\x66\x66\x66\x3b\160\x61\x64\144\151\x6e\x67\x3a\x34\160\170\x20\70\160\170\x3b\142\157\x72\144\x65\x72\55\x72\x61\144\151\x75\x73\72\64\x70\170\42\x3e\x48\x6f\167\40\x74\157\40\103\157\156\x66\x69\147\165\x72\x65\x3f\x3c\57\144\x69\166\x3e\74\57\x61\x3e\x3c\57\164\144\x3e\12\11\11\x9\x9\11\11\x9";
    goto kO;
    Sm:
    echo "\xa\x9\11\x9\11\x9\x9\11\74\164\144\40\141\154\x69\147\x6e\75\x22\x72\x69\147\150\164\42\x3e\74\141\40\x68\x72\145\146\75\x22\141\144\155\151\x6e\56\160\150\160\77\x70\x61\x67\x65\x3d\155\x6f\x5f\157\141\165\x74\150\x5f\163\x65\x74\x74\151\x6e\x67\x73\46\x61\x63\x74\151\157\x6e\x3d\x61\x64\144\46\x61\160\x70\x49\x64\75" . $Yg . "\x22\76\74\144\151\x76\x20\x69\144\75\47\x6d\157\x5f\157\141\165\164\x68\137\143\157\x6e\146\151\147\x5f\147\x75\151\144\145\x27\x20\x73\164\x79\154\145\75\x22\144\151\x73\160\154\x61\171\72\x69\156\154\x69\x6e\145\73\142\x61\143\x6b\x67\162\x6f\x75\156\x64\x2d\143\x6f\154\x6f\162\x3a\x23\x30\60\x38\65\x62\141\x3b\x63\x6f\154\157\162\72\43\146\146\x66\x3b\160\141\x64\x64\x69\x6e\147\72\x34\160\x78\40\x38\160\170\x3b\142\x6f\162\144\x65\x72\x2d\x72\x61\144\x69\165\x73\x3a\64\x70\170\42\x3e\x48\151\x64\145\40\x69\x6e\163\x74\162\x75\143\164\x69\x6f\x6e\163\40\x5e\x3c\57\x64\151\166\76\x3c\57\141\76\x3c\57\x74\x64\76\x20";
    kO:
    Tg:
    ?>
			</tr>
		</table>
		<form name="f" method="post" id="show_pointers">
        	<input type="hidden" name="option" value="clear_pointers"/>
		</form>
	</div>
		
	<?php 
    if (!isset($_GET["\141\160\160\x49\x64"])) {
        goto ZzQ;
    }
    $Yg = $_GET["\141\x70\160\111\144"];
    $X6 = mo_oauth_client_get_app($Yg);
    ?>
		<div id="mo_oauth_add_app">
		<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings">
		<input type="hidden" name="option" value="mo_oauth_add_app" />
		<table class="mo_settings_table">
			<tr>
			<td><strong><font color="#FF0000">*</font>Application:<br><br></strong></td>
			<td>
				<input type="hidden" name="mo_oauth_app_name" value="<?php 
    echo $Yg;
    ?>
">
				<input type="hidden" name="mo_oauth_app_type" value="<?php 
    echo $X6->type;
    ?>
">
				<?php 
    echo $X6->label;
    ?>
 &nbsp;&nbsp;&nbsp;&nbsp; <a style="text-decoration:none" href ="admin.php?page=mo_oauth_settings&action=add"><div style="display:inline;background-color:#0085ba;color:#fff;padding:4px 8px;border-radius:4px">Change Application</div></a><br><br>
			</td>
			</tr>
			<tr><td><strong>Redirect / Callback URL</strong></td>
			<td><input class="mo_table_textbox" id="callbackurl"  type="text" readonly="true" value='<?php 
    echo site_url() . '';
    ?>
'></td>
			</tr>
			<tr id="mo_oauth_custom_app_name_div">
				<td><strong><font color="#FF0000">*</font>App Name:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_custom_app_name" name="mo_oauth_custom_app_name" value="" pattern="[a-zA-Z0-9\s]+" required title="Please do not add any special characters."></td>
			</tr>
			<tr id="mo_oauth_display_app_name_div">
				<td><strong>Display App Name:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_display_app_name" name="mo_oauth_display_app_name" value="" pattern="[a-zA-Z0-9\s]+" title="Please do not add any special characters."></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000"></font>SSO Protocol:</strong></td>
				<td><input disabled class="mo_table_textbox" required="" type="text" value="<?php 
    echo $X6->type;
    ?>
"></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client ID:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_id" value=""></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client Secret:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text"  name="mo_oauth_client_secret" value=""></td>
			</tr>
			<tr>
				<td><strong>Scope:</strong></td>
				<td><input class="mo_table_textbox" type="text" name="mo_oauth_scope" value="<?php 
    if (!isset($X6->scope)) {
        goto yy;
    }
    echo $X6->scope;
    yy:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_authorizeurl_div">
				<td><strong><font color="#FF0000">*</font>Authorize Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required type="text" id="mo_oauth_authorizeurl" name="mo_oauth_authorizeurl" value="<?php 
    if (!isset($X6->authorize)) {
        goto kH;
    }
    echo $X6->authorize;
    kH:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_accesstokenurl_div">
				<td><strong><font color="#FF0000">*</font>Access Token Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required type="text" id="mo_oauth_accesstokenurl" name="mo_oauth_accesstokenurl" value="<?php 
    if (!isset($X6->token)) {
        goto Bd;
    }
    echo $X6->token;
    Bd:
    ?>
"></td>
			</tr>
			<?php 
    if (!(!isset($X6->type) || $X6->type == "\157\141\x75\x74\x68")) {
        goto zlh;
    }
    ?>
				<tr id="mo_oauth_resourceownerdetailsurl_div">
					<td><strong><font color="#FF0000">*</font>Get User Info Endpoint:</strong></td>
					<td><input class="mo_table_textbox" <?php 
    if (!(!isset($X6->type) || $X6->type == "\157\x61\x75\164\x68")) {
        goto Nv;
    }
    echo "\162\145\x71\165\151\162\145\x64";
    Nv:
    ?>
 type="text" id="mo_oauth_resourceownerdetailsurl" name="mo_oauth_resourceownerdetailsurl" value="<?php 
    if (!isset($X6->userinfo)) {
        goto dYh;
    }
    echo $X6->userinfo;
    dYh:
    ?>
"></td>
				</tr>
			<?php 
    zlh:
    ?>
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
    goto Mpy;
    ZzQ:
    mo_oauth_client_show_default_apps();
    Mpy:
}
