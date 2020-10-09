<?php


function mo_oauth_client_auto_redirect_external_after_logout()
{
    $Sk = new \MoOauthClient\Standard\MOUtils();
    $jc = $Sk->get_plugin_config();
    if (empty($jc->get_config("\x61\x66\x74\x65\162\x5f\x6c\x6f\x67\x6f\x75\164\x5f\165\x72\x6c"))) {
        goto rVt;
    }
    $sk = $jc->get_config("\x61\x66\164\x65\162\137\154\157\147\x6f\165\164\x5f\x75\x72\x6c");
    $Dg = get_current_user_id();
    $lo = get_user_meta($Dg, "\155\157\137\157\x61\165\164\150\137\143\154\x69\145\x6e\164\x5f\154\x61\x73\x74\x5f\151\144\137\x74\157\x6b\145\x6e", true);
    $sk = str_replace("\x23\43\151\144\x5f\x74\157\x6b\145\156\43\43", $lo, $sk);
    wp_redirect($sk);
    die;
    rVt:
}
add_action("\x77\160\137\154\157\x67\x6f\x75\x74", "\155\157\x5f\157\141\165\164\x68\137\143\x6c\151\x65\156\164\137\x61\165\x74\x6f\137\162\x65\144\151\x72\145\x63\x74\x5f\145\170\x74\145\162\x6e\141\x6c\137\141\146\x74\145\x72\137\154\x6f\147\157\x75\164");
