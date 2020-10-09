<?php


if (defined("\101\x42\123\120\101\x54\110")) {
    goto J8F;
}
die;
J8F:
define("\115\x4f\x43\x5f\104\x49\x52", plugin_dir_path(__FILE__));
define("\x4d\x4f\103\137\x55\122\114", plugin_dir_url(__FILE__));
define("\115\x4f\x5f\125\x49\x44", "\x44\106\70\x56\113\112\x4f\x35\106\x44\x48\132\x41\x52\102\x52\65\132\104\x53\62\126\65\112\x36\x36\125\x32\x4e\104\122");
define("\126\105\122\123\x49\x4f\x4e", "\155\157\137\145\x6e\164\145\162\x70\162\x69\163\x65\x5f\x76\145\x72\163\x69\x6f\x6e");
include_file(MOC_DIR . "\57\143\x6c\141\163\163\x65\x73\57\x63\x6f\155\x6d\157\x6e");
include_file(MOC_DIR . "\x2f\143\x6c\x61\x73\163\x65\163\x2f\x46\162\145\145");
include_file(MOC_DIR . "\x2f\x63\154\141\163\x73\x65\163\57\x53\164\x61\x6e\x64\141\x72\x64");
include_file(MOC_DIR . "\57\143\x6c\141\163\163\145\x73\57\120\162\x65\x6d\x69\165\x6d");
include_file(MOC_DIR . "\57\143\154\141\163\163\x65\163\x2f\x45\156\x74\145\162\160\162\151\163\145");
function get_dir_contents($r_, &$FI = array())
{
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($r_, RecursiveDirectoryIterator::KEY_AS_PATHNAME), RecursiveIteratorIterator::CHILD_FIRST) as $ff => $K4) {
        if (!($K4->isFile() && $K4->isReadable())) {
            goto XkW;
        }
        $FI[$ff] = realpath($K4->getPathname());
        XkW:
        VHA:
    }
    Kb0:
    return $FI;
}
function get_sorted_files($r_)
{
    $rf = get_dir_contents($r_);
    $gg = array();
    $ob = array();
    foreach ($rf as $ff => $ai) {
        if (!(strpos($ai, "\56\160\x68\x70") !== false)) {
            goto B_c;
        }
        if (strpos($ai, "\x49\156\x74\145\162\x66\141\x63\x65") !== false) {
            goto LEe;
        }
        $ob[$ff] = $ai;
        goto A0q;
        LEe:
        $gg[$ff] = $ai;
        A0q:
        B_c:
        kAO:
    }
    cYN:
    return array("\x69\x6e\x74\145\162\146\141\143\145\163" => $gg, "\143\154\141\x73\x73\x65\x73" => $ob);
}
function include_file($r_)
{
    if (is_dir($r_)) {
        goto jF5;
    }
    return;
    jF5:
    $r_ = sane_dir_path($r_);
    $DY = realpath($r_);
    if (!(false !== $DY && !is_dir($r_))) {
        goto MZC;
    }
    return;
    MZC:
    $Yt = get_sorted_files($r_);
    require_all($Yt["\x69\x6e\x74\x65\162\146\x61\x63\x65\163"]);
    require_all($Yt["\x63\154\141\163\x73\145\163"]);
}
function require_all($rf)
{
    foreach ($rf as $ff => $ai) {
        require_once $ai;
        Nn4:
    }
    ox5:
}
function is_valid_file($Oa)
{
    return '' !== $Oa && "\x2e" !== $Oa && "\56\56" !== $Oa;
}
function get_valid_html($zU = array())
{
    $ci = array("\x73\164\162\x6f\156\147" => array(), "\145\x6d" => array(), "\x62" => array(), "\151" => array(), "\141" => array("\x68\162\145\146" => array(), "\164\141\x72\147\145\164" => array()));
    if (empty($zU)) {
        goto G87;
    }
    return array_merge($zU, $ci);
    G87:
    return $ci;
}
function get_version_number()
{
    $hH = get_file_data(MOC_DIR . "\x2f\155\x6f\137\x6f\141\x75\164\x68\x5f\x73\x65\164\x74\x69\x6e\147\x73\56\160\150\160", array("\126\x65\x72\163\151\x6f\x6e"), "\x70\x6c\165\147\x69\x6e");
    $EU = isset($hH[0]) ? $hH[0] : '';
    return $EU;
}
function sane_dir_path($r_)
{
    return str_replace("\57", DIRECTORY_SEPARATOR, $r_);
}
if (function_exists("\x69\x73\x5f\x72\x65\163\164")) {
    goto LRR;
}
function is_rest()
{
    $MU = rest_get_url_prefix();
    if (!(defined("\x52\x45\x53\124\137\122\x45\x51\125\x45\x53\x54") && REST_REQUEST || isset($_GET["\x72\145\163\x74\x5f\162\x6f\165\164\145"]) && strpos(trim($_GET["\162\145\163\164\x5f\162\157\x75\164\x65"], "\134\57"), $MU, 0) === 0)) {
        goto sRA;
    }
    return true;
    sRA:
    global $jl;
    if (!($jl === null)) {
        goto RIQ;
    }
    $jl = new WP_Rewrite();
    RIQ:
    $x1 = wp_parse_url(trailingslashit(rest_url()));
    $Cd = wp_parse_url(add_query_arg(array()));
    return strpos($Cd["\x70\x61\164\x68"], $x1["\160\x61\164\x68"], 0) === 0;
}
LRR:
