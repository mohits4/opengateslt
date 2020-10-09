<?php


function mo_oauth_show_new_registration_page()
{
    mo_oauth_client_update_option("\156\x65\167\137\x72\145\x67\151\163\164\x72\141\x74\x69\x6f\156", "\x74\162\165\x65");
    $current_user = wp_get_current_user();
    ?>
			<!--Register with miniOrange-->
		<form name="f" method="post" action="">
			<input type="hidden" name="option" value="mo_oauth_register_customer" />
			<div class="mo_table_layout">
				<div id="toggle1" class="panel_toggle">
					<h3>Register with miniOrange</h3>
				</div>
				<div id="panel1">
					<!--<p><b>Register with miniOrange</b></p>-->
					<p>Please enter a valid Email ID that you have access to. You will be able to move forward after verifying an OTP that we will be sending to this email.
					</p>
					<table class="mo_settings_table">
						<tr>
							<td><b><font color="#FF0000">*</font>Email:</b></td>
							<td><input class="mo_table_textbox" type="email" name="email"
								required placeholder="person@example.com"
								value="<?php 
    echo mo_oauth_client_get_option("\155\x6f\137\157\141\165\x74\x68\x5f\x61\x64\x6d\151\x6e\137\x65\155\141\x69\154");
    ?>
" />
							</td>
						</tr>
						<tr class="hidden">
							<td><b><font color="#FF0000">*</font>Website/Company Name:</b></td>
							<td><input class="mo_table_textbox" type="text" name="company"
							required placeholder="Enter website or company name"
							value="<?php 
    echo $_SERVER["\123\x45\122\x56\x45\x52\x5f\x4e\101\115\x45"];
    ?>
"/></td>
						</tr>
						<tr  class="hidden">
							<td><b>&nbsp;&nbsp;First Name:</b></td>
							<td><input class="mo_openid_table_textbox" type="text" name="fname"
							placeholder="Enter first name" value="<?php 
    echo $current_user->user_firstname;
    ?>
" /></td>
						</tr>
						<tr class="hidden">
							<td><b>&nbsp;&nbsp;Last Name:</b></td>
							<td><input class="mo_openid_table_textbox" type="text" name="lname"
							placeholder="Enter last name" value="<?php 
    echo $current_user->user_lastname;
    ?>
" /></td>
						</tr>

						<tr  class="hidden">
							<td><b>&nbsp;&nbsp;Phone number :</b></td>
							 <td><input class="mo_table_textbox" type="text" name="phone" pattern="[\+]?([0-9]{1,4})?\s?([0-9]{7,12})?" id="phone" title="Phone with country code eg. +1xxxxxxxxxx" placeholder="Phone with country code eg. +1xxxxxxxxxx" value="<?php 
    echo mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\x61\x75\x74\150\137\141\x64\x6d\x69\156\x5f\x70\150\x6f\156\x65");
    ?>
" />
							 This is an optional field. We will contact you only if you need support.</td>
							</tr>
						</tr>
						<tr  class="hidden">
							<td></td>
							<td>We will call only if you need support.</td>
						</tr>
						<tr>
							<td><b><font color="#FF0000">*</font>Password:</b></td>
							<td><input class="mo_table_textbox" required type="password"
								name="password" placeholder="Choose your password (Min. length 8)" /></td>
						</tr>
						<tr>
							<td><b><font color="#FF0000">*</font>Confirm Password:</b></td>
							<td><input class="mo_table_textbox" required type="password"
								name="confirmPassword" placeholder="Confirm your password" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><br /><input type="submit" name="submit" value="Save" style="width:100px;"
								class="button button-primary button-large" /></td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		<script>
			jQuery("#phone").intlTelInput();
		</script>
		<?php 
}
function mo_oauth_lp()
{
    $GK = '';
    if (!isset($_POST["\155\x6f\137\157\141\165\164\150\137\x63\x6c\x69\x65\x6e\164\137\154\151\x63\x65\x6e\163\x65\137\153\145\171"])) {
        goto Yi;
    }
    $GK = $_POST["\x6d\157\137\x6f\141\x75\x74\x68\137\x63\x6c\x69\145\156\x74\137\154\x69\x63\x65\156\163\145\x5f\x6b\x65\x79"];
    Yi:
    ?>

			<div class="mo_table_layout">
			<br>
				<h3>Verify your license</h3>
				<form name="f" method="post" action="">
					<input type="hidden" name="option" value="mo_oauth_client_verify_license" />
					<table class="mo_settings_table">
						<tr>
						<td><b><font color="#FF0000">*</font>License Key:</b></td>
						<td><input class="mo_table_textbox" required type="text" name="mo_oauth_client_license_key" placeholder="Enter your license key to activate the plugin" value="<?php 
    echo $GK;
    ?>
" /></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="submit" value="Activate License" class="button button-primary button-large" />
						</tr>
						<tr><td>&nbsp;</td><td></td></tr>
						<tr><td>&nbsp;</td><td></td></tr>
					</table>
				</form>

			</div>

		<?php 
}
function mo_oauth_show_verify_password_page()
{
    ?>
			<!--Verify password with miniOrange-->
		<form name="f" method="post" action="">
			<input type="hidden" name="option" value="mo_oauth_verify_customer" />
			<div class="mo_table_layout">
				<div id="toggle1" class="panel_toggle">
					<h3>Login with miniOrange</h3>
				</div>
				<div id="panel1">
					</p>
					<table class="mo_settings_table">
						<tr>
							<td><b><font color="#FF0000">*</font>Email:</b></td>
							<td><input class="mo_table_textbox" type="email" name="email"
								required placeholder="person@example.com"
								value="<?php 
    echo mo_oauth_client_get_option("\155\x6f\137\x6f\x61\x75\164\150\x5f\x61\144\x6d\151\x6e\x5f\x65\155\x61\x69\x6c");
    ?>
" /></td>
						</tr>
						<td><b><font color="#FF0000">*</font>Password:</b></td>
						<td><input class="mo_table_textbox" required type="password"
							name="password" placeholder="Choose your password" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="submit"
								class="button button-primary button-large" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
								target="_blank"
								href="<?php 
    echo mo_oauth_client_get_option("\150\x6f\163\164\x5f\x6e\x61\155\x65") . "\57\x6d\x6f\141\163\57\151\x64\160\x2f\x75\163\145\x72\x66\x6f\x72\147\x6f\x74\x70\141\163\163\167\x6f\x72\x64";
    ?>
">Forgot
									your password?</a></td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		<?php 
}
?>
