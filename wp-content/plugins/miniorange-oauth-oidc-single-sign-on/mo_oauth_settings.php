<?php
/**
 * Plugin Name: OAuth Single Sign On - SSO (OAuth client)
 * Plugin URI: http://miniorange.com
 * Description: This plugin enables login to your WordPress site using OAuth apps like Google, Facebook, EVE Online and other.
 * Version: 38.2.0
 * Author: miniOrange
 * Author URI: https://www.miniorange.com
 * License: GPL2
 */


require "\137\141\x75\164\157\154\157\141\144\56\160\150\x70";
require_once "\155\x6f\55\157\141\x75\164\150\55\x63\154\x69\145\x6e\164\x2d\160\x6c\x75\x67\x69\x6e\55\166\145\x72\163\151\157\156\x2d\165\160\144\x61\164\145\56\x70\150\160";
use MoOauthClient\Base\BaseStructure;
use MoOauthClient\MOUtils;
use MoOauthClient\Base\InstanceHelper;
use MoOauthClient\MoOauthClientWidget;
use MoOauthClient\Free\MOCVisualTour;
global $Sk;
$Yx = new InstanceHelper();
$m6 = new BaseStructure();
$Sk = $Yx->get_utils_instance();
$N6 = $Yx->get_settings_instance();
$jf = $Yx->get_login_handler_instance();
function register_mo_oauth_widget()
{
    register_widget("\134\115\157\x4f\141\165\x74\150\x43\x6c\x69\x65\156\164\x5c\115\x6f\x4f\141\x75\x74\x68\x43\x6c\x69\145\156\164\x57\x69\144\147\145\x74");
}
function mo_oauth_shortcode_login($I_)
{
    global $Sk;
    $JZ = new MoOauthClientWidget();
    if ($Sk->check_versi(3) && $Sk->mo_oauth_client_get_option("\155\157\137\x6f\141\x75\x74\150\x5f\x61\x63\x74\x69\x76\x61\164\145\137\163\x69\156\147\x6c\145\x5f\154\x6f\147\x69\156\137\x66\x6c\x6f\167")) {
        goto Mtv;
    }
    return $I_ ? $JZ->mo_oauth_login_form($Fo = true, $Kd = $I_[0]) : $JZ->mo_oauth_login_form(false);
    goto Dpd;
    Mtv:
    return $JZ->mo_activate_single_login_flow_form();
    Dpd:
}
add_action("\167\x69\144\147\x65\x74\163\137\x69\156\x69\x74", "\162\145\x67\x69\x73\x74\145\x72\x5f\x6d\157\137\157\x61\x75\x74\x68\137\x77\151\144\147\x65\164");
add_shortcode("\155\157\137\x6f\x61\165\x74\150\137\x6c\157\x67\151\x6e", "\x6d\x6f\137\157\x61\x75\x74\x68\137\163\x68\157\x72\x74\143\157\x64\145\x5f\154\157\147\151\x6e");
function miniorange_oauth_visual_tour()
{
    $OX = new MOCVisualTour();
}
if (!($Sk->get_versi() === 0)) {
    goto zmq;
}
add_action("\141\144\x6d\151\x6e\137\x69\x6e\151\x74", "\155\x69\156\151\157\162\x61\x6e\x67\x65\x5f\157\141\x75\x74\150\137\166\x69\163\x75\141\154\x5f\164\157\165\162");
zmq:
function mo_oauth_deactivate()
{
    global $Sk;
    do_action("\x6d\x6f\x5f\143\x6c\145\x61\162\137\x70\x6c\165\147\137\143\141\x63\x68\145");
    $Sk->deactivate_plugin();
}
register_deactivation_hook(__FILE__, "\155\157\137\x6f\x61\x75\164\150\x5f\x64\145\141\x63\x74\x69\166\141\164\145");
