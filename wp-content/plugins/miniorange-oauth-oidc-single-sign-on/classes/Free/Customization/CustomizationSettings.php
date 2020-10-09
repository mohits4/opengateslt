<?php


namespace MoOauthClient\Free;

class CustomizationSettings
{
    public function save_customization_settings()
    {
        global $Sk;
        if (!(isset($_POST["\155\157\137\x6f\x61\x75\164\150\137\141\160\x70\x5f\x63\165\x73\164\x6f\155\151\172\x61\x74\151\x6f\156\137\156\x6f\x6e\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\157\137\157\x61\x75\164\150\137\141\160\160\137\x63\165\163\164\x6f\x6d\151\x7a\141\164\x69\x6f\156\137\x6e\157\156\x63\145"])), "\x6d\x6f\137\157\141\165\x74\150\x5f\141\160\x70\137\143\x75\163\164\157\x6d\x69\x7a\x61\x74\151\x6f\156") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\157\137\x6f\x61\165\x74\150\137\141\160\x70\137\x63\x75\163\x74\157\x6d\151\x7a\x61\x74\151\x6f\x6e" === $_POST[\MoOAuthConstants::OPTION])) {
            goto Qy;
        }
        $Sk->mo_oauth_client_update_option("\155\157\x5f\x6f\x61\x75\164\x68\137\151\x63\157\x6e\137\167\x69\x64\164\x68", stripslashes($_POST["\x6d\157\x5f\157\x61\165\164\x68\137\x69\143\x6f\156\137\167\x69\144\164\x68"]));
        $Sk->mo_oauth_client_update_option("\155\157\x5f\157\x61\165\164\150\137\x69\x63\157\x6e\x5f\x68\x65\151\x67\x68\x74", stripslashes($_POST["\x6d\157\x5f\157\x61\165\x74\x68\137\151\x63\157\156\x5f\150\145\151\147\x68\164"]));
        $Sk->mo_oauth_client_update_option("\x6d\157\137\157\x61\x75\164\150\137\x69\x63\x6f\x6e\137\155\x61\x72\x67\x69\x6e", stripslashes($_POST["\155\157\x5f\x6f\141\x75\164\x68\137\151\x63\157\156\x5f\x6d\141\x72\147\151\156"]));
        $Sk->mo_oauth_client_update_option("\155\157\x5f\x6f\x61\x75\164\150\137\x69\x63\x6f\x6e\x5f\143\157\156\x66\151\x67\x75\x72\x65\137\x63\163\163", stripcslashes(stripslashes($_POST["\x6d\157\x5f\157\141\165\x74\150\x5f\151\x63\x6f\x6e\137\143\x6f\156\x66\151\147\x75\x72\145\x5f\143\x73\x73"])));
        $Sk->mo_oauth_client_update_option("\155\157\x5f\157\141\x75\164\150\x5f\x63\165\163\x74\x6f\155\x5f\154\x6f\147\157\x75\164\137\164\145\170\164", stripslashes($_POST["\155\x6f\137\157\x61\165\x74\x68\137\x63\x75\163\164\157\155\x5f\x6c\x6f\147\x6f\x75\164\x5f\x74\145\x78\164"]));
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x59\x6f\165\162\40\x73\145\x74\164\151\x6e\147\x73\x20\167\x65\x72\x65\x20\x73\141\166\145\x64");
        $Sk->mo_oauth_show_success_message();
        Qy:
    }
}
?>
