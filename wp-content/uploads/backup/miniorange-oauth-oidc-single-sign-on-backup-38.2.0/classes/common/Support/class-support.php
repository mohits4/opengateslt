<?php


namespace MoOauthClient;

class Support
{
    public static function support()
    {
        self::support_page();
    }
    private static function support_page()
    {
        global $Sk;
        ?>
		<div id="mo_support_layout" class="mo_support_layout">
			<div>
				<h3>Contact Us</h3>
				<p>Need any help? Couldn't find an answer in <a href="<?php 
        echo add_query_arg(array("\164\x61\x62" => "\146\141\x71"), $_SERVER["\122\105\x51\125\105\x53\x54\137\125\122\111"]);
        ?>
">FAQ</a>?<br>Just send us a query so we can help you.</p>
				<form method="post" action="">
					<input type="hidden" name="option" value="mo_oauth_contact_us_query_option" />
					<?php 
        wp_nonce_field("\x6d\x6f\x5f\x6f\141\x75\x74\150\x5f\x63\157\156\164\141\x63\164\x5f\165\163\x5f\161\165\145\x72\171\137\157\160\x74\x69\157\x6e", "\x6d\x6f\137\x6f\141\x75\x74\x68\x5f\143\x6f\x6e\164\x61\x63\164\137\165\x73\x5f\x71\165\145\x72\171\137\157\x70\164\151\x6f\x6e\137\x6e\x6f\x6e\x63\x65");
        ?>
					<table class="mo_settings_table">
						<tr>
							<td><input type="email" class="mo_table_textbox" required name="mo_oauth_contact_us_email" placeholder="Enter email here"
							value="<?php 
        echo wp_kses($Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\141\165\164\x68\137\x61\144\x6d\x69\156\x5f\x65\x6d\141\151\154"), \get_valid_html());
        ?>
"></td>
						</tr>
						<tr>
							<td><input type="tel" id="contact_us_phone" pattern="[\+]\d{11,14}|[\+]\d{1,4}[\s]\d{9,10}" placeholder="Enter phone here" class="mo_table_textbox" name="mo_oauth_contact_us_phone" value="<?php 
        echo wp_kses($Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\165\164\x68\x5f\x61\144\155\151\x6e\x5f\160\x68\157\x6e\x65"), \get_valid_html());
        ?>
"></td>
						</tr>
						<tr>
							<td><textarea class="mo_table_textbox" onkeypress="mo_oauth_valid_query(this)" placeholder="Enter your query here" onkeyup="mo_oauth_valid_query(this)" onblur="mo_oauth_valid_query(this)" required name="mo_oauth_contact_us_query" rows="4" style="resize: vertical;"></textarea></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="mo_oauth_send_plugin_config" id="mo_oauth_send_plugin_config" checked>&nbsp;Send Plugin Configuration</td>
						</tr>
						<tr>
							<td><small style="color:#666">We will not be sending your Client IDs or Client Secrets.</small></td>
						</tr>
					</table>
					<div style="text-align:left;">
						<input type="submit" name="submit" style="margin-top:15px; width:100px;" class="button button-primary button-large" />
					</div>
					<p>If you want custom features in the plugin, just drop an email at <a href="mailto:info@miniorange.com">info@miniorange.com</a>.</p>
				</form>
			</div>
		</div>
		<script>
			jQuery("#contact_us_phone").intlTelInput();
			function mo_oauth_valid_query(f) {
				!(/^[a-zA-Z?,.\(\)\/@ 0-9]*$/).test(f.value) ? f.value = f.value.replace(
						/[^a-zA-Z?,.\(\)\/@ 0-9]/, '') : null;
			}
		</script>
		<?php 
    }
}
