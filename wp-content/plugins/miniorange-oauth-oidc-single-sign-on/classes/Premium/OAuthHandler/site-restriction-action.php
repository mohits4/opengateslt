<?php


function mo_oauth_client_page_restriction()
{
    global $Sk;
    $jc = $Sk->get_plugin_config();
    $Ew = $jc->get_config("\162\x65\x73\x74\162\151\143\x74\x5f\x74\x6f\x5f\154\157\x67\x67\x65\144\x5f\x69\x6e\x5f\x75\163\x65\162\163");
    $Ew = '' !== $Ew ? $Ew : false;
    $gK = $jc->get_config("\x61\x75\164\157\137\x72\x65\x64\151\x72\x65\x63\164\x5f\x65\170\143\154\165\144\x65\137\165\x72\154\x73");
    if (!(!is_user_logged_in() && boolval($Ew))) {
        goto NEt;
    }
    if (!("\x50\x4f\123\x54" === $_SERVER["\122\x45\x51\125\x45\123\x54\x5f\x4d\x45\124\x48\x4f\104"])) {
        goto WXS;
    }
    return;
    WXS:
    if (!(isset($_REQUEST["\157\x61\x75\164\150\154\157\x67\151\156"]) && "\146\141\154\163\145" === $_REQUEST["\x6f\141\x75\x74\150\154\x6f\147\151\x6e"])) {
        goto P2S;
    }
    return;
    P2S:
    if (!(isset($_REQUEST[\MoOAuthConstants::OPTION]) && "\157\x61\x75\x74\x68\162\145\144\151\162\145\143\164" === $_REQUEST[\MoOAuthConstants::OPTION])) {
        goto UUP;
    }
    return;
    UUP:
    if (!(isset($_REQUEST["\143\x6f\144\x65"]) && '' !== $_REQUEST["\x63\157\144\x65"])) {
        goto FaH;
    }
    return;
    FaH:
    if (!(isset($_REQUEST["\x61\143\143\145\x73\x73\137\164\x6f\x6b\145\x6e"]) && '' !== $_REQUEST["\141\x63\143\x65\163\163\137\x74\157\x6b\145\x6e"])) {
        goto dgU;
    }
    return;
    dgU:
    if (!(isset($_REQUEST["\x6c\157\147\x69\156"]) && "\x70\x77\x64\x67\162\156\x74\x66\162\x6d" === $_REQUEST["\x6c\x6f\147\x69\156"])) {
        goto wWe;
    }
    return;
    wWe:
    if (empty($gK)) {
        goto As6;
    }
    $zx = $Sk->get_current_url();
    $zx = trim($zx, "\57");
    $gK = explode("\xa", $gK);
    foreach ($gK as $HQ) {
        $HQ = trim($HQ, "\x2f");
        if (empty($HQ)) {
            goto Y8f;
        }
        if (!($zx === $HQ)) {
            goto pRC;
        }
        return;
        pRC:
        Y8f:
        Nde:
    }
    M_8:
    As6:
    $XA = $Sk->get_app_by_name();
    if ($XA) {
        goto H5m;
    }
    return;
    H5m:
    $ve = $XA->get_app_config("\x61\x66\x74\x65\162\x5f\x6c\157\x67\x69\156\x5f\x75\x72\x6c");
    $zx = $ve ? $ve : $Sk->get_current_url();
    echo "\x52\x65\x64\x69\162\145\x63\x74\151\x6e\147\40\x74\157\40\144\145\x66\141\165\x6c\x74\40\x6c\157\x67\x69\156\x2e\x2e\x2e";
    ?>
		<script>
			var url = "<?php 
    echo site_url();
    ?>
";
			url = url + '/?option=oauthredirect&app_name=' + "<?php 
    echo wp_kses($XA->get_app_name(), \get_valid_html());
    ?>
" + '&redirect_url=' + "<?php 
    echo rawurlencode($zx);
    ?>
" + '&restrictredirect=true';
			window.location.replace( url );
		</script>
		<?php 
    NEt:
}
add_action("\151\x6e\x69\x74", "\x6d\157\137\x6f\141\165\x74\x68\x5f\143\x6c\x69\145\x6e\164\x5f\160\141\147\x65\137\162\145\x73\164\x72\151\143\164\151\157\156");
