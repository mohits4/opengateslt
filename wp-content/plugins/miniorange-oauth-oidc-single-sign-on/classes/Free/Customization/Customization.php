<?php


namespace MoOauthClient\Free;

use MoOauthClient\Free\CustomizationInterface;
class Customization implements CustomizationInterface
{
    private $versi;
    function __construct()
    {
        $this->versi = VERSION;
    }
    function render_free_ui()
    {
        global $Sk;
        $Oi = $Sk->mo_oauth_client_get_option("\155\157\x5f\157\x61\165\164\150\137\x69\x63\157\x6e\137\143\x6f\156\x66\151\147\165\162\145\137\x63\x73\163");
        $Oi = str_replace("\x7d", '', $Oi);
        $Oi = str_replace("\56\x6f\141\165\x74\x68\154\157\x67\x69\156\x62\x75\x74\x74\x6f\156\x7b", '', $Oi);
        $Oi = str_replace("\56\x6f\141\165\164\x68\154\x6f\x67\151\156\142\165\x74\164\157\x6e\x20\173", '', $Oi);
        $Cj = $h_ = '';
        function format_custom_css_value($Oh)
        {
            $xW = explode("\x3b", $Oh);
            $th = '';
            $nH = 0;
            Qz:
            if (!($nH < count($xW))) {
                goto YX;
            }
            $th .= str_replace("\15\xa", '', $xW[$nH]);
            $th .= empty($xW[$nH]) ? '' : "\x3b" . "\xd\xa";
            ST:
            $nH++;
            goto Qz;
            YX:
            return $th;
        }
        global $Sk;
        ?>

	<?php 
        if (!(($Sk->mo_oauth_hbca_xyake() || !$Sk->mo_oauth_is_customer_registered()) && $this->versi === "\x6d\x6f\137\146\162\145\145\x5f\166\x65\x72\163\151\157\x6e")) {
            goto sB;
        }
        echo "\74\x64\x69\166\40\x63\154\x61\163\x73\75\x22\x6d\x6f\x5f\157\x61\x75\164\150\137\x70\x72\145\x6d\x69\165\155\137\x6f\160\164\151\x6f\156\x5f\x74\x65\170\x74\42\76\74\163\x70\x61\156\40\x73\x74\171\154\145\75\42\x63\x6f\154\x6f\162\72\162\145\144\73\42\x3e\52\x3c\57\x73\160\141\156\76\x54\150\x69\163\x20\x69\x73\x20\141\x20\163\x74\141\156\x64\x61\x72\144\x20\x66\145\x61\164\165\x72\x65\56\15\12\11\74\141\x20\150\x72\145\146\75\42\141\144\x6d\151\156\x2e\x70\150\160\77\x70\141\147\145\75\x6d\x6f\x5f\x6f\141\165\x74\150\137\x73\145\x74\x74\151\x6e\147\163\x26\164\x61\142\x3d\x6c\151\143\x65\156\x73\x69\x6e\147\42\76\x43\154\x69\143\x6b\40\x48\145\x72\x65\74\57\x61\x3e\x20\x74\157\x20\x73\145\145\40\x6f\165\162\40\x66\165\154\154\x20\x6c\x69\x73\164\x20\x6f\146\40\123\x74\141\x6e\x64\x61\162\x64\x20\106\x65\141\164\165\x72\145\163\56\74\57\144\x69\166\x3e";
        $Cj = "\x6d\157\137\157\141\x75\164\x68\137\x70\162\x65\x6d\x69\x75\155\x5f\157\x70\164\151\x6f\156";
        $h_ = "\x3c\163\143\x72\151\160\164\x3e\x6a\121\x75\x65\162\x79\50\x20\144\157\x63\x75\155\x65\x6e\x74\x20\51\56\x72\x65\x61\144\171\x28\146\165\156\143\164\x69\x6f\156\50\x29\x20\x7b\x20\x6a\x51\x75\x65\162\x79\x28\42\x2e\155\x6f\x5f\157\141\x75\164\x68\137\x70\162\x65\x6d\x69\165\155\137\x6f\x70\x74\x69\157\156\40\72\151\x6e\x70\x75\164\x22\x29\56\160\x72\157\160\50\42\x64\x69\x73\141\x62\x6c\x65\144\x22\x2c\40\164\x72\165\x65\51\73\175\x29\73\40\74\57\163\x63\x72\151\x70\x74\76";
        sB:
        ?>

	<div id="mo_oauth_customiztion" class="mo_table_layout mo_oauth_app_customization <?php 
        echo $Cj;
        ?>
">
	<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings&tab=customization">
		<input type="hidden" name="option" value="mo_oauth_app_customization" />
		<?php 
        wp_nonce_field("\x6d\x6f\x5f\x6f\x61\x75\x74\150\x5f\x61\160\x70\x5f\x63\165\x73\164\x6f\155\151\x7a\x61\164\x69\157\x6e", "\155\x6f\x5f\x6f\141\165\164\x68\x5f\x61\x70\160\x5f\143\x75\163\x74\157\x6d\x69\x7a\141\164\151\x6f\x6e\137\x6e\x6f\156\143\145");
        ?>
		<h2>Customize Icons</h2>
		<table class="mo_settings_table">
			<tr>
				<td><strong>Icon Width:</strong></td>
				<td><input type="text" id="mo_oauth_icon_width" name="mo_oauth_icon_width" value="<?php 
        echo $Sk->mo_oauth_client_get_option("\155\157\x5f\x6f\141\x75\x74\x68\x5f\x69\x63\x6f\156\137\x77\151\x64\x74\x68");
        ?>
"> e.g. 200px or 100%</td>
			</tr>
			<tr>
				<td><strong>Icon Height:</strong></td>
				<td><input  type="text" id="mo_oauth_icon_height" name="mo_oauth_icon_height" value="<?php 
        echo $Sk->mo_oauth_client_get_option("\x6d\157\137\x6f\x61\x75\164\150\137\x69\x63\x6f\156\x5f\150\x65\x69\147\x68\x74");
        ?>
"> e.g. 50px or auto</td>
			</tr>
			<tr>
				<td><strong>Icon Margins:</strong></td>
				<td><input  type="text" id="mo_oauth_icon_margin" name="mo_oauth_icon_margin" value="<?php 
        echo $Sk->mo_oauth_client_get_option("\155\x6f\137\157\x61\165\x74\x68\137\x69\143\157\x6e\137\155\141\162\x67\x69\x6e");
        ?>
"> e.g. 2px 0px or auto</td>
			</tr>
			<tr>
				<td><strong>Custom CSS:</strong></td>
				<td><textarea type="text" id="mo_oauth_icon_configure_css" style="resize: vertical; width:400px; height:180px;  margin:5% auto;" rows="6" name="mo_oauth_icon_configure_css"><?php 
        echo rtrim(trim(format_custom_css_value($Oi)), "\x3b");
        ?>
</textarea><br/><strong>Example CSS:</strong>
<pre>
	background: #7272dc;
	height:40px;
	padding:8px;
	text-align:center;
	color:#fff;
</pre>
			</td>
			</tr>
			<tr>
				<td><strong>Logout Button Text: </strong></td>
				<td><input  type="text" id="mo_oauth_custom_logout_text" name="mo_oauth_custom_logout_text" placeholder="Howdy, ##user##" value="<?php 
        echo $Sk->mo_oauth_client_get_option("\x6d\x6f\137\157\141\165\x74\x68\137\143\x75\163\164\x6f\x6d\137\154\x6f\147\157\165\x74\137\164\145\x78\x74");
        ?>
"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Save settings"
					class="button button-primary button-large" /></td>
			</tr>
		</table>
	</form>
	</div>
	<?php 
        echo $h_;
        ?>

	<?php 
    }
}
?>
