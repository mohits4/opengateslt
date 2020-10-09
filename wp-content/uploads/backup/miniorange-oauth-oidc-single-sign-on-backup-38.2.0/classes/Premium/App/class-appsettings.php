<?php


namespace MoOauthClient\Premium;

use MoOauthClient\App;
use MoOauthClient\Standard\AppSettings as StandardAppSettings;
class AppSettings extends StandardAppSettings
{
    public function __construct()
    {
        parent::__construct();
        add_action("\155\157\x5f\x6f\x61\x75\x74\x68\x5f\143\154\x69\145\x6e\x74\137\x73\141\166\145\x5f\141\x70\160\137\x73\145\x74\x74\x69\156\147\x73\137\x69\x6e\164\145\162\156\141\x6c", array($this, "\163\x61\166\145\x5f\x72\157\x6c\145\137\x6d\x61\160\x70\x69\156\147"));
    }
    public function change_app_settings($post, $x5)
    {
        global $Sk;
        $x5 = parent::change_app_settings($post, $x5);
        $x5["\x67\162\x6f\165\x70\144\x65\x74\x61\x69\x6c\163\165\x72\x6c"] = isset($post["\x6d\157\137\157\141\165\164\150\x5f\147\162\157\x75\160\144\145\164\141\x69\154\163\x75\x72\154"]) ? trim(stripslashes($post["\155\157\137\x6f\141\x75\x74\150\137\x67\162\x6f\165\x70\144\145\x74\x61\151\154\163\165\x72\x6c"])) : '';
        $x5["\x6a\x77\x6b\x73\x75\x72\154"] = isset($post["\155\x6f\x5f\x6f\141\x75\x74\150\x5f\x6a\167\x6b\x73\x75\162\154"]) ? trim(stripslashes($post["\155\157\x5f\157\x61\165\164\x68\x5f\x6a\x77\153\163\165\162\x6c"])) : '';
        $x5["\x67\x72\x61\x6e\164\137\164\171\x70\x65"] = isset($post["\147\x72\x61\156\164\137\164\171\160\x65"]) ? stripslashes($post["\147\162\141\156\164\137\x74\x79\160\145"]) : "\x41\165\164\x68\157\162\x69\172\141\164\151\x6f\x6e\40\x43\x6f\x64\x65\40\x47\162\x61\156\164";
        if (isset($post["\145\x6e\x61\x62\154\145\137\x6f\141\165\164\x68\137\x77\x70\137\x6c\x6f\147\x69\x6e"]) && "\x6f\x6e" === $post["\145\156\141\x62\x6c\x65\x5f\157\141\165\x74\150\137\x77\160\137\x6c\x6f\x67\151\x6e"]) {
            goto SE;
        }
        $Sk->mo_oauth_client_delete_option("\x6d\157\x5f\x6f\x61\165\164\150\137\x65\x6e\141\142\x6c\145\x5f\x6f\141\x75\x74\x68\x5f\x77\x70\137\x6c\157\147\x69\x6e");
        goto dJ;
        SE:
        $Sk->mo_oauth_client_update_option("\155\x6f\x5f\x6f\141\x75\164\x68\x5f\145\x6e\141\x62\154\145\x5f\x6f\x61\165\164\150\137\167\160\137\154\157\147\151\x6e", $x5["\141\x70\x70\x49\x64"]);
        dJ:
        return $x5;
    }
    public function save_advanced_grant_settings()
    {
        if (!(!isset($_POST["\x6d\x6f\x5f\x6f\141\x75\164\x68\x5f\147\162\x61\156\164\x5f\x73\x65\x74\x74\151\x6e\x67\x73\x5f\156\157\156\143\145"]) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\157\141\x75\164\150\x5f\147\x72\x61\156\164\x5f\163\x65\164\164\151\x6e\147\163\137\x6e\157\x6e\x63\145"])), "\x6d\x6f\137\157\x61\165\164\x68\137\x67\162\141\x6e\164\137\x73\145\x74\164\x69\x6e\x67\x73"))) {
            goto Rl;
        }
        return;
        Rl:
        $post = $_POST;
        if (!(!isset($post[\MoOAuthConstants::OPTION]) || "\x6d\157\x5f\157\141\165\x74\x68\137\x67\162\141\156\164\x5f\163\145\164\x74\x69\x6e\x67\x73" !== $post[\MoOAuthConstants::OPTION])) {
            goto GE;
        }
        return;
        GE:
        if (!(!isset($post[\MoOAuthConstants::POST_APP_NAME]) || empty($post[\MoOAuthConstants::POST_APP_NAME]))) {
            goto yt;
        }
        return;
        yt:
        global $Sk;
        $cZ = $post[\MoOAuthConstants::POST_APP_NAME];
        $x5 = $Sk->get_app_by_name($cZ);
        $x5 = $x5->get_app_config();
        $x5 = $this->save_grant_settings($post, $x5);
        $Sk->set_app_by_name($cZ, $x5);
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x59\157\x75\x72\40\123\145\x74\x74\151\x6e\147\163\40\x68\141\166\x65\40\142\145\145\x6e\40\163\141\x76\145\144\x20\x73\165\x63\143\145\x73\x73\x66\x75\x6c\x6c\x79\56");
        $Sk->mo_oauth_show_success_message();
        wp_safe_redirect("\x61\144\155\151\x6e\x2e\x70\150\160\77\x70\x61\147\x65\x3d\x6d\x6f\x5f\157\x61\x75\164\150\x5f\x73\x65\x74\164\x69\x6e\x67\163\46\141\x63\164\151\x6f\x6e\75\x75\x70\144\141\x74\145\46\x61\x70\160\x3d" . rawurlencode($cZ));
    }
    public function save_grant_settings($post, $x5)
    {
        global $Sk;
        $x5["\x6a\167\164\x5f\x73\165\x70\160\157\x72\x74"] = isset($post["\x6a\x77\x74\x5f\163\x75\x70\x70\157\x72\164"]) ? 1 : 0;
        $x5["\152\167\x74\137\141\x6c\147\157"] = isset($post["\152\167\164\x5f\141\154\x67\157"]) ? stripslashes($post["\x6a\x77\x74\137\x61\x6c\147\x6f"]) : "\110\123\x41";
        if ("\x52\x53\x41" === $x5["\152\x77\x74\137\141\154\x67\x6f"]) {
            goto Xc;
        }
        if (!isset($x5["\170\65\x30\71\137\x63\145\162\164"])) {
            goto ze;
        }
        unset($x5["\170\x35\60\71\137\143\x65\x72\164"]);
        ze:
        goto YP;
        Xc:
        $x5["\170\x35\x30\x39\x5f\x63\145\162\x74"] = isset($post["\155\x6f\x5f\157\x61\x75\164\150\137\170\x35\60\x39\x5f\x63\x65\x72\x74"]) ? stripslashes($post["\155\x6f\137\157\141\165\164\150\x5f\170\x35\x30\71\x5f\x63\145\x72\x74"]) : '';
        YP:
        return $x5;
    }
    public function change_attribute_mapping($post, $x5)
    {
        $x5 = parent::change_attribute_mapping($post, $x5);
        $x5["\147\x72\157\165\160\156\141\155\x65\137\141\164\164\162\151\x62\x75\164\x65"] = isset($post["\x6d\141\x70\160\x69\156\x67\x5f\x67\x72\157\x75\x70\x6e\x61\155\145\137\x61\x74\x74\x72\x69\142\165\164\x65"]) ? trim(stripslashes($post["\155\x61\x70\x70\x69\x6e\x67\137\147\x72\157\x75\x70\x6e\x61\155\145\137\141\x74\164\162\151\142\x75\164\x65"])) : '';
        $cE = array();
        $nH = 0;
        foreach ($post as $qi => $sh) {
            if (!(strpos($qi, "\155\x6f\x5f\x6f\x61\165\164\150\137\x63\x6c\151\x65\156\x74\137\143\x75\x73\164\x6f\x6d\137\x61\x74\x74\162\x69\x62\x75\164\145\x5f\x6b\145\171") !== false && !empty($post[$qi]))) {
                goto xD;
            }
            $nH++;
            $cY = "\x6d\157\x5f\157\x61\165\x74\x68\x5f\143\x6c\151\x65\156\164\137\143\x75\163\164\x6f\155\x5f\141\x74\164\x72\x69\x62\165\x74\x65\137\166\x61\154\165\145\137" . $nH;
            $cE[$sh] = $post[$cY];
            xD:
            dG:
        }
        q0:
        $x5["\x63\165\163\x74\157\x6d\x5f\141\x74\164\162\163\137\155\x61\160\160\x69\156\147"] = $cE;
        return $x5;
    }
    public function save_role_mapping()
    {
        global $Sk;
        if (!(isset($_POST["\155\x6f\x5f\157\x61\x75\164\150\x5f\143\154\x69\x65\x6e\164\x5f\x73\141\166\x65\137\162\x6f\154\x65\x5f\155\x61\160\160\x69\156\147\x5f\156\157\x6e\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\157\x5f\157\x61\x75\x74\x68\137\x63\154\151\145\156\164\x5f\163\x61\166\x65\x5f\x72\157\x6c\x65\x5f\x6d\141\160\160\151\x6e\147\x5f\156\157\x6e\143\145"])), "\155\x6f\137\x6f\141\x75\x74\x68\x5f\143\x6c\x69\145\156\x74\x5f\x73\x61\166\x65\137\x72\x6f\x6c\145\137\155\x61\x70\x70\151\x6e\x67") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\x6f\137\x6f\141\x75\164\x68\137\143\x6c\151\145\x6e\164\137\163\x61\x76\x65\x5f\x72\x6f\x6c\x65\x5f\x6d\x61\x70\160\x69\156\147" === $_POST[\MoOAuthConstants::OPTION])) {
            goto MD;
        }
        $nd = sanitize_text_field(wp_unslash(isset($_POST[\MoOAuthConstants::POST_APP_NAME]) ? $_POST[\MoOAuthConstants::POST_APP_NAME] : ''));
        $U3 = $Sk->get_app_by_name($nd);
        $h7 = $U3->get_app_config();
        $h7["\x6b\x65\145\160\x5f\x65\170\x69\163\x74\x69\x6e\147\x5f\x75\x73\145\162\137\x72\x6f\154\145\163"] = isset($_POST["\153\x65\145\x70\137\145\x78\151\163\x74\151\156\x67\x5f\165\163\145\162\137\x72\x6f\x6c\x65\163"]) ? sanitize_text_field(wp_unslash($_POST["\153\145\145\160\137\145\x78\151\163\164\151\x6e\147\x5f\165\x73\145\x72\137\x72\x6f\x6c\145\x73"])) : 0;
        $h7["\162\145\163\x74\162\x69\143\x74\x5f\154\x6f\147\x69\156\137\x66\x6f\162\137\x6d\x61\x70\160\x65\x64\137\162\157\154\145\x73"] = isset($_POST["\x72\145\163\x74\x72\x69\143\x74\x5f\154\x6f\x67\151\x6e\137\x66\157\x72\x5f\155\141\160\160\145\x64\x5f\x72\x6f\x6c\x65\x73"]) ? sanitize_text_field(wp_unslash($_POST["\162\x65\163\x74\x72\151\143\164\x5f\x6c\x6f\x67\151\x6e\x5f\146\x6f\162\137\x6d\141\160\x70\x65\x64\x5f\162\x6f\x6c\145\x73"])) : false;
        $un = 100;
        $xi = 0;
        $nH = 1;
        cF:
        if (!($nH <= $un)) {
            goto Lk;
        }
        if (isset($_POST[\MoOAuthConstants::MAP_KEY . $nH])) {
            goto GZ;
        }
        goto Lk;
        goto ik;
        GZ:
        if (!('' === $_POST[\MoOAuthConstants::MAP_KEY . $nH])) {
            goto o4;
        }
        goto dR;
        o4:
        $h7["\x5f\155\141\160\160\151\x6e\x67\137\153\145\x79\137" . $nH] = sanitize_text_field(wp_unslash(isset($_POST[\MoOAuthConstants::MAP_KEY . $nH]) ? $_POST[\MoOAuthConstants::MAP_KEY . $nH] : ''));
        $h7["\x5f\155\141\x70\160\x69\x6e\x67\x5f\166\141\154\165\x65\x5f" . $nH] = sanitize_text_field(wp_unslash(isset($_POST["\x6d\141\x70\160\x69\x6e\147\x5f\x76\x61\x6c\x75\145\x5f" . $nH]) ? $_POST["\155\141\x70\x70\151\156\147\137\166\141\x6c\x75\145\x5f" . $nH] : ''));
        $xi++;
        ik:
        dR:
        $nH++;
        goto cF;
        Lk:
        $h7["\x72\157\x6c\x65\x5f\155\141\x70\x70\151\x6e\147\137\143\157\x75\156\x74"] = $xi;
        $h7["\x5f\155\x61\x70\x70\151\156\147\x5f\166\x61\154\165\145\137\144\x65\x66\141\x75\x6c\x74"] = sanitize_text_field(wp_unslash(isset($_POST["\155\x61\160\160\x69\x6e\x67\137\166\x61\154\x75\145\137\x64\145\146\141\165\x6c\164"]) ? $_POST["\155\x61\160\160\x69\156\x67\x5f\x76\x61\154\165\145\x5f\x64\x65\x66\141\165\154\164"] : ''));
        $me = $Sk->set_app_by_name($nd, $h7);
        if (!$me) {
            goto Vj;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x59\x6f\x75\x72\40\163\x65\x74\164\151\x6e\147\x73\x20\x61\x72\145\x20\x73\141\166\145\144\40\x73\x75\x63\x63\x65\163\x73\146\x75\x6c\x6c\171\56");
        $Sk->mo_oauth_show_success_message();
        goto y2;
        Vj:
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x54\x68\x65\162\x65\x20\167\141\163\x20\x61\156\40\145\162\162\157\x72\40\x73\x61\166\151\x6e\x67\x20\x73\x65\164\x74\151\156\147\163\x2e");
        $Sk->mo_oauth_show_error_message();
        y2:
        wp_safe_redirect("\x61\x64\155\151\x6e\x2e\160\150\160\77\x70\x61\x67\145\x3d\155\x6f\137\157\141\x75\x74\x68\137\163\145\164\164\151\x6e\x67\163\46\164\x61\x62\75\143\157\x6e\x66\x69\x67\x26\x61\143\164\x69\157\156\x3d\x75\x70\x64\141\x74\145\x26\x61\x70\x70\75" . rawurlencode($nd));
        MD:
    }
}
