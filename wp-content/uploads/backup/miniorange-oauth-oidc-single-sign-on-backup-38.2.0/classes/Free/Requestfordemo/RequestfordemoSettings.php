<?php


namespace MoOauthClient\Free;

use MoOauthClient\Customer;
class RequestfordemoSettings
{
    public function save_requestdemo_settings()
    {
        global $Sk;
        if (!(isset($_POST["\155\x6f\x5f\157\x61\x75\x74\150\137\141\160\160\137\x72\145\161\165\145\x73\x74\144\x65\x6d\157\x5f\x6e\157\156\143\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\137\157\x61\x75\164\x68\x5f\x61\160\160\x5f\x72\145\x71\165\x65\x73\x74\x64\x65\155\157\x5f\156\x6f\x6e\x63\x65"])), "\155\x6f\x5f\x6f\x61\x75\164\150\137\x61\160\x70\137\x72\x65\161\x75\x65\x73\x74\144\145\x6d\x6f") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\157\x5f\x6f\x61\x75\x74\x68\137\141\160\160\x5f\x72\145\161\x75\x65\163\x74\x64\145\155\x6f" === $_POST[\MoOAuthConstants::OPTION])) {
            goto Fq;
        }
        $nW = $_POST["\155\x6f\x5f\x6f\x61\x75\164\x68\137\143\154\151\145\x6e\x74\137\144\145\155\157\x5f\x65\x6d\x61\x69\x6c"];
        $h3 = $_POST["\155\x6f\x5f\157\x61\165\x74\x68\137\143\x6c\x69\x65\156\164\137\144\x65\155\157\x5f\x70\x6c\141\x6e"];
        $uh = $_POST["\155\157\x5f\157\x61\165\164\150\137\143\154\151\145\x6e\x74\x5f\144\x65\x6d\157\x5f\x64\145\163\143\162\x69\x70\x74\x69\x6f\156"];
        $od = new Customer();
        if ($Sk->mo_oauth_check_empty_or_null($nW) || $Sk->mo_oauth_check_empty_or_null($h3)) {
            goto Ih;
        }
        $U5 = json_decode($od->mo_oauth_send_demo_alert($nW, $h3, $uh, "\x57\120\40\x4f\101\165\164\150\40\123\151\x6e\147\x6c\145\40\x53\x69\147\156\40\117\x6e\40\104\x65\155\x6f\40\122\145\x71\x75\145\163\164\x20\x2d\40" . $nW), true);
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\124\x68\x61\x6e\x6b\163\40\x66\157\x72\x20\147\x65\164\164\x69\x6e\x67\x20\x69\x6e\40\164\x6f\165\143\150\41\40\127\145\40\x73\x68\141\154\x6c\40\x67\145\x74\x20\x62\x61\x63\x6b\40\x74\157\40\171\157\165\x20\x73\x68\157\x72\x74\154\171\x2e");
        $Sk->mo_oauth_show_success_message();
        goto vw;
        Ih:
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x50\154\x65\141\x73\145\x20\146\151\x6c\x6c\40\165\160\40\105\155\x61\x69\x6c\40\146\151\145\x6c\144\x20\164\157\x20\x73\x75\x62\155\151\164\40\171\157\165\x72\40\x71\x75\x65\162\x79\56");
        $Sk->mo_oauth_show_success_message();
        vw:
        Fq:
    }
}