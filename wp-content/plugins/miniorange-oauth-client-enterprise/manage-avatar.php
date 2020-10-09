<?php


function set_avatar($oO, $xz)
{
    require_once ABSPATH . "\x77\160\x2d\x61\144\155\x69\x6e\x2f\x69\x6e\143\x6c\165\x64\145\163\x2f\x69\x6d\141\147\x65\56\160\150\x70";
    if (function_exists("\167\x70\x5f\150\x61\x6e\x64\x6c\145\137\165\x70\154\157\x61\x64")) {
        goto C0C;
    }
    require_once ABSPATH . "\167\160\55\141\144\x6d\x69\156\57\x69\156\x63\x6c\x75\144\x65\x73\x2f\146\151\154\x65\56\160\150\160";
    C0C:
    $Ka = wp_upload_dir();
    $JF = "\x68\164\164\x70\x73\x3a\x2f\57\x69\155\x61\x67\x65\x2e\x65\x76\x65\x6f\156\154\151\x6e\145\x2e\x63\157\x6d\x2f\103\150\141\162\x61\143\x74\145\162\57" . $xz . "\137\65\61\62\x2e\152\x70\147";
    $Ww = $Ka["\142\141\163\145\144\x69\162"] . "\x2f\141\166\x61\164\141\162\163\x2f" . $oO;
    $T1 = $Ww . "\x2f" . $xz . "\56\152\x70\x67";
    $qV = $Ka["\142\141\x73\145\165\162\154"] . "\x2f\x61\166\x61\x74\141\162\163\57" . $oO . "\57" . $xz . "\x2e\152\160\x67";
    if (file_exists($Ww)) {
        goto vHW;
    }
    mkdir($Ww, 511, true);
    vHW:
    file_put_contents($T1, file_get_contents($JF));
    $NX = array("\165\x72\154" => $qV, "\x74\x79\x70\145" => "\151\155\141\x67\x65\x2f\x6a\160\x65\147", "\x66\x69\x6c\x65" => $T1);
    $Hy = get_user_meta($oO, "\x6d\x6f\137\x6f\x61\165\164\x68\x5f\141\166\141\x74\x61\162\x5f\155\x61\156\x61\x67\x65\x72\x5f\x63\x75\x73\164\157\x6d\x5f\x61\x76\x61\x74\x61\x72", true);
    if (empty($Hy)) {
        goto Abu;
    }
    mo_oauth_avatar_manager_delete_avatar($Hy);
    Abu:
    $z5 = array("\x67\x75\151\x64" => $NX["\x75\x72\154"], "\160\x6f\163\164\137\143\157\x6e\164\145\x6e\x74" => $NX["\165\162\x6c"], "\160\157\163\x74\137\155\151\x6d\x65\137\x74\x79\160\x65" => $NX["\164\x79\x70\145"], "\160\157\163\x74\x5f\164\151\164\x6c\x65" => basename($NX["\x66\x69\x6c\145"]));
    $vB = wp_insert_attachment($z5, $NX["\x66\151\x6c\145"]);
    $Qo = wp_generate_attachment_metadata($vB, $NX["\x66\x69\x6c\145"]);
    wp_update_attachment_metadata($vB, $Qo);
    $Hy = array();
    $Hy["\65\x31\x32"] = mo_oauth_avatar_manager_avatar_resize($NX["\x75\162\154"], "\65\61\x32");
    update_post_meta($vB, "\x5f\155\157\x5f\x6f\141\x75\164\x68\137\x61\166\x61\x74\x61\x72\137\x6d\141\156\141\x67\145\162\x5f\143\x75\x73\164\157\x6d\x5f\141\x76\141\164\x61\162", $Hy);
    update_post_meta($vB, "\137\155\157\137\157\x61\x75\164\150\137\141\166\x61\164\x61\x72\137\x6d\x61\x6e\x61\x67\x65\162\x5f\x63\165\163\164\x6f\155\x5f\x61\166\x61\x74\x61\162\x5f\162\141\x74\151\x6e\147", "\107");
    update_post_meta($vB, "\137\155\157\137\x6f\x61\165\x74\x68\137\x61\166\141\x74\141\x72\x5f\155\141\156\x61\147\145\162\x5f\x69\163\x5f\x63\165\163\164\x6f\x6d\137\141\166\x61\x74\141\x72", true);
    update_user_meta($oO, "\155\157\x5f\157\141\165\x74\150\137\141\166\x61\164\141\162\137\x6d\x61\156\x61\147\x65\x72\x5f\x61\166\141\x74\x61\x72\137\x74\171\x70\145", "\143\165\x73\164\157\155");
    update_user_meta($oO, "\155\157\x5f\x6f\141\x75\x74\150\x5f\x61\x76\141\164\x61\x72\137\155\141\156\141\147\x65\x72\137\x63\165\163\164\x6f\x6d\137\141\166\x61\x74\x61\162", $vB);
}
function mo_oauth_avatar_manager_avatar_resize($qV, $HV)
{
    $Ka = wp_upload_dir();
    $AS = str_replace($Ka["\x62\141\163\x65\x75\162\x6c"], $Ka["\142\x61\163\145\144\x69\x72"], $qV);
    $Wn = pathinfo($AS);
    $Zv = $Wn["\x64\x69\162\x6e\141\x6d\x65"];
    $Qg = $Wn["\145\170\x74\145\x6e\x73\x69\157\x6e"];
    $Dm = wp_basename($AS, "\x2e" . $Qg);
    $p3 = $HV . "\x78" . $HV;
    $ab = $Zv . "\x2f" . $Dm . "\55" . $p3 . "\x2e" . $Qg;
    $NX = array();
    if (file_exists($ab)) {
        goto O9N;
    }
    $Ts = wp_get_image_editor($AS);
    if (is_wp_error($Ts)) {
        goto CHY;
    }
    $Ts->resize($HV, $HV, true);
    $Ts->save($ab);
    $NX["\165\x72\154"] = str_replace($Ka["\142\x61\163\145\144\x69\x72"], $Ka["\142\141\163\x65\x75\162\154"], $ab);
    $NX["\163\x6b\x69\160"] = false;
    CHY:
    goto zx1;
    O9N:
    $NX["\165\x72\154"] = str_replace($Ka["\x62\x61\x73\145\x64\151\x72"], $Ka["\x62\141\163\x65\x75\x72\x6c"], $ab);
    $NX["\x73\x6b\x69\x70"] = true;
    zx1:
    do_action("\x6d\x6f\x5f\157\141\165\164\x68\x5f\141\166\141\x74\141\x72\137\155\x61\156\141\x67\x65\162\137\141\x76\x61\x74\141\162\137\162\145\163\x69\172\145", $qV, $HV);
    return $NX;
}
function mo_oauth_avatar_manager_get_custom_avatar($oO, $HV = '', $ye = '', $KX = false)
{
    if (mo_oauth_client_get_option("\x73\x68\157\167\x5f\141\x76\141\x74\141\x72\163")) {
        goto jL9;
    }
    return false;
    jL9:
    if (empty($HV) || !is_numeric($HV)) {
        goto Uuv;
    }
    $HV = absint($HV);
    if ($HV < 1) {
        goto gpT;
    }
    if ($HV > 512) {
        goto Lt9;
    }
    goto rB0;
    gpT:
    $HV = 1;
    goto rB0;
    Lt9:
    $HV = 512;
    rB0:
    goto KpM;
    Uuv:
    $HV = 512;
    KpM:
    $user = get_userdata($oO);
    if (!empty($user)) {
        goto o2t;
    }
    return false;
    o2t:
    $jw = $user->user_email;
    if (!empty($ye)) {
        goto uWF;
    }
    $lo = mo_oauth_client_get_option("\141\x76\141\164\141\162\137\144\x65\146\x61\x75\x6c\x74");
    if (empty($lo)) {
        goto fCe;
    }
    $ye = $lo;
    goto u6M;
    fCe:
    $ye = "\x6d\x79\163\x74\x65\162\171";
    u6M:
    uWF:
    $IE = md5(strtolower(trim($jw)));
    if (is_ssl()) {
        goto Lk9;
    }
    $jB = sprintf("\x68\x74\x74\x70\72\57\57\45\144\56\x67\x72\x61\x76\141\164\x61\x72\56\x63\x6f\x6d", hexdec($IE[0]) % 2);
    goto bRE;
    Lk9:
    $jB = "\x68\164\164\160\x73\72\57\57\x73\x65\143\165\x72\x65\56\147\x72\x61\x76\141\x74\x61\x72\56\143\x6f\155";
    bRE:
    if ($ye == "\x6d\171\x73\164\x65\162\171") {
        goto HkE;
    }
    if ($ye == "\147\x72\141\166\141\164\x61\x72\137\x64\145\146\141\165\154\x74") {
        goto FS1;
    }
    if (strpos($ye, "\150\x74\x74\160\72\x2f\x2f") === 0) {
        goto F7x;
    }
    goto Cdx;
    HkE:
    $ye = $jB . "\x2f\141\166\x61\164\x61\x72\x2f\x61\x64\65\61\66\65\x30\63\x61\61\x31\143\x64\65\143\141\x34\63\x35\141\143\x63\71\x62\x62\66\x35\62\x33\65\63\x36\77\x73\x3d" . $HV;
    goto Cdx;
    FS1:
    $ye = '';
    goto Cdx;
    F7x:
    $ye = add_query_arg("\x73", $HV, $ye);
    Cdx:
    if ($KX === false) {
        goto UXy;
    }
    $KX = esc_attr($KX);
    goto XaW;
    UXy:
    $KX = '';
    XaW:
    $XO = mo_oauth_client_get_option("\x61\x76\141\x74\141\x72\x5f\162\141\164\x69\156\147");
    $Hy = get_user_meta($oO, "\155\157\x5f\x6f\141\x75\164\150\x5f\x61\166\141\164\141\162\x5f\x6d\x61\156\141\x67\145\x72\x5f\x63\x75\x73\164\x6f\x6d\x5f\x61\166\141\164\x61\x72", true);
    if (!empty($Hy)) {
        goto Hbq;
    }
    return false;
    Hbq:
    $Oa = get_post_meta($Hy, "\x5f\x6d\157\137\157\x61\165\x74\150\137\141\x76\x61\164\141\x72\137\x6d\x61\156\x61\147\x65\x72\137\143\x75\x73\164\157\155\x5f\141\x76\x61\164\141\x72\137\162\x61\x74\x69\x6e\x67", true);
    $Jk["\x47"] = 1;
    $Jk["\120\x47"] = 2;
    $Jk["\x52"] = 3;
    $Jk["\x58"] = 4;
    if ($Jk[$Oa] <= $Jk[$XO]) {
        goto Gcr;
    }
    $R4 = $jB . "\x2f\x61\x76\x61\x74\141\x72\57";
    $R4 .= $IE;
    $R4 .= "\77\163\x3d" . $HV;
    $R4 .= "\x26\144\75" . urlencode($ye);
    $R4 .= "\46\x66\x6f\x72\143\145\144\145\146\x61\x75\154\x74\75\x31";
    $NX = "\74\x69\155\147\40\141\x6c\x74\75\42" . $KX . "\42\x20\143\154\x61\x73\163\x3d\x22\x61\166\141\164\141\162\40\x61\166\141\x74\141\162\x2d" . $HV . "\40\160\150\157\x74\x6f\40\141\x76\141\x74\141\162\55\144\145\146\141\x75\154\164\x22\x20\x68\145\151\x67\150\x74\x3d\42" . $HV . "\x22\40\x73\162\x63\75\42" . $R4 . "\42\40\x77\151\144\164\x68\x3d\x22" . $HV . "\x22\76";
    goto oas;
    Gcr:
    $NX = get_post_meta($Hy, "\x5f\x6d\x6f\x5f\x6f\141\165\164\150\x5f\x61\x76\141\164\x61\x72\x5f\155\x61\156\x61\147\x65\162\137\x63\165\x73\164\x6f\x6d\137\141\166\x61\x74\x61\x72", true);
    if (!empty($NX[$HV])) {
        goto ZlI;
    }
    $qV = wp_get_attachment_image_src($Hy, "\146\165\154\154");
    $NX[$HV] = mo_oauth_avatar_manager_avatar_resize($qV[0], $HV);
    update_post_meta($Hy, "\x5f\155\157\137\157\x61\165\164\x68\137\141\166\141\164\141\162\137\x6d\141\x6e\x61\147\x65\162\137\x63\x75\163\x74\157\155\137\141\x76\x61\164\141\x72", $NX);
    ZlI:
    $R4 = $NX[$HV]["\x75\x72\x6c"];
    $NX = "\74\x69\x6d\x67\40\x61\x6c\164\x3d\42" . $KX . "\42\40\143\154\141\163\163\75\42\141\166\x61\164\x61\x72\40\141\166\141\164\141\162\x2d" . $HV . "\40\x70\150\x6f\164\x6f\x20\x61\166\x61\x74\141\x72\55\144\145\146\x61\165\154\164\42\40\150\x65\151\147\150\164\75\42" . $HV . "\42\x20\163\x72\x63\75\42" . $R4 . "\42\40\167\x69\144\164\150\x3d\x22" . $HV . "\42\x3e";
    oas:
    return apply_filters("\x6d\x6f\x5f\157\141\x75\x74\x68\137\141\x76\x61\x74\141\x72\137\155\x61\156\x61\147\145\x72\137\x67\145\x74\137\x63\165\163\x74\x6f\155\137\x61\x76\x61\x74\141\162", $NX, $oO, $HV, $ye, $KX);
}
function mo_oauth_avatar_manager_get_avatar($NX = '', $A0, $HV = '', $ye = '', $KX = false)
{
    if (mo_oauth_client_get_option("\163\150\x6f\x77\137\x61\x76\141\x74\141\x72\163")) {
        goto QUy;
    }
    return false;
    QUy:
    if (empty($HV) || !is_numeric($HV)) {
        goto z8_;
    }
    $HV = absint($HV);
    if ($HV < 1) {
        goto UJG;
    }
    if ($HV > 512) {
        goto u14;
    }
    goto asI;
    UJG:
    $HV = 1;
    goto asI;
    u14:
    $HV = 512;
    asI:
    goto MbN;
    z8_:
    $HV = 512;
    MbN:
    $jw = '';
    if (is_numeric($A0)) {
        goto J3W;
    }
    if (is_object($A0)) {
        goto BIH;
    }
    $jw = $A0;
    if (!($yc = email_exists($jw))) {
        goto CaI;
    }
    $user = get_userdata($yc);
    CaI:
    goto T_s;
    J3W:
    $yc = (int) $A0;
    $user = get_userdata($yc);
    if (!$user) {
        goto qgB;
    }
    $jw = $user->user_email;
    qgB:
    goto T_s;
    BIH:
    if (!empty($A0->user_id)) {
        goto F2m;
    }
    if (!empty($A0->comment_author_email)) {
        goto WtZ;
    }
    goto oBB;
    F2m:
    $yc = (int) $A0->user_id;
    $user = get_userdata($yc);
    if (!$user) {
        goto kUe;
    }
    $jw = $user->user_email;
    kUe:
    goto oBB;
    WtZ:
    $jw = $A0->comment_author_email;
    oBB:
    T_s:
    if (isset($user)) {
        goto nI7;
    }
    return $NX;
    goto kvo;
    nI7:
    $Z7 = $user->mo_oauth_avatar_manager_avatar_type;
    kvo:
    if (!($Z7 == "\x63\x75\163\x74\x6f\155")) {
        goto cFy;
    }
    $NX = mo_oauth_avatar_manager_get_custom_avatar($user->ID, $HV, $ye, $KX);
    cFy:
    return apply_filters("\x6d\x6f\x5f\x6f\x61\x75\164\150\x5f\x61\x76\x61\164\141\x72\137\155\x61\156\x61\147\x65\x72\137\147\145\x74\x5f\141\x76\141\x74\x61\162", $NX, $A0, $HV, $ye, $KX);
}
add_filter("\x67\145\x74\137\141\166\x61\x74\x61\x72", "\155\x6f\137\157\141\x75\x74\x68\137\x61\x76\141\x74\x61\162\x5f\155\141\156\141\147\145\x72\x5f\x67\145\x74\137\x61\166\x61\164\141\162", 10, 5);
function mo_oauth_avatar_manager_avatar_defaults($VT)
{
    remove_filter("\x67\x65\x74\x5f\141\166\x61\164\x61\x72", "\155\x6f\137\x6f\141\x75\164\150\x5f\x61\x76\x61\164\141\x72\x5f\155\141\x6e\141\147\x65\x72\x5f\147\145\x74\x5f\141\x76\x61\164\141\162");
    return $VT;
}
add_filter("\x61\x76\x61\x74\x61\x72\137\x64\145\x66\x61\x75\x6c\x74\163", "\x6d\157\137\157\x61\x75\x74\150\137\141\166\x61\164\x61\x72\137\x6d\141\x6e\141\x67\x65\x72\x5f\141\x76\141\x74\x61\162\137\144\145\146\x61\165\154\x74\x73", 10, 1);
function mo_oauth_avatar_manager_delete_avatar($vB)
{
    $ki = get_post_meta($vB, "\x5f\155\x6f\137\157\141\x75\164\150\x5f\x61\166\141\x74\x61\162\x5f\x6d\141\x6e\141\147\145\162\137\151\x73\137\143\x75\163\164\x6f\155\x5f\x61\x76\x61\164\141\x72", true);
    if ($ki) {
        goto bf6;
    }
    return;
    bf6:
    $Ka = wp_upload_dir();
    $Hy = get_post_meta($vB, "\137\x6d\157\x5f\x6f\141\x75\164\150\137\141\166\141\x74\x61\162\137\155\x61\156\x61\x67\x65\x72\137\x63\165\163\x74\157\x6d\x5f\141\166\141\x74\x61\162", true);
    if (!is_array($Hy)) {
        goto Hxg;
    }
    foreach ($Hy as $Kr) {
        if ($Kr["\x73\x6b\151\160"]) {
            goto Ngt;
        }
        $Kr = str_replace($Ka["\x62\x61\163\145\165\162\154"], $Ka["\142\141\x73\x65\x64\x69\162"], $Kr["\x75\162\154"]);
        @unlink($Kr);
        Ngt:
        Y5y:
    }
    Yk7:
    Hxg:
    delete_post_meta($vB, "\x5f\155\157\137\157\141\x75\164\x68\137\x61\166\x61\164\141\162\x5f\x6d\x61\156\x61\147\x65\x72\x5f\143\x75\x73\x74\x6f\x6d\x5f\x61\166\141\x74\x61\162");
    delete_post_meta($vB, "\137\155\x6f\x5f\157\x61\x75\164\150\137\x61\166\141\x74\x61\x72\x5f\155\x61\156\141\147\145\162\137\x63\165\163\164\157\155\137\141\166\x61\x74\x61\162\137\162\x61\x74\151\156\x67");
    delete_post_meta($vB, "\137\x6d\x6f\x5f\x6f\x61\x75\x74\150\x5f\141\166\x61\x74\141\x72\137\x6d\141\x6e\x61\x67\145\162\137\x69\163\137\x63\x75\163\x74\157\155\x5f\141\166\x61\164\x61\x72");
    delete_post_meta($vB, "\x5f\167\160\137\141\164\164\141\143\x68\x65\144\x5f\146\151\x6c\x65");
    delete_post_meta($vB, "\x5f\x77\x70\x5f\141\164\x74\x61\143\150\155\145\x6e\164\137\155\145\164\x61\x64\141\164\141");
    $V1 = array("\155\x65\164\x61\x5f\153\x65\171" => "\x6d\157\x5f\x6f\x61\x75\164\x68\x5f\x61\166\141\x74\141\162\137\155\141\x6e\141\147\145\x72\x5f\x63\x75\163\x74\157\x6d\137\x61\x76\141\x74\x61\162", "\155\x65\164\x61\137\166\x61\x6c\165\x65" => $vB);
    $aJ = get_users($V1);
    foreach ($aJ as $user) {
        delete_user_meta($user->ID, "\x6d\157\137\x6f\141\x75\164\x68\137\141\x76\x61\x74\141\x72\x5f\x6d\x61\156\141\147\x65\162\137\141\x76\141\x74\141\162\137\164\171\x70\x65");
        delete_user_meta($user->ID, "\x6d\157\137\157\x61\x75\164\x68\x5f\x61\x76\x61\164\141\x72\137\155\141\x6e\x61\x67\x65\x72\x5f\143\x75\x73\x74\x6f\155\137\141\166\x61\x74\141\162");
        UcR:
    }
    t49:
    wp_delete_post($vB, true);
    do_action("\x6d\157\x5f\x6f\141\x75\164\150\x5f\141\x76\x61\164\141\x72\x5f\155\141\x6e\x61\x67\x65\162\x5f\144\x65\x6c\145\x74\x65\137\x61\166\x61\164\x61\162", $vB);
}
add_action("\144\x65\x6c\145\164\145\137\x61\x74\164\141\143\150\x6d\145\x6e\x74", "\155\x6f\x5f\157\x61\x75\x74\150\137\141\166\x61\x74\141\x72\137\x6d\x61\156\x61\147\x65\162\137\x64\x65\x6c\145\x74\x65\137\141\x76\141\x74\141\x72");
?>
