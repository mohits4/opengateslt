<?php


namespace MoOauthClient\GrantTypes;

use MoOauthClient\GrantTypes\JWSVerify;
use MoOauthClient\GrantTypes\Crypt_RSA;
use MoOauthClient\GrantTypes\Math_BigInteger;
class JWTUtils
{
    const HEADER = "\110\105\x41\104\105\x52";
    const PAYLOAD = "\120\101\x59\x4c\x4f\x41\x44";
    const SIGN = "\x53\111\x47\116";
    private $jwt;
    private $decoded_jwt;
    public function __construct($rg)
    {
        $rg = \explode("\56", $rg);
        if (!(3 > count($rg))) {
            goto WvD;
        }
        return new \WP_Error("\x69\156\x76\x61\154\x69\144\x5f\x6a\x77\164", __("\x4a\127\124\40\122\x65\x63\145\151\x76\145\x64\x20\x69\x73\40\x6e\x6f\164\x20\x61\40\x76\141\x6c\x69\x64\x20\x4a\x57\124"));
        WvD:
        $this->jwt = $rg;
        $I6 = $this->get_jwt_claim('', self::HEADER);
        $S9 = $this->get_jwt_claim('', self::PAYLOAD);
        $this->decoded_jwt = array("\150\x65\x61\144\x65\x72" => $I6, "\x70\141\171\x6c\x6f\141\144" => $S9);
    }
    private function get_jwt_claim($yd = '', $wY = '')
    {
        $N2 = '';
        switch ($wY) {
            case self::HEADER:
                $N2 = $this->jwt[0];
                goto qxT;
            case self::PAYLOAD:
                $N2 = $this->jwt[1];
                goto qxT;
            case self::SIGN:
                return $this->jwt[2];
            default:
                wp_die(wp_kses("\x43\x61\x6e\156\157\x74\x20\x46\151\156\144\x20" . $wY . "\40\151\x6e\x20\164\150\145\40\x4a\x57\124", \get_valid_html()));
        }
        anW:
        qxT:
        $N2 = json_decode(base64_decode($N2), true);
        if (!(!$N2 || empty($N2))) {
            goto YtE;
        }
        return null;
        YtE:
        return empty($yd) ? $N2 : (isset($N2[$yd]) ? $N2[$yd] : null);
    }
    public function check_algo($VR = '')
    {
        $Ye = $this->get_jwt_claim("\x61\x6c\x67", self::HEADER);
        $Ye = explode("\x53", $Ye);
        if (isset($Ye[0])) {
            goto o09;
        }
        wp_die(wp_kses("\111\x6e\166\141\154\x69\x64\x20\122\x65\x73\160\x6f\x6e\x73\x65\x20\x52\145\x63\145\151\x76\145\144\40\146\162\157\x6d\40\x4f\101\x75\164\150\57\x4f\160\145\156\111\104\x20\x50\162\157\x76\x69\x64\145\162\56", \get_valid_html()));
        o09:
        switch ($Ye[0]) {
            case "\110":
                return "\110\x53\x41" === $VR;
            case "\x52":
                return "\x52\x53\x41" === $VR;
            default:
                return false;
        }
        W6X:
        HV8:
    }
    public function verify($yv = '')
    {
        if (!empty($yv)) {
            goto Z0D;
        }
        return false;
        Z0D:
        $hF = $this->get_jwt_claim("\145\x78\x70", self::PAYLOAD);
        if (!(is_null($hF) || time() > $hF)) {
            goto wnN;
        }
        wp_die(wp_kses("\112\127\124\x20\150\x61\x73\x20\x62\x65\145\x6e\40\x65\170\160\x69\x72\x65\x64\56\40\120\x6c\x65\x61\x73\x65\x20\x74\162\x79\x20\x4c\x6f\147\147\151\156\x67\40\151\156\40\141\x67\x61\x69\156\56", \get_valid_html()));
        wnN:
        $Ss = $this->get_jwt_claim("\x6e\142\x66", self::PAYLOAD);
        if (!(!is_null($Ss) || time() < $Ss)) {
            goto xX4;
        }
        wp_die(wp_kses("\x49\x74\40\151\163\40\x74\157\x6f\x20\145\x61\162\x6c\x79\40\x74\157\40\165\163\x65\40\x74\x68\x69\x73\40\x4a\127\x54\56\x20\x50\154\145\x61\x73\145\40\x74\x72\171\x20\114\x6f\147\147\x69\156\147\40\151\156\40\141\147\141\x69\156\56", \get_valid_html()));
        xX4:
        $dE = new JWSVerify($this->get_jwt_claim("\x61\x6c\x67", self::HEADER));
        $fm = $this->get_header() . "\x2e" . $this->get_payload();
        return $dE->verify(\utf8_decode($fm), $yv, base64_decode(strtr($this->get_jwt_claim(false, self::SIGN), "\x2d\x5f", "\53\57")));
    }
    public function verify_from_jwks($uL = '', $Ye = "\122\123\x32\65\x36")
    {
        global $Sk;
        $zP = wp_remote_get($uL);
        if (!is_wp_error($zP)) {
            goto ehh;
        }
        return false;
        ehh:
        $zP = json_decode($zP["\x62\x6f\x64\x79"], true);
        $Bv = false;
        if (!(json_last_error() !== JSON_ERROR_NONE)) {
            goto mBA;
        }
        return $Bv;
        mBA:
        if (isset($zP["\153\x65\x79\163"])) {
            goto cGX;
        }
        return $Bv;
        cGX:
        foreach ($zP["\x6b\x65\171\x73"] as $qi => $sh) {
            if (!(!isset($sh["\153\164\171"]) || "\122\x53\x41" !== $sh["\153\x74\x79"] || !isset($sh["\x65"]) || !isset($sh["\x6e"]))) {
                goto wxt;
            }
            goto ogc;
            wxt:
            $Bv = $Bv || $this->verify($this->jwks_to_pem(array("\x6e" => new Math_BigInteger($Sk->base64url_decode($sh["\156"]), 256), "\x65" => new Math_BigInteger($Sk->base64url_decode($sh["\145"]), 256))));
            if (!(true === $Bv)) {
                goto Fwu;
            }
            goto KzE;
            Fwu:
            ogc:
        }
        KzE:
        return $Bv;
    }
    private function jwks_to_pem($Sq = array())
    {
        $BR = new Crypt_RSA();
        $BR->loadKey($Sq);
        return $BR->getPublicKey();
    }
    public function get_decoded_header()
    {
        return $this->decoded_jwt["\150\145\x61\144\x65\x72"];
    }
    public function get_decoded_payload()
    {
        return $this->decoded_jwt["\160\141\x79\154\157\x61\144"];
    }
    public function get_header()
    {
        return $this->jwt[0];
    }
    public function get_payload()
    {
        return $this->jwt[1];
    }
}
