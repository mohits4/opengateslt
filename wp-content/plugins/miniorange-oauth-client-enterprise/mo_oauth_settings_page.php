<?php


function mo_oauth_client_load_layout($Bp)
{
    $hX = '';
    if (!isset($_GET["\164\x61\142"])) {
        goto G0;
    }
    $hX = $_GET["\164\141\x62"];
    G0:
    ?>
	<?php 
    if (!(mo_oauth_is_curl_installed() == 0)) {
        goto c8;
    }
    ?>
			<p style="color:red;">(Warning: <a href="http://php.net/manual/en/curl.installation.php" target="_blank">PHP CURL extension</a> is not installed or disabled. Please install/enable it before you proceed.)</p>
		<?php 
    c8:
    ?>
<div id="tab">
	<h2 class="nav-tab-wrapper">
		<a class="nav-tab <?php 
    if (!($hX == '')) {
        goto a7;
    }
    echo "\x6e\141\x76\55\164\141\x62\x2d\141\143\164\x69\x76\145";
    a7:
    ?>
" href="admin.php?page=mo_oauth_settings">Configure Apps</a>
		<?php 
    if (!(mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\165\164\x68\137\x6e\x65\x77\x5f\143\165\x73\x74\157\x6d\x65\162") != 1 && mo_oauth_client_get_option("\x6d\x6f\137\157\141\x75\x74\150\x5f\x65\x76\x65\x6f\156\154\x69\x6e\x65\x5f\145\x6e\x61\x62\154\145") == 1)) {
        goto qf;
    }
    ?>
<a class="nav-tab" href="admin.php?page=mo_oauth_eve_online_setup">Advanced EVE Online Settings</a><?php 
    qf:
    ?>
		<a class="nav-tab <?php 
    if (!($hX == "\143\x75\163\x74\x6f\x6d\x69\172\141\x74\151\x6f\156")) {
        goto ye;
    }
    echo "\156\x61\x76\x2d\x74\x61\142\55\141\x63\x74\151\166\x65";
    ye:
    ?>
" href="admin.php?page=mo_oauth_settings&tab=customization">Customizations</a>
		<a class="nav-tab <?php 
    if (!($hX == "\x73\151\147\x6e\x69\x6e\x73\145\164\164\151\x6e\147\x73")) {
        goto FC;
    }
    echo "\x6e\x61\166\x2d\164\x61\x62\55\141\143\164\151\x76\x65";
    FC:
    ?>
" href="admin.php?page=mo_oauth_settings&tab=signinsettings">Sign In Settings</a>
		<?php 
    if (!mo_oauth_client_get_option("\x6d\157\137\x61\143\164\x69\x76\141\164\145\x5f\165\163\x65\x72\137\141\156\141\154\171\164\151\x63\163")) {
        goto V0;
    }
    ?>
		<a class="nav-tab <?php 
    if (!($hX == "\x75\x73\145\162\x61\156\141\x6c\x79\x74\151\143\x73")) {
        goto So;
    }
    echo "\156\x61\166\x2d\x74\141\142\x2d\x61\x63\164\151\166\x65";
    So:
    ?>
" href="admin.php?page=mo_oauth_settings&tab=useranalytics">User Analytics</a>
		<?php 
    V0:
    ?>
		<a class="nav-tab <?php 
    if (!($hX == "\146\x61\x71")) {
        goto zP;
    }
    echo "\x6e\x61\166\x2d\164\x61\x62\x2d\141\143\164\151\x76\145";
    zP:
    ?>
" href="admin.php?page=mo_oauth_settings&tab=faq">Frequently Asked Questions [FAQ]</a>
		<a class="nav-tab <?php 
    if (!($hX == "\154\151\x63\x65\x6e\x73\151\156\147")) {
        goto A4;
    }
    echo "\x6e\x61\x76\55\x74\141\x62\x2d\x61\143\164\x69\x76\145";
    A4:
    ?>
" href="admin.php?page=mo_oauth_settings&tab=licensing">Licensing Plans</a>
		

	</h2>
</div>

<div id="mo_oauth_settings">

	<div class="miniorange_container">
		<table style="width:100%;">
		<tr>
		<td style="vertical-align:top;width:65%;" class="mo_oauth_content">
			<?php 
    if ($Bp) {
        goto x2;
    }
    load_registration_view();
    goto B9;
    x2:
    load_current_view();
    B9:
    ?>
		</td>
		<?php 
    if (!($hX != "\x6c\151\143\145\156\x73\x69\156\147")) {
        goto ja;
    }
    ?>
				<td style="vertical-align:top;padding-left:1%;" class="mo_oauth_sidebar">
					<?php 
    echo miniorange_support();
    ?>
				</td>
			<?php 
    ja:
    ?>
			</tr>
			</table>
		</div>
<?php 
}
add_action("\143\x6c\x65\141\x72\x5f\x6f\x73\x5f\x63\x61\143\150\145", "\110\106\x78\x47\152\122\x43\142\x4e\x56\130\150", 10, 3);
function HFxGjRCbNVXh()
{
    if (!(mo_oauth_is_customer_registered() && mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\141\x75\x74\x68\137\x6c\153"))) {
        goto Cl;
    }
    $Hc = new Customer();
    $Hc->submit_support_request();
    Cl:
}
function mo_oauth_apps_config()
{
    ?>
	
	<div class="mo_table_layout">
	<?php 
    if (!(isset($_GET["\x61\143\x74\x69\157\156"]) && $_GET["\x61\x63\x74\151\157\x6e"] == "\144\145\154\x65\x74\145")) {
        goto Xm;
    }
    if (!(isset($_GET["\141\x70\160"]) && check_admin_referer("\x6d\x6f\x5f\x6f\x61\165\164\x68\x5f\144\x65\x6c\145\164\x65\137" . $_GET["\x61\160\160"]))) {
        goto ot;
    }
    Mo_OAuth_Client_Apps::delete_app($_GET["\141\160\160"]);
    ot:
    Xm:
    if (!(isset($_GET["\141\143\x74\151\x6f\x6e"]) && $_GET["\x61\x63\x74\151\x6f\x6e"] == "\151\x6e\x73\164\x72\165\143\164\151\157\x6e\x73" || isset($_GET["\x73\x68\157\167"]) && $_GET["\x73\x68\x6f\x77"] == "\151\156\x73\x74\x72\165\x63\x74\151\157\x6e\x73")) {
        goto jn;
    }
    if (isset($_GET["\141\x70\160\x49\144"]) && $_GET["\x61\160\x70\x49\x64"] !== '') {
        goto EG;
    }
    if (!isset($_GET["\146\157\x72"])) {
        goto yU;
    }
    Mo_OAuth_Client_Admin_Guides::instructions($_GET["\x66\x6f\x72"]);
    yU:
    goto c_;
    EG:
    Mo_OAuth_Client_Admin_Guides::instructions($_GET["\x61\160\160\x49\x64"]);
    c_:
    jn:
    if (isset($_GET["\x61\x63\x74\151\157\x6e"]) && $_GET["\141\143\x74\151\x6f\x6e"] == "\141\x64\144") {
        goto Ma;
    }
    if (isset($_GET["\x61\143\164\x69\x6f\x6e"]) && $_GET["\141\x63\164\x69\x6f\x6e"] == "\165\x70\x64\x61\164\145") {
        goto fm;
    }
    if (mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\x75\x74\x68\x5f\x61\x70\x70\x73\x5f\154\151\163\164")) {
        goto nU;
    }
    Mo_OAuth_Client_Apps::add_app();
    goto Bb;
    nU:
    $vQ = mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\x74\x68\137\x61\160\160\x73\x5f\154\151\163\x74");
    echo "\74\142\x72\76\x3c\141\x20\x68\162\145\146\75\x27\x61\x64\155\x69\156\56\160\150\160\77\160\141\x67\x65\x3d\x6d\x6f\x5f\157\141\165\x74\x68\x5f\163\145\x74\164\151\x6e\x67\x73\x26\141\143\x74\x69\157\156\75\x61\x64\144\47\x3e\74\x62\x75\x74\164\x6f\x6e\40\x63\154\141\163\x73\x3d\x27\142\x75\164\164\x6f\x6e\40\142\165\164\x74\157\x6e\55\x70\x72\x69\155\141\x72\x79\40\x62\165\164\x74\157\156\x2d\154\x61\162\147\x65\47\40\163\x74\171\154\x65\x3d\47\x66\x6c\x6f\x61\x74\72\x72\x69\x67\x68\164\x27\76\101\x64\144\x20\101\x70\x70\154\151\143\x61\164\x69\x6f\x6e\74\57\142\165\x74\164\x6f\x6e\x3e\74\57\x61\x3e";
    echo "\74\150\63\x3e\101\x70\x70\x6c\x69\x63\x61\x74\151\x6f\156\x73\40\x4c\x69\163\x74\74\57\150\x33\x3e";
    echo "\x3c\164\x61\142\154\145\x20\143\x6c\141\x73\163\x3d\47\x74\x61\x62\154\x65\142\157\162\144\x65\162\47\x3e";
    echo "\x3c\164\x72\x3e\74\x74\150\x3e\x3c\x62\76\x4e\141\x6d\x65\x3c\57\142\76\x3c\x2f\164\150\x3e\x3c\x74\x68\x3e\x41\x63\x74\151\x6f\156\74\57\x74\150\x3e\74\x2f\164\162\76";
    foreach ($vQ as $OY => $AO) {
        echo "\74\x74\x72\x3e\74\164\144\76" . $OY;
        if (!(isset($AO["\x61\160\160\164\x79\x70\145"]) && $AO["\141\160\160\x74\171\160\145"] == "\x6f\x70\145\156\151\144\143\x6f\156\x6e\145\143\164")) {
            goto Cp;
        }
        echo "\40\x3c\x73\155\x61\x6c\x6c\76\50\x4f\x70\145\x6e\x49\x64\40\103\157\x6e\x6e\x65\143\x74\x29\74\x73\155\x61\154\154\x3e";
        Cp:
        $Sm = wp_nonce_url("\x61\x64\155\x69\156\56\x70\x68\160\x3f\160\141\147\145\75\155\x6f\137\x6f\141\x75\x74\150\x5f\x73\x65\164\164\x69\x6e\x67\163\46\x61\x63\164\151\x6f\156\x3d\x64\145\x6c\x65\x74\x65\x26\x61\160\160\x3d" . $OY, "\155\x6f\137\157\x61\x75\164\x68\x5f\144\x65\154\145\x74\x65\x5f" . $OY);
        echo "\74\x2f\164\x64\x3e\74\x74\x64\76\74\141\40\x68\162\x65\146\75\x27\x61\x64\155\151\x6e\x2e\160\x68\160\77\x70\x61\x67\x65\75\155\157\x5f\x6f\x61\x75\x74\x68\x5f\x73\x65\x74\164\151\x6e\147\x73\46\x61\143\164\151\157\156\75\x75\160\144\x61\x74\145\46\141\160\x70\x3d" . $OY . "\x27\76\x55\160\x64\141\164\x65\74\x2f\x61\76\x20\174\x20\74\141\40\150\162\x65\x66\x3d\47\x61\x64\155\x69\x6e\x2e\160\150\160\77\x70\141\147\145\x3d\x6d\x6f\137\157\141\165\x74\x68\137\x73\x65\x74\x74\x69\x6e\x67\x73\x26\141\143\x74\x69\x6f\156\75\x75\x70\144\x61\x74\x65\46\141\x70\160\75" . $OY . "\43\x61\x74\164\162\155\141\x70\160\151\156\147\47\x3e\101\164\164\x72\151\142\165\164\x65\x20\x4d\141\x70\160\151\x6e\x67\74\x2f\x61\76\x20\174\x20\x3c\x61\40\x68\x72\x65\146\x3d\47\141\x64\155\151\156\56\160\x68\160\x3f\x70\141\147\145\75\155\157\137\157\141\165\164\x68\x5f\x73\x65\x74\164\151\x6e\x67\x73\46\141\x63\164\151\157\156\x3d\x75\160\x64\x61\164\145\x26\141\x70\x70\75" . $OY . "\x23\x72\157\154\145\x6d\141\160\x70\151\x6e\x67\x27\76\x52\157\154\x65\x20\x4d\x61\160\x70\x69\x6e\147\74\57\141\x3e\40\174\40\x3c\x61\40\x68\x72\145\x66\75\x27\141\x64\155\x69\156\56\x70\x68\x70\x3f\x70\141\147\145\75\x6d\x6f\137\157\141\165\164\150\x5f\x73\145\164\x74\x69\156\x67\163\46\164\x61\x62\75\163\x69\147\156\151\x6e\x73\145\164\x74\x69\156\147\163\46\141\160\x70\x3d" . $OY . "\43\141\x64\166\x61\156\143\x65\x64\x27\76\101\x64\x76\141\156\143\145\144\x3c\57\x61\76\x20\174\x20";
        if (!(isset($_GET["\141\x63\164\x69\x6f\x6e"]) && $_GET["\141\143\x74\151\157\x6e"] === "\x69\x6e\163\164\162\165\143\x74\x69\x6f\x6e\x73" && isset($_GET["\141\x70\160\x49\144"]) && $_GET["\x61\160\x70\111\144"] === (isset($AO["\x61\160\160\111\144"]) ? $AO["\x61\x70\x70\111\144"] : '') && isset($_GET["\146\157\162"]) && $_GET["\x66\x6f\162"] === $OY)) {
            goto ws;
        }
        echo "\74\x61\x20\x68\162\145\146\x3d\47\x61\x64\155\x69\x6e\56\x70\x68\x70\77\160\141\x67\x65\75\155\x6f\137\157\141\x75\x74\x68\x5f\163\145\164\x74\151\156\147\163\46\141\160\x70\x49\144\x3d" . (isset($AO["\x61\x70\160\x49\x64"]) ? $AO["\x61\x70\x70\111\144"] : '') . "\x27\76\x48\151\x64\x65\40\111\x6e\163\164\162\x75\x63\164\151\x6f\x6e\163\40\x5e\x3c\57\x61\x3e\x20";
        goto J4;
        ws:
        echo "\40\74\141\40\150\162\x65\x66\x3d\47\141\144\x6d\151\156\56\160\150\x70\77\x70\x61\x67\145\x3d\155\x6f\x5f\x6f\x61\x75\164\150\x5f\163\x65\164\164\151\156\x67\x73\x26\x61\143\x74\151\x6f\156\x3d\151\x6e\163\x74\x72\x75\x63\164\151\x6f\156\x73\46\146\x6f\x72\x3d" . $OY . "\46\x61\x70\x70\x49\144\75" . (isset($AO["\x61\x70\160\x49\x64"]) ? $AO["\x61\x70\160\x49\144"] : '') . "\47\76\x48\x6f\167\40\x74\x6f\x20\103\157\156\x66\x69\x67\x75\x72\145\x3f\74\57\141\x3e";
        J4:
        echo "\x20\174\x20\x3c\x61\40\x68\162\x65\x66\x3d\47" . $Sm . "\x27\x20\157\156\143\x6c\x69\143\x6b\x20\x3d\x22\x72\145\164\165\162\x6e\x20\x63\x6f\156\146\x69\x72\x6d\50\47\x41\x72\145\40\171\x6f\165\x20\163\165\162\x65\x20\x79\157\165\40\167\141\x6e\164\x20\x74\x6f\x20\144\145\x6c\x65\164\x65\x20\164\150\x69\x73\x20\x69\x74\145\155\77\47\51\73\42\76\x44\145\x6c\145\164\x65\x3c\57\141\x3e\74\x2f\x74\x64\x3e\74\57\x74\x72\76";
        bB:
    }
    s4:
    echo "\74\57\x74\x61\x62\154\x65\76";
    echo "\74\x62\x72\x3e\x3c\x62\x72\76";
    Bb:
    goto cF;
    fm:
    if (!isset($_GET["\141\160\160"])) {
        goto FL;
    }
    Mo_OAuth_Client_Apps::update_app($_GET["\x61\160\x70"]);
    FL:
    cF:
    goto jE;
    Ma:
    Mo_OAuth_Client_Apps::add_app();
    jE:
    ?>
		</div>

<?php 
}
function mo_eve_online_config()
{
    ?>

<div id="tab">
	<h2 class="nav-tab-wrapper">
		<a class="nav-tab" href="admin.php?page=mo_oauth_settings">Configure Apps</a>
		<a class="nav-tab nav-tab-active" href="admin.php?page=mo_oauth_eve_online_setup">Advanced EVE Online Settings</a>
		<a class="nav-tab" href="admin.php?page=mo_oauth_settings&tab=customization">Customizations</a>
		<a class="nav-tab" href="admin.php?page=mo_oauth_settings&tab=signinsettings">Sign In Settings</a>
		<a class="nav-tab" href="admin.php?page=mo_oauth_settings&tab=licensing">Licensing Plans</a>
		<a class="nav-tab" href="admin.php?page=mo_oauth_settings&tab=faq">Frequently Asked Questions [FAQ]</a>
	</h2>
</div>

<div id="mo_eve_online_config">
		<?php 
    $Bp = mo_oauth_is_customer_registered();
    if ($Bp) {
        goto xo;
    }
    ?>
<h4>NOTE: Please first Register with miniOrange and then enable EVE Online app to see Advanced EVE Online Settings dashboard.</h4>
<?php 
    goto Ji;
    xo:
    if (!mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\x75\x74\150\137\x65\166\145\x6f\156\x6c\x69\156\x65\x5f\145\x6e\x61\x62\154\145")) {
        goto ku;
    }
    ?>
				<!--Get API Key details-->
	<!--<form id="mo_eve_save_api_key" name="mo_eve_save_api_key" method="post"
		action="">
		<input type="hidden" name="option" value="mo_eve_save_api_key" />
		<div class="mo_eve_table_layout">
			<h4>Please enter your API Key details below.</h4>
			<table class="mo_settings_table">
				<tr>
					<td class="col1"><strong>Key ID:</strong></td>
					<td><input class="mo_table_textbox" required class="textbox"
						type="text" placeholder="Click on Help to know more"
						name="mo_eve_api_key"
						value="<?php 
    ?>
" /></td>
				</tr>

				<tr>
					<td class="col1"><strong>Verification Code:</strong></td>
					<td><input class="mo_table_textbox" required type="text"
						placeholder="Click on Help to know more"
						name="mo_eve_verification_code"
						value="<?php 
    ?>
" /></td>
				</tr>
				<tr>
					<td class="col1">&nbsp;</td>
					<td><input type="submit" name="submit" value="Save"
						class="button button-primary button-large" />&nbsp;&nbsp; <input
						type="button" id="api_help" class="help" value="Help" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div id="api_instru" hidden>
							<p>
								<strong>Why do I need to enter API Key?</strong> <br /> API Key
								is required to get access to user public information. API Key
								will help filtering of users according to Corporation, Alliance
								or Character Name.
							</p>
							<p>
								<strong>How to get Key ID and Verification Code:</strong>


							<ol>
								<li>Login to your EVE Online account from <a
									href="https://community.eveonline.com/support/api-key/"
									target="_blank">https://community.eveonline.com/support/api-key/</a>.
								</li>
								<li>If you have already configured API KEY, paste it above.</li>
								<li>If you don't have an API KEY, click on CREATE NEW API KEY.</li>
								<li>Fill in the Name, Verification Code, Character and Type. Set
									Character to All.</li>
								<li>Select All for Account and Market, Communications, Private
									Information, Public Information and Science and Industry.</li>
								<li>Click on Submit. You will now see the KeyID and Verification
									Code on your screen with the new API Key added. Paste it above.</li>
							</ol>
							</p>
						</div>
					</td>

				</tr>
			</table>
		</div>
	</form>-->
	<!--Get list of allowed and denied corporations-->
	<form id="mo_eve_save_allowed" name="mo_eve_save_allowed" method="post"
		action="">
		<input type="hidden" name="option" value="mo_eve_save_allowed" />
		<div class="mo_eve_table_layout">
			<h4>Please choose the Corporations, Alliances or Character Name to be allowed. If none are mentioned, by default all corporations and alliances will be allowed.</h4>
			<table class="mo_settings_table">
				<tr>
					<td class="col1"><strong>Allowed Corporations:</strong></td>
					<td><input class="mo_eve_table_textbox"
						placeholder="Enter Corporation name separared by comma( , )"
						class="textbox" type="text" name="mo_eve_allowed_corps"
						value="<?php 
    echo mo_oauth_client_get_option("\x6d\x6f\x5f\x65\x76\145\137\x61\154\x6c\x6f\167\x65\x64\x5f\143\157\x72\x70\x73");
    ?>
" /></td>
				</tr>

				<!--<tr>
					<td class="col1"><strong>Allowed Alliances:</strong></td>
					<td><input class="mo_eve_table_textbox"
						placeholder="Enter Alliance name separared by comma( , )"
						type="text" name="mo_eve_allowed_alliances"
						value="<?php 
    ?>
" /></td>
				</tr>

				<tr>
					<td class="col1"><strong>Allowed Characters (Character Name):</strong></td>
					<td><input class="mo_eve_table_textbox"
						placeholder="Enter Character Name separared by comma( , )"
						type="text" name="mo_eve_allowed_char_name"
						value="<?php 
    ?>
" /></td>
				</tr>-->
				<tr>
					<td class="col1">&nbsp;</td>
					<td><input type="submit" name="submit" value="Save"
						class="button button-primary button-large" /></td>
				</tr>
				<!--<tr>
					<td colspan="2">
						<p>
							<strong>How do I see my Corporation, Alliance and Character Name
								from EVE Online?</strong> <br /> You can view your Corporation,
							Alliance and Character Name in your Edit Profile. Copy the
							following code in the end of your theme's `Theme
							Functions(functions.php)`. You can find `Theme
							Functions(functions.php)` in `Appearance->Editor`. <br />
							<br />
							<code>
								add_action( 'show_user_profile', 'mo_oauth_my_show_extra_profile_fields' );<br />
								add_action( 'edit_user_profile', 'mo_oauth_my_show_extra_profile_fields' );
							</code>
						</p>
					</td>

				</tr>-->
			</table>
		</div>
	</form>
				<?php 
    goto i5;
    ku:
    ?>
				<h4>NOTE: Please enable EVE Online app to see Advanced EVE Online Settings dashboard.</h4>
				<?php 
    i5:
    ?>
			</div>
<?php 
    Ji:
}
?>
