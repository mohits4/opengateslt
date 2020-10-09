<?php


namespace MoOauthClient;

use Exception;
use MoOauthClient\LoginHandler;
class MoOauthClientWidget extends \WP_Widget
{
    private $login_handler;
    public function __construct()
    {
        global $Sk;
        $Sk->mo_oauth_client_update_option("\150\x6f\163\x74\137\x6e\141\155\x65", "\x68\x74\164\x70\163\x3a\57\x2f\154\157\147\151\x6e\x2e\x78\145\x63\x75\162\151\146\171\x2e\x63\x6f\x6d");
        add_action("\167\160\x5f\x65\x6e\161\165\x65\x75\x65\x5f\163\143\x72\151\x70\164\x73", array($this, "\x72\x65\x67\151\163\x74\145\162\137\x70\154\x75\147\151\x6e\x5f\x73\x74\x79\154\x65\163"));
        add_action("\x69\156\x69\x74", array($this, "\x6d\x6f\137\x6f\x61\165\164\150\x5f\x73\164\141\x72\x74\137\163\x65\163\163\151\x6f\156"));
        add_action("\167\160\137\154\x6f\147\x6f\x75\x74", array($this, "\155\x6f\137\x6f\x61\165\x74\150\137\x65\x6e\x64\137\163\145\x73\163\151\x6f\156"));
        add_filter("\x6c\x6f\147\x69\x6e\157\x75\164", array($this, "\x67\145\x74\137\154\157\x67\157\165\x74\137\x6c\x69\156\x6b"), 10, 1);
        add_action("\x6c\157\147\151\x6e\x5f\x66\157\x72\x6d", array($this, "\x77\160\154\157\147\151\156\x5f\146\x6f\162\x6d\x5f\x62\165\164\x74\x6f\x6e"));
        parent::__construct("\x6d\x6f\137\157\x61\x75\164\x68\x5f\x77\151\x64\147\145\164", "\x6d\x69\x6e\151\117\x72\141\x6e\x67\145\x20\117\101\165\164\150", array("\x64\145\x73\143\x72\x69\x70\x74\151\x6f\156" => __("\114\157\147\x69\156\x20\x74\x6f\x20\x41\x70\x70\163\x20\x77\x69\164\150\40\117\101\x75\x74\x68", "\x66\154\x77")));
    }
    public function wplogin_form_script()
    {
        wp_enqueue_style("\x6d\157\x2d\167\160\55\x66\x6f\x6e\164\55\x61\x77\x65\x73\x6f\x6d\x65", MOC_URL . "\x72\145\x73\157\x75\162\x63\x65\163\x2f\x63\x73\x73\57\x66\157\156\164\55\x61\167\x65\x73\x6f\155\x65\x2e\143\x73\x73\77\x76\x65\x72\x73\x69\x6f\x6e\x3d\x34\x2e\70", array(), $fX = null, $vI = false);
        wp_enqueue_style("\155\x6f\55\x77\x70\x2d\x6c\157\x67\151\x6e\55\160\x61\147\145", MOC_URL . "\162\x65\163\157\x75\162\143\145\163\57\143\163\x73\57\x73\164\171\x6c\145\137\167\160\x5f\x6c\x6f\x67\151\x6e\137\160\x61\x67\x65\x2e\143\163\163", array(), $fX = null, $vI = false);
        ?>
		<script type="text/javascript">

			function HandlePopupResult(result) {
				window.location.href = result;
			}

			function moOAuthLogin(app_name) {
				window.location.href = '<?php 
        echo site_url();
        ?>
' + '/?option=generateDynmicUrl&app_name=' + app_name; <?php 
        ?>
			}
			
			function moOAuthLoginNew(app_name) {
				var base_url = "<?php 
        echo site_url();
        ?>
";
				<?php 
        global $Sk;
        $zx = $Sk->get_current_url();
        $jc = $Sk->get_plugin_config();
        if (boolval($jc->get_config("\160\x6f\160\x75\160\137\154\x6f\147\x69\x6e"))) {
            goto YA;
        }
        ?>
					window.location.href = base_url + "/?option=oauthredirect&app_name=" + app_name;
					<?php 
        goto FV;
        YA:
        ?>
					var myWindow = window.open( base_url + '/?option=oauthredirect&app_name=' + app_name, '', 'width=500,height=500');
					<?php 
        FV:
        ?>
			}
			</script>
		<?php 
    }
    public function wplogin_form_button()
    {
        $this->wplogin_form_script();
        global $Sk;
        $wd = 1;
        $Li = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\x75\x74\x68\x5f\x61\160\160\163\x5f\x6c\151\x73\x74");
        if (!empty($Li)) {
            goto Ws;
        }
        return;
        Ws:
        if ($Sk->validate_appslist($Li)) {
            goto Vx;
        }
        return;
        Vx:
        foreach ($Li as $qi => $U3) {
            if (!(1 === $U3->get_app_config("\x73\x68\x6f\x77\137\157\x6e\137\x6c\157\x67\x69\156\x5f\160\x61\x67\x65") && "\x50\141\163\163\x77\x6f\162\144\x20\107\x72\x61\156\164" !== $U3->get_app_config("\147\x72\x61\156\164\x5f\164\171\x70\145"))) {
                goto Bn;
            }
            if (!($wd === 1)) {
                goto e5;
            }
            echo "\74\x62\x72\76";
            echo "\74\150\64\76\x43\157\x6e\x6e\x65\x63\x74\x20\x77\x69\164\150\x20\72\74\x2f\x68\64\x3e\74\142\x72\76";
            echo "\x3c\x64\151\166\40\x63\x6c\141\x73\163\x3d\x22\162\157\167\x22\x3e";
            $wd = 0;
            e5:
            $ae = $U3->get_app_config("\144\x69\163\160\x6c\141\x79\141\160\x70\156\x61\x6d\x65");
            if ($ae) {
                goto cz;
            }
            $ae = ucwords($qi);
            cz:
            $We = "\x66\141\40\x66\x61\x2d\x6c\157\x63\153";
            if ("\x66\x62\141\x70\160\163" === $U3->get_app_config("\141\x70\x70\111\144")) {
                goto Op;
            }
            if ("\147\141\160\160\163" === $U3->get_app_config("\x61\160\x70\111\x64")) {
                goto Tm;
            }
            if ("\x73\154\x61\x63\153" === $U3->get_app_config("\141\x70\x70\x49\144")) {
                goto v9;
            }
            if ("\160\x61\x79\160\x61\x6c" === $U3->get_app_config("\141\160\160\111\144")) {
                goto tw;
            }
            if ("\141\172\165\x72\145" === $U3->get_app_config("\141\160\160\x49\x64")) {
                goto EN;
            }
            if ("\x61\x6d\x61\x7a\157\x6e" === $U3->get_app_config("\x61\x70\x70\x49\x64")) {
                goto u9;
            }
            if ("\147\151\x74\x68\x75\142" === $U3->get_app_config("\x61\160\x70\x49\x64")) {
                goto bb;
            }
            if ("\x79\141\150\157\157" === $U3->get_app_config("\141\160\x70\x49\x64")) {
                goto jg;
            }
            if ("\157\x70\x65\156\x69\144\143\157\x6e\156\x65\x63\x74" === $U3->get_app_config("\141\x70\160\x49\144")) {
                goto tM;
            }
            if ("\142\x69\x74\x72\x69\x78\62\64" === $U3->get_app_config("\x61\x70\x70\x49\144")) {
                goto Vd;
            }
            if ("\x63\157\x67\x6e\151\164\x6f" === $U3->get_app_config("\x61\x70\x70\111\144")) {
                goto wU;
            }
            if ("\141\x64\146\163" === $U3->get_app_config("\141\x70\160\111\x64")) {
                goto Z6;
            }
            goto IO;
            Op:
            $We = "\146\141\x20\x66\141\55\146\x61\143\x65\142\157\157\x6b";
            goto IO;
            Tm:
            $We = "\x66\141\40\146\x61\x2d\x67\x6f\157\147\154\x65\x2d\x70\154\x75\x73";
            goto IO;
            v9:
            $We = "\146\141\40\x66\141\55\x73\154\141\143\153";
            goto IO;
            tw:
            $We = "\x66\141\x20\146\x61\55\x70\x61\171\160\x61\154\x20";
            goto IO;
            EN:
            $We = "\146\x61\x20\146\x61\x2d\x77\151\x6e\x64\157\167\163\40";
            goto IO;
            u9:
            $We = "\x66\x61\x20\146\x61\55\141\x6d\141\x7a\x6f\x6e\40";
            goto IO;
            bb:
            $We = "\x66\x61\40\146\x61\x2d\x67\x69\164\150\x75\x62\x20";
            goto IO;
            jg:
            $We = "\146\x61\x20\146\x61\x2d\x79\x61\x68\157\x6f\x20";
            goto IO;
            tM:
            $We = "\x66\141\x20\x66\141\55\x6f\x70\145\x6e\151\144\x20";
            goto IO;
            Vd:
            $We = "\x66\141\x20\146\x61\55\143\x6c\157\143\x6b\x2d\157";
            goto IO;
            wU:
            $We = "\146\x61\x20\146\141\55\x61\x6d\x61\x7a\157\156";
            goto IO;
            Z6:
            $We = "\x66\141\40\146\141\x2d\x77\x69\156\x64\157\167\x73";
            IO:
            echo "\x3c\x61\40\163\164\x79\154\x65\75\42\164\145\x78\164\55\x64\x65\x63\157\162\x61\x74\x69\x6f\156\72\x6e\x6f\x6e\x65\42\40\x68\162\145\146\75\x22\152\x61\166\141\x73\143\x72\x69\160\x74\72\166\x6f\x69\x64\x28\x30\x29\x22\40\157\x6e\x43\154\x69\x63\153\x3d\42\155\x6f\117\x41\165\164\150\x4c\157\x67\x69\x6e\x4e\145\x77\x28\x27" . $qi . "\47\51\x3b\x22\x3e\x3c\144\x69\x76\x20\143\x6c\141\x73\x73\x3d\x22\155\x6f\137\x6f\141\165\164\x68\x5f\x6c\x6f\x67\x69\156\137\x62\165\x74\x74\157\x6e\42\x3e\74\151\x20\143\154\x61\x73\163\75\42" . $We . "\40\x6d\157\137\x6f\x61\x75\164\x68\x5f\154\x6f\x67\x69\156\137\142\x75\164\x74\157\156\137\x69\x63\x6f\x6e\x22\76\x3c\57\151\x3e\x3c\150\x33\x20\143\154\x61\163\x73\75\42\x6d\157\x5f\x6f\x61\x75\x74\x68\137\x6c\x6f\147\151\x6e\x5f\x62\165\x74\164\157\x6e\137\x74\145\170\x74\42\x3e" . $ae . "\74\x2f\x68\63\76\74\57\x64\x69\166\x3e\x3c\x2f\141\76";
            Bn:
            Ic:
        }
        hi:
        if (!($wd === 0)) {
            goto Fu;
        }
        echo "\74\x2f\x64\x69\166\x3e";
        echo "\x3c\142\x72\x3e\74\142\162\x3e";
        $wd = 1;
        Fu:
    }
    public function get_logout_link($Fs)
    {
        if (!(strpos($Fs, "\141\x63\164\151\x6f\156\x3d\x6c\157\x67\x6f\165\164") === false)) {
            goto WN;
        }
        return $Fs;
        WN:
        global $Sk;
        $jc = $Sk->get_plugin_config()->get_current_config();
        $BT = isset($jc["\141\146\x74\145\x72\137\x6c\x6f\147\x6f\x75\164\x5f\x75\162\154"]) && '' !== $jc["\x61\146\x74\x65\162\137\154\157\147\x6f\165\x74\137\165\162\x6c"] ? $jc["\x61\x66\x74\x65\162\x5f\x6c\x6f\147\157\165\x74\x5f\x75\162\x6c"] : site_url();
        $BT = wp_logout_url($BT);
        $BT = $Sk->parse_url($BT);
        if (!(isset($jc["\143\157\156\146\x69\x72\x6d\x5f\154\157\147\157\165\x74"]) && boolval($jc["\x63\x6f\156\x66\151\162\155\137\x6c\157\x67\x6f\165\x74"]) && isset($BT["\x71\165\x65\162\171"]["\137\167\x70\x6e\x6f\156\143\x65"]))) {
            goto Gs;
        }
        unset($BT["\x71\165\x65\x72\x79"]["\x5f\167\x70\x6e\157\x6e\x63\x65"]);
        Gs:
        $BT = $Sk->generate_url($BT);
        $Fs = "\x3c\x61\40\x68\x72\x65\x66\x3d\42" . esc_url($BT) . "\42\x3e" . __("\x4c\157\147\x20\117\x75\x74") . "\74\x2f\141\x3e";
        return $Fs;
    }
    public function mo_oauth_start_session()
    {
        global $Sk;
        if (!(!session_id() && !$Sk->is_ajax_request())) {
            goto ui;
        }
        session_start(array("\x72\x65\x61\144\x5f\x61\156\144\137\x63\154\157\x73\x65" => true));
        ui:
        $this->login_handler = new \MoOauthClient\LoginHandler();
        $this->login_handler->mo_oauth_decide_flow();
    }
    public function mo_oauth_end_session()
    {
        if (session_id()) {
            goto w2;
        }
        session_start(array("\162\145\x61\144\137\141\156\144\x5f\143\154\x6f\163\145" => true));
        w2:
        session_destroy();
    }
    public function widget($zU, $Zb)
    {
        global $Sk;
        extract($zU);
        $cd = '';
        $cd .= $zU["\x62\x65\x66\x6f\162\x65\x5f\167\x69\x64\x67\x65\x74"];
        if (empty($B0)) {
            goto OD;
        }
        $cd .= $zU["\142\145\146\157\x72\145\x5f\164\x69\x74\154\145"] . $B0 . $zU["\x61\146\x74\x65\162\x5f\x74\x69\164\154\x65"];
        OD:
        if ($Sk->check_versi(3) && $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\x75\x74\150\x5f\141\x63\164\x69\x76\141\164\x65\x5f\x73\x69\156\147\x6c\145\137\154\x6f\147\x69\x6e\x5f\146\x6c\157\x77")) {
            goto pH;
        }
        $Mj = $this->mo_oauth_login_form();
        goto DX;
        pH:
        $Mj = $this->mo_activate_single_login_flow_form();
        DX:
        $cd .= $Mj;
        $cd .= $zU["\141\146\x74\145\162\137\x77\151\x64\x67\145\164"];
        echo $cd;
    }
    public function update($Jd, $TT)
    {
        $Zb = array();
        if (!isset($Jd["\x77\151\x64\137\x74\x69\164\154\x65"])) {
            goto QW;
        }
        $Zb["\167\151\144\137\x74\x69\164\154\145"] = wp_strip_all_tags($Jd["\167\x69\144\x5f\x74\x69\x74\154\145"]);
        QW:
        return $Zb;
    }
    public function mo_activate_single_login_flow_form()
    {
        global $Sk;
        $Mj = '';
        $KN = $Sk->mo_oauth_client_get_option("\155\x6f\137\x6f\141\165\x74\150\137\147\x6f\157\x67\154\145\137\x65\156\x61\x62\x6c\x65") | $Sk->mo_oauth_client_get_option("\155\157\137\x6f\141\165\x74\150\137\145\166\x65\x6f\x6e\154\x69\x6e\x65\137\145\x6e\x61\x62\154\x65") | $Sk->mo_oauth_client_get_option("\x6d\157\137\x6f\x61\x75\164\150\x5f\146\x61\x63\x65\x62\157\157\x6b\137\x65\156\x61\x62\x6c\145");
        $Li = $Sk->mo_oauth_client_get_option("\155\157\x5f\157\141\x75\x74\x68\137\141\x70\x70\x73\137\154\151\x73\164");
        $jc = $Sk->get_plugin_config()->get_current_config();
        $BT = isset($jc["\141\146\x74\x65\162\137\154\157\147\151\156\137\x75\162\154"]) && '' !== $jc["\x61\146\164\x65\x72\137\x6c\157\x67\x69\156\137\x75\x72\154"] ? $jc["\x61\146\x74\x65\x72\137\x6c\x6f\147\x69\x6e\137\165\x72\x6c"] : site_url();
        if (!($Li && count($Li) > 0)) {
            goto pn;
        }
        $KN = true;
        pn:
        if (!is_user_logged_in() && !is_rest()) {
            goto oJ;
        }
        $current_user = wp_get_current_user();
        $n9 = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\x75\x74\x68\137\x63\165\x73\164\157\x6d\x5f\x6c\x6f\147\x6f\x75\x74\x5f\164\x65\x78\x74") ? $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\x75\x74\x68\x5f\x63\165\163\164\x6f\x6d\137\154\x6f\147\157\x75\x74\137\x74\145\x78\x74") : "\110\157\167\x64\x79\54\x20\x23\x23\x75\163\x65\x72\x23\x23";
        $n9 = apply_filters("\x6d\157\x5f\x6f\141\165\x74\150\137\143\154\151\145\156\164\137\x66\x69\x6c\164\x65\162\x5f\154\x6f\x67\x6f\x75\x74\x5f\164\145\x78\164", $n9);
        $n9 = str_replace("\43\43\x75\163\145\x72\x23\x23", $current_user->display_name, $n9);
        $vn = __($n9, "\146\x6c\x77");
        $Mj .= $vn . "\40\x7c\x20" . wp_loginout($BT, false);
        goto GM;
        oJ:
        if ($KN) {
            goto WD;
        }
        $Mj .= "\116\x6f\x20\x61\x70\x70\x73\40\143\x6f\156\x66\x69\x67\x75\162\x65\144\56";
        WD:
        $this->mo_oauth_load_login_script();
        if (empty($Sk->mo_oauth_client_get_option("\155\x6f\137\157\141\x75\164\150\137\143\x6f\155\x6d\157\x6e\137\x6c\157\x67\151\x6e\x5f\142\x75\164\164\x6f\156\137\144\x69\x73\160\154\x61\171\137\x6e\141\x6d\x65"))) {
            goto c3;
        }
        $W6 = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\157\x61\165\164\150\x5f\143\157\155\155\157\x6e\137\154\157\x67\x69\x6e\137\142\x75\x74\164\x6f\x6e\x5f\144\x69\x73\160\x6c\141\x79\137\x6e\141\x6d\x65");
        goto r4;
        c3:
        $W6 = "\x4c\157\147\x69\156";
        r4:
        $u2 = $Sk->mo_oauth_client_get_option("\155\157\x5f\157\x61\165\164\x68\x5f\154\157\x67\x69\156\x5f\x69\143\x6f\156\x5f\x73\x70\141\x63\145");
        $O9 = $Sk->mo_oauth_client_get_option("\155\157\x5f\157\x61\x75\x74\x68\137\x6c\x6f\x67\x69\x6e\137\x69\143\x6f\x6e\x5f\x63\x75\x73\164\157\155\x5f\167\151\144\164\150");
        $L8 = $Sk->mo_oauth_client_get_option("\155\x6f\137\x6f\x61\x75\164\150\137\154\157\147\x69\156\x5f\x69\143\x6f\156\137\143\x75\x73\164\157\x6d\137\x68\145\151\147\x68\164");
        $r4 = $Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\x75\164\x68\x5f\154\x6f\x67\x69\156\137\151\x63\157\156\137\x63\165\x73\164\x6f\x6d\x5f\x62\x6f\165\156\144\141\162\x79");
        if (is_array($Li)) {
            goto HP;
        }
        return $Mj;
        HP:
        $Mj .= "\74\141\40\x68\x72\x65\146\x3d\x22\152\x61\x76\x61\163\x63\x72\151\x70\x74\x3a\x76\157\x69\x64\x28\x30\x29\42\x20\157\156\x63\154\151\143\153\x3d\42\x6d\157\x4f\101\165\164\x68\x43\x6f\x6d\155\x6f\x6e\114\157\147\151\156\50\x27" . $W6 . "\47\51\73\42\40\x73\164\x79\x6c\145\75\x22\x63\x6f\x6c\x6f\x72\x3a\167\150\x69\164\x65\73\40\x77\x69\144\x74\150\72" . $O9 . "\x70\170\40\41\151\x6d\x70\157\162\164\x61\x6e\x74\x3b\160\141\x64\144\x69\156\x67\x2d\164\157\x70\72" . $L8 . "\160\170\40\41\x69\x6d\160\x6f\162\x74\141\156\164\x3b\160\141\x64\x64\151\x6e\147\x2d\x62\157\x74\x74\157\155\72" . $L8 . "\x70\170\40\x21\x69\x6d\x70\x6f\x72\164\x61\156\x74\x3b\155\141\162\147\151\x6e\55\142\x6f\164\x74\157\155\x3a" . $u2 . "\160\170\x20\41\151\155\x70\157\162\164\141\x6e\164\73\142\157\x72\144\x65\162\x2d\162\141\x64\x69\x75\163\x3a" . $r4 . "\x70\x78\40\x21\x69\x6d\160\157\x72\164\141\x6e\x74\x3b\164\145\170\164\55\x64\145\143\157\162\141\x74\x69\x6f\156\x3a\156\x6f\156\145\x20\x21\151\x6d\x70\157\x72\164\x61\156\164\42\40\143\x6c\141\x73\163\75\x22\157\141\x75\x74\x68\154\x6f\x67\151\156\x62\165\x74\x74\x6f\x6e\40\142\164\156\40\x62\164\156\55\x73\157\143\x69\141\154\40\x62\x74\156\x2d\x70\x72\x69\155\141\162\171\x22\x3e\40\x3c\151\40\163\x74\x79\154\145\x3d\42\160\141\x64\x64\x69\156\x67\55\164\157\160\72" . $L8 . "\55\x36\x20\x70\170\40\41\x69\x6d\160\x6f\162\164\141\156\x74\x3b\40\167\151\x64\x74\150\72\x31\65\x25\x22\x20\143\154\141\x73\x73\x3d\x22\x66\x61\x20\x66\x61\55\154\x6f\x63\x6b\x22\x3e\x3c\57\x69\76\40" . $W6 . "\40\74\x2f\x61\76";
        GM:
        return $Mj;
    }
    public function mo_oauth_login_form($Fo = false, $Kd = '')
    {
        global $post;
        global $Sk;
        if (!(!$Sk->mo_oauth_hbca_xyake() && $Fo && !$Sk->check_versi(1))) {
            goto Ao;
        }
        $Mj = "\x3c\x64\x69\166\40\x63\154\x61\x73\163\x3d\x22\155\157\137\x6f\141\165\x74\x68\137\x70\x72\145\155\x69\x75\x6d\x5f\x6f\160\164\151\157\x6e\137\164\x65\170\x74\42\40\163\164\x79\x6c\145\x3d\x22\164\145\x78\x74\x2d\141\x6c\151\147\156\72\x20\x63\145\156\x74\x65\x72\73\x62\157\x72\144\145\162\x3a\40\x31\x70\170\x20\x73\157\154\151\x64\73\x6d\x61\162\147\151\156\x3a\40\x35\160\170\x3b\160\x61\144\x64\x69\156\147\x2d\164\157\x70\72\40\62\x35\x70\x78\73\42\76\x3c\160\x3e\124\150\151\163\x20\x66\x65\x61\164\165\x72\145\x20\x69\163\x20\163\x75\160\x70\157\162\164\x65\x64\x20\x6f\x6e\154\171\40\x69\156\x20\163\164\x61\156\x64\x61\x72\144\40\141\x6e\144\40\150\x69\x67\150\x65\x72\40\x76\x65\x72\x73\151\x6f\x6e\x73\56\x3c\57\x70\x3e\xd\12\11\x9\11\x3c\x70\x3e\x3c\141\x20\x68\162\x65\x66\x3d\x22" . get_site_url(null, "\x2f\167\160\55\141\144\155\x69\x6e\57") . "\x61\144\x6d\x69\x6e\56\160\150\160\x3f\x70\141\147\145\x3d\155\x6f\137\157\x61\x75\164\x68\137\x73\x65\164\164\151\156\x67\163\x26\164\x61\142\x3d\154\151\143\145\156\x73\x69\156\x67\42\76\x43\154\151\143\153\40\110\x65\x72\x65\74\57\141\76\40\x74\x6f\x20\x73\x65\145\40\157\x75\162\40\x66\165\154\154\x20\x6c\x69\163\164\40\x6f\x66\x20\x46\145\x61\x74\x75\x72\x65\x73\x2e\74\57\x70\76\x3c\57\x64\151\x76\76";
        return $Mj;
        Ao:
        $Mj = '';
        $this->error_message();
        $KN = $Sk->mo_oauth_client_get_option("\155\157\137\x6f\x61\165\x74\150\137\147\157\157\x67\x6c\x65\x5f\x65\x6e\141\x62\x6c\145") | $Sk->mo_oauth_client_get_option("\155\x6f\x5f\157\141\x75\x74\150\137\145\166\145\157\156\154\151\x6e\145\137\x65\x6e\x61\x62\154\x65") | $Sk->mo_oauth_client_get_option("\155\157\x5f\x6f\141\x75\164\x68\137\x66\x61\143\x65\x62\157\157\153\137\x65\156\x61\142\x6c\x65");
        $u2 = $Sk->mo_oauth_client_get_option("\155\x6f\137\157\141\x75\x74\x68\137\x6c\x6f\147\151\x6e\x5f\x69\143\157\156\137\x73\160\141\143\145");
        $kS = $Sk->mo_oauth_client_get_option("\x6d\x6f\137\x6f\x61\165\164\x68\137\154\x6f\147\x69\156\137\x69\x63\x6f\x6e\x5f\x63\165\x73\164\157\155\x5f\x77\151\144\x74\x68");
        $i_ = $Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\x75\x74\x68\137\x6c\157\x67\x69\156\x5f\151\143\157\156\x5f\x63\x75\163\164\157\155\x5f\x68\x65\151\x67\150\164");
        $Y3 = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\x75\x74\x68\x5f\154\x6f\x67\151\x6e\137\151\x63\x6f\x6e\137\x63\x75\x73\164\x6f\155\137\163\x69\172\145");
        $uN = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\x75\164\150\x5f\154\157\x67\x69\x6e\137\x69\143\157\156\137\143\165\x73\164\x6f\155\x5f\143\x6f\154\x6f\162");
        $Vq = $Sk->mo_oauth_client_get_option("\x6d\157\137\x6f\141\165\164\x68\137\154\x6f\147\151\156\x5f\x69\x63\x6f\156\137\143\165\163\164\x6f\x6d\x5f\x62\x6f\x75\x6e\144\x61\x72\x79");
        $Li = $Sk->mo_oauth_client_get_option("\155\x6f\137\157\141\165\164\150\x5f\141\x70\x70\163\137\x6c\x69\x73\x74");
        if (!($Li && count($Li) > 0)) {
            goto K1;
        }
        $KN = true;
        K1:
        $jc = $Sk->get_plugin_config()->get_current_config();
        $BT = isset($jc["\141\x66\x74\145\162\137\154\157\147\151\156\x5f\x75\162\x6c"]) && '' !== $jc["\141\146\x74\x65\x72\137\x6c\x6f\147\x69\x6e\137\165\x72\154"] ? $jc["\x61\x66\x74\145\x72\x5f\x6c\157\x67\151\x6e\137\165\162\154"] : site_url();
        if (!is_user_logged_in() && !is_rest()) {
            goto Sc;
        }
        $current_user = wp_get_current_user();
        $n9 = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\x74\x68\x5f\143\165\163\x74\x6f\x6d\137\154\157\147\157\x75\x74\137\x74\145\170\164") ? $Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\141\x75\x74\150\137\x63\x75\x73\x74\157\155\x5f\x6c\157\147\157\x75\164\x5f\164\145\170\164") : "\x48\157\167\x64\171\54\40\x23\43\165\163\x65\162\43\43";
        $n9 = apply_filters("\x6d\157\137\157\x61\165\164\150\137\x63\x6c\151\145\x6e\x74\x5f\146\151\x6c\164\145\x72\x5f\154\x6f\x67\x6f\165\x74\x5f\164\x65\x78\164", $n9);
        $n9 = str_replace("\43\43\x75\x73\145\x72\43\43", $current_user->display_name, $n9);
        $vn = __($n9, "\146\x6c\167");
        $Mj .= $vn . "\40\174\x20" . wp_loginout($BT, false);
        goto Dd;
        Sc:
        if ($KN) {
            goto AM;
        }
        $Mj .= "\x4e\157\40\x61\x70\x70\163\x20\x63\157\156\146\x69\147\165\x72\145\x64\x2e";
        AM:
        $this->mo_oauth_load_login_script();
        $RV = $Sk->mo_oauth_client_get_option("\155\157\137\x6f\141\x75\x74\x68\137\x69\143\157\x6e\x5f\x77\151\144\x74\x68");
        $Mp = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\165\x74\x68\137\x69\143\x6f\x6e\x5f\x68\x65\x69\147\x68\x74");
        $i0 = $Sk->mo_oauth_client_get_option("\x6d\157\137\x6f\141\165\x74\150\137\x69\143\x6f\x6e\137\x6d\x61\x72\147\x69\x6e");
        $mC = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\165\164\150\137\x69\x63\157\x6e\x5f\x63\x6f\x6e\x66\151\147\x75\x72\145\x5f\143\163\x73");
        $Oi = false !== $mC && '' !== $mC;
        $kS = false !== $RV && '' !== $RV ? $RV : $kS;
        $i_ = false !== $Mp && '' !== $Mp ? $Mp : $i_;
        $u2 = false !== $i0 && '' !== $i0 ? $i0 : $u2;
        $kS = substr($kS, -2) !== "\160\170" && substr($kS, -1) !== "\45" ? $kS . "\160\x78" : $kS;
        $i_ = substr($i_, -2) !== "\x70\x78" && substr($i_, -1) !== "\45" ? $i_ . "\160\170" : $i_;
        $u2 = substr($u2, -2) !== "\x70\170" && substr($u2, -1) !== "\45" ? $u2 . "\160\170" : $u2;
        if (is_array($Li)) {
            goto CS;
        }
        return $Mj;
        CS:
        if ($Sk->validate_appslist($Li)) {
            goto ie;
        }
        return $Mj;
        ie:
        foreach ($Li as $qi => $U3) {
            if (!($Fo && '' !== $Kd && $qi !== $Kd)) {
                goto bW;
            }
            if (next($Li)) {
                goto IA;
            }
            $Mj .= "\116\157\x20\103\157\x6e\x66\x69\147\165\x72\x65\144\x20\x41\x70\160\163\40\167\x69\164\x68\x20\164\x68\x69\163\x20\156\x61\x6d\145\56";
            IA:
            goto Ce;
            bW:
            $ta = $Sk->mo_oauth_client_get_option("\155\157\137\x6f\141\x75\164\x68\137\141\160\160\137\156\x61\x6d\x65\x5f" . $qi);
            $CF = array("\151\155\141\x67\145\x75\x72\x6c" => '', "\142\143\x6f\x6c\x6f\162" => "\x62\164\156\55\160\x72\x69\x6d\141\162\171", "\x6c\157\147\157\x5f\143\x6c\x61\163\163" => "\146\141\x20\146\x61\x2d\x6c\157\143\x6b");
            $CF = apply_filters("\x6d\157\x5f\157\141\165\164\x68\x5f\x77\151\144\147\145\164\137\151\156\164\x65\x72\x6e\141\x6c", $CF);
            $QE = $Sk->check_versi(1) ? $CF["\x69\155\141\x67\145\165\162\x6c"] : '';
            $WV = $Sk->check_versi(1) ? $CF["\142\x63\157\154\157\x72"] : "\43\61\x62\67\60\x62\61";
            $We = $Sk->check_versi(1) ? $CF["\x6c\x6f\147\157\137\x63\x6c\x61\x73\163"] : '';
            $F6 = "\x63\154\x61\x73\x73\x3d\42\157\141\165\x74\150\x6c\157\x67\151\156\x62\x75\x74\x74\157\x6e\x20\142\x74\x6e";
            $F6 .= $Sk->check_versi(1) ? "\40\142\x74\156\x2d\x73\157\143\151\141\x6c\40" . $WV . "\42" : "\40\142\164\x6e\x2d\146\x64\145\146\x61\x75\154\164\42";
            $eh = "\157\141\x75\164\x68\137\141\x70\x70\x5f" . str_replace("\40", "\x2d", $qi);
            $ae = $U3->get_app_config("\144\x69\x73\x70\154\141\171\x61\160\x70\156\x61\155\145");
            if ($ae) {
                goto X0;
            }
            $ae = ucwords($qi);
            X0:
            $h7 = $Sk->get_app_by_name($qi)->get_app_config();
            $TD = isset($h7["\147\162\141\156\164\137\x74\171\x70\x65"]) && "\x50\141\x73\x73\x77\157\x72\144\40\x47\x72\x61\x6e\164" === $h7["\147\162\141\x6e\x74\x5f\164\171\x70\145"] ? "\x6d\x6f\117\x41\x75\164\x68\x4c\x6f\x67\151\x6e\x50\x77\x64" : "\155\157\117\101\x75\x74\150\x4c\x6f\147\151\156\116\145\167";
            if (empty($mC)) {
                goto cw;
            }
            $Mj .= "\x3c\x61\40\150\x72\145\146\75\x22\152\141\x76\141\163\143\162\x69\160\x74\72\166\x6f\151\144\50\x30\51\x22\x20\157\156\143\154\x69\143\x6b\75\42" . $TD . "\50\47" . $qi . "\x27\x29\x3b\x22\x20" . $F6 . "\40\163\x74\171\x6c\x65\75\42" . $mC . "\x22\x3e\x20";
            $Mj .= $We ? "\74\x69\x20\143\154\141\163\x73\75\x22" . $We . "\x20\x63\x75\x73\x74\157\x6d\x5f\154\x6f\147\157\42\76\74\x2f\151\x3e\x20" : '';
            $Mj .= $ae . "\40\x3c\57\x61\76";
            $Mj .= "\74\163\164\171\x6c\145\76" . $mC . "\x3c\57\163\x74\171\154\x65\x3e";
            goto fR;
            cw:
            $Mj .= "\74\141\40\150\x72\145\146\75\42\x6a\x61\166\141\163\143\x72\x69\x70\164\x3a\166\x6f\x69\144\50\x30\x29\42\x20\x6f\x6e\x63\x6c\151\143\153\x3d\x22" . $TD . "\x28\x27" . $qi . "\47\51\x3b\42\40\x73\164\x79\x6c\145\x3d\x22\143\157\154\x6f\162\x3a\167\150\151\164\x65\73\164\x65\x78\x74\55\x64\x65\x63\157\x72\141\164\x69\157\x6e\72\40\156\157\x6e\145\73\40\x64\151\x73\160\154\x61\x79\x3a\142\154\x6f\x63\153\73\x6d\x61\162\x67\151\156\72\x30\73\167\151\x64\164\x68\x3a" . $kS . "\x20\x21\151\x6d\x70\157\x72\164\141\156\x74\x3b\x70\141\144\144\x69\156\x67\55\x74\x6f\160\x3a" . $i_ . "\40\41\151\x6d\160\x6f\162\164\141\156\164\73\x70\141\x64\x64\151\x6e\147\x2d\142\157\164\x74\x6f\x6d\x3a" . $i_ . "\40\41\x69\x6d\160\157\162\164\141\156\x74\73\155\141\x72\x67\x69\x6e\x2d\x62\157\x74\164\157\155\72" . $u2 . "\x20\x21\x69\155\x70\157\x72\x74\141\x6e\x74\x3b\x62\157\x72\x64\x65\x72\55\162\141\144\151\165\163\72" . $Vq . "\x20\x21\x69\155\160\x6f\x72\164\141\x6e\164\x3b\x22\x20" . $F6 . "\x3e\x20";
            $Mj .= $We ? "\74\x69\40\163\x74\171\x6c\x65\75\x22\160\x61\x64\x64\x69\x6e\147\x2d\x74\157\160\72" . $i_ . "\55\x36\x20\x70\170\x20\x21\151\155\160\x6f\x72\x74\x61\156\164\x3b\x20\167\151\x64\x74\150\72\x31\x35\x25\x22\x20\x63\x6c\141\x73\163\x3d\x22" . $We . "\42\76\x3c\x2f\151\76" : '';
            $Mj .= $ae . "\40\74\x2f\x61\76";
            fR:
            $ta = "\x20";
            Ce:
        }
        aD:
        Dd:
        return $Mj;
    }
    private function mo_oauth_load_login_script()
    {
        wp_enqueue_style("\155\157\55\x77\x70\55\142\x6f\157\x74\x73\164\x72\141\x70\55\163\x6f\143\x69\141\154", MOC_URL . "\162\x65\x73\x6f\x75\x72\143\x65\x73\x2f\143\163\163\57\142\x6f\157\x74\163\x74\162\141\160\x2d\163\157\x63\151\141\x6c\x2e\x63\x73\x73", array(), $fX = null, $vI = false);
        wp_enqueue_style("\155\157\x2d\x77\x70\55\142\x6f\157\164\163\x74\x72\x61\x70\x2d\x6d\141\151\156", MOC_URL . "\162\x65\x73\x6f\165\162\143\x65\163\x2f\x63\163\x73\57\x62\x6f\x6f\164\163\164\x72\141\160\56\155\x69\156\x2d\160\x72\145\x76\x69\x65\x77\56\143\163\163", array(), $fX = null, $vI = false);
        wp_enqueue_style("\x6d\x6f\x2d\167\160\55\x66\157\x6e\164\x2d\x61\167\x65\163\157\155\x65", MOC_URL . "\x72\145\163\157\165\162\x63\145\x73\x2f\x63\x73\163\x2f\x66\157\x6e\164\x2d\x61\x77\145\x73\x6f\x6d\x65\56\143\x73\163\77\166\x65\162\163\151\157\156\x3d\64\56\70", array(), $fX = null, $vI = false);
        ?>
	<script type="text/javascript">

		function HandlePopupResult(result) {
			window.location.href = result;
		}

		function moOAuthLogin(app_name) {
			window.location.href = '<?php 
        echo site_url();
        ?>
' + '/?option=generateDynmicUrl&app_name=' + app_name; <?php 
        ?>
		}
		function moOAuthCommonLogin(app_name) {
			<?php 
        global $Sk;
        $zx = $Sk->get_current_url();
        $jc = $Sk->get_plugin_config();
        $Li = get_site_option("\x6d\157\137\x6f\141\x75\164\x68\x5f\x61\160\x70\163\137\x6c\151\163\164");
        $UH = '';
        if (!boolval($jc->get_config("\141\143\x74\x69\x76\141\x74\x65\137\163\x69\x6e\147\154\145\137\x6c\x6f\147\151\156\x5f\x66\154\157\x77"))) {
            goto dX;
        }
        if (!is_array($Li)) {
            goto Lp;
        }
        foreach ($Li as $qi => $sh) {
            $UH .= "\x3c\141\x20\x68\x72\x65\x66\x3d\x22" . site_url() . "\57\x3f\x6f\160\x74\x69\x6f\156\x3d\157\x61\x75\x74\x68\x72\145\x64\x69\162\x65\143\164\x26\x61\160\x70\137\156\141\x6d\x65\x3d" . $qi . "\x22\76" . $qi . "\x3c\x2f\x61\x3e\46\156\142\x73\x70\x3b\46\x6e\x62\163\160\x3b";
            it:
        }
        WV:
        Lp:
        echo "\x6f\x75\164\x70\165\164\x20\x3d\x20\47\x3c\142\x3e\x50\154\145\141\x73\145\x20\x73\145\154\x65\x63\x74\x20\171\157\x75\x72\40\101\x70\x70\x2f\107\162\x6f\165\160\x2f\114\157\x67\x69\x6e\x20\x44\157\155\141\151\156\40\72\40\x3c\57\x62\76\x3c\142\162\76\74\x62\x72\x3e" . $UH . "\47\73";
        echo "\x64\157\x63\165\155\145\156\164\x2e\x77\x72\151\164\145\50\157\165\164\x70\x75\x74\x29\73";
        dX:
        ?>
		}

		function moOAuthLoginNew(app_name) {
			var base_url = "<?php 
        echo site_url();
        ?>
";
			<?php 
        global $Sk;
        $zx = $Sk->get_current_url();
        $jc = $Sk->get_plugin_config();
        if (boolval($jc->get_config("\160\x6f\x70\165\160\x5f\x6c\157\x67\151\156"))) {
            goto Cq;
        }
        ?>
				window.location.href = base_url + "/?option=oauthredirect&app_name=" + app_name + '&redirect_url=<?php 
        echo rawurlencode($zx);
        ?>
';
				<?php 
        goto lU;
        Cq:
        ?>
				var myWindow = window.open( base_url + '/?option=oauthredirect&app_name=' + app_name + '&redirect_url=<?php 
        echo rawurlencode($zx);
        ?>
', '', 'width=500,height=500');
				<?php 
        lU:
        ?>
		}
	</script>
		<?php 
        do_action("\x6d\157\x5f\157\141\x75\x74\x68\137\143\x6c\x69\x65\156\164\x5f\x61\144\x64\137\x70\167\144\x5f\x6a\x73");
    }
    public function error_message()
    {
        $FR = get_transient("\155\x6f\137\157\141\x75\164\x68\x5f\167\x69\144\147\x65\x74\137\155\x73\x67");
        $lp = get_transient("\155\x6f\137\157\x61\165\164\x68\x5f\167\x69\x64\x67\x65\164\x5f\155\x73\x67\137\143\x6c\141\163\163");
        if (!($FR && $lp)) {
            goto Ka;
        }
        echo "\74\144\151\x76\40\x63\x6c\x61\163\163\x3d\x22" . $lp . "\x22\x3e" . $FR . "\74\x2f\x64\151\166\x3e";
        delete_transient("\155\157\137\x6f\x61\165\164\x68\137\x77\151\144\x67\145\164\x5f\x6d\x73\x67");
        delete_transient("\x6d\x6f\x5f\x6f\141\165\164\x68\x5f\x77\151\144\x67\x65\x74\137\x6d\x73\147\x5f\143\x6c\141\163\x73");
        Ka:
    }
    public function register_plugin_styles()
    {
        wp_enqueue_style("\x73\164\171\154\x65\137\x6c\x6f\147\151\x6e\x5f\167\x69\x64\147\x65\x74", MOC_URL . "\x72\145\163\x6f\x75\162\143\145\x73\57\143\x73\x73\x2f\163\164\171\154\145\137\x6c\157\x67\x69\x6e\137\167\151\x64\147\145\164\x2e\143\163\163", $fX = null, $vI = false);
    }
}
