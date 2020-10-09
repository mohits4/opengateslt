<?php


function update_app($rd)
{
    $vQ = mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\141\165\x74\x68\x5f\x61\x70\x70\163\137\x6c\151\163\164");
    foreach ($vQ as $OY => $AO) {
        if (!($rd == $OY)) {
            goto sh;
        }
        $rL = $rd;
        $X6 = $AO;
        goto gb;
        sh:
        Nd:
    }
    gb:
    if ($X6) {
        goto hU;
    }
    return;
    hU:
    $dj = false;
    if (!(strpos(strtolower($rL), "\x65\x76\x65\157\156\x6c\151\156\x65") !== false)) {
        goto Jz;
    }
    $dj = true;
    Jz:
    $M4 = mo_oauth_client_get_option("\x6d\x6f\137\157\141\x75\164\150\x5f\x61\160\x70\x5f\x6e\141\x6d\x65\137" . $rL);
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
    echo $rL;
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
    echo isset($X6["\x64\x69\163\160\154\141\x79\x61\x70\x70\x6e\x61\x6d\145"]) ? $X6["\144\x69\163\x70\154\x61\171\141\160\x70\x6e\x61\x6d\x65"] : '';
    ?>
"></td>
			</tr>
			<!--?php } ?-->
			<tr><td><strong>Redirect / Callback URL</strong></td>
			<td><input class="mo_table_textbox"  type="text" readonly="true" value='<?php 
    if (!$dj) {
        goto MM;
    }
    echo "\150\x74\164\x70\163\x3a\x2f\x2f\x6c\157\x67\151\x6e\x2e\x78\145\x63\165\x72\151\x66\x79\x2e\143\157\155\x2f\155\x6f\x61\x73\57\x6f\x61\165\x74\x68\x2f\x63\x6c\151\145\156\164\x2f\x63\x61\x6c\154\x62\141\143\x6b";
    goto pg;
    MM:
    echo $X6["\x72\145\x64\x69\x72\x65\x63\x74\x75\x72\151"];
    pg:
    ?>
'></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client ID:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_id" value="<?php 
    echo $X6["\x63\x6c\151\x65\156\164\x69\x64"];
    ?>
"></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client Secret:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_secret" value="<?php 
    echo $X6["\143\x6c\151\145\x6e\x74\x73\x65\143\x72\x65\164"];
    ?>
"></td>
			</tr>
			<tr>
				<td><strong>Scope:</strong></td>
				<td><input class="mo_table_textbox" type="text" name="mo_oauth_scope" value="<?php 
    echo $X6["\163\143\x6f\160\x65"];
    ?>
"></td>
			</tr>
			<?php 
    if ($dj) {
        goto lA;
    }
    $ik = '';
    goto xq;
    lA:
    $ik = "\x64\151\163\160\154\141\171\72\156\x6f\x6e\x65";
    xq:
    ?>
			<tr  id="mo_oauth_authorizeurl_div" style="<?php 
    echo $ik;
    ?>
">
				<td><strong><font color="#FF0000">*</font>Authorize Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_authorizeurl" name="mo_oauth_authorizeurl" value="<?php 
    echo $X6["\x61\x75\164\x68\157\x72\x69\172\x65\165\162\x6c"];
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_accesstokenurl_div" style="<?php 
    echo $ik;
    ?>
">
				<td><strong><font color="#FF0000">*</font>Access Token Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_accesstokenurl" name="mo_oauth_accesstokenurl" value="<?php 
    echo $X6["\x61\x63\143\145\x73\x73\x74\x6f\153\x65\x6e\x75\162\154"];
    ?>
"></td>
			</tr>
			<?php 
    if (!($X6["\x61\160\x70\x74\x79\160\x65"] != "\x6f\160\145\156\x69\144\143\x6f\156\x6e\x65\143\x74")) {
        goto P_;
    }
    ?>
			<tr id="mo_oauth_resourceownerdetailsurl_div" style="<?php 
    echo $ik;
    ?>
">
				<td><strong><font color="#FF0000">*</font>Get User Info Endpoint:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_resourceownerdetailsurl" name="mo_oauth_resourceownerdetailsurl" value="<?php 
    echo $X6["\x72\x65\x73\x6f\x75\x72\x63\x65\x6f\167\156\145\162\x64\145\x74\x61\151\154\x73\165\162\154"];
    ?>
"></td>
			</tr>
			<?php 
    if (!($rL != "\105\166\145\117\156\x6c\151\156\145\x41\x70\160")) {
        goto A3;
    }
    ?>
			<tr><td></td><td><input class="mo_table_textbox" type="checkbox" name="disable_authorization_header" id="disable_authorization_header" <?php 
    checked(mo_oauth_client_get_option("\x6d\x6f\137\157\141\x75\x74\150\x5f\x63\154\151\145\x6e\164\137\144\151\x73\141\142\154\x65\137\141\x75\x74\x68\157\162\x69\172\x61\x74\x69\x6f\x6e\137\150\145\x61\144\x65\x72") == true);
    ?>
 > (Check if does not require Authorization Header)</td></tr>
			<tr style="<?php 
    echo $ik;
    ?>
">
				<td><strong>Group Info Endpoint <small>(Optional)</small></strong></td>
				<td><input class="mo_table_textbox"  type="text" name="mo_oauth_groupdetailsurl" value="<?php 
    if (!isset($X6["\x67\x72\x6f\165\160\x64\145\164\141\x69\x6c\163\x75\162\x6c"])) {
        goto yw;
    }
    echo $X6["\147\162\x6f\165\x70\144\x65\x74\x61\151\x6c\x73\165\162\154"];
    yw:
    ?>
" ></td>
			</tr>
			<?php 
    A3:
    ?>
			<?php 
    if (!($X6["\141\160\160\x74\x79\160\145"] == "\157\x70\145\156\151\x64\x63\157\156\x6e\x65\143\164")) {
        goto JB;
    }
    ?>
		    <tr id="mo_oauth_jwks_uri_div">
		    	<td><strong>JWKS URI </strong><br><small>(for Signature Validation)</small></td>
				<td><input class="mo_table_textbox"  type="text" name="mo_oauth_jwks_uri" value="<?php 
    if (!isset($X6["\x6a\167\153\163\137\165\162\x69"])) {
        goto WU;
    }
    echo $X6["\x6a\167\x6b\163\137\165\162\151"];
    WU:
    ?>
" ></td>
			</tr>
			<?php 
    JB:
    P_:
    ?>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" name="submit" value="Save settings" class="button button-primary button-large" />
					<?php 
    if (!($rL != "\x65\166\145\157\156\154\151\x6e\145")) {
        goto UO;
    }
    ?>
<input type="button" name="button" value="Test Configuration" class="button button-primary button-large" onclick="testConfiguration()" /><?php 
    UO:
    ?>
				</td>
			</tr>
		</table>
		</form>
		</div>
		
		<?php 
    mo_oauth_grant_settings($X6, $rL);
    mo_oauth_attribute_mapping($X6, $rL);
    $p8 = mo_oauth_client_get_option("\155\x6f\137\157\x61\165\164\x68\x5f\x61\x70\x70\137\x6e\141\x6d\x65\x5f" . $rL);
    if ($rL == "\x65\166\145\x6f\156\154\x69\x6e\x65") {
        goto g0;
    }
    $tG = false;
    goto dw;
    g0:
    $tG = true;
    dw:
    mo_oauth_client_rolemapping($rL, $tG);
    mo_oauth_client_instructions($p8, true);
}
function mo_oauth_grant_settings($X6, $rL)
{
    $wI = $X6["\x61\160\160\164\x79\160\145"] === "\x6f\160\x65\x6e\151\x64\143\157\x6e\x6e\x65\x63\x74" ? true : false;
    $ZW = mo_oauth_client_get_option("\155\157\137\157\x61\165\164\150\137" . $rL . "\137\x67\162\x61\156\x74\x5f\164\x79\x70\x65") ? mo_oauth_client_get_option("\155\157\x5f\157\141\165\x74\150\x5f" . $rL . "\x5f\147\x72\x61\x6e\164\137\164\x79\160\145") : "\101\165\x74\x68\x6f\x72\x69\x7a\141\164\151\x6f\156\40\x43\157\x64\145\x20\x47\x72\x61\156\164";
    $mw = $wI && mo_oauth_client_get_option("\155\x6f\137\157\141\x75\164\150\x5f" . $rL . "\137\x6a\x77\x74\x5f\163\165\160\160\x6f\162\x74") ? (int) mo_oauth_client_get_option("\155\x6f\137\x6f\x61\x75\164\150\x5f" . $rL . "\137\x6a\x77\164\x5f\163\165\x70\x70\157\x72\x74") : (int) 0;
    $Zq = $wI && mo_oauth_client_get_option("\x6d\157\137\x6f\x61\x75\x74\150\137" . $rL . "\x5f\152\167\x74\x5f\141\x6c\x67\157") ? mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\x75\164\x68\x5f" . $rL . "\137\152\167\x74\x5f\x61\154\x67\157") : "\x48\123\101";
    $R1 = $Zq === "\122\123\x41" && mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\164\x68\137" . $rL . "\x5f\170\x35\60\71\137\x63\145\x72\x74") ? mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\165\164\x68\x5f" . $rL . "\137\x78\65\60\71\x5f\143\x65\x72\164") : '';
    ?>
	<div class="mo_table_layout" id="grant_settings">
		<form name="form-common" method="post" action="admin.php?page=mo_oauth_settings">
			<input type="hidden" name="option" value="mo_oauth_grant_settings" />
			<input required="" type="hidden" id="mo_oauth_app_name2" name="mo_oauth_app_name" value="<?php 
    echo $rL;
    ?>
">
			<h3>Grant Type Configuration</h3>
			<table class="mo_settings_table" id="granttypetable">
				<tr>
					<td><strong>Grant Type:</strong><br></td>
					<td><select onclick="selectGrantType(this)" id="grant_type" name="grant_type">
						<option <?php 
    if (!($ZW === "\x41\x75\164\150\x6f\162\x69\172\141\164\x69\157\x6e\x20\103\x6f\x64\x65\x20\x47\x72\x61\x6e\x74")) {
        goto XI;
    }
    echo "\x73\x65\x6c\145\143\164\x65\x64";
    XI:
    ?>
>Authorization Code Grant</option>
						<option <?php 
    if (!($ZW === "\x49\155\x70\154\x69\143\x69\x74\x20\107\162\141\x6e\x74")) {
        goto Q4;
    }
    echo "\x73\145\x6c\145\x63\x74\x65\x64";
    Q4:
    ?>
>Implicit Grant</option>
						</select>
					</td>
				</tr>
				<tr>&nbsp;</tr>
			</table>
				<?php 
    $s4 = '';
    if (!($ZW !== "\111\x6d\160\x6c\151\x63\x69\164\40\107\x72\141\x6e\x74")) {
        goto HI;
    }
    $s4 = "\x64\x69\x73\x61\x62\154\145\x64";
    HI:
    ?>
 
					<h3>Implicit Grant Settings</h3>
					<table class="mo_settings_table" id="granttypetable">
						<tr>
							<td><strong>Enable JWT Support:</strong></td>
							<td><input id="jwt_support" onclick="toggle_jwt(this)" type="checkbox" name="jwt_support" <?php 
    if ($wI) {
        goto tO;
    }
    echo "\x64\151\163\x61\x62\154\145\144";
    tO:
    echo $s4;
    ?>
 value="" <?php 
    if (!($mw === 1)) {
        goto t7;
    }
    echo "\143\x68\145\143\x6b\145\x64";
    t7:
    ?>
 /></td>
						</tr>
						<tr>
							<td><strong>JWT Signing Algorithm:</strong></td>
							<td><select onclick="selectAlgo(this)" id="jwt_algo" <?php 
    if (!($mw !== 1)) {
        goto LB;
    }
    echo "\144\151\x73\x61\x62\154\x65\144";
    LB:
    ?>
 name="jwt_algo">
									<option <?php 
    if (!($Zq === "\110\x53\x41")) {
        goto jG;
    }
    echo "\163\145\x6c\x65\143\x74\145\144";
    jG:
    ?>
>HSA</option>
									<option <?php 
    if (!($Zq === "\122\123\101")) {
        goto Dg;
    }
    echo "\x73\x65\x6c\x65\143\164\145\x64";
    Dg:
    ?>
>RSA</option>
								</select>
							</td>
						</tr>						
							<tr <?php 
    if (!($Zq !== "\x52\x53\101")) {
        goto H1;
    }
    echo "\x68\151\x64\x64\145\156";
    H1:
    ?>
 id="x509_cert">
								<td><strong>X509 Certificate:</strong></td>
								<td><textarea id="rsa_cert" <?php 
    echo $s4;
    ?>
 style="resize:none;" rows="10" cols="50" name="mo_oauth_x509_cert"><?php 
    echo $R1;
    ?>
</textarea></td>
							</tr>
				</table>
			<br><br>
			<input type="submit" name="submit" value="Save settings" class="button button-primary button-large" />
	<?php 
    ?>
		</form>
	</div>

	<?php 
    if (!$wI) {
        goto b5;
    }
    ?>
		<script>
			function selectGrantType(element) {
				var gtype = element.options[element.selectedIndex].text;
				if(gtype === "Implicit Grant") {
					document.getElementById("jwt_support").disabled = false;
				} else {
					document.getElementById("jwt_support").disabled = true;
					document.getElementById("jwt_algo").disabled = true;
					document.getElementById("rsa_cert").disabled = true;
					document.getElementById("x509_cert").hidden = true;

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
				console.log(algo);
				if(algo === "RSA") {
					document.getElementById("x509_cert").hidden = false;
					document.getElementById("jwt_algo").disabled = false;
				} else {
					document.getElementById("x509_cert").hidden = true;
				}
			}
		</script>

		<?php 
    b5:
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
    if (!isset($X6["\x75\163\145\162\x6e\x61\x6d\x65\x5f\141\164\x74\x72"])) {
        goto hS;
    }
    echo $X6["\165\163\145\x72\156\141\x6d\145\x5f\x61\x74\164\x72"];
    hS:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_email_attr_div">
				<td><strong><font color="#FF0000">*</font>Email Attribute:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_email_attr" name="mo_oauth_email_attr" placeholder="Email Attributes Name" value="<?php 
    if (!isset($X6["\x65\x6d\141\x69\x6c\x5f\x61\164\164\x72"])) {
        goto tu;
    }
    echo $X6["\x65\155\x61\151\154\137\141\164\164\x72"];
    tu:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_name_attr_div">
				<td><strong><font color="#FF0000">*</font>First Name Attribute:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" id="mo_oauth_firstname_attr" name="mo_oauth_firstname_attr" placeholder="FirstName Attributes Name" value="<?php 
    if (!isset($X6["\x66\x69\x72\x73\164\x6e\x61\155\145\x5f\141\164\x74\x72"])) {
        goto Qi;
    }
    echo $X6["\146\151\x72\163\x74\156\x61\155\145\x5f\x61\x74\164\162"];
    Qi:
    ?>
"></td>
			</tr>
			<tr id="mo_oauth_name_attr_div">
				<td><strong><font color="#FF0000"></font>Last Name Attribute:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_lastname_attr" name="mo_oauth_lastname_attr" placeholder="LastName Attributes Name" value="<?php 
    if (!isset($X6["\154\x61\x73\x74\156\x61\x6d\x65\137\x61\x74\164\x72"])) {
        goto Vx;
    }
    echo $X6["\154\x61\x73\x74\156\141\x6d\145\x5f\x61\164\164\x72"];
    Vx:
    ?>
"></td>
			</tr>
			
			<tr id="mo_oauth_name_attr_div">
				<td><strong><font color="#FF0000"></font>Group Attributes Name:</strong></td>				
				<td>
					  <?php 
    $gx = mo_oauth_client_get_option("\x6d\157\137\157\141\165\164\150\137\x63\154\x69\145\x6e\x74\137" . $rL . "\137\155\x61\x70\160\x69\156\x67\x5f\x67\162\x6f\165\x70\x6e\141\155\145\137\141\164\x74\162\x69\x62\165\x74\145");
    ?>
					<input type="text"  class="mo_table_textbox"  name="mapping_groupname_attribute" placeholder="Group Attributes Name"  value="<?php 
    echo $gx;
    ?>
"  >
				</td>
			</tr>
			
						
			<?php 
    $q1 = isset($X6["\x67\x72\x6f\x75\160\x5f\141\x74\x74\x72"]) ? $X6["\147\x72\157\x75\x70\x5f\141\164\x74\x72"] : '';
    $ke = isset($X6["\144\x69\163\160\154\x61\x79\137\141\x74\164\x72"]) ? $X6["\x64\x69\x73\x70\x6c\x61\x79\x5f\141\164\164\x72"] : '';
    echo "\15\xa\11\11\11\40\x20\x3c\x74\x72\76\xd\xa\11\x9\11\x9\x3c\164\x64\76\x3c\x73\164\x72\x6f\x6e\x67\76\x44\x69\163\160\154\x61\x79\40\116\x61\x6d\x65\x3a\74\x2f\x73\x74\162\x6f\156\147\76\x3c\57\x74\x64\x3e\xd\xa\11\11\11\x9\74\x74\144\76\xd\xa\x9\11\11\11\11\74\x73\x65\x6c\145\x63\164\x20\156\141\155\x65\x3d\42\x6f\x61\165\x74\150\x5f\x63\154\x69\x65\156\164\137\x61\155\137\x64\x69\x73\x70\x6c\x61\x79\x5f\x6e\x61\155\x65\x22\x20\151\x64\75\42\157\x61\165\164\150\137\143\x6c\x69\145\x6e\164\x5f\x61\x6d\x5f\144\151\x73\160\x6c\141\x79\137\156\141\155\x65\x22\40\76\xd\12\x9\x9\x9\11\11\11\x3c\157\x70\164\x69\x6f\156\x20\x76\x61\154\x75\x65\x3d\x22\125\x53\x45\x52\116\x41\x4d\105\x22";
    if (!($ke == "\125\123\105\x52\116\101\x4d\105")) {
        goto r9;
    }
    echo "\x73\145\154\x65\143\x74\x65\144\75\x22\x73\x65\154\x65\x63\x74\145\144\42";
    r9:
    echo "\76\125\x73\145\162\x6e\x61\x6d\x65\x3c\x2f\x6f\160\x74\151\157\156\x3e\15\12\11\x9\11\11\x9\x9\x3c\157\x70\x74\x69\157\156\x20\x76\x61\x6c\x75\145\x3d\x22\106\116\x41\x4d\x45\42";
    if (!($ke == "\x46\116\101\x4d\105")) {
        goto cS;
    }
    echo "\163\145\x6c\145\143\164\x65\144\x3d\x22\163\x65\154\x65\143\164\x65\144\x22";
    cS:
    echo "\76\106\x69\x72\x73\x74\116\x61\155\145\x3c\x2f\x6f\160\164\151\157\156\x3e\xd\xa\x9\x9\11\x9\11\x9\x3c\157\x70\164\151\x6f\156\40\166\141\154\x75\x65\75\x22\x4c\x4e\101\115\x45\x22";
    if (!($ke == "\x4c\116\101\x4d\105")) {
        goto JP;
    }
    echo "\163\x65\x6c\x65\x63\164\x65\x64\75\x22\x73\x65\154\145\x63\164\x65\x64\42";
    JP:
    echo "\x3e\114\141\x73\x74\x4e\x61\155\145\74\x2f\157\160\164\x69\157\156\76\15\xa\11\11\x9\x9\x9\11\x3c\x6f\x70\164\151\x6f\156\x20\x76\141\x6c\x75\145\75\42\106\116\x41\x4d\105\x5f\114\116\x41\x4d\x45\x22";
    if (!($ke == "\106\116\x41\x4d\105\x5f\114\x4e\x41\115\105")) {
        goto eF;
    }
    echo "\x73\x65\154\x65\143\x74\x65\144\x3d\x22\x73\145\x6c\145\x63\164\145\144\x22";
    eF:
    echo "\x3e\x46\x69\x72\x73\164\116\141\155\145\40\114\x61\x73\x74\116\x61\155\x65\x3c\57\x6f\x70\x74\x69\x6f\x6e\76\xd\12\11\11\x9\x9\11\x9\74\157\x70\164\151\157\x6e\40\166\141\154\165\145\75\42\x4c\x4e\x41\x4d\x45\x5f\106\x4e\101\x4d\105\42";
    if (!($ke == "\x4c\x4e\x41\x4d\x45\137\x46\116\101\x4d\x45")) {
        goto hC;
    }
    echo "\163\x65\154\145\143\164\145\144\x3d\x22\x73\145\x6c\145\x63\x74\145\x64\x22";
    hC:
    echo "\76\114\x61\163\x74\116\141\155\x65\x20\x46\151\162\x73\x74\x4e\x61\155\x65\74\57\x6f\x70\x74\151\157\x6e\x3e\xd\xa\x9\x9\x9\11\x9\x3c\x2f\163\145\x6c\x65\143\164\x3e\xd\xa\x9\11\x9\x9\x3c\57\164\144\76\xd\xa\11\x9\x9\40\40\74\57\164\x72\x3e\15\xa\11\x9\11\40\40\74\164\162\x3e\74\x74\144\40\143\157\x6c\x73\160\x61\x6e\x3d\x22\x32\42\x3e\15\12\11\x9\x9\74\150\63\76\115\x61\x70\40\x43\x75\163\164\x6f\x6d\40\x41\x74\x74\162\x69\142\165\164\145\163\74\x2f\x68\x33\76\115\141\160\x20\145\x78\x74\162\141\40\x4f\101\x75\x74\x68\x20\120\x72\x6f\x76\x69\x64\145\162\x20\x61\x74\164\162\151\142\x75\164\x65\163\x20\167\150\151\143\x68\x20\x79\157\x75\40\x77\x69\x73\x68\40\x74\x6f\x20\142\x65\x20\151\x6e\143\154\x75\x64\145\144\40\x69\x6e\x20\164\150\x65\40\165\163\x65\162\40\160\x72\x6f\146\151\x6c\145\40\142\x65\x6c\157\x77\15\xa\x9\11\x9\x3c\x2f\x74\x64\76\74\x74\x64\x3e\x3c\x69\156\x70\x75\x74\x20\x74\171\x70\x65\x3d\42\x62\165\x74\x74\x6f\156\x22\40\156\x61\x6d\145\x3d\x22\x61\144\144\x5f\141\164\164\162\x69\x62\x75\164\145\x22\40\x76\141\x6c\x75\145\x3d\x22\53\x22\40\157\156\x63\154\151\x63\153\x3d\42\141\x64\x64\137\x63\x75\x73\x74\x6f\x6d\x5f\x61\x74\164\x72\x69\142\x75\x74\x65\x28\x29\73\x22\x20\x63\154\x61\x73\163\75\x22\x62\x75\x74\164\157\x6e\40\142\165\164\164\157\x6e\x2d\x70\162\151\x6d\141\162\x79\42\40\40\x2f\x3e\x3c\57\x74\144\76\15\xa\x9\x9\11\11\x9\x9\11\74\x74\x64\x3e\x3c\x69\x6e\x70\x75\x74\40\164\171\160\145\75\42\142\x75\164\x74\x6f\x6e\42\40\x6e\141\155\x65\75\42\162\x65\155\157\x76\145\x5f\141\164\164\162\151\142\x75\164\x65\x22\x20\x76\141\x6c\x75\145\x3d\x22\x2d\42\x20\x6f\x6e\x63\x6c\x69\143\x6b\x3d\42\x72\145\x6d\x6f\166\x65\x5f\x63\x75\163\164\x6f\x6d\x5f\x61\x74\164\162\x69\x62\165\x74\145\x28\x29\73\42\40\143\x6c\x61\163\163\x3d\42\x62\165\x74\164\x6f\156\x20\x62\165\164\164\x6f\x6e\55\160\162\151\x6d\141\162\x79\x22\40\40\40\x2f\76\74\x2f\x74\144\x3e\x3c\57\x74\x72\x3e\xd\xa\x9\x9\x9";
    if (mo_oauth_client_get_option("\155\157\137\x6f\141\165\164\x68\x5f\143\x6c\151\x65\156\164\137\x63\x75\x73\x74\157\x6d\137\141\164\164\x72\x73\x5f\x6d\x61\160\160\x69\156\x67")) {
        goto Ye;
    }
    echo "\74\164\162\40\x63\154\141\163\163\75\42\x72\157\167\163\42\x3e\74\164\144\76\74\x69\x6e\x70\x75\164\x20\164\x79\160\145\x3d\42\x74\x65\170\x74\42\x20\x6e\141\x6d\x65\75\42\155\157\137\157\141\x75\164\x68\x5f\x63\154\151\x65\156\x74\137\x63\165\x73\x74\x6f\x6d\x5f\x61\164\164\x72\x69\x62\x75\x74\x65\x5f\x6b\x65\171\137\x31\42\40\160\x6c\x61\143\145\x68\157\154\144\145\162\x3d\x22\x45\x6e\164\x65\162\x20\146\151\145\154\x64\x20\155\x65\x74\141\x20\156\x61\155\x65\x22\x20\x20\40\57\76\x3c\57\164\x64\76\xd\xa\x9\11\x9\x9\40\74\x74\x64\x3e\x3c\151\x6e\x70\x75\164\x20\x74\x79\160\145\x3d\x22\164\x65\170\x74\x22\x20\156\x61\155\145\x3d\x22\x6d\157\137\157\141\165\164\150\137\143\x6c\x69\145\156\164\137\x63\x75\163\164\x6f\155\x5f\141\164\x74\162\151\x62\x75\x74\x65\137\x76\x61\154\165\145\137\61\42\x20\160\154\x61\x63\145\150\x6f\154\x64\x65\162\x3d\42\x45\x6e\164\x65\x72\40\x61\164\x74\162\x69\x62\165\164\x65\x20\156\141\155\145\40\x66\162\x6f\x6d\x20\117\x41\165\x74\x68\x20\x50\162\157\166\151\144\145\x72\42\x20\163\x74\171\x6c\145\75\x22\167\x69\144\x74\150\x3a\67\x34\x25\x3b\42\40\40\x2f\x3e\74\57\x74\x64\76\15\xa\x9\11\x9\11\x20\74\57\164\162\x3e";
    goto qI;
    Ye:
    $Op = mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\x74\x68\x5f\143\154\151\145\x6e\x74\137\x63\x75\163\x74\157\155\x5f\x61\x74\164\162\163\137\x6d\141\x70\x70\151\156\147");
    $P3 = 0;
    foreach ($Op as $OY => $O2) {
        $P3++;
        echo "\x3c\164\162\x20\143\154\141\163\163\x3d\x22\x72\x6f\167\163\42\76\x3c\164\x64\76\74\x69\156\x70\165\164\40\164\x79\160\145\75\x22\164\145\170\x74\x22\40\x6e\x61\x6d\145\x3d\42\x6d\x6f\137\157\x61\165\x74\x68\137\x63\x6c\151\x65\x6e\164\x5f\143\165\x73\164\157\x6d\137\141\164\x74\x72\x69\x62\x75\164\x65\137\x6b\145\x79\137" . $P3 . "\42\x20\160\x6c\x61\x63\145\150\157\x6c\144\145\x72\75\42\x45\x6e\x74\145\x72\40\146\x69\145\x6c\144\x20\155\x65\x74\141\x20\x6e\x61\x6d\145\x22\40\40\x76\x61\x6c\x75\145\x3d\42" . $OY . "\x22\40\57\76\74\x2f\x74\144\x3e\15\12\11\x9\11\x9\40\x3c\x74\144\x3e\x3c\151\156\x70\x75\x74\x20\x74\x79\x70\145\x3d\x22\x74\145\x78\x74\42\40\156\141\155\x65\75\42\x6d\157\x5f\x6f\141\165\x74\150\137\x63\154\x69\x65\x6e\x74\137\x63\x75\163\164\157\x6d\x5f\x61\164\164\162\x69\142\165\164\145\x5f\x76\x61\x6c\165\x65\137" . $P3 . "\42\x20\160\x6c\x61\143\145\150\157\x6c\144\x65\162\x3d\42\x45\x6e\164\145\162\x20\141\164\164\x72\x69\142\165\164\145\x20\156\x61\x6d\x65\x20\146\162\x6f\155\x20\x4f\101\165\164\150\40\x50\162\157\x76\x69\x64\145\x72\42\x20\x73\x74\x79\x6c\145\x3d\x22\x77\151\144\164\x68\72\67\64\45\x3b\x22\x20\166\x61\154\165\x65\75\42" . $O2 . "\42\x20\x2f\x3e\x3c\57\x74\x64\x3e\15\12\x9\x9\11\x9\40\x3c\x2f\164\162\76";
        fL:
    }
    CW:
    qI:
    ?>
			<tr id="save_config_element">
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Save settings"
					class="button button-primary button-large" /></td>
			</tr>
			</table>
		</form>
		<?php 
    echo "\x3c\163\x63\162\151\160\164\76\15\12\x9\x9\11\x76\x61\x72\40\x63\x6f\165\x6e\x74\x41\164\x74\162\x69\142\165\x74\x65\163\40\75\40\x6a\x51\x75\145\162\171\x28\x22\43\x61\x74\164\162\x69\x62\x75\164\145\155\x61\160\x70\151\156\x67\164\141\x62\x6c\x65\x20\x74\x72\56\x72\157\167\x73\42\51\x2e\x6c\145\156\147\164\x68\73\xd\xa\x9\x9\x9\146\x75\x6e\143\164\x69\157\x6e\x20\141\x64\144\x5f\x63\x75\163\164\x6f\x6d\x5f\x61\164\x74\162\151\x62\x75\x74\145\50\x29\173\xd\xa\x9\11\11\11\x63\157\x75\x6e\x74\101\x74\164\x72\x69\x62\x75\164\x65\x73\x20\x2b\75\x20\x31\73\15\xa\11\11\11\11\162\157\x77\163\x20\x3d\x20\x22\x3c\164\x72\x20\x69\x64\x3d\x5c\42\162\x6f\x77\137\42\40\53\x63\x6f\x75\x6e\164\x41\x74\164\x72\x69\x62\165\x74\145\x73\40\53\40\42\x5c\x22\76\74\164\144\76\x3c\151\x6e\x70\165\164\40\164\x79\x70\x65\x3d\134\42\164\x65\x78\164\x5c\x22\40\156\141\155\x65\75\x5c\x22\155\157\x5f\x6f\141\x75\x74\x68\x5f\x63\154\151\x65\156\x74\137\143\165\x73\164\x6f\155\137\141\x74\164\162\151\142\165\x74\145\x5f\x6b\x65\171\x5f\42\x20\x2b\x20\143\x6f\165\x6e\164\x41\164\164\162\x69\142\x75\x74\x65\163\x20\53\40\42\x5c\x22\40\x69\x64\75\134\x22\x6d\x6f\x5f\x6f\141\165\x74\150\137\x63\x6c\x69\x65\156\164\x5f\x63\x75\x73\x74\x6f\155\137\141\164\x74\x72\151\x62\x75\164\145\137\x6b\x65\x79\x5f\42\40\x2b\143\x6f\165\x6e\x74\101\164\164\x72\151\x62\x75\164\145\163\40\53\40\x22\x5c\42\x20\x20\x70\x6c\x61\x63\x65\x68\x6f\154\x64\x65\x72\x3d\134\x22\x45\156\x74\x65\162\40\x66\151\x65\x6c\x64\40\155\x65\164\x61\x20\156\x61\x6d\x65\134\x22\40\40\76\74\57\x74\144\76\74\x74\144\x3e\74\x69\156\x70\x75\x74\40\164\x79\x70\145\75\x5c\x22\x74\145\x78\164\134\42\x20\x6e\x61\x6d\145\75\134\x22\155\157\x5f\x6f\x61\x75\x74\150\x5f\x63\x6c\x69\145\x6e\x74\137\143\165\163\164\x6f\155\137\x61\164\164\x72\151\x62\x75\x74\145\x5f\166\x61\154\x75\x65\x5f\x22\x20\x2b\x63\157\x75\x6e\x74\x41\x74\x74\162\x69\142\x75\164\145\163\x20\53\x20\x22\134\x22\x20\151\144\75\134\42\x6d\157\x5f\x6f\141\x75\x74\x68\x5f\143\x6c\x69\x65\x6e\164\x5f\143\165\163\x74\157\x6d\x5f\x61\164\164\162\x69\142\x75\x74\145\137\x76\141\x6c\165\x65\137\42\40\53\x63\x6f\x75\x6e\164\101\x74\x74\162\x69\x62\165\x74\x65\163\40\53\x20\42\134\42\x20\x70\154\141\143\x65\150\x6f\x6c\144\145\x72\75\x5c\42\x45\156\x74\145\162\40\x41\164\164\162\x69\142\165\x74\145\x20\x4e\141\x6d\x65\40\146\x72\x6f\x6d\x20\x4f\101\165\x74\x68\40\x50\162\x6f\166\151\x64\145\x72\x5c\42\x20\x73\x74\x79\x6c\x65\75\134\42\x77\151\x64\x74\150\72\67\64\45\73\134\x22\40\x2f\76\x3c\57\x74\144\x3e\x3c\57\x74\x72\x3e\42\x3b\15\12\15\12\x9\x9\x9\11\152\x51\165\145\162\171\50\162\x6f\167\x73\51\x2e\x69\x6e\x73\x65\162\164\102\145\146\157\x72\x65\50\x6a\121\x75\145\x72\171\50\x22\x23\163\x61\x76\x65\x5f\x63\157\156\x66\x69\147\x5f\x65\154\145\x6d\145\156\164\42\x29\51\x3b\xd\12\x9\11\x9\x7d\15\xa\xd\xa\11\x9\11\x66\165\x6e\x63\x74\x69\x6f\156\x20\162\x65\155\157\166\145\137\x63\165\163\164\x6f\155\137\x61\x74\164\x72\x69\x62\165\164\145\50\x29\x7b\15\12\11\x9\x9\11\152\x51\x75\x65\162\171\x28\x22\43\162\x6f\x77\137\42\40\x2b\40\143\x6f\165\156\x74\x41\x74\x74\x72\151\x62\x75\164\x65\163\51\x2e\x72\x65\155\x6f\x76\x65\x28\x29\x3b\xd\xa\11\11\x9\11\143\x6f\x75\156\164\101\x74\x74\162\x69\x62\x75\x74\145\163\x20\55\75\x20\61\x3b\15\xa\11\x9\x9\x9\151\x66\50\x63\157\165\156\164\101\164\x74\162\151\x62\x75\164\145\163\x20\75\75\x20\x30\51\xd\12\x9\11\11\11\11\x63\157\x75\156\164\101\164\164\x72\151\142\x75\164\x65\163\40\75\40\x31\x3b\xd\xa\x9\11\11\175\xd\12\11\x9\11\x3c\57\x73\x63\162\151\x70\164\x3e";
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
    $gx = mo_oauth_client_get_option("\155\157\x5f\x6f\x61\165\x74\150\x5f\x63\154\151\145\x6e\164\137" . $rL . "\137\155\141\160\x70\x69\x6e\147\x5f\147\x72\157\x75\x70\156\x61\155\x65\137\141\x74\164\162\151\142\x75\164\x65");
    if (!(!$dj && empty($gx))) {
        goto Ut;
    }
    echo "\x3c\x70\40\x73\x74\x79\x6c\145\x3d\x63\x6f\154\x6f\162\72\162\145\x64\76\x43\157\x6e\x66\151\x67\x75\x72\x65\x20\74\x62\x3e\107\162\157\x75\160\x20\x41\x74\x74\162\x69\x62\x75\164\x65\40\116\141\155\x65\x3c\x2f\x62\76\x20\151\x6e\x20\x61\x74\x74\x72\151\142\165\x74\145\40\x6d\x61\x70\x70\x69\x6e\x67\40\x61\x62\x6f\166\x65\40\164\157\x20\x65\x6e\141\142\154\145\40\162\x6f\x6c\145\x20\x6d\141\x70\160\x69\x6e\x67\x2e\74\57\160\x3e";
    Ut:
    ?>
	<b>NOTE: </b>Role will be assigned only to non-admin users (user that do NOT have Administrator privileges). You will have to manually change the role of Administrator users.<br>
	<form id="role_mapping_form" name="f" method="post" action="">
		<input class="mo_table_textbox" required="" type="hidden"  name="mo_oauth_app_name" value="<?php 
    echo $rL;
    ?>
">
		<input  type="hidden" name="option" value="mo_oauth_client_save_role_mapping" />
		
		<p><input type="checkbox" name="keep_existing_user_roles" value="1" <?php 
    checked(mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\165\x74\150\137\x63\154\151\x65\156\x74\x5f" . $rL . "\x5f\153\x65\145\x70\x5f\145\x78\151\163\x74\151\x6e\x67\x5f\x75\163\x65\x72\x5f\162\157\x6c\x65\163") == 1);
    ?>
 /><strong> Keep existing user roles</strong><br><small>Role mapping won't apply to existing wordpress users.</small></p>
		<p><input type="checkbox" name="restrict_login_for_mapped_roles" value="true" <?php 
    $Q0 = mo_oauth_client_get_option("\x6d\157\137\157\x61\x75\x74\x68\x5f\143\154\151\145\x6e\164\x5f" . $rL . "\137\x72\145\x73\x74\x72\151\x63\164\137\154\157\147\151\x6e\x5f\x66\157\162\x5f\155\141\160\160\x65\144\137\x72\x6f\154\x65\163");
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
    if (!mo_oauth_client_get_option("\155\157\x5f\157\141\165\x74\150\137\x63\154\x69\145\x6e\164\137" . $rL . "\137\162\145\x73\164\162\151\x63\164\x5f\x6c\157\147\151\156\x5f\x66\x6f\x72\137\x6d\141\x70\x70\145\144\137\162\157\x6c\145\163")) {
        goto ph;
    }
    ?>
 disabled="true"<?php 
    ph:
    ?>
 >
						   <?php 
    if (mo_oauth_client_get_option("\x6d\157\x5f\157\x61\165\x74\150\x5f\x63\x6c\151\145\156\164\x5f" . $rL . "\x5f\x6d\x61\160\x70\151\156\147\x5f\166\141\154\x75\145\x5f\144\145\x66\141\x75\154\x74")) {
        goto jT;
    }
    $CC = mo_oauth_client_get_option("\x64\145\x66\141\165\x6c\x74\x5f\162\157\154\145");
    goto yb;
    jT:
    $CC = mo_oauth_client_get_option("\155\x6f\137\157\x61\x75\164\150\x5f\143\x6c\151\x65\156\164\x5f" . $rL . "\x5f\155\141\x70\160\151\x6e\x67\x5f\166\141\x6c\x75\145\137\144\145\x66\x61\165\x6c\164");
    yb:
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
        goto dV;
    }
    echo "\x47\162\157\165\x70\x20\x41\x74\x74\x72\151\142\x75\164\x65\40\x56\x61\154\x75\x65";
    goto rB;
    dV:
    echo "\x45\x76\145\40\x4f\156\154\151\156\145\40\103\157\x72\x70\x6f\x72\x61\x74\x69\157\156\x20\x4e\x61\x6d\145";
    rB:
    ?>
</b></td>
					<td style="width:50%"><b>WordPress Role</b></td>
				</tr>
				
				<?php 
    $wN = 1;
    if (!is_numeric(mo_oauth_client_get_option("\155\157\137\157\x61\x75\164\x68\137\x63\x6c\151\x65\156\x74\x5f" . $rL . "\x5f\162\157\154\x65\137\155\x61\x70\x70\151\x6e\147\137\x63\157\x75\156\x74"))) {
        goto xQ;
    }
    $wN = intval(mo_oauth_client_get_option("\x6d\157\x5f\157\141\165\164\150\137\x63\154\x69\x65\156\164\x5f" . $rL . "\137\x72\157\154\x65\x5f\x6d\141\160\x70\151\156\147\x5f\143\157\165\156\164"));
    xQ:
    $P3 = 1;
    UE:
    if (!($P3 <= $wN)) {
        goto AR;
    }
    ?>
				<tr>
					<td><input class="mo_oauth_client_table_textbox" type="text" name="mapping_key_<?php 
    echo $P3;
    ?>
"
						 value="<?php 
    echo mo_oauth_client_get_option("\x6d\x6f\137\x6f\141\165\x74\150\137\143\x6c\151\145\156\164\x5f" . $rL . "\137\155\141\x70\160\x69\156\x67\137\x6b\x65\171\137" . $P3);
    ?>
"  placeholder="group name"  />
					</td>
					<td>
						<select name="mapping_value_<?php 
    echo $P3;
    ?>
" id="role" style="width:100%" >
						   <?php 
    wp_dropdown_roles(mo_oauth_client_get_option("\x6d\x6f\137\x6f\141\165\x74\x68\x5f\x63\154\151\145\156\x74\x5f" . $rL . "\x5f\x6d\141\160\x70\x69\x6e\147\x5f\x76\x61\154\x75\x65\137" . $P3));
    ?>
						</select>
					</td>
				</tr>
				<?php 
    pk:
    $P3++;
    goto UE;
    AR:
    if (!($wN == 0)) {
        goto Ec;
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
    Ec:
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
        goto Vi;
    }
    ?>
		jQuery("#rolemapping :input").prop("disabled", true);
		<?php 
    Vi:
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
