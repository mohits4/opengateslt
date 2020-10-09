<?php


namespace MoOauthClient\Free;

use MoOauthClient\App;
class AppSettings
{
    private $app_config;
    public function __construct()
    {
        $this->app_config = array("\143\154\x69\x65\x6e\x74\137\x69\x64", "\143\x6c\x69\145\x6e\x74\137\x73\x65\x63\x72\x65\x74", "\x73\x63\157\160\145", "\162\145\144\x69\x72\145\143\x74\x5f\165\x72\x69", "\141\x70\160\137\x74\x79\160\145", "\141\x75\164\150\157\x72\x69\x7a\x65\x75\162\154", "\141\143\143\x65\x73\163\x74\x6f\153\145\x6e\x75\162\x6c", "\162\x65\x73\x6f\x75\162\x63\x65\157\167\156\x65\x72\x64\145\x74\x61\x69\x6c\x73\x75\x72\x6c", "\x67\162\x6f\x75\160\x64\x65\164\x61\x69\x6c\x73\165\162\x6c", "\152\x77\153\x73\x5f\x75\x72\151", "\x64\x69\163\x70\x6c\x61\x79\141\160\x70\156\141\155\x65", "\x61\x70\x70\x49\x64");
    }
    public function save_app_settings()
    {
        global $Sk;
        if (!(isset($_POST["\155\x6f\x5f\x6f\141\165\x74\x68\x5f\141\144\144\x5f\141\160\x70\x5f\x6e\157\156\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\157\137\x6f\x61\165\164\x68\x5f\x61\x64\x64\x5f\141\160\x70\137\x6e\x6f\x6e\x63\145"])), "\x6d\157\137\x6f\141\165\x74\150\x5f\141\144\x64\137\x61\x70\x70") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\x6f\x5f\x6f\141\x75\x74\x68\x5f\141\x64\144\x5f\141\160\x70" === $_POST[\MoOAuthConstants::OPTION])) {
            goto ob;
        }
        if (!($Sk->mo_oauth_check_empty_or_null($_POST["\x6d\x6f\x5f\157\141\165\164\x68\137\143\x6c\x69\145\x6e\x74\x5f\151\x64"]) || $Sk->mo_oauth_check_empty_or_null($_POST["\155\x6f\137\157\141\x75\x74\150\x5f\x63\154\151\145\156\x74\x5f\x73\x65\x63\162\145\x74"]))) {
            goto yl;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\120\154\x65\141\163\145\40\145\156\x74\145\x72\x20\x76\x61\x6c\151\144\40\103\x6c\151\x65\156\164\40\111\104\x20\141\x6e\144\40\103\x6c\151\145\x6e\x74\x20\x53\145\x63\162\145\x74\56");
        $Sk->mo_oauth_show_error_message();
        return;
        yl:
        $nd = isset($_POST["\x6d\157\137\157\x61\x75\x74\150\137\x63\x75\163\164\x6f\x6d\x5f\141\x70\160\137\156\x61\x6d\x65"]) ? sanitize_text_field(wp_unslash($_POST["\x6d\x6f\137\x6f\141\165\164\x68\137\x63\x75\x73\164\157\155\137\141\x70\x70\137\x6e\x61\155\145"])) : false;
        $x5 = $Sk->get_app_by_name($nd);
        $x5 = false !== $x5 ? $x5->get_app_config() : array();
        $R0 = false !== $x5;
        $Li = $Sk->get_app_list();
        if (!(!$R0 && is_array($Li) && count($Li) > 0 && !$Sk->check_versi(3))) {
            goto E6;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\131\157\165\x20\x63\141\156\40\x6f\x6e\x6c\x79\40\x61\x64\144\x20\61\x20\141\160\160\154\x69\x63\141\x74\151\x6f\156\40\167\x69\x74\x68\x20\146\162\x65\x65\x20\166\145\x72\x73\x69\157\156\x2e\40\x55\160\x67\162\x61\144\x65\40\164\157\x20\x65\x6e\x74\145\x72\160\162\x69\x73\145\x20\166\x65\162\163\151\x6f\156\x20\x69\x66\x20\171\157\165\40\167\141\x6e\x74\40\x74\157\40\x61\144\144\40\155\157\162\x65\x20\x61\160\x70\x6c\x69\x63\x61\x74\151\x6f\156\163\x2e");
        $Sk->mo_oauth_show_error_message();
        return;
        E6:
        $x5 = !is_array($x5) || empty($x5) ? array() : $x5;
        $x5 = $this->change_app_settings($_POST, $x5);
        $Li[$nd] = new App($x5);
        $Li[$nd]->set_app_name($nd);
        $Sk->mo_oauth_client_update_option("\x6d\157\x5f\157\141\165\164\x68\x5f\x61\160\160\163\137\154\151\x73\x74", $Li);
        wp_redirect("\141\144\155\151\x6e\56\160\x68\x70\x3f\x70\x61\147\145\75\x6d\x6f\137\157\141\165\164\150\x5f\x73\x65\164\164\151\x6e\x67\163\46\x74\x61\142\x3d\143\157\156\146\x69\x67\46\141\143\x74\151\x6f\156\x3d\x75\160\x64\141\164\145\x26\x61\160\x70\x3d" . urlencode($nd));
        ob:
        if (!(isset($_POST["\155\x6f\137\157\x61\x75\x74\x68\137\141\x74\x74\162\151\x62\165\x74\145\x5f\x6d\141\x70\x70\x69\156\x67\137\x6e\157\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\x5f\157\x61\x75\164\150\137\x61\x74\164\162\x69\x62\x75\164\145\x5f\155\x61\160\x70\x69\x6e\147\137\x6e\157\x6e\x63\x65"])), "\155\157\x5f\157\x61\x75\164\x68\x5f\141\164\164\162\151\x62\165\x74\145\x5f\x6d\x61\x70\160\151\156\147") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\x6f\x5f\157\x61\x75\x74\x68\137\141\x74\164\162\151\142\165\x74\x65\x5f\x6d\x61\x70\x70\x69\x6e\147" === $_POST[\MoOAuthConstants::OPTION])) {
            goto au;
        }
        global $Sk;
        $nd = sanitize_text_field(wp_unslash(isset($_POST[\MoOAuthConstants::POST_APP_NAME]) ? $_POST[\MoOAuthConstants::POST_APP_NAME] : ''));
        $U3 = $Sk->get_app_by_name($nd);
        $h7 = $U3->get_app_config();
        $h7 = $this->change_attribute_mapping($_POST, $h7);
        $me = $Sk->set_app_by_name($nd, $h7);
        if (!$me) {
            goto oi;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x59\157\165\162\x20\163\x65\164\x74\151\156\x67\x73\40\x61\x72\x65\40\163\141\166\x65\144\40\x73\x75\x63\x63\145\163\163\146\x75\154\154\171\56");
        $Sk->mo_oauth_show_success_message();
        goto KN;
        oi:
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\124\150\x65\162\145\40\167\x61\x73\x20\x61\156\x20\x65\x72\162\157\162\x20\x73\141\166\151\x6e\x67\x20\x73\145\x74\164\151\156\147\163\56");
        $Sk->mo_oauth_show_error_message();
        KN:
        wp_safe_redirect("\x61\x64\155\x69\156\56\160\150\160\x3f\160\x61\147\145\x3d\155\157\x5f\x6f\141\165\164\x68\x5f\163\x65\x74\x74\x69\x6e\147\163\46\x74\x61\142\75\143\x6f\x6e\146\151\147\x26\141\143\164\x69\157\x6e\x3d\165\x70\144\141\164\145\46\141\x70\160\x3d" . rawurlencode($nd));
        au:
        do_action("\155\x6f\x5f\x6f\x61\165\x74\x68\137\x63\x6c\151\145\156\164\x5f\x73\141\x76\145\137\x61\x70\x70\137\x73\x65\164\x74\x69\x6e\147\x73\137\151\x6e\x74\x65\x72\x6e\141\x6c");
    }
    public function change_app_settings($post, $x5)
    {
        global $Sk;
        $nd = sanitize_text_field(wp_unslash(isset($post[\MoOAuthConstants::POST_APP_NAME]) ? $post[\MoOAuthConstants::POST_APP_NAME] : ''));
        $x5["\x73\143\x6f\160\x65"] = sanitize_text_field(wp_unslash(isset($post["\x6d\x6f\x5f\157\141\x75\164\x68\x5f\163\143\x6f\160\145"]) ? $post["\155\157\137\x6f\141\x75\164\x68\137\x73\143\157\x70\145"] : ''));
        $x5["\x63\x6c\x69\145\156\x74\137\151\x64"] = sanitize_text_field(wp_unslash(isset($post["\x6d\x6f\x5f\x6f\141\165\x74\x68\x5f\143\154\x69\145\x6e\164\137\151\x64"]) ? $post["\155\x6f\x5f\x6f\x61\x75\x74\150\x5f\143\154\151\145\156\x74\x5f\151\144"] : ''));
        $x5["\143\154\151\145\x6e\x74\x5f\x73\x65\x63\162\x65\164"] = sanitize_text_field(wp_unslash(isset($post["\x6d\x6f\x5f\x6f\x61\x75\x74\150\137\x63\x6c\151\145\156\x74\x5f\x73\x65\x63\162\145\x74"]) ? $post["\x6d\157\137\x6f\x61\165\164\x68\137\x63\x6c\x69\x65\x6e\x74\137\163\145\143\162\145\x74"] : ''));
        $x5["\163\x65\156\144\x5f\150\x65\x61\144\x65\162\163"] = isset($post["\155\x6f\137\157\141\x75\x74\x68\137\x61\x75\164\x68\x6f\162\151\x7a\141\164\151\157\x6e\137\x68\145\141\x64\x65\162"]) ? (int) filter_var($post["\x6d\x6f\x5f\x6f\x61\165\164\x68\x5f\141\165\x74\150\x6f\x72\151\172\141\164\151\157\x6e\x5f\x68\x65\141\144\x65\x72"], FILTER_SANITIZE_NUMBER_INT) : 0;
        $x5["\163\145\x6e\x64\x5f\x62\157\x64\x79"] = isset($post["\155\157\137\157\141\165\164\x68\137\142\x6f\x64\x79"]) ? (int) filter_var($post["\155\157\x5f\157\141\165\x74\x68\137\x62\x6f\144\171"], FILTER_SANITIZE_NUMBER_INT) : 0;
        $x5["\163\x68\x6f\167\137\x6f\x6e\x5f\154\157\x67\151\156\x5f\x70\x61\147\145"] = isset($post["\155\x6f\137\157\141\165\x74\x68\x5f\x73\150\157\x77\137\157\x6e\137\x6c\157\x67\151\156\137\160\141\147\145"]) ? (int) filter_var($post["\x6d\x6f\x5f\x6f\141\x75\x74\x68\137\163\150\157\x77\x5f\x6f\x6e\x5f\154\x6f\x67\x69\156\137\160\x61\x67\x65"], FILTER_SANITIZE_NUMBER_INT) : 0;
        $x5["\x61\160\x70\111\144"] = $nd;
        $x5["\x72\145\144\151\162\x65\143\164\137\x75\x72\151"] = sanitize_text_field(wp_unslash(isset($post["\x6d\x6f\137\165\x70\144\x61\x74\145\x5f\x75\x72\x6c"]) ? $post["\x6d\157\x5f\x75\x70\x64\141\164\145\137\x75\162\154"] : site_url()));
        $Sk->mo_oauth_client_update_option("\155\x6f\137\x6f\141\165\164\150\137\x63\x6c\x69\145\x6e\x74\137\x64\151\x73\141\x62\x6c\x65\x5f\x61\x75\x74\x68\x6f\162\151\172\141\x74\x69\x6f\156\137\x68\x65\x61\144\x65\x72", isset($post["\x64\151\x73\141\142\154\145\x5f\x61\165\164\150\157\x72\151\x7a\141\164\x69\x6f\156\137\150\x65\x61\144\145\x72"]) ? boolval($post["\144\x69\x73\141\142\154\145\x5f\141\165\164\x68\157\x72\151\x7a\x61\x74\151\x6f\x6e\x5f\150\x65\x61\144\x65\162"]) : false);
        if ("\145\x76\145\x6f\156\154\x69\156\x65" === $nd) {
            goto lr;
        }
        $Dl = stripslashes($post["\155\x6f\x5f\157\x61\x75\164\150\x5f\x61\x75\x74\150\x6f\162\x69\x7a\x65\165\162\154"]);
        $xk = stripslashes($post["\x6d\x6f\x5f\157\141\165\x74\150\137\x61\x63\x63\x65\163\163\164\157\153\x65\156\165\x72\x6c"]);
        $nd = stripslashes($post["\155\x6f\137\x6f\141\165\x74\150\x5f\x63\165\163\x74\157\x6d\x5f\x61\160\x70\x5f\156\141\155\145"]);
        goto Hy;
        lr:
        $Sk->mo_oauth_client_update_option("\x6d\157\137\x6f\x61\165\x74\150\137\145\x76\x65\157\x6e\x6c\151\x6e\145\137\x65\x6e\141\142\x6c\145", 1);
        $Sk->mo_oauth_client_update_option("\155\x6f\x5f\157\x61\165\164\x68\137\x65\166\x65\157\156\154\x69\156\145\137\143\x6c\x69\x65\x6e\x74\137\x69\x64", $W2);
        $Sk->mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\x61\165\x74\x68\x5f\x65\x76\x65\157\156\x6c\151\156\145\137\143\154\x69\x65\x6e\164\137\163\145\x63\162\145\164", $y5);
        if (!($Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\x75\x74\x68\x5f\x65\x76\x65\157\x6e\154\x69\156\x65\137\143\x6c\151\145\156\x74\x5f\151\144") && $Sk->mo_oauth_client_get_option("\x6d\x6f\137\157\141\x75\x74\150\x5f\x65\x76\145\157\x6e\x6c\x69\156\x65\137\143\154\151\x65\156\x74\137\x73\x65\x63\x72\x65\164"))) {
            goto oA;
        }
        $od = new Customer();
        $IW = $od->add_oauth_application("\145\166\x65\x6f\156\154\151\x6e\145", "\x45\x56\105\40\117\x6e\154\151\156\x65\40\117\x41\165\164\x68");
        if ("\x41\x70\160\x6c\151\143\141\x74\151\x6f\156\40\103\x72\x65\x61\x74\x65\144" === $IW) {
            goto VS;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, $IW);
        $this->mo_oauth_show_error_message();
        goto ih;
        VS:
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x59\157\x75\x72\x20\163\145\x74\164\151\x6e\x67\163\40\167\145\162\x65\40\163\x61\166\x65\144\x2e\40\x47\x6f\x20\x74\157\x20\101\x64\166\x61\x6e\143\x65\144\40\x45\x56\x45\x20\117\156\x6c\151\x6e\x65\x20\123\x65\164\164\x69\x6e\x67\x73\40\146\x6f\162\40\143\157\x6e\x66\x69\147\165\x72\x69\x6e\147\x20\162\145\163\164\162\151\x63\164\151\x6f\x6e\x73\x20\157\x6e\x20\165\x73\x65\x72\x20\163\151\x67\x6e\40\x69\x6e\x2e");
        $this->mo_oauth_show_success_message();
        ih:
        oA:
        $Dl = '';
        $xk = '';
        $Tx = '';
        Hy:
        $x5["\x61\165\164\x68\157\162\151\x7a\145\x75\x72\x6c"] = $Dl;
        $x5["\x61\143\143\145\x73\x73\x74\x6f\x6b\145\x6e\x75\x72\154"] = $xk;
        $x5["\141\160\x70\x5f\x74\x79\x70\x65"] = isset($post["\x6d\x6f\x5f\x6f\141\x75\164\x68\137\141\160\160\137\164\171\160\145"]) ? stripslashes($post["\155\157\137\157\x61\x75\164\x68\137\x61\160\x70\x5f\x74\x79\x70\145"]) : stripslashes("\x6f\x61\165\164\150");
        if (!($x5["\141\x70\160\x5f\164\171\x70\x65"] == "\157\141\x75\x74\x68" || isset($post["\155\157\x5f\x6f\141\165\164\x68\137\x72\x65\x73\x6f\x75\162\x63\145\x6f\x77\156\x65\162\144\x65\x74\141\x69\154\x73\x75\162\x6c"]) && '' !== $post["\155\x6f\137\x6f\141\x75\x74\x68\x5f\x72\x65\163\x6f\x75\x72\143\x65\157\x77\156\x65\162\x64\x65\x74\141\x69\x6c\163\x75\162\x6c"])) {
            goto ES;
        }
        $Tx = stripslashes($post["\155\157\137\x6f\141\x75\x74\150\x5f\x72\145\x73\157\x75\x72\143\x65\157\x77\156\145\162\x64\145\x74\141\151\154\x73\165\162\x6c"]);
        $x5["\x72\145\163\x6f\x75\x72\x63\x65\x6f\x77\156\x65\162\x64\145\x74\141\151\154\x73\165\162\154"] = $Tx;
        ES:
        return $x5;
    }
    public function change_attribute_mapping($post, $x5)
    {
        $BM = stripslashes($post["\x6d\x6f\137\x6f\141\x75\164\150\137\165\x73\145\x72\156\x61\x6d\x65\x5f\141\x74\x74\x72"]);
        $x5["\x75\163\145\162\156\141\155\145\x5f\x61\x74\164\162"] = $BM;
        return $x5;
    }
}
