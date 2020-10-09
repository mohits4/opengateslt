<?php


global $Sk;
function mo_oauth_client_render_grant_settings($W3, $X3)
{
    global $Sk;
    $eg = isset($W3["\152\x77\164\137\x73\x75\x70\x70\x6f\162\x74"]) ? $W3["\152\x77\x74\x5f\163\165\160\160\157\162\x74"] : 0;
    $RK = isset($W3["\152\x77\164\137\x61\154\x67\157"]) ? $W3["\x6a\167\164\137\x61\x6c\147\157"] : "\x48\x53\101";
    $C6 = isset($W3["\170\65\60\x39\x5f\x63\145\162\x74"]) ? $W3["\170\x35\60\71\137\143\145\x72\x74"] : '';
    $jI = isset($W3["\x70\153\x63\x65\137\146\154\157\167"]) ? $W3["\160\153\143\x65\137\x66\154\x6f\167"] : 0;
    $xT = "\163\145\154\x65\x63\x74\145\144";
    $uL = "\152\167\x6b\x73\137\165\x72\151";
    ?>
	<div class="mo_table_layout" id="grant_settings">
		<form name="form-common" id="multipurpose-form" method="post" action="admin.php?page=mo_oauth_settings">
			<input type="hidden" name="option" value="mo_oauth_grant_settings" />
			<?php 
    wp_nonce_field("\x6d\157\x5f\157\x61\x75\x74\150\x5f\147\x72\141\156\164\x5f\x73\145\164\x74\151\156\x67\163", "\155\x6f\137\x6f\x61\x75\164\x68\x5f\147\x72\x61\x6e\164\x5f\x73\145\164\164\151\156\x67\163\137\156\157\156\143\145");
    ?>
			<input required="" type="hidden" id="mo_oauth_app_name2" name="mo_oauth_app_name" value="<?php 
    echo $X3;
    ?>
">
			<h3>Advanced Grant Type Configuration</h3>
				<div id="implicit-grant-settings">
					<table class="mo_settings_table" id="granttypetable">
						<tr>
							<td><strong>Enable JWT Verification:</strong></td>
							<td><input id="jwt_support" onclick="toggle_jwt(this)" type="checkbox" name="jwt_support" value="" <?php 
    echo 1 === $eg ? "\x63\x68\145\143\153\145\x64" : '';
    ?>
 /></td>
						</tr>
						<tr>
							<td><strong>JWT Signing Algorithm:</strong></td>
							<td><select onclick="selectAlgo(this)" id="jwt_algo" <?php 
    echo 1 === $eg ? '' : "\144\x69\x73\141\142\x6c\x65\x64";
    ?>
 name="jwt_algo">
									<option <?php 
    echo wp_kses("\110\x53\x41" === $RK ? $xT : '', get_valid_html());
    ?>
>HSA</option>
									<option <?php 
    echo wp_kses("\122\x53\101" === $RK ? $xT : '', get_valid_html());
    ?>
>RSA</option>
								</select>
							</td>
						</tr>
						<tr <?php 
    echo "\x52\x53\x41" !== $RK ? "\x68\x69\144\144\x65\x6e" : '';
    ?>
 id="x509_cert">
							<td>
								<strong>
									<span id='req-star' class="mo_premium_feature">
										<?php 
    echo "\122\x53\x41" === $RK && (isset($W3[$uL]) && '' === $W3[$uL]) ? "\x2a" : '';
    ?>
									</span>X509 Certificate:
								</strong>
							</td>
							<td>
								<textarea id="rsa_cert" style="resize:none;" <?php 
    echo "\122\x53\101" === $RK && (isset($W3[$uL]) && '' === $W3[$uL]) ? "\x72\145\161\165\151\162\145\x64" : '';
    ?>
 rows="10" cols="50" name="mo_oauth_x509_cert"><?php 
    echo $C6;
    ?>
</textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><strong>PKCE (Proof Key for Code Exchange):</strong></td>
							<td><input <?php 
    echo !$Sk->check_versi(3) ? "\144\151\163\x61\142\154\x65\x64" : '';
    ?>
 id="pkce_flow" type="checkbox" name="pkce_flow" value="0" <?php 
    echo 1 === $jI ? "\143\x68\x65\143\x6b\145\x64" : '';
    ?>
 /></td>
						</tr>
					</table>
					<p style="font-size:12px"><strong>Note: </strong>Select PKCE only when you are using Authorization Code Grant. You can enter any value in the client secret field.</p>
				</div>
			<br><br>
			<input type="submit" name="submit" value="Save settings" class="button button-primary button-large" style="margin: 10px;" />
		</form>
	</div>
		<script>
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
					if(document.getElementById("mo_oauth_jwksurl").value === "") {
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

			jQuery(document).ready(function() {
				moAdjustFields();
			});

			function moAdjustFields() {
				var $mo = jQuery;
				var algo = $mo("#jwt_algo").val();
				if( "HSA" == algo && $mo("mo_oauth_jwksurl").value === "") {
					$mo("rsa_cert").required = true;
				} else {
					$mo("req-star").hidden = true;
					$mo("rsa_cert").required = false;
				}
			}
		</script>

		<?php 
}
add_action("\155\x6f\x5f\157\x61\165\164\150\137\x63\154\151\145\156\x74\137\147\162\141\x6e\164\x5f\163\145\x74\164\x69\x6e\147\163\x5f\151\x6e\x74\x65\x72\156\x61\x6c", "\155\157\x5f\x6f\141\165\x74\150\137\x63\x6c\151\145\x6e\x74\x5f\162\x65\x6e\144\x65\162\x5f\x67\x72\141\156\164\x5f\x73\x65\164\164\x69\156\x67\x73", 10, 2);
function add_grant_type_dd($W3)
{
    global $Sk;
    $Um = isset($W3["\147\162\x61\x6e\x74\x5f\x74\x79\x70\145"]) ? $W3["\x67\x72\x61\x6e\x74\137\x74\171\x70\x65"] : "\101\x75\x74\150\157\162\x69\x7a\x61\164\x69\x6f\x6e\x20\103\157\144\x65\40\107\162\141\156\164";
    $xT = "\x73\145\x6c\x65\143\x74\145\x64";
    ?>
	<tr>
		<td><strong>Grant Type:</strong><br></td>
		<td><select id="grant_type" name="grant_type">
				<option <?php 
    echo wp_kses("\x41\165\x74\150\x6f\162\x69\172\x61\164\x69\157\156\40\103\157\144\x65\40\x47\162\141\x6e\164" === $Um ? $xT : '', get_valid_html());
    ?>
>Authorization Code Grant</option>
				<option <?php 
    echo wp_kses("\x49\x6d\x70\154\151\x63\151\x74\40\107\x72\141\156\164" === $Um ? $xT : '', get_valid_html());
    ?>
>Implicit Grant</option>
				<option <?php 
    echo wp_kses("\120\141\x73\163\167\x6f\x72\x64\40\107\x72\x61\x6e\164" === $Um ? $xT : '', get_valid_html());
    ?>
>Password Grant</option>
			</select>
		</td>
	</tr>
	<?php 
    $yI = $Sk->mo_oauth_client_get_option("\155\157\137\157\141\x75\x74\x68\137\x65\156\141\x62\154\145\137\x6f\141\165\x74\x68\137\167\160\x5f\154\157\x67\x69\x6e");
    $yI = $yI && $W3["\x61\160\160\111\144"] === $yI;
    if (!("\x50\141\x73\x73\x77\x6f\162\x64\40\x47\162\141\x6e\164" === $Um)) {
        goto TA;
    }
    ?>
		<tr>
			<td>&nbsp;</td>
			<td><input type="checkbox" <?php 
    echo $yI ? "\143\150\x65\143\x6b\x65\144" : '';
    ?>
 name="enable_oauth_wp_login" id="enable_oauth_wp_login">&nbsp;<strong>Check this if you want to allow users to login through default WordPress Login form.</strong></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<?php 
    TA:
}
add_action("\155\x6f\137\157\141\x75\164\x68\137\143\x6c\151\145\156\164\137\147\162\x61\156\x74\x5f\x64\x64\x5f\x69\x6e\x74\x65\x72\x6e\141\x6c", "\141\x64\x64\137\x67\162\141\x6e\164\137\x74\x79\x70\x65\x5f\144\144", 10, 1);
