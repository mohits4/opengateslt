<?php


namespace MoOauthClient;

class Customer
{
    public $email;
    public $phone;
    private $default_customer_key = "\x31\x36\x35\x35\65";
    private $default_api_key = "\x66\x46\144\62\130\143\x76\124\107\104\x65\x6d\132\166\x62\167\61\142\x63\125\x65\163\116\x4a\x57\105\161\113\x62\142\125\161";
    private $host_name = '';
    private $host_key = '';
    public function __construct()
    {
        global $Sk;
        $this->host_name = $Sk->mo_oauth_client_get_option("\x68\157\163\x74\137\x6e\141\x6d\145");
        $this->email = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\157\141\x75\164\150\x5f\x61\x64\155\x69\156\137\x65\x6d\x61\x69\x6c");
        $this->phone = $Sk->mo_oauth_client_get_option("\155\157\137\x6f\x61\165\x74\150\137\141\x64\x6d\x69\156\x5f\x70\150\x6f\156\145");
        $this->host_key = $Sk->mo_oauth_client_get_option("\160\141\163\x73\167\157\x72\x64");
    }
    public function create_customer()
    {
        global $Sk;
        $vo = $this->host_name . "\57\x6d\157\141\x73\x2f\162\145\163\x74\57\143\165\x73\x74\157\x6d\145\162\57\x61\x64\x64";
        $CV = $this->host_key;
        $TL = $Sk->mo_oauth_client_get_option("\155\x6f\137\x6f\x61\x75\x74\x68\137\x61\144\155\151\x6e\137\146\156\x61\x6d\x65");
        $gf = $Sk->mo_oauth_client_get_option("\155\x6f\137\157\141\165\164\150\x5f\141\x64\155\x69\x6e\137\154\x6e\141\x6d\x65");
        $AO = $Sk->mo_oauth_client_get_option("\155\x6f\137\x6f\x61\165\x74\150\137\141\x64\155\x69\156\137\x63\x6f\x6d\x70\141\x6e\x79");
        $Dy = array("\x63\x6f\x6d\x70\141\x6e\x79\x4e\141\x6d\x65" => $AO, "\x61\x72\145\141\x4f\x66\x49\156\164\145\x72\x65\x73\164" => "\x57\120\40\117\101\165\x74\150\40\103\154\151\145\156\x74", "\x66\151\162\163\164\156\141\x6d\x65" => $TL, "\x6c\x61\x73\x74\156\141\x6d\x65" => $gf, \MoOAuthConstants::EMAIL => $this->email, "\x70\150\x6f\x6e\145" => $this->phone, "\x70\141\163\x73\167\x6f\162\x64" => $CV);
        $TM = wp_json_encode($Dy);
        return $this->send_request(array(), false, $TM, array(), false, $vo);
    }
    public function get_customer_key()
    {
        global $Sk;
        $vo = $this->host_name . "\x2f\x6d\x6f\x61\163\57\x72\145\x73\x74\57\143\165\163\x74\157\x6d\145\x72\x2f\153\145\171";
        $nW = $this->email;
        $CV = $this->host_key;
        $Dy = array(\MoOAuthConstants::EMAIL => $nW, "\x70\x61\163\163\167\x6f\162\x64" => $CV);
        $TM = wp_json_encode($Dy);
        return $this->send_request(array(), false, $TM, array(), false, $vo);
    }
    public function add_oauth_application($w9, $cZ)
    {
        global $Sk;
        $vo = $this->host_name . "\x2f\155\x6f\141\163\x2f\162\x65\163\x74\x2f\141\x70\x70\x6c\x69\x63\x61\164\x69\x6f\x6e\57\141\x64\x64\x6f\141\165\164\x68";
        $UA = $Sk->mo_oauth_client_get_option("\155\157\x5f\157\141\x75\x74\150\137\141\x64\x6d\151\156\x5f\143\x75\163\x74\x6f\x6d\145\x72\137\x6b\x65\x79");
        $Fh = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\165\x74\150\x5f" . $w9 . "\x5f\x73\x63\157\160\145");
        $Xl = $Sk->mo_oauth_client_get_option("\155\157\137\157\141\x75\x74\150\x5f" . $w9 . "\x5f\x63\154\151\145\156\x74\x5f\x69\144");
        $NZ = $Sk->mo_oauth_client_get_option("\x6d\x6f\137\157\x61\x75\164\x68\137" . $w9 . "\137\x63\154\151\x65\x6e\x74\137\163\145\x63\162\145\x74");
        if (false !== $Fh) {
            goto FJ;
        }
        $Dy = array("\x61\x70\160\154\151\x63\x61\164\151\x6f\x6e\116\141\155\x65" => $cZ, "\143\165\163\x74\x6f\x6d\x65\162\x49\x64" => $UA, "\143\x6c\151\x65\156\x74\x49\x64" => $Xl, "\143\154\x69\145\x6e\x74\x53\x65\143\x72\145\164" => $NZ);
        goto mf;
        FJ:
        $Dy = array("\141\x70\160\154\151\143\x61\x74\151\157\156\116\141\x6d\x65" => $cZ, "\x73\143\x6f\x70\x65" => $Fh, "\x63\165\163\164\x6f\155\x65\162\x49\x64" => $UA, "\143\x6c\151\145\x6e\x74\x49\144" => $Xl, "\143\154\151\145\x6e\x74\x53\145\143\162\145\x74" => $NZ);
        mf:
        $TM = wp_json_encode($Dy);
        return $this->send_request(array(), false, $TM, array(), false, $vo);
    }
    public function submit_contact_us($nW, $qG, $uh, $vl = true)
    {
        global $current_user;
        global $Sk;
        wp_get_current_user();
        $wT = $Sk->export_plugin_config(true);
        $fv = json_encode($wT, JSON_UNESCAPED_SLASHES);
        $UA = $this->default_customer_key;
        $Zq = $this->default_api_key;
        $kt = time();
        $vo = $this->host_name . "\x2f\155\x6f\x61\163\x2f\x61\x70\151\x2f\156\157\x74\151\x66\x79\57\x73\145\156\144";
        $Yg = $UA . $kt . $Zq;
        $go = hash("\x73\x68\141\65\61\x32", $Yg);
        $NT = $nW;
        $pO = \ucwords(\strtolower($Sk->get_versi_str())) . "\40\x2d\x20" . \get_version_number();
        $DH = "\121\165\x65\162\171\x3a\x20\x57\x6f\162\x64\120\x72\x65\163\163\x20\117\101\165\x74\x68\x20" . $pO . "\40\120\154\x75\x67\151\156";
        $uh = "\x5b\x57\120\x20\117\x41\165\x74\150\40\x43\x6c\x69\x65\x6e\164\40" . $pO . "\x5d\x20" . $uh;
        if (!$vl) {
            goto kh;
        }
        $uh .= "\74\x62\x72\76\74\x62\x72\x3e\103\x6f\156\146\151\147\x20\x53\164\162\151\156\x67\x3a\74\142\x72\x3e\74\160\x72\145\40\163\164\x79\x6c\145\75\42\x62\x6f\x72\x64\145\x72\x3a\x31\x70\170\40\x73\x6f\154\x69\144\x20\x23\64\64\64\73\160\x61\144\144\x69\x6e\x67\72\x31\x30\x70\x78\73\x22\x3e\74\143\x6f\144\x65\76" . $fv . "\x3c\57\143\x6f\x64\x65\76\x3c\x2f\x70\162\145\x3e";
        kh:
        $Bq = isset($_SERVER["\x53\105\x52\126\x45\122\137\116\101\x4d\x45"]) ? sanitize_text_field(wp_unslash($_SERVER["\123\x45\x52\126\x45\122\137\x4e\x41\x4d\x45"])) : '';
        $Dc = "\74\144\x69\x76\40\x3e\110\145\154\x6c\157\54\40\x3c\x62\x72\76\74\x62\x72\76\x46\x69\162\x73\164\40\x4e\141\155\x65\40\72" . $current_user->user_firstname . "\x3c\x62\x72\x3e\74\x62\162\x3e\114\141\163\164\40\x20\116\x61\155\x65\40\x3a" . $current_user->user_lastname . "\40\40\x20\x3c\x62\x72\76\x3c\x62\162\x3e\103\157\x6d\160\141\x6e\x79\40\x3a\74\141\40\x68\162\x65\x66\75\42" . $Bq . "\x22\40\x74\x61\x72\147\x65\164\75\42\137\142\x6c\x61\156\153\x22\x20\76" . $Bq . "\x3c\x2f\141\76\x3c\x62\162\76\74\142\162\x3e\120\150\157\x6e\x65\x20\116\x75\x6d\142\145\162\40\72" . $qG . "\74\142\162\x3e\x3c\x62\x72\x3e\x45\155\141\151\154\x20\x3a\x3c\x61\40\150\x72\x65\146\75\x22\155\141\151\154\x74\157\72" . $NT . "\42\x20\164\141\x72\147\x65\164\75\42\137\142\x6c\141\156\x6b\42\x3e" . $NT . "\74\x2f\x61\76\74\x62\162\x3e\x3c\x62\162\76\121\165\x65\162\x79\x20\x3a" . $uh . "\74\x2f\x64\x69\x76\x3e";
        $Dy = array("\x63\165\163\164\x6f\x6d\x65\x72\113\x65\x79" => $UA, "\x73\x65\156\x64\x45\155\141\151\x6c" => true, \MoOAuthConstants::EMAIL => array("\x63\x75\x73\164\x6f\x6d\x65\162\113\145\x79" => $UA, "\x66\x72\x6f\x6d\105\155\141\x69\154" => $NT, "\x62\x63\143\x45\x6d\141\151\154" => "\x69\156\146\157\100\x78\145\x63\x75\162\x69\x66\x79\56\143\x6f\155", "\146\162\x6f\x6d\116\x61\155\145" => "\x6d\151\x6e\x69\117\x72\x61\156\147\x65", "\164\157\x45\x6d\x61\x69\x6c" => "\x6f\141\x75\164\150\163\x75\x70\160\157\x72\164\100\170\145\x63\165\x72\151\x66\x79\x2e\143\157\x6d", "\164\x6f\x4e\141\155\x65" => "\157\x61\x75\x74\150\163\x75\160\160\x6f\x72\x74\x40\x78\145\x63\x75\x72\151\x66\x79\56\143\x6f\x6d", "\x73\165\142\152\x65\x63\x74" => $DH, "\143\157\156\x74\145\156\164" => $Dc));
        $TM = json_encode($Dy, JSON_UNESCAPED_SLASHES);
        $qD = array("\103\x6f\x6e\x74\x65\156\164\x2d\x54\171\x70\145" => "\x61\x70\x70\x6c\x69\143\x61\164\151\157\x6e\x2f\x6a\x73\x6f\x6e");
        $qD["\103\165\x73\x74\x6f\155\x65\x72\55\113\145\171"] = $UA;
        $qD["\x54\x69\x6d\145\163\164\x61\x6d\160"] = $kt;
        $qD["\101\x75\x74\x68\157\x72\x69\172\141\x74\151\157\156"] = $go;
        return $this->send_request($qD, true, $TM, array(), false, $vo);
    }
    public function send_otp_token($nW = '', $qG = '', $at = true, $wh = false)
    {
        global $Sk;
        $vo = $this->host_name . "\57\x6d\157\141\163\x2f\x61\x70\x69\x2f\x61\x75\x74\150\57\x63\150\141\x6c\x6c\x65\x6e\x67\145";
        $UA = $this->default_customer_key;
        $Zq = $this->default_api_key;
        $BL = $this->email;
        $qG = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\x74\150\x5f\141\x64\155\151\x6e\137\160\x68\157\156\x65");
        $kt = self::get_timestamp();
        $Yg = $UA . $kt . $Zq;
        $go = hash("\x73\x68\141\x35\x31\x32", $Yg);
        $IM = "\x43\165\163\x74\157\x6d\145\x72\x2d\113\145\171\72\x20" . $UA;
        $wl = "\124\151\x6d\x65\163\164\141\155\160\x3a\x20" . $kt;
        $Y_ = "\101\165\164\150\157\162\151\172\x61\x74\151\157\x6e\x3a\40" . $go;
        if ($at) {
            goto aW;
        }
        $Dy = array("\143\x75\163\164\157\x6d\x65\x72\x4b\x65\x79" => $UA, "\160\x68\157\156\x65" => $qG, "\x61\165\x74\x68\x54\x79\x70\x65" => "\x53\115\x53");
        goto GD;
        aW:
        $Dy = array("\x63\x75\163\164\x6f\x6d\x65\x72\x4b\145\x79" => $UA, \MoOAuthConstants::EMAIL => $BL, "\x61\x75\x74\x68\124\171\x70\145" => "\x45\x4d\x41\111\114");
        GD:
        $TM = wp_json_encode($Dy);
        $qD = array("\x43\157\x6e\x74\x65\x6e\164\x2d\x54\171\160\x65" => "\141\x70\160\154\x69\x63\141\164\151\157\156\x2f\x6a\163\157\x6e");
        $qD["\x43\x75\x73\164\x6f\x6d\x65\162\55\113\145\x79"] = $UA;
        $qD["\x54\151\x6d\145\x73\x74\141\x6d\x70"] = $kt;
        $qD["\x41\165\x74\x68\157\x72\x69\172\x61\x74\151\x6f\156"] = $go;
        return $this->send_request($qD, true, $TM, array(), false, $vo);
    }
    public function get_timestamp()
    {
        global $Sk;
        $vo = $this->host_name . "\x2f\x6d\157\x61\x73\x2f\x72\x65\163\164\57\x6d\x6f\x62\151\154\x65\57\x67\x65\164\x2d\164\151\155\145\163\164\141\155\160";
        return $this->send_request(array(), false, '', array(), false, $vo);
    }
    public function validate_otp_token($dS, $Je)
    {
        global $Sk;
        $vo = $this->host_name . "\57\155\x6f\141\163\x2f\x61\x70\151\57\141\165\164\x68\x2f\166\x61\x6c\151\x64\x61\x74\x65";
        $UA = $this->default_customer_key;
        $Zq = $this->default_api_key;
        $BL = $this->email;
        $kt = self::get_timestamp();
        $Yg = $UA . $kt . $Zq;
        $go = hash("\163\x68\141\65\x31\62", $Yg);
        $IM = "\103\165\163\164\x6f\x6d\145\162\x2d\113\x65\x79\x3a\40" . $UA;
        $wl = "\x54\151\x6d\145\x73\x74\x61\155\x70\72\x20" . $kt;
        $Y_ = "\x41\x75\x74\x68\157\x72\x69\172\x61\164\x69\157\156\72\40" . $go;
        $TM = '';
        $Dy = array("\x74\x78\x49\x64" => $dS, "\x74\157\153\145\x6e" => $Je);
        $TM = wp_json_encode($Dy);
        $qD = array("\103\x6f\156\x74\145\156\164\55\124\x79\160\145" => "\141\160\x70\x6c\151\x63\141\164\x69\x6f\x6e\x2f\152\x73\157\156");
        $qD["\103\165\x73\164\157\155\x65\x72\55\113\145\171"] = $UA;
        $qD["\124\x69\x6d\145\163\x74\x61\155\160"] = $kt;
        $qD["\101\165\x74\x68\157\162\151\x7a\x61\x74\151\x6f\x6e"] = $go;
        return $this->send_request($qD, true, $TM, array(), false, $vo);
    }
    public function check_customer()
    {
        global $Sk;
        $vo = $this->host_name . "\57\x6d\157\x61\163\57\x72\x65\163\164\x2f\x63\x75\x73\x74\157\155\145\x72\57\143\x68\x65\x63\153\x2d\x69\146\x2d\145\x78\151\163\x74\163";
        $nW = $this->email;
        $Dy = array(\MoOAuthConstants::EMAIL => $nW);
        $TM = wp_json_encode($Dy);
        return $this->send_request(array(), false, $TM, array(), false, $vo);
    }
    public function mo_oauth_send_email_alert($nW, $qG, $IW)
    {
        global $Sk;
        if ($this->check_internet_connection()) {
            goto WL;
        }
        return;
        WL:
        $vo = $this->host_name . "\x2f\x6d\x6f\141\163\x2f\x61\160\x69\x2f\x6e\157\x74\x69\146\x79\57\x73\145\x6e\144";
        global $user;
        $UA = $this->default_customer_key;
        $Zq = $this->default_api_key;
        $kt = self::get_timestamp();
        $Yg = $UA . $kt . $Zq;
        $go = hash("\x73\x68\x61\65\x31\x32", $Yg);
        $NT = $nW;
        $DH = "\106\145\145\144\x62\x61\x63\153\x3a\40\x57\x6f\x72\x64\120\x72\145\x73\x73\x20\117\101\x75\164\x68\40\x43\154\x69\x65\156\164\40\x50\154\x75\147\x69\156";
        $WU = site_url();
        $user = wp_get_current_user();
        $pO = \ucwords(\strtolower($Sk->get_versi_str())) . "\x20\x2d\40" . \get_version_number();
        $uh = "\133\127\120\40\117\x41\x75\164\x68\x20\x32\56\x30\x20\x43\154\151\x65\x6e\x74\x20" . $pO . "\135\40\x3a\x20" . $IW;
        $Bq = isset($_SERVER["\123\x45\122\126\105\x52\x5f\116\101\115\105"]) ? sanitize_text_field(wp_unslash($_SERVER["\123\x45\122\126\x45\122\137\116\101\x4d\x45"])) : '';
        $Dc = "\74\x64\151\x76\40\76\x48\x65\x6c\x6c\x6f\54\40\74\x62\x72\x3e\74\x62\162\76\x46\151\x72\163\164\40\x4e\141\x6d\x65\x20\x3a" . $user->user_firstname . "\x3c\x62\x72\x3e\74\142\x72\76\114\x61\163\164\40\x20\x4e\x61\155\x65\40\72" . $user->user_lastname . "\40\x20\40\74\142\162\x3e\x3c\142\x72\x3e\103\157\x6d\160\141\x6e\171\40\72\74\141\40\150\x72\145\x66\75\x22" . $Bq . "\x22\x20\164\x61\162\x67\x65\164\x3d\42\x5f\142\154\x61\156\x6b\42\40\76" . $Bq . "\74\x2f\x61\x3e\x3c\142\162\76\74\142\162\x3e\120\x68\157\156\x65\40\116\x75\x6d\142\145\x72\x20\72" . $qG . "\x3c\x62\162\x3e\74\142\x72\x3e\105\x6d\x61\x69\x6c\40\72\74\x61\x20\150\162\145\x66\75\42\x6d\141\151\x6c\x74\157\72" . $NT . "\x22\x20\x74\141\162\x67\145\164\75\42\x5f\x62\x6c\x61\x6e\x6b\x22\76" . $NT . "\x3c\x2f\x61\76\x3c\x62\x72\x3e\x3c\x62\x72\76\121\x75\x65\x72\171\40\72" . $uh . "\74\57\144\151\x76\x3e";
        $Dy = array("\x63\165\163\x74\x6f\x6d\145\162\113\x65\x79" => $UA, "\163\145\156\144\105\155\x61\x69\154" => true, \MoOAuthConstants::EMAIL => array("\x63\x75\x73\164\157\x6d\145\162\x4b\145\x79" => $UA, "\x66\x72\x6f\x6d\x45\x6d\141\151\154" => $NT, "\142\143\x63\x45\x6d\x61\151\x6c" => "\x6f\141\x75\x74\x68\x73\165\160\160\157\x72\164\100\155\x69\156\151\157\162\141\156\147\x65\x2e\x63\x6f\155", "\x66\x72\x6f\x6d\116\141\x6d\x65" => "\155\x69\156\151\117\x72\141\x6e\147\145", "\x74\157\105\x6d\x61\151\154" => "\157\x61\x75\164\x68\163\165\160\x70\x6f\162\164\x40\155\151\156\x69\x6f\x72\141\x6e\x67\x65\x2e\x63\x6f\155", "\x74\157\116\141\155\145" => "\x6f\141\165\164\x68\163\x75\x70\x70\157\162\164\x40\x6d\151\156\151\157\162\141\156\147\x65\56\x63\157\x6d", "\x73\x75\x62\x6a\145\x63\164" => $DH, "\x63\x6f\156\164\145\x6e\x74" => $Dc));
        $TM = wp_json_encode($Dy);
        $qD = array("\103\x6f\x6e\164\145\x6e\164\55\x54\171\x70\145" => "\x61\x70\160\154\x69\143\x61\x74\x69\157\156\57\152\x73\157\x6e");
        $qD["\x43\x75\x73\164\157\155\x65\162\x2d\x4b\145\x79"] = $UA;
        $qD["\124\151\x6d\x65\x73\164\x61\155\x70"] = $kt;
        $qD["\x41\x75\164\x68\157\x72\x69\172\141\x74\x69\157\x6e"] = $go;
        return $this->send_request($qD, true, $TM, array(), false, $vo);
    }
    public function mo_oauth_send_demo_alert($nW, $h3, $IW, $DH)
    {
        if ($this->check_internet_connection()) {
            goto Y8;
        }
        return;
        Y8:
        $vo = $this->host_name . "\57\155\x6f\141\x73\x2f\141\160\151\57\156\x6f\x74\x69\146\x79\x2f\x73\145\156\x64";
        $UA = $this->default_customer_key;
        $Zq = $this->default_api_key;
        $kt = self::get_timestamp();
        $Yg = $UA . $kt . $Zq;
        $go = hash("\163\150\141\65\x31\62", $Yg);
        $NT = $nW;
        global $user;
        $user = wp_get_current_user();
        $Dc = "\74\x64\151\166\x20\76\x48\145\154\x6c\157\x2c\40\x3c\x2f\x61\x3e\74\x62\x72\x3e\74\142\162\x3e\x45\x6d\141\x69\154\x20\x3a\x3c\141\40\x68\x72\x65\146\x3d\42\155\141\151\154\x74\x6f\72" . $NT . "\x22\x20\x74\141\x72\147\x65\x74\75\x22\x5f\142\154\x61\156\153\42\x3e" . $NT . "\x3c\57\x61\x3e\x3c\142\x72\76\74\x62\x72\76\x52\145\161\165\145\x73\x74\x65\144\x20\104\x65\x6d\157\x20\146\157\x72\40\40\x20\40\x20\x3a\x20" . $h3 . "\74\x62\x72\x3e\74\x62\x72\x3e\x52\x65\x71\165\151\x72\145\155\145\x6e\x74\163\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x20\x3a\40" . $IW . "\74\x2f\144\151\x76\76";
        $Dy = array("\x63\165\163\164\x6f\155\145\x72\113\x65\171" => $UA, "\x73\x65\x6e\144\105\155\x61\x69\x6c" => true, \MoOAuthConstants::EMAIL => array("\143\165\163\164\157\155\x65\162\x4b\x65\x79" => $UA, "\x66\162\157\155\105\x6d\x61\151\x6c" => $NT, "\142\x63\143\x45\x6d\x61\151\154" => "\157\x61\165\164\x68\x73\x75\160\160\157\162\164\x40\x6d\x69\156\x69\x6f\x72\141\156\147\145\x2e\143\157\155", "\x66\x72\157\155\116\x61\155\x65" => "\155\151\x6e\x69\117\162\x61\156\x67\x65", "\164\x6f\105\x6d\141\x69\154" => "\x6f\141\165\x74\x68\163\165\x70\160\157\x72\x74\x40\155\151\x6e\x69\x6f\162\141\156\x67\145\x2e\143\157\155", "\x74\157\x4e\141\x6d\x65" => "\x6f\141\165\x74\150\163\x75\x70\x70\157\x72\164\100\x6d\x69\156\x69\x6f\162\141\156\147\x65\x2e\143\x6f\155", "\163\165\142\152\145\x63\x74" => $DH, "\x63\157\156\x74\145\x6e\164" => $Dc));
        $TM = json_encode($Dy);
        $qD = array("\x43\x6f\156\164\145\x6e\x74\55\x54\171\160\x65" => "\141\x70\160\154\x69\x63\x61\164\x69\x6f\156\x2f\152\x73\157\x6e");
        $qD["\103\x75\163\164\x6f\155\145\162\x2d\113\145\x79"] = $UA;
        $qD["\124\151\155\x65\163\164\x61\155\x70"] = $kt;
        $qD["\101\x75\164\x68\x6f\x72\x69\x7a\141\164\151\x6f\x6e"] = $go;
        $n4 = $this->send_request($qD, true, $TM, array(), false, $vo);
    }
    public function mo_oauth_forgot_password($nW)
    {
        global $Sk;
        $vo = $this->host_name . "\x2f\x6d\x6f\x61\x73\57\x72\x65\163\x74\57\x63\x75\x73\164\x6f\x6d\145\162\57\x70\141\x73\x73\x77\157\x72\x64\x2d\162\145\x73\145\164";
        $UA = $Sk->mo_oauth_client_get_option("\x6d\157\137\x6f\x61\x75\x74\x68\137\141\x64\x6d\x69\x6e\137\143\x75\163\164\157\155\145\162\x5f\153\145\171");
        $Zq = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\164\x68\x5f\x61\x64\x6d\x69\x6e\137\141\x70\151\x5f\x6b\145\x79");
        $kt = self::get_timestamp();
        $Yg = $UA . $kt . $Zq;
        $go = hash("\x73\x68\141\x35\x31\62", $Yg);
        $IM = "\103\165\x73\x74\x6f\155\145\x72\x2d\113\145\x79\72\x20" . $UA;
        $wl = "\x54\151\155\145\x73\164\141\155\160\72\40" . number_format($kt, 0, '', '');
        $Y_ = "\101\x75\x74\150\x6f\162\x69\172\x61\x74\x69\x6f\156\x3a\x20" . $go;
        $TM = '';
        $Dy = array(\MoOAuthConstants::EMAIL => $nW);
        $TM = wp_json_encode($Dy);
        $qD = array("\x43\157\156\164\145\156\164\x2d\x54\171\x70\145" => "\x61\160\160\154\151\x63\141\x74\x69\157\156\57\x6a\163\x6f\x6e");
        $qD["\103\x75\x73\x74\157\155\x65\162\x2d\113\145\x79"] = $UA;
        $qD["\x54\151\155\145\163\164\x61\x6d\x70"] = $kt;
        $qD["\x41\x75\164\150\157\162\x69\172\x61\164\151\x6f\156"] = $go;
        return $this->send_request($qD, true, $TM, array(), false, $vo);
    }
    public function check_internet_connection()
    {
        return (bool) @fsockopen("\154\x6f\x67\x69\x6e\56\170\145\x63\x75\x72\151\146\171\x2e\x63\157\155", 443, $Y0, $xZ, 5);
    }
    private function send_request($gk = false, $SP = false, $TM = '', $o7 = false, $yY = false, $vo = '')
    {
        $qD = array("\103\x6f\156\x74\145\156\x74\x2d\124\171\x70\x65" => "\x61\160\x70\x6c\x69\143\141\x74\x69\x6f\156\57\152\163\x6f\156", "\x63\x68\x61\x72\163\145\x74" => "\x55\x54\x46\x20\55\40\x38", "\101\x75\x74\150\157\162\x69\172\x61\x74\x69\x6f\156" => "\x42\141\163\x69\143");
        $qD = $SP && $gk ? $gk : array_unique(array_merge($qD, $gk));
        $zU = array("\x6d\145\164\x68\157\144" => "\x50\x4f\123\124", "\142\x6f\144\171" => $TM, "\164\x69\x6d\145\x6f\x75\164" => "\x35", "\x72\x65\x64\151\162\x65\x63\164\x69\157\x6e" => "\65", "\150\x74\x74\x70\x76\145\162\163\x69\157\x6e" => "\61\x2e\x30", "\x62\154\x6f\143\x6b\x69\156\x67" => true, "\150\145\141\x64\x65\162\163" => $qD, "\163\163\x6c\166\x65\162\x69\x66\171" => true);
        $zU = $yY ? $o7 : array_unique(array_merge($zU, $o7), SORT_REGULAR);
        $n4 = wp_remote_post($vo, $zU);
        if (!is_wp_error($n4)) {
            goto b2;
        }
        $Rx = $n4->get_error_message();
        echo wp_kses("\123\x6f\x6d\x65\x74\150\151\156\x67\x20\167\x65\156\x74\40\167\162\x6f\x6e\x67\72\x20{$Rx}", \get_valid_html());
        die;
        b2:
        return wp_remote_retrieve_body($n4);
    }
}
