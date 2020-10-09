<?php


function mo_oauth_app_customization()
{
    $jh = mo_oauth_client_get_option("\x6d\x6f\x5f\157\x61\x75\164\150\137\151\143\157\x6e\137\143\157\156\146\x69\x67\165\162\x65\137\143\x73\163");
    function format_custom_css_value($pb)
    {
        $Gx = explode("\73", $pb);
        $P3 = 0;
        ay:
        if (!($P3 < count($Gx))) {
            goto Jc;
        }
        if ($P3 < count($Gx) - 1) {
            goto bX;
        }
        if (!($P3 == count($Gx) - 1)) {
            goto xF;
        }
        echo $Gx[$P3] . "\xd\12";
        xF:
        goto sx;
        bX:
        echo $Gx[$P3] . "\73\15\xa";
        sx:
        BQ:
        $P3++;
        goto ay;
        Jc:
    }
    ?>
	<div class="mo_table_layout">
	<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings&tab=customization">
		<input type="hidden" name="option" value="mo_oauth_app_customization" />
		<h2>Customize Icons</h2>
		<table class="mo_settings_table">
			<tr>
				<td><strong>Icon Width:</strong></td>
				<td><input type="text" id="mo_oauth_icon_width" name="mo_oauth_icon_width" value="<?php 
    echo mo_oauth_client_get_option("\155\x6f\x5f\x6f\141\165\164\150\x5f\151\143\157\156\137\167\x69\144\x74\150");
    ?>
"> px</td>
			</tr>
			<tr>
				<td><strong>Icon Height:</strong></td>
				<td><input  type="text" id="mo_oauth_icon_height" name="mo_oauth_icon_height" value="<?php 
    echo mo_oauth_client_get_option("\155\x6f\137\x6f\141\165\164\150\x5f\x69\143\157\x6e\137\150\145\151\147\150\x74");
    ?>
"> px</td>
			</tr>
			<tr>
				<td><strong>Icon Margins:</strong></td>
				<td><input  type="text" id="mo_oauth_icon_margin" name="mo_oauth_icon_margin" value="<?php 
    echo mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\x75\x74\150\x5f\151\143\157\156\137\155\x61\x72\x67\151\156");
    ?>
"> px</td>
			</tr>
			<tr>
				<td><strong>Custom CSS:</strong></td>
				<td><textarea type="text" id="mo_oauth_icon_configure_css" style="resize: vertical; width:400px; height:180px;  margin:5% auto;" rows="6" name="mo_oauth_icon_configure_css"><?php 
    echo rtrim(trim(format_custom_css_value($jh)), "\73");
    ?>
</textarea><br/><b>Example CSS:</b> 
<pre>.oauthloginbutton { 
	 width:100%;
	 height:50px;
	 padding-top:15px;
	 padding-bottom:15px;
	 margin-bottom:-1px;
	 border-radius:4px;
	 background: #7272dc;
	 text-align:center;
	 font-size:16px;
	 color:#fff;
	 margin-bottom:5px;
 } 
 .custom_logo { 
	 padding-top:-1px;
	 padding-right:15px;
	 padding-left:15px;
	 padding-top:15px;
	 background: #7272dc;
	 color:#fff;
 }</pre>
</td>
			</tr>
			<tr>
				<td><strong>Custom Logout button text:</strong></td>
				<td><input  type="text" id="mo_oauth_custom_logout_text"style="resize: vertical; width:200px; height:30px;  margin:5% auto;" name="mo_oauth_custom_logout_text" placeholder ="Howdy ,##user##"value="<?php 
    echo mo_oauth_client_get_option("\x6d\157\137\x6f\141\x75\x74\x68\137\x63\165\x73\x74\157\155\x5f\x6c\157\147\157\x75\164\137\164\145\170\x74");
    ?>
"> <b>##user##</b> is replaced by Username</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><br><input type="submit" name="submit" value="Save settings"
					class="button button-primary button-large" /></td>
			</tr>
		</table>
	</form>
	</div>
	<?php 
}
?>
