<?php


function mo_oauth_sign_in_settings()
{
    ?>
	<div class="mo_table_layout">
		<h2>Sign in options</h2>

		<h4>Option 1: Use a Widget</h4>
		<ol>
			<li>Go to Appearances > Widgets.</li>
			<li>Select <b>"miniOrange OAuth"</b>. Drag and drop to your favourite location and save.</li>
		</ol>

		<h4>Option 2: Use a Shortcode</h4>
		<ul>
			<li>Place shortcode <b>[mo_oauth_login]</b> in wordpress pages or posts.</li>
		</ul>
	</div>
	</div>
	<div class="mo_table_layout" id="advanced">

	<h3>Advanced Settings</h3>

	<form id="role_mapping_form" name="f" method="post" action="">
		<input type="hidden" name="option" value="mo_oauth_client_advanced_settings">
		
		<input type="checkbox" name="restrict_to_logged_in_users" value="1" <?php 
    checked(mo_oauth_client_get_option("\x6d\157\137\x6f\141\165\164\x68\137\143\154\151\x65\x6e\164\x5f\162\x65\x73\164\162\151\x63\x74\137\x74\157\137\154\x6f\147\x67\x65\144\x5f\x69\156\x5f\x75\x73\145\x72\163") == 1);
    ?>
 ><strong> Restrict site to logged in users</strong> ( Users will be auto redirected to OAuth login if not logged in )
		

	<?php 
    if (!mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\164\150\137\x63\154\x69\145\x6e\164\x5f\162\145\x73\164\162\x69\x63\x74\137\x74\x6f\x5f\154\157\147\x67\145\144\137\x69\x6e\137\x75\x73\145\162\163")) {
        goto hN;
    }
    echo "\74\160\40\163\x74\x79\x6c\145\75\x63\x6f\154\157\162\72\x72\145\x64\x3e\127\141\162\x6e\x69\x6e\x67\72\x20\124\x68\151\163\x20\167\151\x6c\x6c\x20\144\x69\163\x61\142\x6c\145\40\167\157\x72\x64\x70\162\x65\163\163\40\154\157\x67\151\x6e\x73\x2e\40\x59\x6f\165\40\x63\x61\x6e\x20\x75\x73\x65\40\x62\141\143\x6b\x64\x6f\x6f\x72\x20\x75\x72\x6c\40\146\x6f\x72\40\x77\x6f\x72\x64\160\162\145\163\163\40\154\157\147\151\156\x20\x3c\x62\162\76\74\x62\76" . site_url() . "\57\x77\x70\x2d\x6c\157\147\x69\x6e\56\160\150\160\77\157\x61\165\164\x68\154\x6f\147\151\x6e\x3d\x66\141\154\x73\x65\x3c\x2f\142\x3e\74\57\x70\x3e";
    $zP = mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\x75\x74\x68\137\x63\154\x69\145\x6e\164\x5f\141\x75\x74\x6f\137\x72\145\144\x69\162\x65\143\x74\x5f\x65\170\x63\x6c\165\x64\145\x5f\x75\162\x6c\x73");
    echo "\74\x62\x3e\125\122\x4c\x73\x20\x74\157\x20\145\x78\x63\154\165\x64\145\40\146\162\157\x6d\40\x61\165\164\x6f\x20\162\145\x64\x69\162\145\143\164\x20\72\40\x3c\x2f\x62\x3e\40\50\x45\x6e\164\145\162\40\x55\122\x4c\47\x73\x20\x74\x6f\40\x65\170\x63\154\165\x64\x65\40\x65\x61\x63\150\40\x6f\x6e\40\x6e\145\x77\40\154\x69\156\145\x29\x3c\x62\162\x3e\74\x74\145\170\164\141\x72\x65\x61\x20\x72\157\x77\163\x3d\42\61\x30\x22\40\x6e\141\155\x65\x3d\x22\x61\165\164\157\137\x72\145\144\x69\162\x65\x63\x74\137\x65\170\143\x6c\x75\144\145\137\165\x72\x6c\163\42\40\160\154\x61\143\145\x68\x6f\x6c\x64\145\162\x3d\x22\105\156\164\145\x72\40\125\x52\114\47\163\40\164\x6f\40\x65\170\x63\x6c\165\x64\145\40\145\141\143\x68\x20\x6f\x6e\40\156\x65\x77\40\154\151\x6e\x65\x22\40\163\x74\171\x6c\145\x3d\x22\167\x69\x64\x74\x68\72\x20\x38\x30\45\73\40\154\x69\x6e\145\55\x68\x65\x69\x67\150\164\72\40\x31\x38\160\x78\x3b\40\x66\157\x6e\x74\55\163\x69\172\145\72\x20\x31\x33\x70\x78\73\x22\x3e" . $zP . "\x3c\x2f\x74\x65\170\x74\x61\x72\x65\x61\76\74\142\162\x3e\74\142\x72\76";
    hN:
    ?>

		<p><input type="checkbox" name="popup_login" value="1" <?php 
    checked(mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\x74\150\x5f\x63\154\x69\x65\156\x74\x5f\160\157\160\x75\x70\137\154\157\x67\151\156") == 1);
    ?>
 ><strong> Open login window in Popup</strong></p>
		
		<p><input type="checkbox" name="auto_register" id="auto_register" value="1" <?php 
    checked(mo_oauth_client_get_option("\155\157\x5f\157\x61\x75\x74\x68\137\143\154\151\145\156\x74\x5f\141\x75\164\x6f\137\x72\x65\x67\151\x73\x74\145\162") == 1);
    ?>
 > <strong> Auto register Users </strong>(If unchecked, only existing users will be able to log-in)</p>

		<p><input type="checkbox" name="mo_activate_user_analytics" <?php 
    if (!mo_oauth_client_get_option("\155\157\137\141\143\164\151\166\141\x74\145\137\x75\x73\145\x72\x5f\141\156\141\x6c\x79\x74\151\143\163")) {
        goto Cc;
    }
    echo "\143\150\145\143\x6b\x65\x64";
    Cc:
    ?>
 onchange="document.getElementById('mo_activate_user_analytics');"><b> Enable User Analytics </b></p>

		<table class="mo_oauth_client_mapping_table" id="mo_oauth_client_role_mapping_table" style="width:90%">
			
			<tr>
				<td><font style="font-size:13px;font-weight:bold;">Restricted Domains </font><br>(Comma separated domains ex. domain1.com,domain2.com etc)
				</td>
				<td><input type="text" name="restricted_domains"  placeholder="domain1.com,domain2.com" style="width:100%;" value="<?php 
    echo mo_oauth_client_get_option("\155\x6f\137\x6f\x61\165\x74\150\x5f\x63\154\151\145\x6e\x74\x5f\x72\x65\x73\x74\x72\x69\x63\164\145\144\137\x64\x6f\x6d\141\x69\x6e\x73");
    ?>
"></td>
			</tr><tr>
				<td><font style="font-size:13px;font-weight:bold;">Custom redirect URL after login </font><br>(Keep blank in case you want users to redirect to page from where SSO originated)
				</td>
				<td><input type="text" name="custom_after_login_url"  placeholder="https://" style="width:100%;" value="<?php 
    echo mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\164\x68\x5f\143\x6c\x69\x65\x6e\164\137\141\x66\164\145\162\137\x6c\157\x67\x69\x6e\x5f\x75\162\x6c");
    ?>
"></td>
			</tr>
			<tr>
				<td><font style="font-size:13px;font-weight:bold;">Custom redirect URL after logout </font>
				</td>
				<td><input type="text" name="custom_after_logout_url"  placeholder="https://" style="width:100%;" value="<?php 
    echo mo_oauth_client_get_option("\x6d\x6f\137\157\x61\x75\x74\x68\137\x63\154\x69\145\156\x74\x5f\x61\x66\x74\x65\162\137\x6c\157\147\157\165\x74\x5f\165\x72\154");
    ?>
"></td>
			</tr>
		
			<tr>
				<td><font style="font-size:13px;font-weight:bold;">Dynamic Callback URL </font>
				</td>
				<td><input type="text" name="dynamic_callback_url"  placeholder="Callback / Redirect URI" style="width:100%;" value="<?php 
    echo mo_oauth_client_get_option("\155\157\137\157\141\x75\164\150\x5f\x64\x79\156\x61\x6d\x69\143\x5f\143\x61\154\x6c\x62\141\x63\x6b\137\x75\162\x6c");
    ?>
"></td>
			</tr>

			<tr></tr><tr>
				<td><input type="checkbox" name="mo_activate_single_login_flow" <?php 
    if (!mo_oauth_client_get_option("\x6d\x6f\137\141\143\x74\151\166\141\x74\x65\x5f\163\x69\156\147\154\145\x5f\x6c\157\x67\151\x6e\x5f\x66\154\157\167")) {
        goto dM;
    }
    echo "\x63\x68\x65\x63\x6b\145\x64";
    dM:
    ?>
 onchange="document.getElementById('mo_activate_single_login_flow');"><font style="font-size:13px;font-weight:bold;"> Enable Single Login Flow </font></td>
			</tr>

			<?php 
    if (!mo_oauth_client_get_option("\155\157\137\141\143\x74\151\166\141\164\145\x5f\x73\x69\x6e\x67\x6c\x65\137\x6c\x6f\x67\x69\x6e\x5f\146\x6c\x6f\x77")) {
        goto gY;
    }
    ?>
	
				<tr>
					<td><font style="font-size:13px;font-weight:bold;">Display Name for Common Login Button </font></td>
					<td><input type="text" name="common_login_button_display_name"  placeholder="Login with AppName" style="width:100%;" value="<?php 
    echo mo_oauth_client_get_option("\x6d\x6f\137\x6f\141\x75\x74\150\x5f\143\x6c\x69\145\x6e\164\x5f\143\x6f\x6d\155\157\x6e\137\x6c\x6f\x67\151\156\137\x62\165\164\164\x6f\x6e\137\144\x69\x73\x70\154\x61\171\x5f\156\x61\x6d\x65");
    ?>
"></td>
				</tr>
				<?php 
    gY:
    ?>

			<tr><td>&nbsp;</td></tr>
			
			<tr>
				<td><input type="submit" class="button button-primary button-large" value="Save Settings" /></td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
