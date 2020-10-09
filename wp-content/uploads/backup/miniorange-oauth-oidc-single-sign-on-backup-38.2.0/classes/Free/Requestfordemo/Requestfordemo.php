<?php


namespace MoOauthClient\Free;

use MoOauthClient\Free\RequestForDemoInterface;
class Requestfordemo implements RequestForDemoInterface
{
    private $versi;
    public function __construct()
    {
        $this->versi = VERSION;
    }
    public function render_free_ui()
    {
        global $Sk;
        ?>
		<div id="mo_oauth_requestdemo" class="mo_table_layout mo_oauth_app_requestdemo <?php 
        echo $Cj;
        ?>
">
		<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings&tab=requestfordemo">
			<input type="hidden" name="option" value="mo_oauth_app_requestdemo" />
			<?php 
        wp_nonce_field("\155\157\x5f\157\141\165\x74\x68\137\141\160\x70\x5f\162\145\x71\x75\x65\x73\x74\144\145\x6d\157", "\x6d\x6f\x5f\157\141\165\164\x68\x5f\x61\160\x70\137\x72\x65\161\165\145\163\164\x64\x65\x6d\x6f\x5f\x6e\x6f\156\143\x65");
        ?>
			<table class="mo_settings_table" cellpadding="4" cellspacing="4">
				<tr>
					<td><strong>Email : </strong></td>
					<td><input required type="text" style="<?php 
        echo $RX;
        ?>
" name="mo_oauth_client_demo_email" placeholder="Email for demo setup" value="<?php 
        echo get_option("\155\x6f\137\157\x61\165\164\150\137\141\144\155\x69\x6e\137\x65\155\x61\151\154");
        ?>
" /></td>
				</tr>
				<tr>
					<td><strong>Request a demo for : </strong></td>
					<td>
						<select required style="<?php 
        echo $RX;
        ?>
" name="mo_oauth_client_demo_plan" id="mo_oauth_client_demo_plan_id" onclick="moOauthClientAddDescriptionjs()">
							<option disabled selected>------------------ Select ------------------</option>
							<option value="WP OAuth Client Standard Plugin">WP OAuth Client Standard Plugin</option>
							<option value="WP OAuth Client Premium Plugin">WP OAuth Client Premium Plugin</option>
							<option value="WP OAuth Client Enterprise Plugin">WP OAuth Client Enterprise Plugin</option>
							<option value="Not Sure">Not Sure</option>
						</select>
					</td>
				</tr>
				<tr id="demoDescription" style="display:none;">
					<td><strong>Description : </strong></td>
					<td>
						<textarea type="text" name="mo_oauth_client_demo_description" style="resize: vertical; width:350px; height:100px;" rows="4" placeholder="Need assistance? Write us about your requirement and we will suggest the relevant plan for you." value="<?php 
        isset($Zt);
        ?>
" /></textarea>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="Submit Demo Request" class="button button-primary button-large" /></td>
				</tr>
			</table>
		</form>
		</div>
		<script type="text/javascript">
			function moOauthClientAddDescriptionjs() {
				// alert("working");
				var x = document.getElementById("mo_oauth_client_demo_plan_id").selectedIndex;
				var otherOption = document.getElementById("mo_oauth_client_demo_plan_id").options;
				if (otherOption[x].index == 4){
					demoDescription.style.display = "";
				} else {
					demoDescription.style.display = "none";
				}
			}
		</script>
		<?php 
    }
}
