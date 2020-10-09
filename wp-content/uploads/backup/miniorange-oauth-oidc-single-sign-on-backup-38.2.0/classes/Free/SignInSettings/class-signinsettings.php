<?php


namespace MoOauthClient\Free;

use MoOauthClient\Free\SignInSettingsInterface;
class SignInSettings implements SignInSettingsInterface
{
    public function render_sign_in_options()
    {
        global $Sk;
        ?>
		<div id="wid-shortcode" class="mo_table_layout">
			<h2>Sign in options</h2>
			<h4>Option 1: Use a Widget</h4>
			<ol>
				<li>Go to Appearances > Widgets.</li>
				<li>Select <strong>"miniOrange OAuth"</strong>. Drag and drop to your favourite location and save.</li>
			</ol>

			<h4>Option 2: Use a Shortcode <?php 
        echo !$Sk->check_versi(1) ? "\74\163\x6d\141\x6c\x6c\x20\143\154\141\x73\x73\75\42\x6d\x6f\137\x70\x72\x65\155\x69\165\x6d\x5f\146\x65\x61\x74\165\x72\x65\42\x3e\x5b\123\124\x41\116\x44\101\x52\104\x5d\x3c\x2f\x73\155\141\154\x6c\76" : '';
        ?>
</h4>
			<ul>
				<li>Place shortcode <strong>[mo_oauth_login]</strong> in WordPress pages or posts.</li>
			</ul>
		</div>
		<?php 
    }
    public function render_advanced_settings()
    {
        global $Sk;
        $jc = $Sk->get_plugin_config();
        ?>
		<form id="role_mapping_form" name="f" method="post" action="">
			<?php 
        wp_nonce_field("\155\x6f\137\x6f\x61\x75\164\150\137\x63\154\151\x65\x6e\x74\x5f\x73\x69\147\156\x5f\x69\156\137\163\x65\x74\164\x69\156\147\x73", "\x6d\157\137\163\x69\147\x6e\x69\156\x73\145\x74\164\x69\156\147\163\137\x6e\157\156\143\x65");
        ?>
			<input type="hidden" name="option" value="mo_oauth_client_advanced_settings">
			<input <?php 
        echo !$Sk->check_versi(2) ? "\x64\x69\163\x61\142\x6c\x65\144" : "\x6e\141\x6d\145\75\42\x72\145\163\x74\x72\151\x63\164\x5f\164\x6f\x5f\x6c\x6f\x67\x67\145\x64\x5f\x69\156\x5f\x75\163\x65\162\x73\x22\x20\x76\x61\154\x75\x65\75\42\x31\x22\40" . intval(checked($jc->get_config("\162\x65\x73\x74\x72\151\x63\164\137\x74\157\137\x6c\x6f\x67\x67\145\144\137\x69\156\137\x75\163\145\x72\163")) === 1) . "\40";
        ?>
 type="checkbox"><strong> Restrict site to logged in users</strong> ( Users will be auto redirected to OAuth login if not logged in ) <?php 
        echo !$Sk->check_versi(2) ? "\x3c\163\155\x61\154\x6c\40\x73\x74\x79\x6c\x65\75\x22\x63\x6f\154\157\162\x3a\162\145\144\42\x3e\133\120\122\x45\x4d\x49\125\x4d\135\74\x2f\x73\x6d\x61\x6c\154\x3e" : '';
        ?>
			<?php 
        if (!($jc->get_config("\162\x65\163\164\x72\x69\143\x74\x5f\164\x6f\x5f\x6c\x6f\147\x67\145\x64\137\x69\x6e\137\165\x73\x65\162\163") && $Sk->check_versi(2))) {
            goto fk;
        }
        echo "\74\x70\x20\163\x74\171\x6c\145\75\x63\x6f\x6c\x6f\162\72\x72\145\144\76\127\141\x72\x6e\x69\156\x67\x3a\x20\x54\150\x69\163\40\x77\151\154\154\40\144\151\163\x61\x62\x6c\145\40\127\157\x72\x64\x50\x72\145\163\x73\40\154\157\147\x69\156\x73\56\x20\131\x6f\165\x20\143\x61\x6e\x20\x75\x73\x65\40\x62\141\x63\153\x64\x6f\157\162\x20\165\162\x6c\x20\146\157\x72\40\167\x6f\162\144\160\162\x65\163\x73\x20\x6c\157\x67\x69\x6e\40\x3c\x62\x72\76\74\x73\x74\162\x6f\156\147\x3e" . site_url() . "\57\167\160\x2d\154\x6f\x67\151\x6e\56\x70\x68\160\x3f\157\141\x75\x74\x68\x6c\157\147\151\x6e\75\146\x61\154\x73\145\74\57\x73\x74\x72\157\x6e\147\x3e\x3c\57\160\76";
        $Ee = $jc->get_config("\x61\x75\164\x6f\x5f\x72\x65\144\151\x72\145\143\164\x5f\x65\170\143\154\x75\x64\145\x5f\x75\x72\x6c\x73");
        echo "\x3c\x73\164\x72\x6f\x6e\147\76\125\122\114\163\x20\x74\x6f\40\x65\x78\x63\154\165\x64\145\40\146\162\157\155\x20\141\165\164\x6f\40\162\145\144\x69\x72\x65\143\164\x20\72\x20\x3c\57\163\x74\x72\x6f\x6e\x67\76\x20\50\x45\156\x74\145\x72\40\x55\122\114\x27\163\40\164\157\40\x65\170\x63\x6c\x75\x64\x65\40\145\x61\143\x68\40\x6f\x6e\x20\x6e\145\x77\40\x6c\151\x6e\145\x29\74\x62\x72\x3e\74\x74\x65\170\164\141\162\x65\x61\x20\x72\157\167\163\x3d\x22\x31\x30\42\x20\156\141\x6d\x65\x3d\42\141\x75\x74\x6f\x5f\x72\145\144\151\162\145\143\x74\137\x65\170\x63\x6c\x75\x64\145\137\165\x72\x6c\x73\x22\40\x70\154\141\143\145\150\x6f\x6c\144\145\x72\75\x22\x45\156\x74\145\162\40\125\x52\114\47\x73\x20\x74\x6f\x20\145\x78\x63\x6c\165\144\x65\x20\145\141\143\150\40\157\x6e\40\156\x65\167\40\x6c\x69\156\145\42\x20\x73\164\x79\154\x65\x3d\42\x77\151\144\x74\x68\72\x20\70\x30\45\x3b\x20\x6c\x69\x6e\145\x2d\150\145\151\147\150\164\72\40\x31\70\160\x78\x3b\40\146\157\156\x74\x2d\x73\151\x7a\145\x3a\x20\x31\63\160\x78\x3b\x22\76" . $Ee . "\74\57\164\145\x78\164\x61\162\x65\x61\76\x3c\142\162\76\74\x62\x72\76";
        fk:
        ?>
					<p><input <?php 
        echo !$Sk->check_versi(1) ? "\144\x69\163\x61\142\x6c\x65\144" : "\x6e\x61\155\x65\x3d\x22\160\157\x70\165\160\x5f\x6c\x6f\147\x69\x6e\42\x20\x76\x61\154\x75\x65\75\x22\61\42\x20" . checked(intval($jc->get_config("\x70\x6f\160\165\160\x5f\x6c\x6f\x67\151\156")) === 1) . "\x20";
        ?>
 type="checkbox"><strong> Open login window in Popup</strong></p>
					<p><input <?php 
        echo !$Sk->check_versi(1) ? "\x64\x69\163\x61\x62\x6c\145\144" : "\x6e\x61\155\145\75\x22\x61\x75\164\157\137\162\x65\x67\x69\x73\x74\x65\x72\x22\x20\x76\x61\x6c\165\145\x3d\x22\x31\42\40" . intval(checked($jc->get_config("\x61\165\164\157\137\162\x65\x67\x69\x73\164\x65\162")) === 1) . "\40";
        ?>
 type="checkbox"> <strong> Auto register Users </strong>(If unchecked, only existing users will be able to log-in)</p>
					<p><input <?php 
        echo !$Sk->check_versi(2) ? "\144\x69\x73\141\x62\154\145\x64" : "\x6e\141\x6d\x65\75\42\153\145\145\x70\x5f\145\170\151\x73\x74\151\x6e\147\x5f\x75\x73\145\x72\x73\42\40\166\141\154\x75\145\75\42\61\x22\x20" . intval(checked($jc->get_config("\x6b\145\x65\x70\x5f\x65\x78\151\163\x74\x69\156\x67\137\x75\x73\x65\x72\x73")) === 1) . "\x20";
        ?>
 type="checkbox"> <strong> Keep Existing Users </strong>(If checked, existing users' attributes will <strong>NOT</strong> be overwritten when they log-in) <?php 
        echo !$Sk->check_versi(2) ? "\74\x73\x6d\x61\x6c\x6c\x20\163\164\x79\x6c\145\x3d\x22\143\x6f\154\157\162\72\x72\x65\144\x22\x3e\x5b\x50\122\105\115\x49\125\x4d\135\x3c\x2f\x73\x6d\141\x6c\154\76" : '';
        ?>
</p>
					<p><input <?php 
        echo !$Sk->check_versi(2) ? "\144\151\163\141\x62\x6c\145\x64" : "\x6e\x61\x6d\x65\x3d\x22\x6b\145\145\x70\x5f\145\x78\151\163\164\x69\x6e\147\137\145\x6d\141\x69\x6c\x5f\x61\164\164\162\42\x20\166\141\154\x75\x65\75\x22\x31\42\40" . intval(checked($jc->get_config("\x6b\145\x65\x70\x5f\145\x78\x69\x73\x74\151\156\x67\137\145\155\x61\x69\154\137\141\164\x74\x72")) === 1) . "\x20";
        ?>
 type="checkbox"> <strong> Keep Existing Email Attribute </strong>(If checked, existing users' only email attribute will <strong>NOT</strong> be overwritten when they log-in) <?php 
        echo !$Sk->check_versi(2) ? "\74\163\x6d\x61\x6c\x6c\40\163\164\171\154\x65\x3d\42\143\x6f\x6c\x6f\162\72\x72\x65\x64\42\x3e\133\x50\x52\105\115\111\125\x4d\x5d\74\57\163\155\141\x6c\154\76" : '';
        ?>
</p>
					<p><input <?php 
        echo !$Sk->check_versi(1) ? "\144\x69\x73\x61\x62\154\145\x64" : "\x6e\x61\x6d\x65\75\42\143\157\156\x66\x69\162\155\137\154\157\x67\x6f\165\x74\42\x20\x76\141\x6c\x75\145\x3d\x22\61\x22\40" . intval(checked($jc->get_config("\143\157\156\146\151\x72\155\137\x6c\157\147\x6f\x75\x74")) === 1) . "\x20";
        ?>
 type="checkbox"> <strong> Confirm when logging out </strong>(If checked, users will be <strong>ASKED</strong> to confirm if they want to log-out, when they click the widget/shortcode logout button)</p>
					<p><input <?php 
        echo !$Sk->check_versi(3) ? "\x64\151\x73\x61\142\154\145\x64" : '';
        ?>
 type="checkbox"
					<?php 
        if (!$Sk->check_versi(3)) {
            goto Yz;
        }
        echo boolval($jc->get_config("\x61\143\164\151\166\x61\164\145\137\x75\x73\145\x72\137\x61\156\141\154\171\x74\151\143\x73")) ? "\143\x68\145\x63\153\x65\144" : '';
        echo "\40\x6e\141\x6d\145\75\42\x6d\x6f\x5f\x61\x63\x74\151\x76\141\x74\145\x5f\x75\163\145\162\x5f\x61\156\141\154\x79\x74\x69\x63\163\42\40";
        Yz:
        ?>
					><strong> Enable User Analytics </strong><?php 
        echo !$Sk->check_versi(3) ? "\74\163\155\x61\154\154\x20\163\164\171\x6c\x65\75\42\143\x6f\x6c\x6f\162\x3a\162\145\144\x22\76\x5b\105\x4e\x54\x45\x52\x50\x52\111\x53\105\x5d\74\57\x73\155\x61\154\154\x3e" : '';
        ?>
</p>
					<p><input <?php 
        echo !$Sk->check_versi(2) ? "\144\x69\163\x61\x62\x6c\x65\144" : "\156\141\155\x65\x3d\42\141\x6c\x6c\x6f\167\x5f\162\x65\x73\x74\x72\151\x63\164\145\144\137\144\x6f\x6d\141\x69\156\163\42\40\166\x61\154\x75\145\x3d\x22\x31\42\x20" . intval(checked($jc->get_config("\141\x6c\154\157\167\137\x72\145\163\x74\162\x69\143\x74\x65\144\x5f\x64\x6f\155\x61\x69\x6e\163")) === 1) . "\40";
        ?>
 type="checkbox"> <strong> Allow Restricted Domains </strong>(By default, all domains in <strong>Restricted Domains</strong> field will be restricted. This option will invert this feature by allowing ONLY these domains) <?php 
        echo !$Sk->check_versi(2) ? "\74\x73\155\x61\154\154\x20\163\164\171\x6c\145\x3d\x22\143\157\x6c\157\162\72\x72\145\x64\42\76\x5b\120\122\x45\x4d\x49\x55\x4d\x5d\x3c\57\163\x6d\141\x6c\154\76" : '';
        ?>
</p>
					<table class="mo_oauth_client_mapping_table" style="width:90%">
						<tbody>
							<tr>
								<td><span style="font-size:13px;font-weight:bold;">Restricted Domains </span><?php 
        echo !$Sk->check_versi(2) ? "\74\x73\155\x61\154\154\x20\163\164\x79\x6c\x65\x3d\42\x63\157\154\157\x72\72\162\x65\x64\42\x3e\x5b\x50\x52\x45\115\111\125\x4d\x5d\74\57\x73\x6d\141\154\x6c\x3e" : '';
        ?>
<br>(Comma separated domains ex. domain1.com,domain2.com etc)
								</td>
								<td><input <?php 
        echo !$Sk->check_versi(2) ? "\144\151\163\141\x62\x6c\x65\144" : "\x20\156\141\x6d\x65\x3d\42\x72\x65\x73\x74\x72\151\x63\164\x65\144\137\x64\x6f\155\141\x69\156\x73\42\x20\166\141\154\165\145\75\42" . $jc->get_config("\162\x65\163\164\162\x69\143\164\145\144\137\x64\157\x6d\x61\151\156\x73") . "\42\x20";
        ?>
 type="text"placeholder="domain1.com,domain2.com" style="width:100%;" ></td>
							</tr>
							<tr>
								<td><span style="font-size:13px;font-weight:bold;">Custom redirect URL after login </span><br>(Keep blank in case you want users to redirect to page from where SSO originated)
								</td>
								<td><input <?php 
        echo !$Sk->check_versi(1) ? "\144\151\163\141\x62\x6c\x65\x64" : "\x20\156\141\x6d\x65\x3d\42\143\165\163\164\x6f\x6d\x5f\x61\146\x74\145\x72\x5f\154\x6f\147\x69\x6e\137\165\x72\x6c\x22\40\166\x61\x6c\165\145\75\42" . $jc->get_config("\x61\146\164\x65\162\137\154\x6f\147\151\x6e\x5f\x75\162\x6c") . "\42\x20";
        ?>
 type="url" pattern="https?://.+" title="Include https://" placeholder="https://" style="width:100%;"></td>
							</tr>
							<tr>
								<td><span style="font-size:13px;font-weight:bold;">Custom redirect URL after logout </span>
								</td>
								<td><input <?php 
        echo !$Sk->check_versi(1) ? "\144\151\x73\141\142\x6c\145\144" : "\x20\x6e\x61\x6d\x65\x3d\42\x63\165\163\164\x6f\x6d\137\x61\146\x74\145\x72\137\x6c\x6f\x67\157\x75\x74\x5f\x75\x72\154\x22\x20\x76\x61\x6c\x75\x65\x3d\x22" . $jc->get_config("\141\146\164\x65\x72\x5f\x6c\157\x67\x6f\165\164\137\x75\162\154") . "\42\40";
        ?>
 type="url" pattern="https?://.+" title="Include https://" placeholder="https://" style="width:100%;"></td>
							</tr>
							<tr>
								<td><span style="font-size:13px;font-weight:bold;">Dynamic Callback URL </span><?php 
        echo !$Sk->check_versi(3) ? "\74\x73\x6d\x61\x6c\154\x20\163\x74\x79\154\145\x3d\42\x63\157\154\x6f\x72\x3a\x72\x65\144\42\x3e\x5b\x45\116\124\105\x52\x50\x52\x49\x53\x45\x5d\74\x2f\x73\x6d\x61\x6c\x6c\76" : '';
        ?>
								</td>
								<td><input <?php 
        echo !$Sk->check_versi(3) ? "\x64\x69\163\x61\142\154\145\144" : "\x20\156\141\x6d\x65\75\x22\144\171\156\x61\x6d\151\143\x5f\x63\141\x6c\154\142\x61\x63\x6b\137\165\162\154\x22\40\166\141\x6c\165\145\75\x22" . $jc->get_config("\x64\x79\156\141\x6d\151\143\x5f\x63\x61\154\154\x62\141\x63\153\137\x75\162\154") . "\42\40";
        ?>
 type="url" pattern="https?://.+" title="Include https://"  placeholder="Callback / Redirect URI" style="width:100%;"></td>
							</tr>
							<tr></tr>
							<tr>
								<td><input <?php 
        echo !$Sk->check_versi(3) ? "\x64\151\163\x61\x62\154\x65\144" : '';
        ?>
 type="checkbox"
								<?php 
        if (!$Sk->check_versi(3)) {
            goto WY;
        }
        echo boolval($jc->get_config("\141\143\x74\x69\x76\141\x74\x65\x5f\163\151\156\x67\154\145\x5f\154\157\147\x69\x6e\137\x66\154\x6f\167")) ? "\143\x68\x65\x63\153\x65\144" : '';
        echo "\x20\x6e\x61\x6d\145\75\42\155\157\x5f\141\x63\x74\151\166\141\x74\x65\137\163\151\156\147\x6c\145\x5f\x6c\x6f\x67\x69\x6e\137\x66\x6c\157\167\42\40";
        WY:
        ?>
								><span style="font-size:13px;font-weight:bold;"> Enable Single Login Flow </span><?php 
        echo !$Sk->check_versi(3) ? "\74\163\155\141\x6c\154\40\x73\x74\171\154\145\x3d\x22\x63\157\x6c\x6f\x72\72\162\145\144\x22\76\x5b\105\116\x54\x45\122\x50\x52\111\123\105\135\74\x2f\x73\x6d\141\154\154\x3e" : '';
        ?>
</td>
							</tr>
							<?php 
        if (!($Sk->check_versi(3) && boolval($jc->get_config("\141\143\164\151\x76\x61\x74\x65\x5f\x73\151\156\147\154\x65\137\154\x6f\147\x69\156\x5f\146\x6c\x6f\x77")))) {
            goto Ae;
        }
        ?>
	
									<tr>
										<td><font style="font-size:13px;font-weight:bold;">Display Name for Common Login Button </font></td>
										<td><input type="text" name="common_login_button_display_name"  placeholder="Login with AppName" style="width:100%;" value="<?php 
        echo $jc->get_config("\x63\157\x6d\155\157\156\x5f\x6c\157\x67\151\x6e\x5f\142\x75\x74\164\157\156\x5f\x64\151\163\160\154\141\x79\x5f\x6e\x61\x6d\x65");
        ?>
"></td>
									</tr>
									<?php 
        Ae:
        ?>
							<tr><td>&nbsp;</td></tr>
							<tr>
								<td><input <?php 
        echo !$Sk->check_versi(1) ? "\x64\151\x73\141\x62\154\145\144" : '';
        ?>
 type="submit" class="button button-primary button-large" value="Save Settings"></td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		<?php 
    }
    public function render_free_ui()
    {
        global $Sk;
        self::render_sign_in_options();
        echo "\x3c\x64\x69\x76\40\x69\144\x3d\x22\x61\x64\166\141\x6e\x63\145\x64\137\163\x65\x74\164\151\156\x67\x73\x5f\163\x73\x6f\42\x20\143\154\141\x73\163\75\x22\155\157\137\x74\141\x62\154\x65\137\x6c\141\x79\x6f\x75\164\x20\42\x3e\74\150\63\x3e\101\x64\x76\141\x6e\143\x65\x64\40\123\145\164\164\151\x6e\147\163\x3c\x2f\150\x33\x3e";
        if (!($Sk->get_versi() === 0)) {
            goto Cx;
        }
        ?>
		<small class="mo_premium_feature"> [PREMIUM]</small>
		<!--br><br-->
		<form id="role_mapping_form" name="f" method="post" action="">
		<h4>Select Grant Type</h4>
		<input checked disabled type="checkbox"> Authorization Code Grant&nbsp;&nbsp;
		<input disabled type="checkbox"> Password Grant&nbsp;&nbsp;
		<input disabled type="checkbox"> Client Credentials Grant&nbsp;&nbsp;
		<input disabled type="checkbox"> Implicit Grant&nbsp;&nbsp;
		<input disabled type="checkbox"> Refresh Token Grant
		<br><br><hr><br>
		<?php 
        Cx:
        self::render_advanced_settings();
    }
}
