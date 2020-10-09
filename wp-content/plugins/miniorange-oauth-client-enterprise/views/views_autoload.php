<?php


function mo_oauth_client_load_customizations()
{
    require "\143\165\x73\164\157\x6d\x69\172\x61\x74\x69\157\x6e\163\57\143\x75\163\x74\x6f\155\151\172\141\x74\x69\x6f\156\56\x70\x68\160";
}
function mo_oauth_client_load_signinsettings()
{
    require "\x73\151\147\x6e\151\x6e\x73\x65\x74\164\151\x6e\x67\x73\x2f\x73\x69\x67\156\x69\x6e\x73\145\164\164\x69\156\147\x73\x2e\x70\150\x70";
}
function mo_oauth_client_load_faq()
{
    require "\146\141\x71\x2f\146\141\x71\163\56\x70\150\x70";
}
function mo_oauth_client_load_licensing()
{
    require "\154\x69\x63\x65\156\163\151\156\147\x2f\154\x69\143\x65\156\x73\151\156\x67\x2e\x70\150\160";
}
function mo_oauth_client_load_configure_apps()
{
    require "\143\157\156\146\151\x67\165\x72\145\x5f\141\160\x70\x73\57\143\154\141\163\x73\55\x6d\x6f\55\x6f\141\165\164\150\x2d\x63\x6c\151\145\156\x74\x2d\x61\x70\x70\163\x2e\160\x68\x70";
}
function mo_oauth_client_load_guides()
{
    require "\x67\x75\151\144\x65\x73\57\143\154\141\163\x73\55\x6d\x6f\x2d\157\141\165\164\x68\x2d\143\x6c\x69\x65\156\164\55\147\x75\x69\x64\145\163\x2e\160\x68\x70";
}
function mo_oauth_client_load_reports()
{
    require "\x72\x65\160\157\162\164\163\x2f\141\156\141\154\x79\x74\x69\143\163\x2e\160\150\160";
}
function mo_oauth_client_load_grants()
{
    require "\147\x72\141\156\164\x73\x2f\x70\x61\x73\163\x77\157\162\x64\56\x70\x68\x70";
}
function mo_oauth_client_load_support()
{
    require_once "\x73\165\x70\x70\157\162\x74\57\163\x75\x70\160\x6f\162\164\x2e\x70\x68\160";
}
function load_render_default_view()
{
    mo_oauth_client_load_configure_apps();
    mo_oauth_client_load_guides();
    mo_oauth_client_load_grants();
    mo_oauth_apps_config();
}
function load_current_view()
{
    mo_oauth_client_load_support();
    if (!(isset($_REQUEST["\x74\141\x62"]) && $_REQUEST["\x74\x61\142"] === "\154\x69\143\x65\x6e\163\x69\156\147")) {
        goto ir;
    }
    mo_oauth_client_load_licensing();
    mo_oauth_licensing();
    ir:
    if (mo_oauth_is_clv()) {
        goto Lw;
    }
    load_registration_view();
    goto qC;
    Lw:
    if (isset($_REQUEST["\x74\141\142"])) {
        goto K7;
    }
    load_render_default_view();
    goto r4;
    K7:
    if ($_REQUEST["\x74\141\142"] === "\143\165\163\164\157\155\x69\172\x61\164\151\157\156") {
        goto SN;
    }
    if ($_REQUEST["\164\141\x62"] === "\163\x69\x67\156\151\x6e\163\145\x74\164\x69\x6e\147\x73") {
        goto c1;
    }
    if ($_REQUEST["\164\x61\142"] === "\x66\x61\x71") {
        goto k6;
    }
    if ($_REQUEST["\x74\x61\142"] === "\165\163\x65\162\141\x6e\141\154\x79\164\x69\x63\163") {
        goto aX;
    }
    load_render_default_view();
    goto PO;
    aX:
    mo_oauth_client_load_reports();
    mo_oauth_user_analytics();
    PO:
    goto g3;
    k6:
    mo_oauth_client_load_faq();
    mo_oauth_faq();
    g3:
    goto oL;
    c1:
    mo_oauth_client_load_signinsettings();
    mo_oauth_sign_in_settings();
    oL:
    goto Ra;
    SN:
    mo_oauth_client_load_customizations();
    mo_oauth_app_customization();
    Ra:
    r4:
    qC:
}
function load_registration_view()
{
    require "\141\x63\x63\157\x75\156\x74\x73\57\162\x65\147\x69\163\164\145\x72\x2e\x70\x68\160";
    require "\141\143\x63\x6f\x75\156\x74\163\x2f\157\x74\x70\x5f\x76\x65\162\x69\146\151\x63\x61\x74\151\157\x6e\x2e\160\150\x70";
    mo_oauth_client_load_support();
    if (mo_oauth_client_get_option("\x76\x65\x72\x69\146\x79\x5f\x63\165\163\x74\157\155\x65\162") == "\x74\x72\165\x65") {
        goto sy;
    }
    if (trim(mo_oauth_client_get_option("\x6d\157\137\157\x61\165\164\150\137\141\144\x6d\x69\156\x5f\x65\155\141\x69\x6c")) != '' && trim(mo_oauth_client_get_option("\155\157\137\x6f\141\165\164\150\x5f\x61\144\155\151\x6e\x5f\141\160\151\x5f\153\x65\171")) == '' && mo_oauth_client_get_option("\x6e\145\167\x5f\x72\145\147\151\163\x74\162\x61\164\151\157\x6e") != "\x74\x72\165\x65") {
        goto da;
    }
    if (mo_oauth_client_get_option("\x6d\x6f\137\x6f\x61\165\x74\150\137\162\145\x67\x69\163\164\x72\x61\x74\151\x6f\x6e\137\x73\164\x61\164\x75\163") == "\115\x4f\x5f\117\124\120\137\x44\105\x4c\x49\x56\105\x52\x45\x44\137\123\125\x43\103\x45\123\123" || mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\165\164\150\137\x72\145\x67\x69\163\x74\x72\141\x74\x69\x6f\156\x5f\x73\164\x61\x74\x75\x73") == "\115\117\137\x4f\x54\120\x5f\x56\x41\114\111\104\101\x54\x49\x4f\116\x5f\x46\x41\111\x4c\x55\122\105") {
        goto E0;
    }
    if (!mo_oauth_is_customer_registered()) {
        goto op;
    }
    if (mo_oauth_is_clv()) {
        goto fT;
    }
    mo_oauth_lp();
    fT:
    goto lO;
    op:
    mo_oauth_client_delete_option("\160\141\x73\x73\x77\x6f\162\144\x5f\x6d\151\x73\x6d\x61\164\x63\x68");
    mo_oauth_show_new_registration_page();
    lO:
    goto dl;
    E0:
    mo_oauth_show_otp_verification();
    dl:
    goto gm;
    da:
    mo_oauth_show_verify_password_page();
    gm:
    goto qa;
    sy:
    mo_oauth_show_verify_password_page();
    qa:
}
?>
