<?php


namespace MoOauthClient\Premium;

use MoOauthClient\Standard\LoginHandler as StandardLoginHandler;
use MoOauthClient\GrantTypes\Implicit;
use MoOauthClient\GrantTypes\Password;
use MoOauthClient\GrantTypes\JWSVerify;
use MoOauthClient\GrantTypes\JWTUtils;
use MoOauthClient\Premium\MappingHandler;
use MoOauthClient\StorageManager;
class LoginHandler extends StandardLoginHandler
{
    private $implicit_handler;
    private $app_name = '';
    private $group_mapping_attr = false;
    private $resource_owner = false;
    public function __construct()
    {
        global $Sk;
        parent::__construct();
        add_filter("\155\157\137\x61\165\164\x68\137\165\x72\x6c\137\x69\156\x74\x65\x72\x6e\x61\x6c", array($this, "\155\x6f\x5f\x6f\x61\x75\x74\x68\x5f\143\x6c\151\145\156\164\137\x67\x65\156\145\162\141\x74\x65\137\x61\165\x74\150\x6f\162\x69\x7a\141\x74\151\x6f\156\x5f\x75\162\x6c"), 5, 2);
        add_action("\x77\x70\x5f\x66\x6f\157\164\x65\162", array($this, "\155\157\x5f\157\x61\165\x74\x68\137\143\x6c\151\x65\156\x74\137\151\155\160\154\x69\x63\151\x74\x5f\146\x72\x61\147\155\x65\156\x74\137\x68\x61\156\144\154\145\x72"));
        add_action("\155\157\x5f\157\141\x75\164\x68\x5f\x72\x65\x73\x74\x72\151\143\x74\x5f\145\x6d\141\x69\x6c\x73", array($this, "\155\x6f\x5f\157\141\165\164\x68\x5f\x63\x6c\151\x65\156\164\137\162\145\x73\164\x72\x69\143\x74\137\x65\155\141\151\154\163"), 10, 2);
        add_action("\155\x6f\x5f\157\x61\x75\164\150\137\143\x6c\x69\145\x6e\x74\137\x6d\x61\x70\137\x72\x6f\154\x65\163", array($this, "\155\157\137\x6f\x61\165\164\x68\137\x63\x6c\151\x65\156\x74\137\x6d\141\x70\137\x72\157\x6c\145\x73"), 10, 1);
        $eN = $Sk->mo_oauth_client_get_option("\155\157\137\x6f\x61\165\x74\x68\137\145\156\141\x62\154\145\137\x6f\x61\165\x74\150\137\x77\160\x5f\154\x6f\x67\x69\x6e");
        if (!$eN) {
            goto BXD;
        }
        remove_filter("\141\x75\164\150\145\156\x74\151\x63\141\164\x65", "\x77\160\137\x61\165\164\x68\x65\156\x74\x69\143\141\x74\145\137\165\x73\145\x72\x6e\141\x6d\145\x5f\x70\141\x73\x73\x77\x6f\162\x64", 20, 3);
        $Ia = new Password(true);
        add_filter("\141\x75\x74\150\x65\156\x74\151\x63\141\x74\x65", array($Ia, "\155\x6f\137\157\x61\165\x74\x68\x5f\167\x70\137\x6c\157\x67\x69\156"), 20, 3);
        BXD:
    }
    public function mo_oauth_client_restrict_emails($nW, $jc)
    {
        $LM = isset($jc["\162\145\163\x74\162\151\x63\164\x65\x64\137\144\x6f\155\x61\x69\x6e\163"]) ? $jc["\x72\x65\x73\x74\x72\x69\x63\x74\145\x64\x5f\x64\157\155\x61\151\x6e\163"] : '';
        if (!empty($LM)) {
            goto QpI;
        }
        return;
        QpI:
        $qm = isset($jc["\x61\154\x6c\x6f\x77\137\x72\145\163\164\162\151\143\164\x65\x64\x5f\x64\157\x6d\x61\151\x6e\163"]) ? $jc["\x61\x6c\154\157\167\137\162\x65\163\164\162\x69\x63\x74\x65\144\137\x64\157\x6d\x61\x69\156\163"] : '';
        if (!empty($qm)) {
            goto qPv;
        }
        $qm = false;
        qPv:
        $qm = intval($qm);
        $LM = explode("\54", $LM);
        $cu = substr($nW, strpos($nW, "\100") + 1);
        $Tw = in_array($cu, $LM, false);
        $Tw = $qm ? !$Tw : $Tw;
        $b6 = !empty($LM) && $Tw;
        if (!$b6) {
            goto nqd;
        }
        wp_die("\x59\157\165\x20\144\x6f\40\x6e\x6f\x74\x20\x68\141\x76\145\40\162\x69\147\x68\x74\x73\x20\164\157\x20\141\x63\x63\x65\163\163\x20\164\x68\x69\x73\x20\160\x61\x67\x65\56\x20\x50\x6c\x65\141\x73\145\x20\x63\157\156\164\141\143\x74\40\x74\x68\x65\40\x61\x64\x6d\x69\156\x69\163\164\x72\x61\x74\x6f\x72\56");
        nqd:
    }
    public function mo_oauth_client_generate_authorization_url($Ca, $cZ)
    {
        global $Sk;
        $Q0 = $Sk->parse_url($Ca);
        $jc = $Sk->get_app_by_name($cZ)->get_app_config();
        if (!(isset($jc["\147\162\x61\x6e\x74\x5f\164\x79\160\x65"]) && "\111\155\160\x6c\x69\143\151\164\x20\x47\x72\x61\156\x74" === $jc["\x67\162\141\x6e\x74\137\x74\171\160\145"])) {
            goto m8z;
        }
        $Q0["\x71\165\145\162\x79"]["\162\x65\163\x70\157\x6e\x73\x65\137\164\x79\x70\145"] = "\164\157\x6b\145\156";
        return $Sk->generate_url($Q0);
        m8z:
        return $Ca;
    }
    public function mo_oauth_client_map_roles($zU)
    {
        $h7 = isset($zU["\141\x70\x70\x5f\x63\157\x6e\x66\151\147"]) && !empty($zU["\141\x70\x70\137\143\x6f\156\x66\151\147"]) ? $zU["\x61\160\160\x5f\143\x6f\156\146\x69\x67"] : array();
        $ql = isset($h7["\147\x72\157\165\160\x6e\x61\x6d\145\x5f\x61\164\164\x72\151\x62\165\164\x65"]) && '' !== $h7["\x67\162\x6f\165\160\x6e\x61\x6d\x65\x5f\141\x74\x74\162\x69\142\x75\164\x65"] ? $h7["\x67\x72\x6f\x75\160\x6e\141\155\x65\137\x61\164\164\x72\151\142\x75\164\145"] : false;
        $this->resource_owner = isset($zU["\162\145\x73\x6f\x75\x72\143\x65\137\157\167\x6e\x65\162"]) && !empty($zU["\x72\x65\163\157\165\x72\143\145\x5f\157\167\x6e\x65\162"]) ? $zU["\x72\x65\163\157\165\x72\x63\145\x5f\157\x77\156\x65\x72"] : array();
        $this->group_mapping_attr = $this->get_group_mapping_attribute($this->resource_owner, false, $ql);
        $fW = new MappingHandler(isset($zU["\x75\163\145\162\x5f\x69\x64"]) && is_numeric($zU["\x75\163\x65\x72\x5f\x69\144"]) ? intval($zU["\165\x73\145\162\137\x69\x64"]) : 0, $h7, $this->group_mapping_attr ? $this->group_mapping_attr : '', isset($zU["\x6e\145\167\x5f\165\163\x65\162"]) ? \boolval($zU["\x6e\145\x77\137\x75\163\145\x72"]) : true);
        $fW->apply_custom_attribute_mapping(is_array($this->resource_owner) ? $this->resource_owner : array());
        $fW->apply_role_mapping();
    }
    public function mo_oauth_client_implicit_fragment_handler()
    {
        ?>
			<script>
				function convert_to_url(obj) {
					return Object
					.keys(obj)
					.map(k => `${encodeURIComponent(k)}=${encodeURIComponent(obj[k])}`)
					.join('&');
				}

				function pass_to_backend() {
					if(window.location.hash) {
						var hash = window.location.hash;
						var elements = {};
						hash.split("#")[1].split("&").forEach(element => {
							var vars = element.split("=");
							elements[vars[0]] = vars[1];
						});
						if(("access_token" in elements) || ("id_token" in elements) || ("token" in elements)) {
							if(window.location.href.indexOf("?") !== -1) {
								window.location = (window.location.href.split("?")[0] + window.location.hash).split('#')[0] + "?" + convert_to_url(elements);
							} else {
								window.location = window.location.href.split('#')[0] + "?" + convert_to_url(elements);
							}
						}
					}
				}

				pass_to_backend();
			</script>

		<?php 
    }
    private function check_state($c5)
    {
        $xM = str_replace("\45\63\x44", "\x3d", urldecode($c5->get_query_param("\163\164\141\164\x65")));
        if (!empty($xM)) {
            goto j02;
        }
        wp_die(wp_kses("\124\150\145\40\163\164\x61\x74\x65\x20\x70\x61\162\141\x6d\145\164\145\162\x20\x69\x73\40\x65\155\160\164\x79\x2e", \get_valid_html()));
        j02:
        $PD = new StorageManager($xM);
        if (!is_wp_error($PD)) {
            goto FQp;
        }
        wp_die(wp_kses($PD->get_error_message(), \get_valid_html()));
        FQp:
        $Em = $PD->get_value("\165\151\x64");
        if (!($Em && MO_UID === $Em)) {
            goto bmb;
        }
        $this->appname = $PD->get_value("\x61\160\160\x6e\x61\x6d\145");
        return $PD;
        bmb:
        return false;
    }
    public function mo_oauth_login_validate()
    {
        parent::mo_oauth_login_validate();
        global $Sk;
        if (!(isset($_REQUEST["\x74\157\x6b\x65\156"]) && !empty($_REQUEST["\164\x6f\153\145\x6e"]) || isset($_REQUEST["\151\x64\137\164\x6f\x6b\145\156"]) && !empty($_REQUEST["\x69\x64\137\164\x6f\x6b\145\x6e"]))) {
            goto U7Y;
        }
        if (!(isset($_REQUEST["\164\x6f\153\145\156"]) && !empty($_REQUEST["\x74\x6f\153\x65\x6e"]))) {
            goto Feh;
        }
        $Nq = $Sk->is_valid_jwt(urldecode($_REQUEST["\164\157\153\x65\x6e"]));
        if ($Nq) {
            goto k27;
        }
        return;
        k27:
        Feh:
        $c5 = new Implicit(isset($_SERVER["\121\125\105\122\x59\137\123\x54\x52\x49\116\x47"]) ? $_SERVER["\x51\125\105\122\x59\x5f\x53\124\x52\111\x4e\107"] : '');
        if (!is_wp_error($c5)) {
            goto WCr;
        }
        wp_die(wp_kses($c5->get_error_message(), \get_valid_html()));
        die("\x50\x6c\x65\141\x73\145\x20\x74\162\171\x20\x4c\157\x67\147\151\156\147\40\151\156\x20\141\147\x61\x69\156\56");
        WCr:
        $rg = $c5->get_jwt_from_query_param();
        if (!is_wp_error($rg)) {
            goto oPl;
        }
        wp_die(wp_kses($rg->get_error_message(), \get_valid_html()));
        oPl:
        $PD = $this->check_state($c5);
        if ($PD) {
            goto y1F;
        }
        wp_die("\123\164\141\x74\x65\40\120\141\162\x61\x6d\145\x74\145\x72\x20\x64\x69\144\x20\156\x6f\x74\40\166\x65\x72\151\146\171\x2e\40\x50\154\145\141\163\x65\x20\x54\x72\x79\40\x4c\157\x67\x67\151\x6e\x67\x20\151\156\40\141\x67\141\151\156\x2e");
        y1F:
        $h7 = $Sk->get_app_by_name($this->app_name);
        $h7 = $h7 ? $h7->get_app_config() : false;
        $p4 = $this->handle_jwt($rg);
        if (!is_wp_error($p4)) {
            goto Dh_;
        }
        wp_die(wp_kses($p4->get_error_message(), \get_valid_html()));
        Dh_:
        if ($h7) {
            goto UmD;
        }
        wp_die("\123\164\x61\x74\x65\40\120\x61\x72\141\x6d\145\x74\x65\x72\x20\x64\151\x64\40\x6e\x6f\x74\40\x76\x65\x72\151\146\171\x2e\40\x50\x6c\x65\x61\x73\145\x20\x54\162\171\x20\x4c\x6f\147\147\151\156\147\40\x69\156\x20\141\x67\141\151\156\56");
        UmD:
        if ($p4) {
            goto T01;
        }
        wp_die("\112\x57\124\40\123\x69\147\x6e\141\164\165\162\145\40\x64\x69\x64\x20\x6e\157\164\40\166\145\162\x69\146\x79\56\x20\x50\154\145\x61\x73\145\x20\x54\162\x79\40\x4c\157\147\147\151\x6e\x67\x20\151\x6e\40\141\147\x61\x69\156\56");
        T01:
        $NM = $PD->get_value("\164\145\x73\x74\x5f\143\x6f\156\146\151\147");
        $this->resource_owner = $p4;
        $this->handle_group_details($c5->get_query_param("\141\x63\x63\145\163\163\x5f\x74\157\x6b\145\156"), isset($h7["\147\x72\x6f\x75\160\x64\145\x74\x61\x69\154\x73\x75\x72\154"]) ? $h7["\x67\x72\x6f\x75\x70\x64\145\x74\x61\x69\154\163\165\x72\x6c"] : '', isset($h7["\147\x72\157\165\x70\156\x61\155\x65\137\141\x74\x74\x72\151\x62\x75\164\145"]) ? $h7["\x67\162\x6f\165\160\x6e\x61\155\x65\x5f\x61\x74\164\162\151\x62\x75\164\x65"] : '', $NM);
        $Mj = array();
        $cO = $this->dropdownattrmapping('', $p4, $Mj);
        $Sk->mo_oauth_client_update_option("\x6d\157\x5f\157\x61\x75\164\150\x5f\141\164\164\162\137\156\141\x6d\145\x5f\154\151\x73\x74" . $h7["\x61\x70\160\x49\x64"], $cO);
        if (!($NM && '' !== $NM)) {
            goto C6X;
        }
        $this->render_test_config_output($p4);
        die;
        C6X:
        $this->handle_sso($this->app_name, $h7, $p4, $PD->get_state(), $c5->get_query_param());
        U7Y:
        if (!(isset($_REQUEST["\141\x63\x63\x65\x73\163\x5f\164\157\x6b\145\156"]) && '' !== $_REQUEST["\141\143\x63\x65\163\x73\x5f\x74\157\153\x65\156"])) {
            goto yxM;
        }
        $c5 = new Implicit(isset($_SERVER["\x51\x55\105\x52\131\x5f\x53\124\122\x49\116\x47"]) ? $_SERVER["\121\125\x45\x52\x59\x5f\x53\124\x52\111\x4e\107"] : '');
        $PD = $this->check_state($c5);
        if ($PD) {
            goto cgX;
        }
        wp_die("\123\x74\x61\x74\145\x20\x50\141\162\141\x6d\145\x74\145\162\40\x64\151\x64\x20\156\157\164\x20\x76\145\162\151\x66\171\x2e\40\x50\154\145\x61\163\x65\x20\124\x72\x79\40\114\157\147\147\151\156\x67\x20\151\x6e\40\141\147\x61\151\x6e\56");
        cgX:
        $h7 = $Sk->get_app_by_name($PD->get_value("\x61\x70\160\x6e\141\x6d\x65"));
        $h7 = $h7->get_app_config();
        $p4 = array();
        if (!(isset($h7["\x72\x65\x73\157\x75\x72\x63\145\x6f\167\156\145\x72\144\x65\x74\141\151\x6c\163\165\162\x6c"]) && !empty($h7["\x72\x65\163\x6f\x75\162\x63\x65\x6f\x77\x6e\x65\x72\x64\145\164\x61\151\x6c\x73\165\162\154"]))) {
            goto F9U;
        }
        $p4 = $this->oauth_handler->get_resource_owner($h7["\x72\x65\163\157\x75\x72\143\145\x6f\x77\156\145\x72\x64\x65\164\141\x69\154\x73\165\162\x6c"], $c5->get_query_param("\x61\x63\x63\145\x73\x73\x5f\164\157\x6b\x65\x6e"));
        F9U:
        $m1 = array();
        if (!$Sk->is_valid_jwt($c5->get_query_param("\x61\x63\143\x65\163\x73\137\x74\x6f\153\x65\156"))) {
            goto XCq;
        }
        $rg = $c5->get_jwt_from_query_param();
        $m1 = $this->handle_jwt($rg);
        XCq:
        if (empty($m1)) {
            goto yrA;
        }
        $p4 = array_merge($p4, $m1);
        yrA:
        if (!(empty($p4) && !$Sk->is_valid_jwt($c5->get_query_param("\141\x63\143\x65\163\163\x5f\164\157\153\145\x6e")))) {
            goto P1p;
        }
        wp_die("\111\x6e\166\x61\154\151\x64\x20\122\145\x73\160\x6f\156\x73\x65\40\x52\x65\x63\145\x69\166\x65\x64\56");
        die;
        P1p:
        $this->resource_owner = $p4;
        $NM = $PD->get_value("\164\x65\163\164\x5f\x63\157\x6e\x66\151\x67");
        $this->handle_group_details($c5->get_query_param("\x61\143\143\145\x73\163\137\164\x6f\x6b\145\x6e"), isset($h7["\x67\162\157\165\x70\x64\x65\164\x61\151\x6c\x73\165\162\x6c"]) ? $h7["\x67\x72\157\x75\x70\144\145\164\141\151\x6c\x73\x75\x72\154"] : '', isset($h7["\147\162\x6f\x75\x70\x6e\141\x6d\x65\x5f\x61\164\164\x72\151\x62\165\164\145"]) ? $h7["\147\x72\x6f\x75\160\156\141\x6d\145\137\x61\x74\164\x72\151\142\x75\x74\145"] : '', $NM);
        $Mj = array();
        $cO = $this->dropdownattrmapping('', $p4, $Mj);
        $Sk->mo_oauth_client_update_option("\155\x6f\x5f\x6f\141\165\164\x68\137\141\x74\x74\162\137\x6e\141\155\x65\137\x6c\151\x73\164" . $h7["\141\160\160\111\144"], $cO);
        if (!($NM && '' !== $NM)) {
            goto jFK;
        }
        $this->render_test_config_output($p4);
        die;
        jFK:
        $xM = str_replace("\x25\x33\x44", "\75", rawurldecode($c5->get_query_param("\163\x74\141\x74\x65")));
        $this->handle_sso($this->app_name, $h7, $p4, $xM, $c5->get_query_param());
        yxM:
        if (!(isset($_REQUEST["\x6c\157\x67\151\156"]) && "\x70\x77\x64\147\x72\156\x74\x66\162\x6d" === $_REQUEST["\154\157\147\x69\x6e"])) {
            goto srV;
        }
        $Ia = new Password();
        $FE = isset($_REQUEST["\x63\x61\154\154\145\x72"]) && !empty($_REQUEST["\x63\x61\x6c\154\x65\x72"]) ? $_REQUEST["\143\141\154\154\145\x72"] : false;
        $FJ = isset($_REQUEST["\164\x6f\x6f\x6c"]) && !empty($_REQUEST["\164\x6f\157\x6c"]) ? $_REQUEST["\x74\x6f\157\154"] : false;
        $cZ = isset($_REQUEST["\141\x70\x70\137\156\x61\x6d\x65"]) && !empty($_REQUEST["\x61\x70\x70\x5f\x6e\x61\x6d\x65"]) ? $_REQUEST["\x61\x70\160\137\x6e\141\x6d\145"] : false;
        $QR = isset($_REQUEST["\154\157\143\141\164\151\157\156"]) && !empty($_REQUEST["\x6c\x6f\x63\141\164\151\157\156"]) ? $_REQUEST["\154\157\143\x61\164\151\x6f\x6e"] : site_url();
        $gE = isset($_REQUEST["\164\x65\x73\x74"]) && !empty($_REQUEST["\x74\x65\x73\x74"]);
        if (!(!$FE || !$FJ || !$cZ)) {
            goto AEv;
        }
        $Sk->redirect_user(urldecode($QR));
        AEv:
        $Ia->behave($FE, $FJ, $cZ, $QR, $gE);
        srV:
    }
    public function handle_group_details($qJ = '', $Xg = '', $gu = '', $NM = false)
    {
        $Uq = array();
        if (!('' === $qJ || '' === $gu)) {
            goto MOz;
        }
        return;
        MOz:
        if (!('' !== $Xg)) {
            goto m03;
        }
        $Uq = $this->oauth_handler->get_resource_owner($Xg, $qJ);
        if (!(isset($_COOKIE["\x6d\x6f\x5f\x6f\x61\165\164\x68\x5f\164\x65\163\x74"]) && $_COOKIE["\x6d\x6f\x5f\x6f\x61\165\x74\x68\x5f\164\x65\x73\x74"])) {
            goto m0H;
        }
        if (!(is_array($Uq) && !empty($Uq))) {
            goto Hxn;
        }
        $this->render_test_config_output($Uq, true);
        Hxn:
        return;
        m0H:
        m03:
        $ql = $this->get_group_mapping_attribute($this->resource_owner, $Uq, $gu);
        $this->group_mapping_attr = '' !== $ql ? false : $ql;
    }
    public function get_group_mapping_attribute($p4 = array(), $Uq = array(), $gu = '')
    {
        global $Sk;
        $Mo = '';
        if (!('' === $gu)) {
            goto bhq;
        }
        return '';
        bhq:
        if (isset($Uq) && !empty($Uq)) {
            goto X6S;
        }
        if (isset($p4) && !empty($p4)) {
            goto aQB;
        }
        goto ZWU;
        X6S:
        $Mo = $Sk->getnestedattribute($Uq, $gu);
        goto ZWU;
        aQB:
        $Mo = $Sk->getnestedattribute($p4, $gu);
        ZWU:
        return !empty($Mo) ? $Mo : '';
    }
    public function handle_jwt($rg)
    {
        global $Sk;
        $U3 = $Sk->get_app_by_name($this->app_name);
        $Uz = $U3->get_app_config("\x6a\167\164\x5f\x73\165\160\160\x6f\162\164");
        if ($Uz) {
            goto DhP;
        }
        return $rg->get_decoded_payload();
        DhP:
        $VR = $U3->get_app_config("\x6a\x77\x74\137\x61\x6c\x67\x6f");
        if ($rg->check_algo($VR)) {
            goto BIZ;
        }
        return new \WP_Error("\151\156\x76\x61\154\151\144\x5f\163\151\147\x6e", __("\x4a\x57\124\x20\x53\x69\x67\156\151\x6e\x67\40\x61\x6c\x67\157\x72\151\x74\150\x6d\x20\151\x73\x20\x6e\x6f\164\40\x61\154\x6c\x6f\x77\145\144\40\x6f\162\40\x75\156\x73\x75\160\x70\x6f\x72\x74\145\x64\x2e"));
        BIZ:
        $yv = "\x52\x53\101" === $VR ? $U3->get_app_config("\x78\x35\60\x39\137\x63\x65\162\x74") : $U3->get_app_config("\x63\x6c\x69\145\x6e\x74\137\x73\x65\143\x72\145\164");
        $uL = $U3->get_app_config("\x6a\167\153\x73\x75\162\x6c");
        $Bv = $uL ? $rg->verify_from_jwks($uL) : $rg->verify($yv);
        return !$Bv ? $Bv : $rg->get_decoded_payload();
    }
    public function get_resource_owner_from_app($lo, $U3)
    {
        $this->app_name = $U3;
        $rg = new JWTUtils($lo);
        if (!is_wp_error($rg)) {
            goto So9;
        }
        wp_die($rg);
        So9:
        $p4 = $this->handle_jwt($rg);
        if (!is_wp_error($p4)) {
            goto vEk;
        }
        wp_die($p4);
        vEk:
        if (!(false === $p4)) {
            goto iEi;
        }
        wp_die("\x46\x61\x69\x6c\145\x64\40\x74\157\x20\166\145\x72\x69\146\171\x20\x4a\x57\x54\40\124\x6f\x6b\x65\x6e\x2e\x20\x50\x6c\145\x61\163\x65\x20\143\150\145\x63\x6b\40\x79\x6f\165\x72\40\143\157\156\x66\151\147\x75\162\x61\x74\151\157\x6e\40\157\x72\x20\x63\157\156\x74\x61\143\164\x20\x79\157\x75\162\40\x41\x64\x6d\x69\x6e\151\x73\164\x72\x61\164\157\162\56");
        iEi:
        return $p4;
    }
}
