<?php


namespace MoOauthClient;

use MoOauthClient\Base\InstanceHelper;
use MoOauthClient\OauthHandler;
use MoOauthClient\StorageManager;
class LoginHandler
{
    public $oauth_handler;
    public function __construct()
    {
        $this->oauth_handler = new OauthHandler();
        add_action("\x69\156\x69\164", array($this, "\155\x6f\x5f\x6f\141\165\x74\x68\x5f\x64\x65\143\151\x64\x65\x5f\x66\154\x6f\x77"));
        add_action("\155\157\x5f\x6f\141\165\x74\150\x5f\x63\x6c\x69\145\156\x74\x5f\164\151\147\x68\164\137\154\x6f\147\x69\x6e\x5f\x69\x6e\x74\145\x72\156\x61\154", array($this, "\x68\141\156\x64\154\145\x5f\x73\x73\x6f"), 10, 4);
    }
    public function mo_oauth_decide_flow()
    {
        global $Sk;
        if (!(isset($_REQUEST[\MoOAuthConstants::OPTION]) && "\x74\x65\163\164\x61\x74\164\162\x6d\141\160\160\151\156\147\143\x6f\156\x66\151\x67" === $_REQUEST[\MoOAuthConstants::OPTION])) {
            goto uQ;
        }
        $Aw = $_REQUEST["\141\x70\160"];
        wp_safe_redirect(site_url() . "\77\157\160\x74\x69\x6f\156\x3d\157\141\165\x74\150\x72\x65\x64\x69\x72\145\x63\x74\46\x61\160\x70\137\x6e\141\155\145\75" . rawurlencode($Aw) . "\x26\164\x65\163\x74\75\x74\162\x75\145");
        die;
        uQ:
        $this->mo_oauth_login_validate();
    }
    public function mo_oauth_login_validate()
    {
        global $Sk;
        $PD = new StorageManager();
        if (!(isset($_REQUEST[\MoOAuthConstants::OPTION]) and strpos($_REQUEST[\MoOAuthConstants::OPTION], "\x6f\141\165\x74\150\x72\145\x64\x69\162\x65\x63\164") !== false)) {
            goto j9;
        }
        if (!(isset($_REQUEST["\162\x65\163\157\x75\162\x63\x65"]) && !empty($_REQUEST["\162\x65\x73\x6f\165\162\x63\145"]))) {
            goto eT;
        }
        if (!empty($_REQUEST["\162\x65\163\157\x75\162\143\x65"])) {
            goto qR;
        }
        wp_die(wp_kses("\x54\150\145\40\162\145\163\x70\157\x6e\x73\x65\x20\x66\x72\157\155\x20\x75\x73\x65\162\151\156\146\x6f\40\x77\141\x73\40\145\155\x70\x74\x79\x2e", \get_valid_html()));
        qR:
        $PD = new StorageManager(urldecode($_REQUEST["\x72\x65\163\x6f\x75\x72\143\145"]));
        $p4 = $PD->get_value("\x72\x65\163\x6f\165\162\143\x65");
        $X3 = $PD->get_value("\x61\x70\x70\156\141\x6d\x65");
        $mw = $PD->get_value("\x72\145\x64\151\x72\145\143\164\137\165\162\x69");
        $qJ = $PD->get_value("\141\143\x63\x65\x73\x73\x5f\164\157\x6b\x65\x6e");
        $h7 = $Sk->get_app_by_name($X3)->get_app_config();
        $NM = isset($_REQUEST["\164\x65\x73\x74"]) && !empty($_REQUEST["\x74\145\x73\164"]);
        if (!($NM && '' !== $NM)) {
            goto lm;
        }
        $this->handle_group_test_conf($p4, $h7, $qJ, false, $NM);
        die;
        lm:
        $PD->remove_key("\162\x65\163\157\165\162\143\x65");
        $PD->add_replace_entry("\160\157\x70\x75\160", "\x69\x67\156\x6f\x72\x65");
        $this->handle_sso($X3, $h7, $p4, $PD->get_state(), array("\141\143\143\145\x73\x73\137\164\157\153\x65\x6e" => $qJ));
        eT:
        $nd = $_REQUEST["\x61\160\x70\137\x6e\141\x6d\145"];
        $Li = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\157\141\165\164\150\x5f\x61\x70\160\163\x5f\154\151\x73\164");
        $s5 = isset($_REQUEST["\162\x65\144\x69\162\145\143\164\137\x75\x72\x6c"]) ? urldecode($_REQUEST["\162\x65\144\151\x72\145\143\164\x5f\165\x72\154"]) : site_url();
        $NM = isset($_REQUEST["\164\145\163\164"]) ? urldecode($_REQUEST["\x74\145\163\164"]) : false;
        $VJ = isset($_REQUEST["\162\145\x73\164\x72\x69\143\164\162\145\144\151\162\145\x63\x74"]) ? urldecode($_REQUEST["\162\x65\163\164\x72\151\x63\x74\x72\x65\144\x69\x72\x65\x63\164"]) : false;
        $U3 = $Sk->get_app_by_name($nd);
        $vr = $U3->get_app_config("\147\162\141\156\164\x5f\x74\171\160\145");
        if (!($vr && "\120\x61\x73\163\167\157\162\144\x20\x47\162\141\156\164" === $vr)) {
            goto z8;
        }
        do_action("\x70\167\144\x5f\145\163\x73\145\156\164\x69\141\x6c\163\137\151\156\x74\x65\x72\x6e\141\x6c");
        do_action("\x6d\x6f\137\157\x61\x75\x74\150\x5f\x63\x6c\151\x65\156\164\137\141\144\144\137\160\x77\x64\x5f\x6a\163");
        ?>
				<script>
					var mo_oauth_app_name = "<?php 
        echo wp_kses($nd, \get_valid_html());
        ?>
";
					document.addEventListener('DOMContentLoaded', function() {
						<?php 
        if ($NM) {
            goto Jh;
        }
        ?>
							moOAuthLoginPwd(mo_oauth_app_name, false, '<?php 
        echo $s5;
        ?>
');
						<?php 
        goto Gh;
        Jh:
        ?>
							moOAuthLoginPwd(mo_oauth_app_name, true, '<?php 
        echo $s5;
        ?>
');
						<?php 
        Gh:
        ?>
					}, false);
				</script>
				<?php 
        die;
        z8:
        $PD->add_replace_entry("\x61\x70\160\156\x61\155\145", $nd);
        $PD->add_replace_entry("\162\x65\144\151\x72\x65\x63\x74\x5f\x75\x72\151", $s5);
        $PD->add_replace_entry("\164\145\x73\x74\137\143\x6f\156\146\151\147", $NM);
        $PD->add_replace_entry("\x72\145\163\164\x72\151\x63\164\x72\145\x64\151\162\145\x63\x74", $VJ);
        $xM = $PD->get_state();
        $xM = apply_filters("\x73\x74\141\164\x65\x5f\151\x6e\x74\x65\x72\x6e\x61\x6c", $xM);
        $Ca = $U3->get_app_config("\141\x75\164\x68\157\162\x69\x7a\145\x75\162\154");
        if (!(strpos($Ca, "\147\x6f\157\x67\154\145") !== false)) {
            goto os;
        }
        $Ca = "\x68\164\x74\x70\x73\x3a\x2f\57\141\x63\143\x6f\165\x6e\x74\x73\56\147\x6f\x6f\x67\154\x65\x2e\x63\x6f\x6d\57\157\x2f\157\141\x75\x74\150\x32\57\141\165\x74\x68";
        os:
        $jI = $U3->get_app_config("\x70\x6b\143\x65\x5f\146\x6c\x6f\x77");
        $mw = $U3->get_app_config("\162\145\144\151\x72\145\x63\164\x5f\x75\162\x69");
        $mw = empty($mw) ? \site_url() : $mw;
        if ($jI && 1 === $jI) {
            goto dk;
        }
        if (strpos($Ca, "\x3f") !== false) {
            goto DZ;
        }
        $Ca = $Ca . "\77\x63\x6c\x69\145\x6e\164\x5f\151\x64\x3d" . urlencode($U3->get_app_config("\143\154\x69\x65\156\164\x5f\x69\x64")) . "\46\163\143\157\x70\x65\x3d" . $U3->get_app_config("\163\x63\157\160\x65") . "\x26\x72\145\x64\x69\162\x65\x63\x74\137\x75\x72\151\75" . urlencode($mw) . "\x26\x72\x65\x73\160\157\156\163\145\x5f\x74\x79\160\145\x3d\143\x6f\144\x65\46\x73\164\141\x74\x65\75" . $xM;
        goto Jf;
        DZ:
        $Ca = $Ca . "\x26\x63\154\x69\x65\156\x74\137\151\x64\x3d" . urlencode($U3->get_app_config("\143\x6c\x69\145\156\164\x5f\151\x64")) . "\46\163\x63\157\x70\145\x3d" . $U3->get_app_config("\x73\x63\x6f\x70\x65") . "\46\x72\x65\x64\151\162\145\x63\x74\137\x75\162\x69\x3d" . urlencode($mw) . "\x26\162\145\163\160\157\156\x73\145\137\x74\x79\x70\x65\x3d\143\x6f\x64\145\x26\163\x74\x61\164\x65\75" . $xM;
        Jf:
        goto zZ;
        dk:
        $iF = bin2hex(openssl_random_pseudo_bytes(32));
        $ef = $Sk->base64url_encode(pack("\110\52", $iF));
        $ER = $Sk->base64url_encode(pack("\x48\x2a", hash("\x73\150\141\62\65\66", $ef)));
        $PD->add_replace_entry("\x63\157\x64\145\137\x76\145\162\151\x66\x69\145\x72", $ef);
        $xM = $PD->get_state();
        if (strpos($Ca, "\x3f") !== false) {
            goto ep;
        }
        $Ca = $Ca . "\x3f\x63\x6c\151\x65\156\164\137\x69\x64\x3d" . urlencode($U3->get_app_config("\143\154\x69\x65\156\x74\x5f\x69\144")) . "\46\x73\x63\157\160\145\x3d" . $U3->get_app_config("\163\x63\x6f\160\x65") . "\46\x72\145\x64\x69\162\145\x63\164\137\165\x72\x69\x3d" . urlencode($mw) . "\x26\x72\x65\x73\x70\157\156\163\145\x5f\164\x79\x70\145\75\143\x6f\144\x65\x26\163\164\141\164\145\x3d" . $xM . "\x26\x63\157\x64\x65\137\143\150\x61\154\x6c\145\x6e\147\145\75" . $ER . "\46\x63\157\x64\x65\x5f\x63\x68\x61\x6c\154\145\x6e\x67\145\x5f\155\145\164\150\157\x64\x3d\x53\62\65\x36";
        goto fG;
        ep:
        $Ca = $Ca . "\46\x63\154\151\x65\x6e\164\137\151\x64\x3d" . urlencode($U3->get_app_config("\143\x6c\x69\x65\156\164\137\151\x64")) . "\x26\x73\x63\x6f\x70\x65\x3d" . $U3->get_app_config("\163\143\157\160\x65") . "\x26\x72\145\x64\151\162\145\x63\x74\x5f\x75\162\151\x3d" . urlencode($mw) . "\x26\162\145\163\x70\157\x6e\163\x65\137\164\x79\160\x65\x3d\x63\157\144\145\46\163\x74\x61\164\145\75" . $xM . "\x26\x63\157\x64\145\137\x63\x68\x61\154\154\x65\x6e\x67\145\x3d" . $ER . "\46\x63\157\x64\x65\x5f\x63\150\141\154\154\x65\x6e\x67\x65\137\155\x65\164\x68\157\x64\75\x53\x32\x35\x36";
        fG:
        zZ:
        if (!(session_id() === '' || !isset($_SESSION))) {
            goto Fe;
        }
        session_start(array("\x72\145\141\144\137\141\x6e\144\x5f\143\154\157\163\x65" => true));
        Fe:
        $Ca = apply_filters("\x6d\x6f\137\141\x75\x74\x68\x5f\x75\x72\x6c\x5f\x69\x6e\164\145\162\x6e\141\154", $Ca, $nd);
        header("\x4c\157\143\x61\x74\x69\x6f\x6e\72\x20" . $Ca);
        die;
        j9:
        if (!(strpos($_SERVER["\122\105\x51\x55\x45\123\x54\x5f\x55\x52\x49"], "\57\x6f\141\165\x74\x68\x63\x61\x6c\154\142\x61\143\x6b") !== false || isset($_GET["\143\x6f\144\x65"]))) {
            goto pR;
        }
        try {
            $xM = isset($_GET["\x73\x74\x61\164\145"]) ? wp_unslash($_GET["\163\164\x61\x74\145"]) : false;
            if (!empty($xM)) {
                goto ba;
            }
            wp_die(wp_kses("\124\150\145\x20\163\164\141\164\145\40\x70\x61\162\141\155\x65\x74\x65\162\40\151\163\x20\x65\155\x70\164\x79\x2e", \get_valid_html()));
            ba:
            $PD = new StorageManager($xM);
            $nd = $PD->get_value("\x61\x70\x70\156\x61\155\x65");
            $NM = $PD->get_value("\x74\145\x73\164\137\x63\157\x6e\x66\x69\x67");
            $X3 = $nd ? $nd : '';
            $Li = $Sk->mo_oauth_client_get_option("\155\157\x5f\157\141\x75\164\x68\137\141\x70\x70\163\137\x6c\151\x73\x74");
            $gc = '';
            $ZW = '';
            $W3 = $Sk->get_app_by_name($X3);
            if ($W3) {
                goto tJ;
            }
            die("\101\160\160\154\x69\x63\x61\x74\x69\x6f\156\40\156\157\164\40\143\157\156\x66\x69\147\x75\x72\145\x64\x2e");
            tJ:
            $h7 = $W3->get_app_config();
            $jI = $W3->get_app_config("\x70\153\143\x65\137\x66\154\157\x77");
            $zU = array("\147\162\141\x6e\164\x5f\x74\x79\160\x65" => "\x61\x75\164\150\157\x72\x69\172\x61\164\x69\x6f\x6e\137\143\157\x64\145", "\143\154\151\x65\x6e\x74\x5f\x69\x64" => $h7["\x63\154\151\x65\x6e\x74\137\x69\x64"], "\162\x65\144\151\x72\x65\143\x74\137\x75\162\x69" => $h7["\162\x65\x64\151\162\145\x63\x74\137\x75\x72\x69"], "\143\x6f\x64\x65" => $_GET["\143\157\x64\x65"], "\163\143\157\x70\x65" => $W3->get_app_config("\x73\x63\x6f\160\145"));
            if ($jI && 1 === $jI) {
                goto GV;
            }
            $zU["\143\x6c\151\x65\x6e\x74\x5f\163\x65\143\162\x65\x74"] = $h7["\x63\154\x69\x65\x6e\164\137\x73\145\143\x72\145\x74"];
            goto pm;
            GV:
            $zU["\143\x6f\x64\x65\137\x76\x65\x72\x69\x66\151\x65\162"] = $PD->get_value("\143\x6f\144\x65\x5f\166\145\x72\151\146\x69\x65\162");
            pm:
            $B3 = isset($h7["\x73\x65\156\144\x5f\150\145\x61\144\145\x72\163"]) ? $h7["\x73\145\x6e\x64\137\150\x65\141\144\145\162\x73"] : 0;
            $N0 = isset($h7["\x73\145\x6e\x64\x5f\142\x6f\144\x79"]) ? $h7["\163\145\156\144\x5f\142\x6f\144\x79"] : 0;
            if ("\157\160\x65\156\x69\x64\x63\x6f\x6e\x6e\145\143\x74" === $W3->get_app_config("\x61\x70\x70\137\x74\171\x70\145")) {
                goto Kr;
            }
            $xk = $h7["\141\143\143\x65\163\x73\164\x6f\153\x65\156\165\162\154"];
            if (!(strpos($xk, "\147\x6f\x6f\147\154\x65") !== false)) {
                goto zC;
            }
            $xk = "\x68\164\164\160\163\72\x2f\x2f\167\167\167\56\x67\157\157\147\154\x65\x61\160\x69\x73\x2e\143\x6f\155\x2f\x6f\141\165\x74\x68\x32\x2f\x76\64\57\x74\157\x6b\145\156";
            zC:
            $Tu = json_decode($this->oauth_handler->get_token($xk, $zU, $B3, $N0), true);
            if (isset($Tu["\141\x63\x63\145\x73\163\x5f\164\157\x6b\x65\x6e"])) {
                goto yZ;
            }
            die("\111\x6e\x76\141\x6c\151\144\x20\x74\x6f\x6b\145\156\40\162\x65\x63\x65\151\x76\x65\x64\56");
            yZ:
            $Tx = $h7["\162\145\x73\157\165\162\143\x65\x6f\167\156\x65\x72\x64\x65\164\141\x69\x6c\x73\x75\162\154"];
            if (!(substr($Tx, -1) === "\x3d")) {
                goto xy;
            }
            $Tx .= $Tu["\141\143\143\145\x73\x73\x5f\x74\157\153\145\156"];
            xy:
            if (!(strpos($Tx, "\147\157\x6f\x67\154\145") !== false)) {
                goto zK;
            }
            $Tx = "\150\x74\164\160\163\72\57\57\167\167\167\56\x67\157\x6f\x67\x6c\x65\141\x70\151\x73\56\143\157\155\x2f\x6f\141\x75\164\150\x32\x2f\166\x31\57\165\163\145\x72\x69\x6e\146\157";
            zK:
            $p4 = $this->oauth_handler->get_resource_owner($Tx, $Tu["\141\143\x63\145\x73\163\137\x74\x6f\153\x65\x6e"]);
            $Mj = array();
            $cO = $this->dropdownattrmapping('', $p4, $Mj);
            $Sk->mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\x61\165\x74\x68\x5f\x61\x74\164\162\137\x6e\x61\x6d\x65\137\154\151\163\x74" . $X3, $cO);
            if (!($NM && '' !== $NM)) {
                goto ic;
            }
            $this->handle_group_test_conf($p4, $h7, $Tu["\141\x63\x63\145\x73\x73\137\164\157\x6b\x65\156"], false, $NM);
            die;
            ic:
            goto Yo;
            Kr:
            $Tu = json_decode($this->oauth_handler->get_token($h7["\x61\143\x63\145\x73\x73\x74\x6f\x6b\145\x6e\165\x72\x6c"], $zU, $B3, $N0), true);
            $Nz = array();
            try {
                $Nz = $this->resolve_and_get_oidc_response($Tu);
            } catch (\Exception $to) {
                wp_die("\x49\156\166\141\154\x69\x64\x20\x52\145\x73\x70\157\156\x73\x65\x20\162\x65\x63\145\x69\166\x65\144\x2e");
                die;
            }
            $p4 = $this->get_resource_owner_from_app($Nz, $X3);
            $Mj = array();
            $cO = $this->dropdownattrmapping('', $p4, $Mj);
            $Sk->mo_oauth_client_update_option("\x6d\157\137\x6f\141\x75\164\x68\137\141\x74\164\162\137\156\x61\x6d\x65\137\154\x69\163\x74" . $X3, $cO);
            if (!($NM && '' !== $NM)) {
                goto q5;
            }
            $this->handle_group_test_conf($p4, $h7, $Tu, false, $NM);
            die;
            q5:
            Yo:
            $this->handle_sso($X3, $h7, $p4, $xM, $Tu);
        } catch (Exception $to) {
            die(esc_html($to->getMessage()));
        }
        pR:
    }
    public function dropdownattrmapping($uq, $KK, $Mj)
    {
        global $Sk;
        foreach ($KK as $qi => $jt) {
            if (is_array($jt)) {
                goto ws;
            }
            if (!empty($uq)) {
                goto Nk;
            }
            array_push($Mj, $qi);
            goto aS1;
            Nk:
            array_push($Mj, $uq . "\56" . $qi);
            aS1:
            goto Ay;
            ws:
            if (empty($uq)) {
                goto Pd;
            }
            $uq .= "\56";
            Pd:
            $Mj = $this->dropdownattrmapping($uq . $qi, $jt, $Mj);
            $uq = rtrim($uq, "\x2e");
            Ay:
            Gu:
        }
        id:
        return $Mj;
    }
    public function resolve_and_get_oidc_response($Tu = array())
    {
        if (!empty($Tu)) {
            goto nW;
        }
        throw new \Exception("\124\157\153\x65\x6e\x20\162\x65\x73\160\x6f\156\163\x65\40\x69\x73\x20\145\x6d\x70\164\171", "\x69\156\166\x61\154\151\x64\137\x72\x65\x73\160\157\156\x73\145");
        nW:
        global $Sk;
        $lo = isset($Tu["\151\x64\137\x74\157\153\145\156"]) ? $Tu["\x69\x64\137\x74\157\153\x65\x6e"] : false;
        $qJ = isset($Tu["\x61\143\x63\145\163\163\x5f\x74\x6f\153\145\156"]) ? $Tu["\141\x63\143\145\163\163\x5f\x74\x6f\x6b\145\156"] : false;
        if (!$Sk->is_valid_jwt($lo)) {
            goto XG;
        }
        return $lo;
        XG:
        if (!$Sk->is_valid_jwt($qJ)) {
            goto E0;
        }
        return $qJ;
        E0:
        throw new \Exception("\x54\157\x6b\x65\156\x20\x69\163\40\x6e\x6f\x74\x20\141\40\x76\141\154\151\x64\40\112\x57\124\56");
    }
    public function handle_group_test_conf($p4 = array(), $h7 = array(), $qJ = '', $ie = false, $NM = false)
    {
        $this->render_test_config_output($p4, false);
    }
    public function testattrmappingconfig($uq, $KK)
    {
        foreach ($KK as $qi => $jt) {
            if (is_array($jt) || is_object($jt)) {
                goto OL;
            }
            echo "\x3c\x74\162\76\x3c\164\x64\76";
            if (empty($uq)) {
                goto bj;
            }
            echo $uq . "\x2e";
            bj:
            echo $qi . "\x3c\x2f\164\x64\x3e\74\x74\144\x3e" . $jt . "\74\x2f\x74\x64\x3e\74\x2f\x74\162\x3e";
            goto Ni;
            OL:
            if (empty($uq)) {
                goto KQ;
            }
            $uq .= "\x2e";
            KQ:
            $this->testattrmappingconfig($uq . $qi, $jt);
            $uq = rtrim($uq, "\56");
            Ni:
            Tu:
        }
        RA:
    }
    public function render_test_config_output($p4, $ie = false)
    {
        echo "\x3c\144\151\166\x20\163\164\x79\x6c\145\x3d\42\146\x6f\x6e\164\55\146\x61\x6d\x69\x6c\x79\72\103\x61\x6c\x69\x62\162\x69\73\x70\x61\144\144\x69\156\x67\72\x30\40\63\x25\x3b\x22\x3e";
        echo "\x3c\163\164\171\154\145\x3e\164\141\142\x6c\x65\x7b\142\x6f\x72\x64\x65\x72\55\x63\157\154\x6c\141\160\163\x65\x3a\x63\x6f\x6c\154\x61\x70\x73\145\x3b\175\164\150\40\173\x62\141\x63\153\147\x72\x6f\165\156\144\55\143\x6f\154\157\x72\x3a\40\43\145\x65\145\73\40\164\x65\170\x74\x2d\141\x6c\x69\147\156\72\40\x63\x65\156\164\145\162\x3b\40\160\x61\144\144\151\156\x67\x3a\x20\70\160\x78\x3b\x20\142\157\x72\144\x65\162\55\x77\x69\x64\164\x68\72\61\x70\x78\x3b\x20\x62\157\x72\x64\x65\x72\55\163\x74\171\x6c\145\72\163\x6f\154\x69\144\x3b\x20\142\x6f\162\144\x65\162\55\x63\x6f\x6c\157\x72\x3a\x23\62\61\x32\x31\x32\x31\x3b\175\164\162\x3a\156\164\x68\x2d\143\x68\x69\x6c\144\x28\157\x64\x64\x29\40\173\142\x61\x63\153\147\x72\157\x75\156\x64\x2d\143\157\x6c\157\x72\x3a\x20\43\146\x32\x66\x32\146\x32\x3b\175\x20\x74\x64\173\x70\141\144\144\151\x6e\x67\x3a\70\160\170\x3b\142\x6f\162\x64\145\x72\x2d\167\151\144\x74\x68\x3a\61\x70\x78\x3b\x20\142\157\x72\144\145\162\x2d\163\x74\x79\154\145\72\x73\157\x6c\x69\x64\73\x20\142\157\162\144\x65\x72\x2d\143\157\154\x6f\162\x3a\43\x32\x31\x32\61\x32\61\73\175\74\57\163\x74\171\x6c\145\76";
        echo "\x3c\150\62\76";
        echo $ie ? "\x47\162\x6f\x75\x70\x20\111\156\146\x6f" : "\124\x65\163\x74\40\x43\157\156\146\151\x67\165\162\x61\164\151\x6f\x6e";
        echo "\74\57\150\x32\76\x3c\x74\x61\142\154\x65\76\x3c\164\162\76\74\x74\x68\x3e\x41\164\x74\162\x69\142\165\164\x65\40\116\141\155\x65\74\x2f\x74\150\x3e\x3c\164\x68\x3e\101\164\164\x72\x69\x62\165\164\x65\40\126\141\154\x75\145\74\x2f\164\150\76\x3c\57\x74\x72\x3e";
        $this->testattrmappingconfig('', $p4);
        echo "\74\x2f\x74\x61\142\154\145\76";
        if ($ie) {
            goto xj;
        }
        echo "\74\144\x69\166\40\x73\164\x79\154\x65\75\x22\160\141\x64\144\151\x6e\147\x3a\40\x31\x30\160\x78\73\42\76\74\57\x64\x69\166\x3e\74\x69\156\160\x75\x74\x20\163\x74\x79\154\x65\x3d\42\x70\141\144\x64\151\156\147\x3a\61\x25\x3b\x77\151\x64\x74\x68\72\61\60\x30\x70\x78\x3b\142\141\143\153\147\162\157\x75\156\x64\72\40\x23\60\60\x39\61\103\104\40\156\157\156\145\x20\x72\x65\160\145\141\x74\x20\x73\143\162\157\x6c\154\40\x30\x25\40\x30\45\x3b\x63\165\x72\x73\157\x72\72\40\x70\157\x69\x6e\164\x65\x72\73\x66\157\156\164\55\163\x69\172\x65\72\x31\65\x70\170\73\x62\157\x72\x64\145\x72\55\167\151\x64\164\150\72\x20\x31\160\x78\x3b\x62\157\162\144\x65\x72\x2d\163\164\x79\154\x65\72\40\163\x6f\x6c\x69\144\x3b\142\157\x72\144\x65\162\55\x72\141\144\151\165\163\72\x20\x33\160\170\73\x77\150\x69\164\145\x2d\x73\160\141\x63\x65\x3a\x20\x6e\x6f\x77\x72\x61\160\x3b\142\157\x78\55\x73\151\x7a\x69\x6e\147\x3a\x20\x62\x6f\162\x64\145\162\55\142\157\x78\x3b\x62\157\162\x64\145\162\55\143\x6f\154\x6f\162\72\x20\x23\x30\60\67\x33\x41\x41\x3b\142\157\x78\x2d\x73\x68\141\x64\157\x77\72\x20\x30\x70\170\40\x31\160\170\40\60\x70\x78\x20\162\147\142\141\50\61\x32\x30\54\40\x32\60\x30\x2c\x20\x32\63\x30\x2c\x20\x30\x2e\66\51\40\151\x6e\163\x65\x74\x3b\x63\x6f\154\x6f\162\x3a\40\43\106\x46\x46\73\x22\164\171\160\x65\75\42\x62\x75\x74\x74\x6f\156\x22\40\x76\x61\154\165\145\x3d\42\x44\x6f\156\x65\x22\x20\x6f\x6e\x43\x6c\x69\143\153\x3d\x22\163\x65\x6c\146\56\x63\154\157\x73\x65\50\51\73\42\76\x3c\x2f\x64\x69\166\76";
        xj:
    }
    public function handle_sso($X3, $h7, $p4, $xM, $Tu, $SC = false)
    {
        global $Sk;
        if (!(get_class($this) === "\115\x6f\x4f\x61\x75\x74\x68\x43\154\151\x65\156\x74\x5c\114\x6f\x67\151\x6e\110\x61\156\x64\x6c\145\x72" && $Sk->check_versi(1))) {
            goto YS;
        }
        $Yx = new \MoOauthClient\Base\InstanceHelper();
        $jf = $Yx->get_login_handler_instance();
        $jf->handle_sso($X3, $h7, $p4, $xM, $Tu, $SC);
        YS:
        $gc = isset($h7["\x6e\x61\155\x65\x5f\141\x74\x74\162"]) ? $h7["\156\x61\155\145\x5f\141\164\x74\x72"] : '';
        $ZW = isset($h7["\145\x6d\141\151\154\137\x61\164\x74\162"]) ? $h7["\145\155\141\x69\x6c\x5f\141\x74\164\162"] : '';
        $nW = $Sk->getnestedattribute($p4, $ZW);
        $w9 = $Sk->getnestedattribute($p4, $gc);
        if (!empty($nW)) {
            goto QO;
        }
        wp_die("\x45\x6d\141\x69\154\x20\141\144\x64\x72\x65\163\163\x20\x6e\x6f\x74\40\x72\145\143\x65\x69\166\145\x64\x2e\40\103\150\145\x63\x6b\x20\x79\157\x75\x72\x20\74\163\164\x72\x6f\156\147\x3e\x41\x74\164\x72\151\142\x75\x74\x65\40\x4d\x61\x70\160\x69\156\x67\x3c\57\163\164\162\x6f\156\x67\76\40\143\x6f\156\146\x69\x67\165\162\141\x74\151\x6f\x6e\x2e");
        QO:
        if (!(false === strpos($nW, "\x40"))) {
            goto zN;
        }
        wp_die("\115\141\x70\x70\145\x64\x20\105\x6d\x61\x69\154\x20\141\164\x74\x72\x69\142\x75\164\x65\40\144\x6f\x65\x73\x20\x6e\157\164\x20\143\x6f\156\x74\x61\x69\x6e\40\166\141\x6c\151\x64\x20\145\155\141\x69\x6c\x2e");
        zN:
        $user = get_user_by("\x6c\x6f\147\151\156", $nW);
        if ($user) {
            goto OM;
        }
        $user = get_user_by("\145\155\x61\151\x6c", $nW);
        OM:
        if ($user) {
            goto KU;
        }
        $Dg = 0;
        if ($Sk->mo_oauth_hbca_xyake()) {
            goto qs;
        }
        $user = $Sk->mo_oauth_hjsguh_kiishuyauh878gs($nW, $w9);
        goto y1;
        qs:
        if ($Sk->mo_oauth_client_get_option("\x6d\157\137\157\141\x75\164\x68\137\x66\x6c\141\x67") !== true) {
            goto kg;
        }
        wp_die(base64_decode("\120\107\122\x70\144\151\102\x7a\144\110\154\163\x5a\x54\x30\156\x64\x47\x56\x34\x64\x43\61\150\142\x47\x6c\x6e\142\x6a\x70\x6a\132\x57\x35\x30\132\x58\x49\x37\x4a\x7a\64\70\131\x6a\x35\126\143\62\x56\171\111\105\x46\152\131\62\x39\x31\x62\x6e\121\x67\132\107\x39\154\x63\x79\102\x75\142\x33\x51\147\132\x58\x68\x70\x63\x33\x51\165\x50\x43\71\151\120\152\167\166\x5a\x47\x6c\62\x50\152\170\x69\x63\152\64\70\143\62\61\150\x62\107\x77\53\x56\107\150\160\x63\171\x42\62\x5a\x58\x4a\x7a\x61\127\71\x75\x49\x48\x4e\61\143\x48\102\x76\143\156\x52\x7a\x49\105\x46\x31\x64\x47\70\147\x51\x33\x4a\154\131\x58\x52\x6c\x49\106\x56\172\132\130\111\147\x5a\155\126\x68\x64\110\x56\x79\132\123\x42\x31\143\110\x52\x76\x49\104\x45\167\111\x46\126\x7a\132\x58\x4a\x7a\114\151\x42\121\x62\107\x56\x68\143\62\125\147\x64\x58\x42\156\143\x6d\x46\153\x5a\x53\102\x30\142\x79\102\60\141\107\x55\x67\141\x47\154\156\141\x47\x56\x79\111\x48\x5a\154\143\156\116\160\x62\62\x34\x67\142\62\x59\147\144\107\x68\x6c\x49\x48\x42\x73\x64\127\x64\160\x62\x69\102\60\x62\171\x42\154\142\x6d\x46\151\142\x47\125\x67\x59\x58\x56\x30\142\171\102\152\x63\155\x56\150\144\107\125\x67\144\x58\116\x6c\143\151\102\x6d\x62\x33\x49\x67\144\x57\65\x73\141\127\x31\x70\144\x47\126\x6b\x49\x48\x56\x7a\132\130\112\172\111\x47\x39\171\111\107\106\153\132\103\x42\x31\x63\62\126\x79\x49\107\x31\x68\142\156\126\150\142\107\170\65\114\152\167\x76\x63\x32\x31\150\x62\x47\x77\53"));
        goto pZ;
        kg:
        $user = $Sk->mo_oauth_jhuyn_jgsukaj($nW, $w9);
        pZ:
        y1:
        goto GJ;
        KU:
        $Dg = $user->ID;
        GJ:
        if (!$user) {
            goto VC;
        }
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        $user = get_user_by("\x49\x44", $user->ID);
        do_action("\167\160\x5f\154\157\147\x69\156", $user->user_login, $user);
        wp_safe_redirect(home_url());
        die;
        VC:
    }
    public function get_resource_owner_from_app($lo, $cZ)
    {
        return $this->oauth_handler->get_resource_owner_from_id_token($lo);
    }
}
