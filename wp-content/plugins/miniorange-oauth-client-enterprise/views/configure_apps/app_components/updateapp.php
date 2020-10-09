<?php


function update_app($rd)
{
    $vQ = mo_oauth_client_get_option("\x6d\157\137\157\141\165\x74\150\137\141\160\160\x73\137\154\151\x73\164");
    foreach ($vQ as $OY => $AO) {
        if (!($rd == $OY)) {
            goto rc6;
        }
        $rL = $rd;
        $X6 = $AO;
        goto j_N;
        rc6:
        GdO1:
    }
    j_N:
    if ($X6) {
        goto Wuj;
    }
    return;
    Wuj:
    $dj = false;
    if (!(strpos(strtolower($rL), "\x65\166\145\x6f\156\154\x69\156\145") !== false)) {
        goto G36;
    }
    $dj = true;
    G36:
    $M4 = mo_oauth_client_get_option("\155\157\x5f\x6f\141\x75\164\x68\x5f\141\160\x70\137\x6e\141\155\145\x5f" . $rL);
    ?>
		
		<div id="toggle2" class="panel_toggle">
			<h3>Update Application : <?php 
    echo $rL;
    ?>
</h3>
		</div>
		<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings">
		<input type="hidden" name="option" value="mo_oauth_add_app" /> 
		<table class="mo_settings_table">
			<tr>
			<td><strong><font color="#FF0000">*</font>Application:</strong></td>
			<td>
				<input class="mo_table_textbox" required="" type="hidden" name="mo_oauth_app_name" value="<?php 
    echo isset($X6["\x61\x70\160\x49\x64"]) ? $X6["\x61\160\x70\111\x64"] : '';
    ?>
">
				<input class="mo_table_textbox" required="" type="hidden" name="mo_oauth_custom_app_name" value="<?php 
    echo $rL;
    ?>
">
				<?php 
    echo $rL;
    ?>
<br><br>
			</td>
			</tr>
			<!--?php if(!$is_eveonline){ 
			?-->
			<tr>
				<td><strong>Display App Name:</strong></td>
				<td><input class="mo_table_textbox" type="text" name="mo_oauth_display_app_name" value="<?php 
    echo isset($X6["\x64\151\x73\x70\x6c\141\x79\141\x70\x70\x6e\x61\155\x65"]) ? $X6["\x64\151\x73\x70\x6c\x61\171\x61\160\160\x6e\141\155\x65"] : '';
    ?>
"></td>
			</tr>
			<!--?php } ?-->
			<tr><td><strong>Redirect / Callback URL</strong></td>
			<td><input class="mo_table_textbox"  type="text" readonly="true" value='<?php 
    if (!$dj) {
        goto SoV;
    }
    echo "\150\x74\164\160\x73\x3a\x2f\57\x6c\x6f\x67\151\156\x2e\x78\x65\x63\x75\162\151\x66\x79\56\143\157\155\57\155\x6f\141\163\57\x6f\141\x75\164\150\x2f\143\154\151\145\x6e\x74\x2f\143\141\154\154\x62\141\x63\x6b";
    goto Ewc;
    SoV:
    echo $X6["\x72\145\144\151\x72\x65\x63\164\x75\x72\151"];
    Ewc:
    ?>
'></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000"></font>SSO Protocol:</strong></td>
				<td><input disabled class="mo_table_textbox" required="" type="text" value="<?php 
    echo $X6["\x61\x70\160\x74\x79\160\145"];
    ?>
"></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client ID:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_id" value="<?php 
    echo $X6["\143\x6c\151\x65\x6e\164\151\144"];
    ?>
"></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client Secret:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_secret" value="<?php 
    echo $X6["\x63\154\x69\145\156\x74\163\x65\x63\162\145\x74"];
    ?>
"></td>
			</tr>
			<tr>
				<td><strong>Scope:</strong></td>
				<td><input class="mo_table_textbox" type="text" name="mo_oauth_scope" value="<?php 
    echo $X6["\x73\x63\157\x70\145"];
    ?>
"></td>
			</tr>
			<?php 
    if ($dj) {
        goto bjZ;
    }
    $ik = '';
    goto ff4;
    bjZ:
    $ik = "\x64\151\x73\x70\x6c\141\x79\x3a\x6e\157\x6e\145";
    ff4:
    ?>
			<tr  id="mo_oauth_authorizeurl_div" style="<?php 
    echo $ik;
    ?>
">
				<td><strong><font color="#FF0000">*</font>Authorize Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_authorizeurl" name="mo_oauth_authorizeurl" value="<?php 
    echo $X6["\x61\x75\x74\x68\x6f\x72\151\172\x65\165\162\x6c"];
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_accesstokenurl_div" style="<?php 
    echo $ik;
    ?>
">
				<td><strong><font color="#FF0000">*</font>Access Token Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_accesstokenurl" name="mo_oauth_accesstokenurl" value="<?php 
    echo $X6["\x61\143\x63\145\x73\x73\164\157\153\x65\156\x75\162\x6c"];
    ?>
"></td>
			</tr>
			<?php 
    if (!(isset($X6["\x61\x70\160\x74\171\x70\x65"]) && $X6["\x61\160\x70\164\171\x70\x65"] != "\157\160\145\x6e\151\144\x63\157\156\156\145\143\164")) {
        goto Yql;
    }
    ?>
			<tr id="mo_oauth_resourceownerdetailsurl_div" style="<?php 
    echo $ik;
    ?>
">
				<td><strong><font color="#FF0000"><?php 
    if (!(isset($X6["\x61\x70\x70\111\x64"]) && $X6["\x61\x70\x70\x49\144"] != "\157\160\145\x6e\151\144\x63\x6f\156\156\x65\x63\164")) {
        goto lTc;
    }
    echo "\52";
    lTc:
    ?>
</font>Get User Info Endpoint:</strong></td>
				<td><input class="mo_table_textbox" <?php 
    if (!(isset($X6["\x61\160\160\x49\144"]) && $X6["\141\160\160\x49\144"] != "\157\x70\145\x6e\x69\x64\x63\157\156\x6e\x65\x63\164")) {
        goto Sbi;
    }
    echo "\162\145\x71\x75\151\x72\x65\x64";
    Sbi:
    ?>
 type="text" id="mo_oauth_resourceownerdetailsurl" name="mo_oauth_resourceownerdetailsurl" value="<?php 
    echo $X6["\x72\145\163\157\165\162\x63\145\157\x77\x6e\x65\x72\144\145\164\x61\151\154\163\x75\162\x6c"];
    ?>
"></td>
			</tr><?php 
    Yql:
    ?>
			<?php 
    if (!($rL != "\x45\x76\145\x4f\x6e\x6c\151\x6e\145\x41\160\x70")) {
        goto rDp;
    }
    ?>
			<tr><td><strong>Client Authentication:</strong></td><td><div style="padding:5px;"></div><input class="mo_table_textbox" type="radio" name="disable_authorization_header" id="disable_authorization_header" <?php 
    echo mo_oauth_client_get_option("\155\157\137\157\141\165\x74\x68\x5f\143\x6c\151\x65\156\x74\x5f\x64\151\x73\141\x62\x6c\x65\x5f\x61\165\x74\150\157\162\151\x7a\x61\x74\x69\157\156\x5f\x68\x65\x61\144\x65\162") ? '' : "\143\x68\x65\143\153\145\x64";
    ?>
 value="disable">HTTP Basic (Recommended)<div style="padding:5px;"></div><input class="mo_table_textbox" type="radio" name="disable_authorization_header" id="disable_authorization_header" value="enable" <?php 
    echo mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\164\150\x5f\143\x6c\x69\145\x6e\164\x5f\x64\151\x73\141\x62\x6c\145\137\x61\165\x74\x68\x6f\x72\x69\172\x61\164\151\x6f\x6e\x5f\150\x65\x61\x64\145\162") ? "\x63\150\x65\143\x6b\145\x64" : '';
    ?>
>Request Body<div style="padding:5px;"></div></td></tr>
			<tr style="<?php 
    echo $ik;
    ?>
">
				<td><strong>Group Info Endpoint <small>(Optional)</small></strong></td>
				<td><input class="mo_table_textbox"  type="text" name="mo_oauth_groupdetailsurl" value="<?php 
    if (!isset($X6["\147\x72\157\165\x70\x64\145\x74\141\151\154\163\165\162\x6c"])) {
        goto j0x;
    }
    echo $X6["\x67\x72\x6f\x75\160\x64\x65\164\x61\x69\x6c\163\x75\162\x6c"];
    j0x:
    ?>
" ></td>
			</tr>
			<?php 
    rDp:
    ?>
			<?php 
    if (!(isset($X6["\141\x70\160\x74\x79\160\145"]) && $X6["\141\160\x70\x74\171\160\x65"] != "\157\x70\145\156\x69\144\143\157\156\x6e\x65\143\x74")) {
        goto bjS;
    }
    ?>
		    <tr id="mo_oauth_jwks_uri_div">
		    	<td><strong>JWKS URI </strong><br><small>(for Signature Validation)</small></td>
				<td><input id="mo_oauth_jwks_uri" class="mo_table_textbox"  type="text" name="mo_oauth_jwks_uri" value="<?php 
    if (!isset($X6["\x6a\167\x6b\163\x5f\x75\162\151"])) {
        goto Mic;
    }
    echo $X6["\x6a\x77\x6b\x73\137\x75\162\x69"];
    Mic:
    ?>
" ></td>
			</tr>
			<?php 
    bjS:
    ?>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="submit" value="Save settings" class="button button-primary button-large" />
					<?php 
    if (!($rL != "\145\x76\x65\157\156\x6c\x69\156\145")) {
        goto qRW;
    }
    ?>
<input type="button" name="button" value="Test Configuration" class="button button-primary button-large" onclick="testConfiguration()" /><?php 
    qRW:
    ?>
				</td>
			</tr>
		</table>
		</form>
		</div>
		
		<?php 
    mo_oauth_grant_settings($X6, $rL);
    mo_oauth_attribute_mapping($X6, $rL);
    $p8 = mo_oauth_client_get_option("\155\157\x5f\157\x61\x75\164\150\137\141\160\x70\x5f\x6e\x61\155\145\x5f" . $rL);
    if ($rL == "\x65\166\145\x6f\x6e\154\151\156\x65") {
        goto Ru4;
    }
    $tG = false;
    goto TiQ;
    Ru4:
    $tG = true;
    TiQ:
    mo_oauth_client_rolemapping($rL, $tG);
}
function mo_oauth_grant_settings($X6, $rL)
{
    $ZW = mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\x75\164\150\137" . $rL . "\x5f\147\x72\141\x6e\164\x5f\x74\x79\160\145") ? mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\164\x68\x5f" . $rL . "\x5f\147\x72\141\x6e\164\x5f\164\x79\x70\145") : "\x41\165\x74\x68\x6f\x72\151\172\141\164\x69\x6f\156\40\x43\x6f\144\x65\40\x47\x72\x61\156\164";
    $mw = mo_oauth_client_get_option("\155\157\137\157\x61\165\164\x68\137" . $rL . "\x5f\x6a\x77\164\137\x73\165\x70\x70\157\x72\x74") ? (int) mo_oauth_client_get_option("\155\x6f\x5f\x6f\141\x75\164\x68\x5f" . $rL . "\137\152\167\164\137\163\x75\160\160\157\162\164") : (int) 0;
    $Zq = mo_oauth_client_get_option("\x6d\x6f\137\157\x61\x75\x74\x68\x5f" . $rL . "\x5f\152\x77\x74\137\x61\154\147\157") ? mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\165\164\x68\137" . $rL . "\x5f\x6a\167\x74\137\141\x6c\147\157") : "\x48\123\x41";
    $R1 = $Zq === "\x52\x53\x41" && mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\x74\x68\x5f" . $rL . "\137\170\x35\60\x39\x5f\x63\x65\162\x74") ? mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\141\165\164\150\x5f" . $rL . "\137\x78\65\60\x39\137\143\145\x72\164") : '';
    $Ny = mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\165\164\150\137\x63\x6c\151\x65\x6e\164\137\145\x6e\141\x62\154\x65\137\x70\x61\x73\163\167\157\x72\144\x5f\147\162\141\156\x74");
    if (!("\120\141\x73\x73\167\x6f\162\x64\40\107\x72\x61\x6e\164" === $ZW)) {
        goto gPa;
    }
    $ZW = $Ny ? $ZW : "\101\165\x74\x68\x6f\162\151\x7a\x61\164\151\157\156\40\x43\157\144\145\x20\x47\x72\x61\156\164";
    gPa:
    ?>
	<div class="mo_table_layout" id="grant_settings">
		<form name="form-common" id="multipurpose-form" method="post" action="admin.php?page=mo_oauth_settings">
			<input type="hidden" name="option" value="mo_oauth_grant_settings" />
			<input required="" type="hidden" id="mo_oauth_app_name2" name="mo_oauth_app_name" value="<?php 
    echo $rL;
    ?>
">
			<h3>Grant Type Configuration</h3>
			<table class="mo_settings_table" id="granttypetable">
				<tr>
					<td><strong>Grant Type:</strong><br></td>
					<td><select onclick="selectGrant(this)" id="grant_type" name="grant_type">
							<option <?php 
    if (!($ZW === "\101\x75\164\x68\x6f\x72\151\172\141\164\x69\x6f\x6e\40\103\x6f\x64\145\x20\x47\162\141\x6e\x74")) {
        goto y0O;
    }
    echo "\163\x65\x6c\145\143\x74\x65\144";
    y0O:
    ?>
>Authorization Code Grant</option>
							<option <?php 
    if (!($ZW === "\x49\155\160\x6c\151\x63\151\x74\40\107\x72\x61\x6e\x74")) {
        goto bil;
    }
    echo "\x73\x65\154\145\143\164\x65\144";
    bil:
    ?>
>Implicit Grant</option>
							<?php 
    if (!$Ny) {
        goto YS1;
    }
    ?>
								<option <?php 
    if (!($ZW === "\x50\x61\163\163\167\157\162\x64\40\107\162\x61\156\164")) {
        goto clt;
    }
    echo "\x73\145\154\x65\x63\164\x65\144";
    clt:
    ?>
>Password Grant</option>
							<?php 
    YS1:
    ?>
						</select>
					</td>
				</tr>
				<tr>&nbsp;</tr>
			</table>
				<?php 
    $s4 = '';
    $uv = '';
    ?>
				<div <?php 
    if (!($ZW === "\120\x61\x73\163\x77\x6f\x72\x64\x20\x47\162\141\156\164")) {
        goto NSB;
    }
    echo "\150\x69\x64\144\x65\x6e";
    NSB:
    ?>
 id="implicit-grant-settings">
					<h3>Grant Settings</h3>
					<table class="mo_settings_table" id="granttypetable">
						<tr>
								<td><strong> Enable Password Grant:</strong></td>
								<td><input type="checkbox" name="mo_oauth_client_enable_password_grant" value="1" <?php 
    checked(mo_oauth_client_get_option("\155\157\x5f\157\141\165\x74\x68\137\143\154\151\x65\156\x74\137\145\156\x61\142\x6c\x65\137\x70\x61\x73\x73\x77\157\x72\x64\x5f\147\162\141\156\x74") == 1);
    ?>
 >
						</tr>
						<tr>
							<td><strong> Enable Refresh Token Grant:</strong></td>
							<td><input type="checkbox" name="mo_oauth_client_enable_refresh_token_grant" value="1" <?php 
    checked(mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\165\164\150\x5f\143\154\151\145\156\x74\x5f\x65\156\141\x62\x6c\145\137\x72\145\x66\x72\x65\163\150\137\164\x6f\153\x65\x6e\137\147\162\x61\x6e\x74") == 1);
    ?>
 >
						</tr>
						<tr>
							<td><strong>Enable JWT Support:</strong></td>
							<td><input id="jwt_support" onclick="toggle_jwt(this)" type="checkbox" name="jwt_support" <?php 
    echo $s4;
    ?>
 value="" <?php 
    if (!($mw === 1)) {
        goto jol;
    }
    echo "\143\150\145\x63\x6b\145\144";
    jol:
    ?>
 /></td>
						</tr>
						<tr>
							<td><strong>JWT Signing Algorithm:</strong></td>
							<td><select onclick="selectAlgo(this)" id="jwt_algo" <?php 
    if (!($mw !== 1)) {
        goto W1r;
    }
    echo "\144\x69\x73\141\x62\x6c\145\144";
    W1r:
    ?>
 name="jwt_algo">
									<option <?php 
    if (!($Zq === "\110\x53\x41")) {
        goto hlo;
    }
    echo "\x73\x65\x6c\x65\143\164\x65\144";
    hlo:
    ?>
>HSA</option>
									<option <?php 
    if (!($Zq === "\122\x53\x41")) {
        goto SUo;
    }
    echo "\163\145\x6c\145\143\x74\145\144";
    SUo:
    ?>
>RSA</option>
								</select>
							</td>
						</tr>						
						<tr <?php 
    if (!($Zq !== "\x52\x53\x41")) {
        goto AnY;
    }
    echo "\150\151\x64\144\145\x6e";
    AnY:
    ?>
 id="x509_cert">
							<td><strong><font id='req-star' color='#ff0000'><?php 
    if (!($Zq === "\x52\x53\101" && (isset($X6["\x6a\167\x6b\x73\137\165\x72\x69"]) && $X6["\x6a\167\x6b\163\137\165\x72\151"] === ''))) {
        goto MFj;
    }
    echo "\x2a";
    MFj:
    ?>
</font>X509 Certificate:</strong></td>
							<td><textarea id="rsa_cert" <?php 
    echo $s4;
    ?>
 style="resize:none;" <?php 
    if (!($Zq === "\x52\123\101" && (isset($X6["\152\x77\x6b\x73\x5f\x75\x72\151"]) && $X6["\152\x77\x6b\163\137\165\x72\x69"] === ''))) {
        goto inx;
    }
    echo "\162\145\x71\x75\x69\162\145\144";
    inx:
    ?>
 rows="10" cols="50" name="mo_oauth_x509_cert"><?php 
    echo $R1;
    ?>
</textarea></td>
						</tr>
					</table>
				</div>
					<?php 
    password_grant($ZW, $Ny);
    ?>
			<br><br>
			<input type="submit" name="submit" value="Save settings" class="button button-primary button-large" style="margin: 10px;" />
	<?php 
    ?>
		</form>
	</div>

	<?php 
    ?>
		<script>

			function selectGrant(element) {
				var grant_type = element.options[element.selectedIndex].text;
				if(grant_type === "Password Grant") {
					document.getElementById("password-grant-settings").hidden = false;
					document.getElementById("implicit-grant-settings").hidden = true;
				} else {
					document.getElementById("password-grant-settings").hidden = true;
					document.getElementById("implicit-grant-settings").hidden = false;
				}

			}
			function toggle_jwt(element) {
				if(element.checked) {
					document.getElementById("jwt_algo").disabled = false;
				} else {
					document.getElementById("jwt_algo").disabled = true;
				}
			}

			function selectAlgo(element) {
				var algo = element.options[element.selectedIndex].text;
				if(algo === "RSA") {
					document.getElementById("x509_cert").hidden = false;
					document.getElementById("req-star").innerHTML = "*";
					if(document.getElementById("mo_oauth_jwks_uri").value === "") {
						document.getElementById("rsa_cert").required = true;
					} else {
						document.getElementById("req-star").hidden = true;
					}
					document.getElementById("rsa_cert").disabled = false;
					document.getElementById("rsa_cert").value = "";
					document.getElementById("jwt_algo").disabled = false;
				} else {
					document.getElementById("x509_cert").hidden = true;
					document.getElementById("rsa_cert").required = false;
					document.getElementById("rsa_cert").value = "";
					document.getElementById("req-star").innerHTML = "";
				}
			}
			function testPasswordGrant(){
				var mo_oauth_app_name = jQuery("#mo_oauth_app_name").val();
				var pwd = btoa(jQuery("#password").val());
				var uname = btoa(jQuery("#username").val());
				var myWindow = window.open('<?php 
    echo site_url();
    ?>
' + '/?option=testpasswordgrant&app='+mo_oauth_app_name+'&details='+pwd+"-"+uname, "Test Password Grant", "width=600, height=600");
				if(!myWindow) {
					alert('Please Allow pop-ups and then try again.');
				}
			}
		</script>

		<?php 
}
function mo_oauth_attribute_mapping($X6, $rL)
{
    ?>
	<div class="mo_table_layout" id="attrmapping">
		<form name="form-common" method="post" action="admin.php?page=mo_oauth_settings">
		<h3>Attribute Mapping</h3>
		<p style="font-size:10px">Do <b>Test Configuration</b> above to configure attribute mapping.<br></p>
		<input type="hidden" name="option" value="mo_oauth_attribute_mapping" />
		<input class="mo_table_textbox" required="" type="hidden" id="mo_oauth_app_name" name="mo_oauth_app_name" value="<?php 
    echo $rL;
    ?>
">
		<input class="mo_table_textbox" required="" type="hidden" name="mo_oauth_custom_app_name" value="<?php 
    echo $rL;
    ?>
">
		<table class="mo_settings_table" id="attributemappingtable">		
			<tr id="mo_oauth_email_attr_div">
				<td><strong><font color="#FF0000">*</font>Username Attribute:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_username_attr" name="mo_oauth_username_attr" placeholder="Username Attributes Name" value="<?php 
    if (!isset($X6["\x75\163\145\x72\156\141\x6d\x65\x5f\x61\x74\x74\x72"])) {
        goto nMj;
    }
    echo $X6["\165\x73\x65\x72\156\141\155\145\137\x61\x74\164\x72"];
    nMj:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_email_attr_div">
				<td><strong><font color="#FF0000">*</font>Email Attribute:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_email_attr" name="mo_oauth_email_attr" placeholder="Email Attributes Name" value="<?php 
    if (!isset($X6["\145\155\141\x69\x6c\x5f\x61\164\164\162"])) {
        goto bG2;
    }
    echo $X6["\145\155\x61\151\x6c\x5f\x61\x74\164\162"];
    bG2:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_name_attr_div">
				<td><strong><font color="#FF0000">*</font>First Name Attribute:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_firstname_attr" name="mo_oauth_firstname_attr" placeholder="FirstName Attributes Name" value="<?php 
    if (!isset($X6["\146\151\x72\x73\x74\x6e\141\155\x65\137\x61\164\164\162"])) {
        goto FNo;
    }
    echo $X6["\x66\x69\162\163\x74\x6e\x61\x6d\145\137\x61\x74\164\x72"];
    FNo:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_name_attr_div">
				<td><strong><font color="#FF0000"></font>Last Name Attribute:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_lastname_attr" name="mo_oauth_lastname_attr" placeholder="LastName Attributes Name" value="<?php 
    if (!isset($X6["\x6c\x61\163\164\156\141\155\145\x5f\x61\164\164\x72"])) {
        goto XnR;
    }
    echo $X6["\x6c\x61\x73\x74\x6e\141\155\145\137\141\x74\164\x72"];
    XnR:
    ?>
"></td>
			</tr>
			
			<tr id="mo_oauth_name_attr_div">
				<td><strong><font color="#FF0000"></font>Group Attributes Name:</strong></td>				
				<td>
					  <?php 
    $gx = mo_oauth_client_get_option("\155\157\x5f\157\x61\165\x74\150\x5f\x63\x6c\x69\145\x6e\x74\x5f" . $rL . "\137\x6d\x61\160\x70\151\156\x67\x5f\x67\x72\x6f\165\x70\156\141\x6d\145\x5f\141\164\x74\x72\151\142\x75\164\145");
    ?>
					<input type="text"  class="mo_table_textbox"  name="mapping_groupname_attribute" placeholder="Group Attributes Name"  value="<?php 
    echo $gx;
    ?>
"  >
				</td>
			</tr>
			
						
			<?php 
    $q1 = isset($X6["\x67\162\157\165\160\137\141\164\164\162"]) ? $X6["\x67\x72\x6f\x75\160\137\x61\x74\164\162"] : '';
    $ke = isset($X6["\x64\x69\x73\x70\154\141\x79\137\x61\x74\x74\x72"]) ? $X6["\144\x69\x73\x70\x6c\141\x79\x5f\141\x74\x74\162"] : '';
    echo "\xd\xa\11\x9\x9\40\x20\74\164\162\x3e\xd\12\11\11\11\11\x3c\164\144\x3e\x3c\x73\x74\162\x6f\156\x67\x3e\104\151\x73\x70\154\x61\171\x20\116\x61\x6d\145\x3a\x3c\x2f\163\x74\x72\x6f\156\147\x3e\74\57\164\x64\x3e\xd\xa\x9\x9\x9\11\x3c\x74\144\x3e\15\12\11\11\x9\11\x9\74\x73\145\154\145\143\164\x20\x6e\141\155\x65\x3d\42\x6f\x61\165\164\150\137\143\x6c\151\x65\x6e\164\137\x61\155\137\144\151\x73\x70\x6c\141\171\x5f\156\x61\155\145\42\x20\151\x64\75\42\x6f\x61\165\164\150\137\x63\154\x69\x65\x6e\164\137\x61\155\x5f\144\151\x73\x70\x6c\141\x79\x5f\x6e\x61\x6d\145\x22\x20\x3e\xd\12\11\x9\x9\x9\11\11\74\x6f\x70\164\x69\x6f\x6e\x20\x76\141\154\x75\x65\75\42\125\123\x45\x52\116\x41\115\105\42";
    if (!($ke == "\x55\x53\x45\122\x4e\x41\x4d\105")) {
        goto xoZ;
    }
    echo "\163\x65\x6c\145\143\164\x65\x64\75\x22\x73\x65\154\145\x63\x74\x65\144\x22";
    xoZ:
    echo "\x3e\125\163\145\x72\156\x61\155\145\74\57\x6f\x70\x74\x69\x6f\156\76\xd\12\x9\11\x9\x9\11\x9\x3c\157\x70\164\x69\157\156\40\166\x61\154\x75\145\75\x22\x46\x4e\x41\115\105\42";
    if (!($ke == "\106\116\x41\x4d\x45")) {
        goto sKW;
    }
    echo "\x73\x65\x6c\145\143\x74\145\144\75\42\x73\x65\154\x65\x63\x74\145\x64\x22";
    sKW:
    echo "\x3e\x46\151\162\163\164\116\141\x6d\x65\x3c\57\157\160\x74\x69\x6f\x6e\x3e\15\xa\11\11\x9\11\11\11\x3c\157\x70\164\x69\x6f\x6e\x20\x76\141\154\165\x65\75\42\x4c\116\101\115\x45\x22";
    if (!($ke == "\114\x4e\x41\115\x45")) {
        goto t6Q;
    }
    echo "\x73\145\x6c\x65\143\x74\x65\x64\75\x22\163\145\x6c\145\x63\164\x65\x64\42";
    t6Q:
    echo "\x3e\114\x61\x73\164\x4e\141\x6d\x65\x3c\57\157\x70\164\151\x6f\156\76\xd\12\x9\x9\x9\x9\11\11\x3c\157\x70\164\x69\x6f\156\40\x76\141\154\165\145\75\42\x46\116\x41\115\105\x5f\x4c\x4e\101\x4d\x45\x22";
    if (!($ke == "\106\x4e\x41\115\x45\x5f\x4c\x4e\x41\x4d\x45")) {
        goto VxG;
    }
    echo "\x73\x65\154\145\x63\x74\x65\144\x3d\42\x73\145\154\145\x63\164\145\144\42";
    VxG:
    echo "\76\x46\151\162\x73\x74\x4e\141\x6d\145\40\114\141\163\x74\116\141\x6d\145\74\57\157\160\164\151\x6f\x6e\x3e\xd\xa\x9\x9\11\x9\11\x9\x3c\157\x70\164\151\x6f\156\x20\166\141\x6c\x75\145\x3d\x22\114\116\101\115\105\x5f\106\x4e\x41\115\105\42";
    if (!($ke == "\114\x4e\x41\x4d\x45\137\x46\116\101\x4d\x45")) {
        goto ZEa;
    }
    echo "\x73\145\x6c\x65\x63\x74\145\144\x3d\x22\x73\145\x6c\x65\x63\x74\x65\x64\42";
    ZEa:
    echo "\x3e\x4c\x61\163\x74\x4e\141\x6d\145\40\106\x69\x72\163\x74\116\x61\155\145\x3c\57\x6f\160\x74\x69\x6f\156\76\xd\12\x9\x9\x9\x9\11\x3c\57\x73\x65\154\x65\143\164\76\xd\12\11\11\x9\x9\74\57\164\144\76\15\xa\11\x9\x9\x20\x20\x3c\57\x74\x72\76\15\12\11\11\x9\x20\x20\74\164\x72\76\74\164\144\40\x63\x6f\154\163\x70\141\x6e\75\x22\62\42\76\xd\12\11\11\11\74\150\x33\x3e\x4d\x61\x70\x20\103\x75\163\164\157\x6d\40\x41\x74\164\162\x69\x62\165\164\145\163\x3c\x2f\x68\x33\76\x4d\x61\160\40\145\x78\x74\x72\141\x20\117\101\165\x74\150\40\120\162\x6f\166\151\x64\145\x72\x20\x61\164\164\162\x69\x62\x75\164\x65\163\x20\167\150\x69\x63\x68\x20\x79\157\165\x20\167\151\163\x68\x20\164\x6f\40\x62\145\x20\151\x6e\143\x6c\165\144\x65\144\x20\x69\x6e\x20\x74\150\145\40\x75\163\x65\162\40\x70\162\157\146\151\154\145\x20\x62\x65\x6c\x6f\167\15\12\11\x9\11\x3c\57\164\x64\x3e\74\164\x64\76\74\x69\156\160\165\x74\40\164\171\x70\145\75\42\142\x75\x74\164\157\x6e\x22\40\x6e\x61\x6d\x65\x3d\x22\x61\144\x64\137\141\164\164\162\x69\142\165\164\x65\42\40\x76\141\x6c\165\x65\75\x22\x2b\x22\40\157\x6e\x63\x6c\151\143\153\x3d\42\141\144\x64\137\x63\x75\163\164\157\x6d\x5f\x61\x74\164\x72\x69\142\x75\x74\145\x28\x29\x3b\x22\40\x63\x6c\141\x73\x73\x3d\x22\142\165\x74\x74\157\156\40\x62\165\x74\x74\157\x6e\x2d\x70\x72\x69\155\x61\x72\x79\x22\40\40\x2f\76\x3c\x2f\x74\144\x3e\xd\xa\x9\11\x9\11\x9\x9\11\74\164\x64\76\x3c\151\156\x70\x75\x74\x20\x74\x79\160\x65\x3d\x22\x62\165\164\x74\157\x6e\42\40\156\141\155\x65\75\42\x72\x65\155\157\x76\x65\137\141\164\164\x72\x69\142\x75\x74\x65\42\x20\x76\x61\154\x75\x65\75\42\55\42\40\x6f\x6e\x63\154\151\x63\x6b\x3d\x22\162\x65\x6d\157\x76\145\x5f\x63\165\x73\x74\x6f\x6d\x5f\141\x74\164\x72\x69\x62\x75\164\x65\x28\x29\x3b\x22\40\143\154\141\163\163\x3d\42\142\165\x74\164\x6f\156\x20\x62\165\164\x74\157\x6e\x2d\x70\162\x69\x6d\141\162\x79\42\40\x20\x20\57\76\x3c\x2f\x74\x64\76\x3c\x2f\164\162\76\xd\xa\11\11\x9";
    if (mo_oauth_client_get_option("\155\x6f\137\157\x61\165\x74\x68\137\x63\154\x69\145\156\164\137\143\x75\163\164\157\x6d\x5f\x61\x74\164\162\x73\x5f\x6d\141\x70\160\x69\x6e\x67")) {
        goto c8K;
    }
    echo "\x3c\x74\162\x20\x63\x6c\141\163\x73\x3d\42\x72\157\167\163\42\76\x3c\x74\144\76\74\x69\156\x70\x75\x74\40\164\x79\160\145\x3d\x22\x74\x65\x78\x74\42\40\x6e\141\155\145\x3d\x22\155\157\x5f\x6f\141\165\164\x68\137\143\154\x69\x65\x6e\164\137\x63\x75\163\164\157\155\137\x61\164\164\162\151\142\165\x74\145\x5f\153\145\171\x5f\61\42\40\160\x6c\141\143\x65\x68\x6f\154\x64\145\x72\75\x22\105\156\x74\x65\162\40\146\151\145\154\144\x20\155\145\164\x61\40\156\141\155\145\x22\40\40\40\x2f\76\74\57\164\144\76\xd\12\x9\x9\11\x9\40\74\x74\x64\76\74\x69\156\x70\165\x74\x20\164\171\160\x65\x3d\x22\164\x65\x78\164\x22\x20\x6e\141\x6d\x65\75\42\155\x6f\x5f\x6f\x61\165\x74\x68\x5f\143\154\151\x65\156\164\x5f\143\x75\163\x74\157\x6d\x5f\x61\164\164\162\151\x62\165\x74\x65\x5f\x76\141\x6c\165\145\137\61\42\x20\x70\154\x61\x63\x65\x68\x6f\x6c\x64\x65\x72\75\42\x45\x6e\164\145\162\x20\x61\x74\x74\x72\151\142\x75\164\145\40\x6e\x61\155\x65\40\x66\162\157\x6d\x20\117\x41\165\x74\150\x20\120\x72\x6f\x76\151\144\145\162\x22\x20\163\164\171\154\145\75\42\x77\x69\144\164\x68\x3a\x37\64\x25\x3b\x22\40\x20\x2f\x3e\74\57\164\x64\76\15\12\11\11\x9\11\40\74\57\164\162\x3e";
    goto GF_;
    c8K:
    $Op = mo_oauth_client_get_option("\x6d\x6f\137\157\141\x75\x74\150\137\x63\154\151\x65\x6e\164\137\143\165\x73\164\157\x6d\137\x61\164\x74\162\x73\137\155\x61\x70\x70\151\x6e\x67");
    $P3 = 0;
    foreach ($Op as $OY => $O2) {
        $P3++;
        echo "\74\x74\162\40\x63\154\x61\163\x73\75\x22\x72\157\x77\163\x22\x3e\x3c\x74\x64\x3e\x3c\151\x6e\160\165\164\40\x74\171\160\x65\75\42\164\145\x78\x74\42\x20\156\x61\155\x65\x3d\42\155\157\137\157\x61\x75\164\x68\137\143\154\151\x65\156\x74\x5f\x63\x75\163\164\157\x6d\x5f\141\164\164\x72\x69\142\x75\x74\x65\x5f\x6b\x65\171\x5f" . $P3 . "\42\40\160\154\141\x63\x65\x68\157\154\x64\145\162\x3d\x22\x45\x6e\164\145\162\40\x66\x69\145\154\144\x20\155\145\164\x61\40\156\x61\x6d\x65\42\40\x20\166\x61\x6c\x75\x65\75\42" . $OY . "\42\x20\x2f\x3e\x3c\x2f\x74\144\76\15\xa\11\x9\x9\11\x20\x3c\x74\144\76\74\151\x6e\x70\165\164\40\164\x79\160\145\x3d\42\164\145\170\164\42\40\156\141\x6d\x65\75\42\x6d\157\x5f\157\141\165\164\150\137\x63\154\x69\x65\x6e\x74\137\x63\165\163\x74\x6f\155\137\x61\164\164\x72\151\142\x75\x74\x65\137\x76\141\x6c\165\145\137" . $P3 . "\42\40\x70\154\x61\x63\145\x68\157\154\x64\145\162\x3d\x22\x45\x6e\164\145\x72\40\x61\164\164\162\x69\x62\x75\x74\x65\x20\156\x61\x6d\x65\x20\x66\x72\x6f\155\x20\x4f\x41\x75\x74\150\x20\120\162\157\166\151\x64\x65\162\x22\40\163\164\x79\154\145\75\x22\x77\151\144\x74\x68\72\x37\64\x25\x3b\42\x20\x76\141\x6c\165\x65\75\x22" . $O2 . "\x22\x20\57\76\74\57\x74\x64\76\xd\12\x9\11\11\11\x20\x3c\57\x74\x72\76";
        Rj9:
    }
    E1K:
    GF_:
    ?>
			<tr id="save_config_element">
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Save settings"
					class="button button-primary button-large" /></td>
			</tr>
			</table>
		</form>
		<?php 
    echo "\74\163\143\162\x69\160\x74\76\xd\12\11\11\x9\x76\141\162\40\143\157\x75\x6e\164\x41\x74\x74\162\x69\142\x75\x74\x65\x73\40\75\x20\152\x51\165\x65\162\171\50\x22\x23\141\164\164\x72\x69\142\165\164\145\x6d\141\x70\x70\x69\x6e\147\164\141\142\x6c\145\40\x74\162\x2e\x72\x6f\167\x73\x22\x29\x2e\x6c\x65\x6e\147\164\x68\73\xd\xa\x9\x9\x9\x66\x75\156\x63\x74\x69\157\156\40\x61\x64\x64\137\x63\165\163\x74\157\x6d\137\141\164\164\162\x69\x62\165\x74\x65\x28\x29\x7b\xd\12\x9\11\x9\11\143\157\165\156\164\x41\x74\x74\x72\151\x62\x75\164\145\163\40\53\x3d\40\61\73\xd\xa\x9\x9\x9\11\162\x6f\167\x73\x20\75\x20\42\x3c\x74\x72\x20\x69\x64\75\134\x22\x72\157\167\137\x22\x20\53\x63\x6f\165\156\x74\101\x74\164\162\151\142\x75\x74\145\163\x20\53\x20\42\x5c\42\x3e\x3c\164\144\x3e\x3c\151\x6e\x70\x75\164\40\164\171\160\x65\x3d\x5c\x22\x74\x65\x78\x74\x5c\42\x20\x6e\x61\x6d\x65\75\x5c\x22\x6d\x6f\x5f\157\x61\x75\164\x68\x5f\143\x6c\151\x65\x6e\x74\x5f\143\165\x73\164\x6f\x6d\x5f\141\164\164\162\x69\142\x75\164\145\137\153\x65\171\x5f\x22\x20\x2b\40\x63\157\165\x6e\x74\101\x74\164\162\151\x62\165\164\x65\163\x20\x2b\x20\42\x5c\42\40\x69\144\75\134\x22\155\157\x5f\157\141\x75\164\150\137\x63\154\x69\x65\x6e\164\x5f\x63\165\x73\164\x6f\x6d\137\x61\164\164\x72\151\x62\x75\164\145\x5f\x6b\145\x79\137\x22\x20\x2b\143\157\x75\x6e\x74\x41\164\x74\x72\151\x62\165\164\145\x73\40\x2b\x20\42\134\42\40\x20\x70\154\141\x63\145\150\x6f\154\x64\x65\162\75\134\x22\105\156\164\145\162\x20\146\151\x65\x6c\144\x20\155\x65\x74\141\x20\x6e\141\x6d\x65\x5c\42\40\x20\x3e\74\57\164\144\x3e\74\x74\x64\76\74\151\x6e\x70\165\x74\x20\164\171\x70\x65\75\134\x22\x74\x65\x78\x74\134\42\40\156\141\155\145\75\x5c\x22\155\x6f\x5f\x6f\141\x75\164\150\137\x63\154\x69\145\x6e\x74\137\143\165\163\x74\x6f\155\x5f\x61\x74\164\162\x69\142\165\164\x65\x5f\x76\141\154\x75\145\137\x22\x20\x2b\143\157\165\x6e\x74\101\164\x74\162\x69\x62\x75\x74\x65\x73\40\53\40\x22\x5c\x22\40\151\144\75\134\x22\155\157\137\x6f\141\x75\x74\x68\x5f\143\x6c\x69\x65\156\164\x5f\143\165\x73\164\157\x6d\x5f\x61\x74\x74\162\x69\142\x75\164\145\x5f\x76\141\154\x75\x65\137\x22\40\53\x63\157\x75\156\164\x41\x74\x74\x72\x69\x62\x75\164\x65\x73\40\53\x20\42\134\42\40\160\x6c\x61\x63\145\x68\157\x6c\x64\145\x72\x3d\134\42\x45\x6e\164\145\162\x20\101\164\x74\162\151\x62\165\164\x65\x20\x4e\141\155\145\40\146\x72\157\x6d\40\117\101\165\164\x68\x20\120\x72\x6f\166\x69\x64\x65\x72\x5c\x22\x20\163\164\x79\x6c\145\x3d\x5c\x22\x77\151\x64\164\x68\x3a\67\x34\45\x3b\x5c\42\40\57\x3e\x3c\57\x74\144\x3e\x3c\57\x74\162\76\x22\x3b\xd\12\xd\xa\x9\11\11\11\x6a\121\165\145\162\x79\50\x72\x6f\167\163\x29\x2e\x69\156\x73\145\x72\164\x42\145\x66\157\x72\145\x28\x6a\x51\x75\x65\162\x79\x28\42\43\163\141\x76\145\x5f\143\x6f\156\x66\x69\147\137\145\x6c\145\x6d\145\x6e\x74\x22\51\x29\x3b\xd\xa\11\11\x9\x7d\15\12\15\12\x9\11\x9\146\165\x6e\x63\x74\x69\x6f\156\40\x72\145\155\x6f\166\x65\137\x63\x75\163\x74\157\155\137\x61\x74\x74\162\x69\x62\165\x74\x65\50\x29\173\15\xa\11\x9\x9\x9\x6a\121\x75\145\x72\171\x28\x22\43\x72\x6f\x77\x5f\x22\40\53\x20\x63\x6f\165\156\164\x41\164\164\x72\151\x62\165\164\145\163\x29\x2e\x72\x65\x6d\x6f\x76\145\50\51\73\xd\12\11\11\11\x9\143\x6f\x75\156\x74\x41\164\x74\162\x69\142\x75\x74\145\163\40\55\x3d\x20\61\x3b\15\xa\11\11\11\11\151\146\50\143\157\165\156\x74\x41\x74\164\x72\151\x62\x75\164\145\x73\40\75\x3d\40\60\x29\15\12\11\11\11\11\x9\x63\x6f\x75\x6e\x74\101\x74\x74\x72\151\x62\x75\x74\x65\163\40\x3d\x20\61\73\15\xa\x9\11\11\x7d\xd\12\11\11\x9\x3c\x2f\x73\143\x72\151\160\164\x3e";
    ?>
		<script>
		function testConfiguration(){
			var mo_oauth_app_name = jQuery("#mo_oauth_app_name").val();
			var myWindow = window.open('<?php 
    echo site_url();
    ?>
' + '/?option=testattrmappingconfig&app='+mo_oauth_app_name, "Test Attribute Configuration", "width=600, height=600");	
		}
		</script>
		</div>
<?php 
}
function mo_oauth_client_rolemapping($rL, $dj)
{
    ?>
	
	
	<div class="mo_table_layout" id="rolemapping">
	<div class="mo_oauth_client_small_layout" style="margin-top:0px;">
	<br><h3>Role Mapping (Optional)</h3>
	<?php 
    $gx = mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\164\150\x5f\143\x6c\151\145\156\164\x5f" . $rL . "\x5f\x6d\x61\x70\x70\x69\x6e\147\137\x67\x72\x6f\165\x70\x6e\141\155\x65\137\141\164\x74\x72\151\x62\165\164\145");
    if (!(!$dj && empty($gx))) {
        goto Iam;
    }
    echo "\x3c\160\40\163\x74\171\154\x65\x3d\x63\157\154\x6f\162\72\x72\145\144\76\x43\157\x6e\x66\x69\x67\165\162\x65\x20\74\142\76\107\162\x6f\x75\x70\x20\101\164\164\162\151\142\x75\x74\x65\40\x4e\x61\155\x65\x3c\x2f\142\x3e\x20\x69\156\x20\141\164\x74\x72\x69\142\165\164\145\40\155\x61\x70\x70\x69\156\x67\40\x61\x62\x6f\166\145\40\x74\x6f\x20\x65\156\141\142\154\x65\40\162\x6f\154\145\x20\155\x61\160\x70\151\x6e\x67\x2e\74\x2f\x70\x3e";
    Iam:
    ?>
	<b>NOTE: </b>Role will be assigned only to non-admin users (user that do NOT have Administrator privileges). You will have to manually change the role of Administrator users.<br>
	<form id="role_mapping_form" name="f" method="post" action="">
		<input class="mo_table_textbox" required="" type="hidden"  name="mo_oauth_app_name" value="<?php 
    echo $rL;
    ?>
">
		<input  type="hidden" name="option" value="mo_oauth_client_save_role_mapping" />
		
		<p><input type="checkbox" name="keep_existing_user_roles" value="1" <?php 
    checked(mo_oauth_client_get_option("\155\157\137\157\141\x75\164\x68\137\143\154\x69\x65\156\x74\137" . $rL . "\x5f\x6b\145\x65\160\137\145\x78\x69\163\x74\151\156\147\x5f\165\163\x65\x72\137\162\x6f\154\145\163") == 1);
    ?>
 /><strong> Keep existing user roles</strong><br><small>Role mapping won't apply to existing wordpress users.</small></p>
		<p><input type="checkbox" name="restrict_login_for_mapped_roles" value="true" <?php 
    $Q0 = mo_oauth_client_get_option("\155\x6f\137\157\x61\x75\164\150\137\143\x6c\x69\x65\156\x74\137" . $rL . "\x5f\x72\145\163\x74\162\x69\x63\164\137\154\x6f\147\x69\x6e\x5f\x66\x6f\162\137\155\x61\x70\x70\145\x64\137\x72\157\154\x65\x73");
    checked($Q0 == true);
    ?>
 > <strong> Do Not allow login if roles are not mapped here </strong></p><small>We won't allow users to login if we don't find users role/group mapped below.</small></p>

		<div id="panel1">
			<table class="mo_oauth_client_mapping_table" id="mo_oauth_client_role_mapping_table" style="width:90%">
					<tr><td>&nbsp;</td></tr>
					<tr>
					<td><font style="font-size:13px;font-weight:bold;">Default Role </font>
					</td>
					<td>
						<select name="mapping_value_default" style="width:100%" id="default_group_mapping" <?php 
    if (!mo_oauth_client_get_option("\155\x6f\x5f\x6f\141\x75\164\x68\137\x63\x6c\151\145\x6e\x74\x5f" . $rL . "\137\162\145\163\164\x72\151\143\164\137\154\157\x67\151\x6e\137\x66\157\x72\x5f\155\x61\x70\160\x65\x64\137\162\157\154\145\163")) {
        goto JYb;
    }
    ?>
 disabled="true"<?php 
    JYb:
    ?>
 >
						   <?php 
    if (mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\164\150\x5f\143\154\151\x65\x6e\x74\137" . $rL . "\x5f\155\x61\x70\160\151\156\x67\137\166\x61\154\x75\145\x5f\x64\x65\x66\x61\x75\154\164")) {
        goto c5U;
    }
    $CC = mo_oauth_client_get_option("\x64\145\x66\x61\165\x6c\x74\x5f\162\x6f\x6c\x65");
    goto aoh;
    c5U:
    $CC = mo_oauth_client_get_option("\155\157\x5f\x6f\141\x75\x74\150\137\x63\x6c\x69\x65\x6e\x74\137" . $rL . "\x5f\155\x61\160\160\x69\x6e\x67\137\166\141\x6c\165\145\137\144\145\x66\x61\x75\154\x74");
    aoh:
    wp_dropdown_roles($CC);
    ?>
						</select>
						<select style="display:none" id="wp_roles_list">
						   <?php 
    wp_dropdown_roles($CC);
    ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan=2><i> Default role will be assigned to all users for which mapping is not specified.</i></td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td style="width:50%"><b><?php 
    if ($dj) {
        goto COs;
    }
    echo "\x47\162\157\165\160\40\101\x74\x74\162\151\x62\165\164\145\40\x56\x61\154\x75\145";
    goto LrI;
    COs:
    echo "\x45\x76\145\x20\117\x6e\x6c\x69\x6e\x65\40\x43\x6f\x72\160\157\162\x61\164\x69\157\156\x20\x4e\x61\155\145";
    LrI:
    ?>
</b></td>
					<td style="width:50%"><b>WordPress Role</b></td>
				</tr>
				
				<?php 
    $wN = 1;
    if (!is_numeric(mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\x74\150\137\x63\x6c\x69\145\x6e\164\x5f" . $rL . "\x5f\x72\x6f\154\145\137\x6d\x61\160\x70\x69\x6e\147\137\143\157\x75\x6e\164"))) {
        goto RZ2;
    }
    $wN = intval(mo_oauth_client_get_option("\155\x6f\137\157\141\165\x74\150\x5f\143\x6c\151\x65\156\164\137" . $rL . "\x5f\162\157\154\145\x5f\155\x61\160\x70\x69\x6e\147\x5f\143\x6f\x75\x6e\x74"));
    RZ2:
    $P3 = 1;
    pEc:
    if (!($P3 <= $wN)) {
        goto QWA;
    }
    ?>
				<tr>
					<td><input class="mo_oauth_client_table_textbox" type="text" name="mapping_key_<?php 
    echo $P3;
    ?>
"
						 value="<?php 
    echo mo_oauth_client_get_option("\155\157\x5f\157\x61\165\164\150\x5f\x63\154\151\145\x6e\164\137" . $rL . "\x5f\155\141\x70\160\x69\156\x67\x5f\x6b\x65\171\x5f" . $P3);
    ?>
"  placeholder="group name"  />
					</td>
					<td>
						<select name="mapping_value_<?php 
    echo $P3;
    ?>
" id="role" style="width:100%" >
						   <?php 
    wp_dropdown_roles(mo_oauth_client_get_option("\155\x6f\137\x6f\x61\x75\164\150\x5f\x63\x6c\151\x65\x6e\164\137" . $rL . "\137\x6d\141\160\160\151\x6e\147\137\x76\x61\x6c\165\x65\x5f" . $P3));
    ?>
						</select>
					</td>
				</tr>
				<?php 
    FrA:
    $P3++;
    goto pEc;
    QWA:
    if (!($wN == 0)) {
        goto dWg;
    }
    ?>
				<tr>
					<td><input class="mo_oauth_client_table_textbox" type="text" name="mapping_key_1"
						 value="" placeholder="group name" />
					</td>
					<td>
						<select name="mapping_value_1" id="role" style="width:100%"  >
						   <?php 
    wp_dropdown_roles();
    ?>
						</select>
					</td>
				</tr>
				<?php 
    dWg:
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
<script>
	jQuery( document ).ready(function() {
		jQuery("#default_group_mapping option[value='administrator']").remove();
		<?php 
    if (!empty($gx)) {
        goto ajy;
    }
    ?>
		jQuery("#rolemapping :input").prop("disabled", true);
		<?php 
    ajy:
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
?>
