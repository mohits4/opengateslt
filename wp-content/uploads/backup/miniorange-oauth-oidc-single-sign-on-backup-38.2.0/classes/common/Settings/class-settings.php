<?php


namespace MoOauthClient;

use MoOauthClient\Backup\BackupHandler;
use MoOauthClient\mc_utils;
use MoOauthClient\Customer;
use MoOauthClient\Config;
class Settings
{
    public $config;
    public $util;
    public function __construct()
    {
        global $Sk;
        $this->util = $Sk;
        add_action("\x61\144\155\151\x6e\x5f\x69\x6e\x69\164", array($this, "\x6d\151\x6e\151\x6f\x72\141\156\147\145\x5f\157\x61\x75\x74\x68\x5f\163\141\x76\145\137\x73\x65\x74\x74\x69\156\147\163"));
        add_shortcode("\x6d\x6f\137\157\141\x75\164\150\137\154\x6f\147\x69\156", array($this, "\155\x6f\x5f\157\141\x75\x74\x68\137\x73\150\x6f\162\164\143\157\x64\x65\x5f\154\x6f\147\151\x6e"));
        $this->util->mo_oauth_client_update_option("\155\x6f\x5f\157\x61\x75\164\x68\137\x6c\x6f\147\151\156\x5f\151\x63\x6f\x6e\137\x73\x70\x61\143\145", "\x35");
        $this->util->mo_oauth_client_update_option("\155\x6f\x5f\157\141\165\x74\150\137\x6c\157\147\x69\x6e\x5f\x69\143\x6f\x6e\x5f\143\165\163\164\x6f\155\x5f\167\151\x64\x74\150", "\x33\x32\x35\56\64\x33");
        $this->util->mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\141\165\x74\150\137\154\157\147\x69\156\137\x69\x63\x6f\156\137\143\165\163\164\x6f\155\137\x68\x65\x69\147\150\164", "\71\x2e\66\x33");
        $this->util->mo_oauth_client_update_option("\155\157\x5f\x6f\141\165\164\x68\137\154\157\x67\151\x6e\137\x69\143\x6f\x6e\x5f\x63\165\x73\x74\157\155\137\163\x69\x7a\x65", "\63\65");
        $this->util->mo_oauth_client_update_option("\x6d\x6f\137\x6f\x61\165\164\x68\137\154\157\x67\x69\x6e\x5f\151\x63\157\156\x5f\143\x75\x73\164\x6f\155\x5f\143\x6f\154\x6f\162", "\x32\x42\64\61\x46\x46");
        $this->util->mo_oauth_client_update_option("\x6d\157\x5f\157\x61\x75\164\150\137\x6c\x6f\x67\151\x6e\137\151\x63\x6f\x6e\137\x63\165\x73\164\157\x6d\x5f\142\x6f\x75\156\x64\x61\162\x79", "\x34");
        $this->config = $this->util->get_plugin_config();
    }
    public function miniorange_oauth_save_settings()
    {
        global $Sk;
        if (!(isset($_POST["\143\x68\141\x6e\x67\145\x5f\155\151\156\x69\157\162\141\156\x67\x65\137\x6e\x6f\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x63\x68\x61\156\x67\145\137\x6d\151\x6e\x69\157\162\x61\156\147\x65\137\156\157\156\143\145"])), "\143\150\141\156\x67\145\x5f\x6d\151\156\151\157\x72\141\156\x67\x65") && isset($_POST[\MoOAuthConstants::OPTION]) && "\143\x68\x61\156\x67\145\x5f\x6d\x69\156\x69\157\x72\x61\x6e\147\145" === $_POST[\MoOAuthConstants::OPTION])) {
            goto PC;
        }
        mo_oauth_deactivate();
        return;
        PC:
        if (!(isset($_POST["\155\157\137\157\141\165\x74\150\137\162\145\x67\x69\163\164\x65\x72\x5f\143\165\163\x74\157\155\145\162\x5f\156\157\x6e\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\137\157\141\165\x74\x68\137\162\x65\x67\151\x73\x74\145\162\x5f\x63\x75\163\164\x6f\155\x65\162\137\x6e\x6f\156\x63\145"])), "\155\157\x5f\x6f\141\165\x74\150\x5f\162\x65\147\x69\163\164\145\162\x5f\143\x75\163\x74\157\155\x65\x72") && isset($_POST[\MoOAuthConstants::OPTION]) && "\155\157\x5f\x6f\x61\165\164\x68\137\162\145\x67\151\x73\x74\145\x72\137\x63\x75\163\x74\157\155\145\162" === $_POST[\MoOAuthConstants::OPTION])) {
            goto UC;
        }
        $nW = '';
        $qG = '';
        $CV = '';
        $NC = '';
        $Z1 = '';
        $AO = '';
        $Zx = '';
        if (!($this->util->mo_oauth_check_empty_or_null($_POST["\x65\x6d\x61\x69\154"]) || $this->util->mo_oauth_check_empty_or_null($_POST["\160\x61\163\163\167\157\x72\144"]) || $this->util->mo_oauth_check_empty_or_null($_POST["\143\157\156\x66\x69\162\x6d\120\x61\x73\x73\x77\x6f\162\144"]))) {
            goto Fz;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\101\x6c\154\40\164\x68\x65\x20\x66\151\145\x6c\x64\163\x20\x61\x72\x65\40\162\x65\x71\165\x69\162\145\144\56\40\120\x6c\145\x61\x73\x65\40\145\156\x74\145\x72\40\x76\141\x6c\151\x64\x20\145\156\164\x72\x69\x65\163\x2e");
        $this->util->mo_oauth_show_error_message();
        return;
        Fz:
        if (strlen($_POST["\x70\141\x73\163\x77\x6f\x72\x64"]) < 8 || strlen($_POST["\x63\157\x6e\146\151\x72\155\x50\x61\163\163\167\x6f\162\x64"]) < 8) {
            goto cY;
        }
        $nW = sanitize_email($_POST["\x65\155\141\x69\154"]);
        $qG = stripslashes($_POST["\160\x68\157\x6e\x65"]);
        $CV = stripslashes($_POST["\160\x61\x73\x73\167\x6f\162\x64"]);
        $NC = stripslashes($_POST["\146\156\x61\x6d\x65"]);
        $Z1 = stripslashes($_POST["\154\156\141\155\145"]);
        $AO = stripslashes($_POST["\143\157\x6d\x70\x61\x6e\x79"]);
        $Zx = stripslashes($_POST["\x63\157\156\x66\151\x72\x6d\x50\x61\163\163\167\x6f\162\144"]);
        goto Fd;
        cY:
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\103\150\x6f\157\163\x65\x20\x61\40\x70\x61\163\x73\167\157\162\144\40\x77\x69\164\150\40\x6d\151\156\151\155\165\155\40\x6c\145\x6e\x67\x74\x68\40\x38\56");
        $this->util->mo_oauth_show_error_message();
        return;
        Fd:
        $this->util->mo_oauth_client_update_option("\155\157\137\157\x61\x75\164\150\x5f\x61\x64\155\151\x6e\137\145\x6d\141\x69\x6c", $nW);
        $this->util->mo_oauth_client_update_option("\x6d\157\137\157\141\x75\164\x68\x5f\141\x64\x6d\151\x6e\x5f\160\x68\x6f\x6e\145", $qG);
        $this->util->mo_oauth_client_update_option("\x6d\x6f\137\157\141\x75\164\150\x5f\141\x64\x6d\x69\156\137\x66\x6e\x61\155\x65", $NC);
        $this->util->mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\141\x75\164\x68\x5f\x61\144\x6d\151\x6e\137\154\x6e\x61\155\145", $Z1);
        $this->util->mo_oauth_client_update_option("\155\x6f\x5f\x6f\141\165\x74\150\137\141\144\x6d\x69\156\137\x63\157\x6d\x70\141\x6e\x79", $AO);
        if (!($this->util->mo_oauth_is_curl_installed() === 0)) {
            goto aL;
        }
        return $this->util->mo_oauth_show_curl_error();
        aL:
        if (strcmp($CV, $Zx) === 0) {
            goto pd;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\120\x61\x73\163\x77\157\x72\x64\163\x20\144\x6f\40\x6e\x6f\164\40\x6d\141\164\x63\150\56");
        $this->util->mo_oauth_client_delete_option("\x76\145\162\x69\x66\x79\137\x63\x75\163\164\x6f\155\x65\162");
        $this->util->mo_oauth_show_error_message();
        goto j5;
        pd:
        $this->util->mo_oauth_client_update_option("\x70\141\163\x73\167\x6f\162\x64", $CV);
        $od = new Customer();
        $nW = $this->util->mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\141\x75\164\x68\137\141\144\155\151\x6e\x5f\x65\x6d\x61\151\154");
        $Dc = json_decode($od->check_customer(), true);
        if (strcasecmp($Dc["\x73\164\x61\x74\165\x73"], "\103\x55\x53\124\117\115\105\122\x5f\x4e\117\124\x5f\106\117\125\116\104") === 0) {
            goto Vz;
        }
        $this->mo_oauth_get_current_customer();
        goto GB;
        Vz:
        $this->create_customer();
        GB:
        j5:
        UC:
        if (!(isset($_POST["\x6d\x6f\x5f\x6f\141\165\164\x68\137\166\x65\x72\x69\x66\171\137\x63\x75\163\x74\x6f\x6d\x65\162\137\156\157\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\x5f\x6f\141\165\164\x68\x5f\166\145\x72\x69\146\171\137\x63\165\x73\164\157\x6d\x65\162\137\x6e\x6f\156\x63\x65"])), "\155\x6f\137\157\141\x75\x74\x68\x5f\x76\x65\x72\151\x66\x79\x5f\143\x75\x73\164\157\x6d\145\x72") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\x6f\137\x6f\141\x75\164\150\137\x76\x65\162\151\x66\171\137\143\165\x73\x74\x6f\155\145\x72" === $_POST[\MoOAuthConstants::OPTION])) {
            goto wJ;
        }
        if (!($this->util->mo_oauth_is_curl_installed() === 0)) {
            goto wF;
        }
        return $this->util->mo_oauth_show_curl_error();
        wF:
        $nW = isset($_POST["\x65\155\x61\x69\154"]) ? sanitize_email(wp_unslash($_POST["\x65\155\141\151\x6c"])) : '';
        $CV = isset($_POST["\x70\141\x73\163\167\157\162\144"]) ? sanitize_text_field(wp_unslash($_POST["\160\x61\x73\163\x77\157\162\x64"])) : '';
        if (!($this->util->mo_oauth_check_empty_or_null($nW) || $this->util->mo_oauth_check_empty_or_null($CV))) {
            goto uk;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x41\x6c\154\40\164\150\145\x20\x66\x69\145\x6c\x64\x73\x20\141\162\145\40\162\x65\x71\165\151\162\145\144\56\x20\x50\x6c\145\x61\163\x65\40\145\156\x74\145\x72\x20\166\x61\154\151\x64\40\145\x6e\164\x72\151\x65\163\56");
        $this->util->mo_oauth_show_error_message();
        return;
        uk:
        $this->util->mo_oauth_client_update_option("\155\157\x5f\x6f\x61\165\164\x68\x5f\141\x64\x6d\151\156\137\145\x6d\141\151\154", $nW);
        $this->util->mo_oauth_client_update_option("\160\141\x73\x73\167\157\162\x64", $CV);
        $od = new Customer();
        $Dc = $od->get_customer_key();
        $UA = json_decode($Dc, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            goto zX;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\111\156\166\x61\154\x69\x64\x20\165\x73\x65\162\156\141\155\145\x20\157\x72\40\160\x61\x73\x73\x77\157\162\144\56\40\120\154\145\x61\163\145\40\x74\x72\171\40\x61\147\141\151\156\x2e");
        $this->util->mo_oauth_show_error_message();
        goto lk;
        zX:
        $this->util->mo_oauth_client_update_option("\155\157\137\x6f\141\x75\164\150\137\x61\144\155\151\156\137\x63\165\163\x74\157\155\x65\162\x5f\x6b\x65\x79", $UA["\x69\x64"]);
        $this->util->mo_oauth_client_update_option("\x6d\157\x5f\x6f\x61\165\x74\x68\137\141\x64\x6d\151\x6e\x5f\x61\160\151\x5f\x6b\145\171", $UA["\141\160\151\113\x65\171"]);
        $this->util->mo_oauth_client_update_option("\143\165\163\x74\x6f\x6d\145\162\137\164\157\153\x65\156", $UA["\x74\x6f\x6b\x65\156"]);
        if (!isset($uc["\160\x68\157\x6e\145"])) {
            goto Is;
        }
        $this->util->mo_oauth_client_update_option("\155\157\x5f\x6f\141\165\164\x68\x5f\x61\144\x6d\151\x6e\137\160\x68\x6f\x6e\145", $UA["\x70\x68\157\x6e\145"]);
        Is:
        $this->util->mo_oauth_client_delete_option("\160\x61\163\x73\x77\x6f\162\144");
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\103\165\163\164\x6f\x6d\x65\162\40\x72\145\164\162\x69\145\x76\x65\144\40\163\x75\143\143\145\163\163\x66\165\154\154\x79");
        $this->util->mo_oauth_client_delete_option("\x76\145\162\x69\146\x79\x5f\143\165\163\x74\157\x6d\x65\x72");
        $this->util->mo_oauth_show_success_message();
        lk:
        wJ:
        if (!(isset($_POST["\155\x6f\x5f\157\141\165\164\x68\137\143\x68\x61\156\147\x65\x5f\x65\x6d\x61\x69\x6c\137\156\157\156\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\x6f\x5f\x6f\x61\165\164\150\137\x63\x68\141\x6e\x67\x65\x5f\145\155\x61\151\154\137\156\x6f\x6e\143\x65"])), "\x6d\157\x5f\157\x61\165\164\x68\x5f\143\150\x61\156\x67\x65\137\x65\155\141\x69\154") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\157\137\x6f\141\x75\164\150\x5f\143\150\141\x6e\147\x65\137\x65\x6d\x61\x69\x6c" === $_POST[\MoOAuthConstants::OPTION])) {
            goto CL;
        }
        $this->util->mo_oauth_client_update_option("\x76\145\x72\x69\x66\171\137\143\165\163\x74\x6f\x6d\x65\162", '');
        $this->util->mo_oauth_client_update_option("\155\157\x5f\x6f\141\x75\164\x68\137\x72\145\147\x69\163\164\x72\x61\x74\x69\x6f\x6e\137\163\x74\141\x74\165\x73", '');
        $this->util->mo_oauth_client_update_option("\x6e\145\167\137\162\x65\x67\151\163\x74\x72\141\x74\151\157\x6e", "\164\162\x75\x65");
        CL:
        if (!(isset($_POST["\x6d\x6f\x5f\157\141\x75\x74\150\x5f\x63\x6f\x6e\x74\141\143\164\x5f\x75\163\137\x71\x75\145\162\171\137\x6f\x70\x74\151\x6f\x6e\137\x6e\x6f\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\x5f\x6f\141\165\164\x68\x5f\x63\157\156\x74\x61\143\164\x5f\165\163\x5f\x71\165\145\162\x79\137\157\x70\x74\151\157\156\x5f\x6e\157\x6e\143\145"])), "\x6d\157\x5f\157\x61\165\x74\150\137\x63\157\156\164\x61\x63\164\137\165\x73\x5f\x71\165\145\162\x79\137\157\x70\x74\151\x6f\156") && isset($_POST[\MoOAuthConstants::OPTION]) && "\155\x6f\137\157\x61\165\164\150\137\x63\157\156\164\x61\143\x74\137\x75\163\137\161\165\x65\162\171\x5f\x6f\160\x74\151\157\156" === $_POST[\MoOAuthConstants::OPTION])) {
            goto yW;
        }
        if (!($this->util->mo_oauth_is_curl_installed() === 0)) {
            goto Xp;
        }
        return $this->util->mo_oauth_show_curl_error();
        Xp:
        $nW = isset($_POST["\x6d\157\137\157\x61\x75\164\150\137\143\157\156\164\x61\143\x74\137\x75\163\x5f\145\155\x61\151\x6c"]) ? sanitize_text_field(wp_unslash($_POST["\155\157\137\x6f\141\x75\164\x68\137\143\x6f\156\x74\141\x63\164\137\165\x73\137\145\x6d\x61\151\x6c"])) : '';
        $qG = isset($_POST["\155\157\137\157\x61\x75\x74\150\x5f\x63\157\156\164\x61\x63\164\x5f\165\163\x5f\x70\x68\x6f\156\x65"]) ? sanitize_text_field(wp_unslash($_POST["\155\157\x5f\157\141\x75\x74\x68\137\x63\x6f\x6e\x74\x61\x63\x74\x5f\165\x73\137\160\x68\x6f\156\x65"])) : '';
        $uh = isset($_POST["\x6d\157\137\157\141\x75\164\150\137\143\157\156\x74\141\143\x74\137\x75\x73\x5f\x71\165\x65\x72\171"]) ? sanitize_text_field(wp_unslash($_POST["\155\x6f\x5f\x6f\x61\165\164\150\137\143\157\156\x74\141\x63\164\x5f\165\163\137\161\x75\145\x72\x79"])) : '';
        $vl = isset($_POST["\x6d\x6f\x5f\157\141\165\x74\x68\x5f\163\x65\156\x64\x5f\x70\154\x75\147\151\x6e\x5f\x63\x6f\156\146\x69\x67"]);
        $od = new Customer();
        if ($this->util->mo_oauth_check_empty_or_null($nW) || $this->util->mo_oauth_check_empty_or_null($uh)) {
            goto eo;
        }
        $U5 = $od->submit_contact_us($nW, $qG, $uh, $vl);
        if (false === $U5) {
            goto G3;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x54\x68\x61\x6e\153\x73\x20\x66\x6f\162\40\x67\x65\x74\x74\151\156\x67\x20\151\x6e\x20\x74\157\x75\143\x68\41\40\x57\x65\x20\163\x68\141\154\x6c\x20\147\x65\164\40\142\x61\143\x6b\40\x74\x6f\x20\x79\x6f\165\40\163\x68\x6f\x72\164\x6c\171\56");
        $this->util->mo_oauth_show_success_message();
        goto tr;
        G3:
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\131\x6f\x75\162\40\161\x75\145\x72\171\40\x63\x6f\x75\x6c\x64\40\156\157\164\40\x62\x65\x20\x73\x75\x62\155\x69\164\164\145\x64\x2e\40\x50\x6c\x65\x61\163\x65\40\x74\x72\171\40\141\x67\x61\151\156\x2e");
        $this->util->mo_oauth_show_error_message();
        tr:
        goto t4;
        eo:
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\120\x6c\145\x61\163\x65\x20\x66\x69\154\x6c\x20\165\x70\x20\105\155\x61\151\154\40\x61\x6e\144\x20\x51\165\x65\x72\171\40\x66\x69\x65\154\x64\163\40\164\157\40\163\x75\x62\155\151\164\40\171\157\165\162\40\161\x75\x65\x72\171\x2e");
        $this->util->mo_oauth_show_error_message();
        t4:
        yW:
        if (!(isset($_POST["\x6d\157\x5f\157\141\165\x74\150\x5f\x72\x65\163\x74\x6f\162\x65\137\x62\141\143\x6b\x75\x70\137\x6e\157\156\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\x6f\x5f\x6f\x61\x75\164\150\x5f\x72\145\x73\x74\157\x72\145\x5f\x62\141\143\153\165\x70\x5f\x6e\x6f\x6e\x63\145"])), "\x6d\x6f\x5f\x6f\x61\165\x74\150\137\x72\145\163\164\157\x72\x65\x5f\x62\x61\143\153\x75\160") && isset($_POST[\MoOAuthConstants::OPTION]) && "\155\x6f\x5f\157\x61\165\x74\x68\137\162\145\x73\164\157\x72\145\137\x62\141\x63\x6b\165\160" === $_POST[\MoOAuthConstants::OPTION])) {
            goto Xn;
        }
        $FR = "\124\x68\x65\162\145\40\x77\x61\x73\40\x61\x6e\40\145\x72\x72\157\x72\x20\165\160\154\157\141\144\151\x6e\147\40\x74\150\x65\x20\146\x69\x6c\145";
        if (isset($_FILES["\x6d\x6f\x5f\x6f\x61\x75\164\150\x5f\143\154\151\x65\156\x74\137\142\141\143\x6b\x75\160"])) {
            goto KS;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, $FR);
        $this->util->mo_oauth_show_error_message();
        return;
        KS:
        if (function_exists("\167\160\137\150\x61\156\x64\154\x65\137\165\x70\154\x6f\141\144")) {
            goto av;
        }
        require_once ABSPATH . "\167\x70\x2d\141\x64\x6d\x69\x6e\57\151\x6e\x63\x6c\165\x64\x65\163\x2f\146\x69\154\145\56\x70\150\160";
        av:
        $aI = $_FILES["\x6d\157\137\157\141\x75\x74\x68\x5f\143\154\x69\x65\x6e\164\x5f\142\x61\x63\x6b\x75\x70"];
        if (!(!isset($aI["\x65\x72\x72\x6f\162"]) || is_array($aI["\145\x72\162\157\x72"]) || UPLOAD_ERR_OK !== $aI["\x65\x72\162\157\x72"])) {
            goto Bf;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, $FR . "\x3a\40" . json_encode($aI["\x65\162\x72\x6f\x72"], JSON_UNESCAPED_SLASHES));
        $this->util->mo_oauth_show_error_message();
        return;
        Bf:
        $sF = new \finfo(FILEINFO_MIME_TYPE);
        $NY = array_search($sF->file($aI["\x74\x6d\x70\x5f\156\141\155\x65"]), array("\164\145\170\x74" => "\164\x65\170\x74\57\160\x6c\141\x69\156"), true);
        $C8 = explode("\x2e", $aI["\x6e\x61\155\x65"]);
        $C8 = $C8[count($C8) - 1];
        if (!(false === $NY || $C8 !== "\x6a\163\157\156")) {
            goto ER;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, $FR . "\x3a\40\x49\x6e\x76\x61\x6c\151\144\40\106\151\x6c\145\40\x46\157\162\x6d\141\x74\56");
        $this->util->mo_oauth_show_error_message();
        return;
        ER:
        $aP = file_get_contents($aI["\x74\155\160\x5f\156\x61\155\x65"]);
        $jc = json_decode($aP, true);
        if (!(json_last_error() !== JSON_ERROR_NONE)) {
            goto u4;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, $FR . "\x3a\x20\111\x6e\166\141\x6c\x69\144\x20\x46\x69\154\145\x20\x46\157\x72\x6d\141\164\x2e");
        $this->util->mo_oauth_show_error_message();
        return;
        u4:
        $aB = BackupHandler::restore_settings($jc);
        if (!$aB) {
            goto kR;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\123\145\164\x74\151\156\x67\163\x20\162\x65\x73\x74\x6f\162\145\144\40\x73\x75\x63\143\145\x73\x73\146\165\154\154\171\56");
        $this->util->mo_oauth_show_success_message();
        return;
        kR:
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x54\150\x65\x72\x65\40\167\141\x73\x20\141\x6e\x20\x69\x73\163\x75\145\x20\x77\x68\x69\154\145\40\162\x65\x73\x74\x6f\162\151\156\x67\40\x74\x68\145\40\143\157\x6e\146\x69\x67\x75\162\x61\164\151\x6f\156\56");
        $this->util->mo_oauth_show_error_message();
        return;
        Xn:
        if (!(isset($_POST["\x6d\157\x5f\157\141\x75\164\150\137\144\157\x77\x6e\154\x6f\x61\x64\137\x62\141\143\153\x75\x70\x5f\x6e\x6f\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\137\x6f\x61\165\x74\150\137\x64\x6f\x77\156\x6c\157\141\144\x5f\142\x61\x63\x6b\x75\x70\x5f\156\157\x6e\143\145"])), "\155\x6f\137\157\x61\x75\x74\x68\137\x64\x6f\x77\x6e\154\x6f\141\x64\137\x62\x61\x63\153\165\160") && isset($_POST[\MoOAuthConstants::OPTION]) && "\155\x6f\137\157\141\165\x74\150\137\x64\x6f\x77\156\x6c\157\x61\144\137\x62\141\143\x6b\x75\160" === $_POST[\MoOAuthConstants::OPTION])) {
            goto PY;
        }
        $Yb = BackupHandler::get_backup_json();
        header("\103\x6f\x6e\x74\145\156\x74\x2d\124\x79\x70\x65\72\x20\141\x70\160\x6c\151\x63\141\x74\x69\x6f\x6e\x2f\x6a\163\x6f\x6e");
        header("\103\x6f\156\x74\145\x6e\164\55\104\151\163\160\157\163\x69\x74\151\157\156\x3a\40\x61\164\x74\x61\143\x68\155\145\156\164\x3b\x20\x66\x69\154\145\x6e\x61\x6d\x65\x3d\42\x70\154\165\x67\151\x6e\137\142\x61\143\153\165\160\x2e\x6a\x73\157\156\42");
        header("\x43\x6f\x6e\x74\145\x6e\x74\x2d\114\145\x6e\147\164\x68\x3a\x20" . strlen($Yb));
        header("\x43\157\156\x6e\145\143\x74\x69\x6f\156\72\x20\143\x6c\157\163\x65");
        echo $Yb;
        die;
        PY:
        do_action("\x64\x6f\137\x6d\141\x69\156\137\163\x65\x74\164\151\156\x67\x73\137\151\x6e\x74\145\162\x6e\x61\x6c", $_POST);
    }
    public function mo_oauth_get_current_customer()
    {
        $od = new Customer();
        $Dc = $od->get_customer_key();
        $UA = json_decode($Dc, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            goto xC;
        }
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\131\x6f\x75\x20\x61\154\162\x65\141\x64\x79\40\150\141\x76\145\x20\141\x6e\40\141\143\143\x6f\x75\156\x74\40\167\151\164\x68\x20\x6d\x69\156\151\117\162\141\156\x67\x65\x2e\40\120\x6c\x65\141\163\x65\x20\145\x6e\x74\145\x72\40\141\40\x76\x61\x6c\151\144\40\160\141\163\x73\167\x6f\x72\144\56");
        $this->util->mo_oauth_client_update_option("\x76\145\x72\x69\x66\x79\x5f\143\165\163\164\157\155\145\x72", "\x74\162\x75\x65");
        $this->util->mo_oauth_show_error_message();
        goto hA;
        xC:
        $this->util->mo_oauth_client_update_option("\155\x6f\x5f\x6f\141\165\164\150\137\141\144\x6d\151\156\137\143\165\x73\164\157\x6d\145\162\137\x6b\145\x79", $UA["\x69\x64"]);
        $this->util->mo_oauth_client_update_option("\x6d\157\137\157\141\x75\164\150\x5f\141\144\155\151\156\137\141\x70\x69\x5f\x6b\x65\171", $UA["\x61\x70\x69\113\x65\x79"]);
        $this->util->mo_oauth_client_update_option("\143\165\163\x74\157\x6d\145\x72\x5f\x74\157\153\x65\x6e", $UA["\x74\x6f\153\145\x6e"]);
        $this->util->mo_oauth_client_update_option("\160\141\x73\163\167\x6f\162\144", '');
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x43\165\163\x74\x6f\x6d\x65\162\x20\162\x65\x74\162\x69\x65\166\x65\x64\x20\163\165\143\x63\x65\x73\x73\x66\x75\154\154\171");
        $this->util->mo_oauth_client_delete_option("\x76\x65\x72\151\x66\x79\137\143\x75\x73\x74\x6f\155\145\x72");
        $this->util->mo_oauth_client_delete_option("\x6e\x65\167\x5f\162\145\x67\151\163\x74\162\141\164\151\x6f\x6e");
        $this->util->mo_oauth_show_success_message();
        hA:
    }
    public function create_customer()
    {
        global $Sk;
        $od = new Customer();
        $UA = json_decode($od->create_customer(), true);
        if (strcasecmp($UA["\163\164\x61\164\x75\x73"], "\103\125\x53\124\117\115\x45\122\137\x55\x53\105\x52\x4e\x41\x4d\x45\x5f\101\114\122\x45\101\104\131\x5f\105\130\111\123\x54\123") === 0) {
            goto Ht;
        }
        if (strcasecmp($UA["\163\164\x61\x74\x75\x73"], "\123\x55\x43\x43\x45\123\x53") === 0) {
            goto TY;
        }
        goto N0;
        Ht:
        $this->mo_oauth_get_current_customer();
        $this->util->mo_oauth_client_delete_option("\155\157\137\157\x61\x75\x74\x68\137\156\145\167\x5f\x63\x75\163\x74\157\x6d\x65\x72");
        goto N0;
        TY:
        $this->util->mo_oauth_client_update_option("\x6d\157\137\157\141\165\164\150\x5f\141\x64\155\151\x6e\x5f\143\x75\163\164\157\155\145\162\x5f\153\145\171", $UA["\x69\144"]);
        $this->util->mo_oauth_client_update_option("\x6d\157\x5f\x6f\x61\x75\x74\x68\x5f\141\x64\155\x69\x6e\x5f\x61\160\x69\137\x6b\x65\x79", $UA["\x61\x70\151\x4b\145\171"]);
        $this->util->mo_oauth_client_update_option("\143\165\163\x74\x6f\155\145\162\137\x74\x6f\x6b\145\156", $UA["\164\x6f\x6b\x65\x6e"]);
        $this->util->mo_oauth_client_update_option("\x70\141\x73\x73\167\x6f\x72\144", '');
        $this->util->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x52\x65\147\x69\163\164\x65\162\145\x64\40\x73\x75\143\x63\145\x73\x73\146\165\x6c\154\x79\56");
        $this->util->mo_oauth_client_update_option("\155\157\137\x6f\141\x75\x74\150\x5f\x72\x65\x67\x69\163\x74\x72\141\x74\151\x6f\x6e\137\x73\x74\141\x74\165\163", "\x4d\117\x5f\117\x41\x55\124\x48\x5f\122\105\x47\x49\123\124\x52\x41\x54\x49\117\116\x5f\x43\117\x4d\120\114\105\x54\105");
        $this->util->mo_oauth_client_update_option("\x6d\x6f\137\x6f\x61\x75\164\150\x5f\156\x65\167\137\x63\x75\x73\x74\x6f\155\145\162", 1);
        $this->util->mo_oauth_client_delete_option("\166\x65\x72\x69\146\171\137\143\165\163\164\157\155\x65\x72");
        $this->util->mo_oauth_client_delete_option("\156\x65\167\137\162\x65\x67\151\163\164\162\141\x74\151\x6f\x6e");
        $this->util->mo_oauth_show_success_message();
        N0:
    }
}
