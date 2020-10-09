<?php


namespace MoOauthClient\GrantTypes;

use MoOauthClient\GrantTypes\Implicit;
use MoOauthClient\OauthHandler;
use MoOauthClient\StorageManager;
use MoOauthClient\Base\InstanceHelper;
class Password
{
    const CSS_URL = MOC_URL . "\143\x6c\141\163\x73\145\x73\x2f\120\x72\145\x6d\151\x75\x6d\x2f\162\145\163\x6f\x75\x72\143\145\163\57\160\167\x64\x73\164\x79\154\145\x2e\143\163\x73";
    const JS_URL = MOC_URL . "\143\154\x61\163\163\x65\163\57\x50\x72\x65\155\x69\165\x6d\x2f\x72\145\x73\157\165\162\x63\x65\163\x2f\x70\x77\x64\56\x6a\x73";
    public function __construct($SC = false)
    {
        if (!$SC) {
            goto Qf;
        }
        return;
        Qf:
        add_action("\x69\x6e\x69\x74", array($this, "\142\x65\150\x61\166\x65"));
    }
    public function inject_ui()
    {
        global $Sk;
        wp_enqueue_style("\167\160\55\155\x6f\55\x6f\143\x2d\160\x77\144\x2d\143\163\x73", self::CSS_URL, array(), $fX = null, $vI = false);
        $kE = $Sk->parse_url($Sk->get_current_url());
        $Hf = "\142\165\164\x74\x6f\x6e";
        if (!isset($kE["\161\x75\x65\x72\x79"]["\x6c\157\147\151\x6e"])) {
            goto Og;
        }
        return;
        Og:
        ?>
		<div id="password-grant-modal" class="password-modal mo_table_layout">
			<div class="password-modal-content">
				<div class="password-modal-header">
					<div class="password-modal-header-title">
						<span class="password-modal-close">&times;</span>
						<span id="password-modal-header-title-text"></span>
					</div>
				</div>
				<form id="pwdgrntfrm">
					<input type="hidden" name="login" value="pwdgrntfrm">
					<input type="text" class="mo_table_textbox" id="pwdgrntfrm-unmfld" name="caller" placeholder="Username">
					<input type="password" class="mo_table_textbox" id="pwdgrntfrm-pfld" name="tool" placeholder="Password">
					<input type="<?php 
        echo $Hf;
        ?>
" class="button button-primary button-large" id="pwdgrntfrm-login" value="Login">
				</form>
			</div>
		</div>
		<?php 
    }
    public function inject_behaviour()
    {
        wp_enqueue_script("\167\x70\x2d\155\157\55\x6f\143\55\160\167\144\x2d\152\163", self::JS_URL, array("\x6a\161\165\x65\x72\x79"), $fX = null, $vI = true);
    }
    public function behave($FE = '', $FJ = '', $cZ = '', $QR = '', $gE = false, $SC = false)
    {
        global $Sk;
        $FE = !empty($FE) ? hex2bin($FE) : false;
        $FJ = !empty($FJ) ? hex2bin($FJ) : false;
        $cZ = !empty($cZ) ? $cZ : false;
        $QR = !empty($QR) ? $QR : site_url();
        if (!(!$FE || !$FJ || !$cZ)) {
            goto Vt;
        }
        $Sk->redirect_user(urldecode($QR));
        die;
        Vt:
        $U3 = $Sk->get_app_by_name($cZ);
        if ($U3) {
            goto L2;
        }
        $Sl = $Sk->parse_url(urldecode(site_url()));
        $Sl["\161\165\145\162\171"]["\145\x72\162\x6f\162"] = "\124\x68\145\x72\x65\x20\x69\x73\x20\x6e\157\40\x61\x70\160\x6c\151\x63\141\x74\151\157\156\40\x63\x6f\156\146\151\x67\165\162\x65\x64\40\146\157\162\40\164\x68\151\163\x20\162\x65\161\x75\x65\163\x74";
        $Sk->redirect_user($Sk->generate_url($Sl));
        L2:
        $h7 = $U3->get_app_config();
        $zU = array("\147\162\141\x6e\x74\x5f\x74\x79\x70\145" => "\x70\141\x73\163\167\x6f\162\x64", "\x63\x6c\151\145\x6e\x74\x5f\x69\144" => $h7["\x63\154\x69\x65\156\x74\x5f\x69\x64"], "\143\154\151\145\x6e\x74\x5f\x73\145\x63\162\145\164" => $h7["\x63\x6c\151\145\x6e\164\137\x73\145\143\x72\x65\x74"], "\x75\163\x65\x72\156\x61\155\x65" => $FE, "\x70\x61\x73\163\x77\x6f\162\144" => $FJ, "\163\143\x6f\160\145" => $U3->get_app_config("\163\x63\x6f\x70\145"), "\162\145\x64\x69\x72\145\x63\x74\137\165\x72\151" => $U3->get_app_config("\162\145\x64\151\x72\x65\143\x74\x5f\x75\162\151"));
        $qZ = new OauthHandler();
        $xk = $h7["\x61\143\x63\145\163\163\x74\157\153\145\x6e\x75\162\x6c"];
        if (!(strpos($xk, "\x67\157\157\147\154\145") !== false)) {
            goto sg;
        }
        $xk = "\x68\x74\x74\x70\163\x3a\57\x2f\x77\167\167\x2e\147\x6f\157\147\154\x65\x61\160\x69\163\x2e\x63\x6f\x6d\57\157\x61\x75\x74\150\x32\57\x76\64\57\164\157\x6b\x65\156";
        sg:
        $B3 = isset($h7["\x73\145\x6e\144\x5f\150\145\141\144\145\x72\x73"]) ? $h7["\x73\x65\156\x64\x5f\150\145\141\144\145\162\x73"] : 0;
        $N0 = isset($h7["\x73\x65\156\x64\x5f\142\157\x64\x79"]) ? $h7["\x73\145\x6e\144\x5f\x62\157\144\x79"] : 0;
        $Tu = $qZ->get_access_token($xk, $zU, $B3, $N0);
        $qJ = isset($Tu["\x61\x63\143\x65\163\x73\137\x74\157\x6b\145\156"]) ? $Tu["\141\x63\143\145\x73\x73\x5f\x74\157\x6b\145\156"] : false;
        $lo = isset($Tu["\x69\x64\x5f\x74\157\153\x65\156"]) ? $Tu["\x69\144\137\164\x6f\153\145\156"] : false;
        $Nz = isset($Tu["\164\x6f\x6b\x65\156"]) ? $Tu["\x74\x6f\x6b\x65\156"] : false;
        $p4 = array();
        if (false !== $lo || false !== $Nz) {
            goto Ur;
        }
        if ($qJ) {
            goto yw;
        }
        die("\x49\156\166\x61\x6c\151\x64\x20\x74\157\153\145\156\40\x72\145\143\145\x69\166\x65\144\x2e");
        yw:
        goto AK;
        Ur:
        $Vf = '';
        if (!(false !== $Nz)) {
            goto ZD;
        }
        $Vf = "\164\x6f\x6b\145\156\x3d" . $Nz;
        ZD:
        if (!(false !== $lo)) {
            goto xT;
        }
        $Vf = "\x69\x64\137\164\x6f\153\145\x6e\75" . $lo;
        xT:
        $c5 = new Implicit($Vf);
        if (!is_wp_error($c5)) {
            goto HB;
        }
        wp_die(wp_kses($c5->get_error_message(), \get_valid_html()));
        die("\120\x6c\x65\x61\163\x65\x20\164\x72\x79\x20\114\x6f\147\x67\151\x6e\147\x20\x69\156\40\x61\x67\x61\151\156\56");
        HB:
        $rg = $c5->get_jwt_from_query_param();
        $p4 = $rg->get_decoded_payload();
        AK:
        $Tx = $h7["\162\145\163\157\165\x72\x63\x65\x6f\x77\156\x65\162\x64\x65\164\x61\151\154\163\165\x72\154"];
        if (!(substr($Tx, -1) === "\x3d")) {
            goto dd;
        }
        $Tx .= $qJ;
        dd:
        if (!(strpos($Tx, "\147\157\157\147\154\145") !== false)) {
            goto wn;
        }
        $Tx = "\150\x74\164\160\x73\x3a\x2f\57\167\x77\167\x2e\x67\157\157\147\x6c\145\x61\x70\x69\163\x2e\143\157\155\x2f\x6f\x61\x75\x74\x68\x32\x2f\166\61\57\x75\163\145\x72\x69\156\146\157";
        wn:
        if (empty($Tx)) {
            goto pE;
        }
        $p4 = $qZ->get_resource_owner($Tx, $qJ);
        pE:
        $Yx = new InstanceHelper();
        $jf = $Yx->get_login_handler_instance();
        if (!$gE) {
            goto Xv;
        }
        $jf->handle_group_test_conf($p4, $h7, $qJ, false, $gE);
        die;
        Xv:
        $PD = new StorageManager();
        $PD->add_replace_entry("\162\x65\x64\151\162\x65\x63\164\137\165\162\x69", $QR);
        $xM = $PD->get_state();
        $user = $jf->handle_sso($h7["\141\x70\160\111\144"], $h7, $p4, $xM, $Tu, $SC);
        if (!$SC) {
            goto AP;
        }
        return $user;
        AP:
    }
    public function mo_oauth_wp_login($user, $BL, $CV)
    {
        global $Sk;
        $Q1 = new \WP_Error();
        if (!(empty($BL) || empty($CV))) {
            goto t5;
        }
        if (!empty($BL)) {
            goto u8;
        }
        $Q1->add("\145\x6d\160\x74\x79\137\x75\x73\145\x72\156\x61\155\145", __("\74\x73\x74\x72\157\156\x67\76\x45\x52\122\117\x52\74\57\x73\164\x72\157\x6e\x67\x3e\x3a\x20\x45\155\141\x69\x6c\x20\x66\x69\x65\154\x64\40\151\163\x20\145\155\x70\x74\x79\x2e"));
        u8:
        if (!empty($CV)) {
            goto dn;
        }
        $Q1->add("\145\x6d\x70\164\x79\137\160\x61\x73\163\167\x6f\x72\x64", __("\74\x73\x74\x72\x6f\156\x67\x3e\105\x52\x52\117\x52\74\57\163\164\162\x6f\x6e\147\x3e\x3a\40\120\141\163\163\167\x6f\162\x64\x20\x66\x69\145\x6c\x64\x20\x69\x73\40\x65\155\160\x74\171\x2e"));
        dn:
        return $Q1;
        t5:
        $cZ = $Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\141\165\164\x68\137\145\156\141\142\x6c\x65\137\x6f\x61\x75\164\150\137\167\160\x5f\154\157\x67\x69\x6e");
        $user = false;
        if (\username_exists($BL)) {
            goto jF;
        }
        if (!email_exists($BL)) {
            goto eK;
        }
        $user = get_user_by("\x65\155\141\151\x6c", $BL);
        eK:
        goto DT;
        jF:
        $user = \get_user_by("\154\x6f\x67\x69\x6e", $BL);
        DT:
        if (!($user && wp_check_password($CV, $user->data->user_pass, $user->ID))) {
            goto nH;
        }
        return $user;
        nH:
        if (!(false !== $cZ)) {
            goto iA;
        }
        return $this->behave(\bin2hex($BL), \bin2hex($CV), $cZ, site_url(), false, true);
        iA:
        $Q1->add("\151\156\166\141\154\151\x64\x5f\x70\141\x73\163\x77\x6f\x72\x64", __("\x3c\163\x74\x72\157\156\147\x3e\105\122\122\x4f\x52\x3c\57\163\164\x72\x6f\x6e\x67\x3e\72\40\x55\163\145\x72\156\x61\155\x65\40\157\x72\x20\120\141\163\x73\167\x6f\162\144\x20\x69\163\40\151\156\x76\x61\x6c\x69\144\56"));
        return $Q1;
    }
}
