<?php


function password_grant($ZW, $Ny)
{
    $cS = '';
    $uN = '';
    if (!(isset($_POST["\x75\163\x65\x72\156\x61\155\x65"]) && isset($_POST["\x70\x61\163\163\x77\157\x72\144"]))) {
        goto C8;
    }
    $cS = $_POST["\x75\163\145\x72\x6e\141\x6d\x65"];
    $uN = $_POST["\160\x61\x73\163\167\x6f\162\x64"];
    $vQ = mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\165\x74\x68\137\141\160\160\163\x5f\x6c\151\x73\164");
    $X6 = $Y3 = false;
    foreach ($vQ as $OY => $AO) {
        $X6 = $AO;
        goto Sg;
        Sl:
    }
    Sg:
    $L0 = new Mo_OAuth_Hanlder();
    $Is = $L0->getToken($X6["\141\143\143\145\x73\163\x74\x6f\x6b\x65\156\x75\x72\154"], "\160\141\163\x73\x77\157\162\144", $X6["\x63\x6c\151\145\x6e\x74\151\144"], $X6["\x63\154\151\145\156\x74\163\x65\x63\162\145\x74"], '', $X6["\162\x65\x64\x69\162\x65\x63\x74\165\162\x69"], $cS, $uN, false);
    $Is = json_decode($Is, true);
    $Y3 = false;
    if (isset($Is["\145\x72\x72\x6f\162\137\x64\145\163\143\162\151\x70\164\x69\x6f\x6e"])) {
        goto hk;
    }
    if (isset($Is["\145\x72\162\157\162"])) {
        goto wH;
    }
    if (isset($Is["\141\x63\x63\x65\x73\163\137\164\x6f\x6b\x65\x6e"])) {
        goto Yw;
    }
    echo "\x3c\x64\151\x76\x20\x63\x6c\x61\x73\163\x3d\155\x6f\141\x75\x74\150\x65\162\162\157\162\x3e\x41\x63\143\145\163\x73\x20\x74\157\x6b\x65\x6e\x20\x6e\x6f\164\x20\x72\x65\x63\x65\x69\166\145\x64\x2e\40\x50\154\x65\x61\163\x65\40\143\x68\x65\x63\x6b\x20\x79\x6f\165\x72\40\x63\157\x6e\146\x69\x67\x75\x72\141\164\x69\157\x6e\56\74\x2f\144\151\x76\76";
    goto hM;
    Yw:
    $hf = $Is["\141\x63\x63\x65\163\163\137\x74\157\153\x65\x6e"];
    $h8 = $X6["\162\x65\163\x6f\165\x72\x63\145\157\x77\156\x65\x72\x64\x65\x74\141\151\x6c\x73\165\162\154"];
    if (!(substr($h8, -1) == "\75")) {
        goto Ea;
    }
    $h8 .= $hf;
    Ea:
    $Y3 = $L0->getResourceOwner($h8, $hf);
    hM:
    goto Eb;
    wH:
    echo "\74\144\151\166\x20\143\x6c\x61\163\x73\x3d\155\x6f\x61\165\164\x68\x65\162\162\x6f\x72\x3e" . $Is["\145\162\x72\x6f\162"] . "\74\x2f\x64\151\166\x3e";
    Eb:
    goto hm;
    hk:
    echo "\x3c\144\x69\x76\40\143\154\x61\x73\163\x3d\x6d\x6f\141\x75\164\x68\x65\x72\162\x6f\x72\76" . $Is["\145\162\x72\157\x72\137\x64\x65\x73\143\162\151\160\x74\151\157\156"] . "\x3c\57\144\151\166\x3e";
    hm:
    C8:
    if (!$Ny) {
        goto nj;
    }
    ?>
<div <?php 
    if (!($ZW !== "\120\141\163\163\167\x6f\162\x64\x20\107\162\141\x6e\164")) {
        goto MK;
    }
    echo "\x68\151\144\144\x65\156";
    MK:
    ?>
 id="password-grant-settings">
	<h2>Password Grant Settings</h2>
	<table class="mo_settings_table">
		<tr>
			<td><strong>Username:</strong></td>
			<td><input type="text" id="username" name="username" value="<?php 
    echo $cS;
    ?>
"></td>
		</tr>
		<tr>
			<td><strong>Password:</strong></td>
			<td><input  type="password" id="password" name="password" value="<?php 
    echo $uN;
    ?>
"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><br /><input onclick="testPasswordGrant();" type="button" name="test-password-grant" value="Test Login" style="width:100px;"
				class="button button-primary button-large" /></td>
		</tr>
	</table>
</div>
	<?php 
    nj:
}
?>
