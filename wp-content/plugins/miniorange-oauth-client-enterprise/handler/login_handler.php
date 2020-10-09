<?php


class Mo_OAuth_Login_Hanlder
{
    function mo_oauth_login($user, $cS, $uN)
    {
        $Xz = new WP_Error();
        if (!(empty($cS) || empty($uN))) {
            goto BAu;
        }
        if (!empty($cS)) {
            goto xPG;
        }
        $Xz->add("\145\155\160\164\171\x5f\165\163\x65\x72\156\141\x6d\x65", __("\74\x73\x74\162\x6f\156\147\x3e\x45\122\x52\117\x52\74\57\x73\x74\162\x6f\x6e\147\x3e\x3a\x20\x45\155\x61\x69\154\x20\146\x69\x65\x6c\144\40\x69\163\x20\145\155\160\164\171\x2e"));
        xPG:
        if (!empty($uN)) {
            goto Csl;
        }
        $Xz->add("\145\155\x70\164\171\x5f\x70\141\x73\163\167\x6f\162\144", __("\74\163\x74\x72\x6f\x6e\x67\x3e\x45\122\122\x4f\122\x3c\57\x73\164\x72\x6f\x6e\x67\76\72\x20\x50\141\163\163\x77\x6f\162\144\x20\146\x69\145\154\144\40\x69\163\x20\x65\x6d\x70\x74\x79\x2e"));
        Csl:
        return $Xz;
        BAu:
        $user = false;
        if (username_exists($cS)) {
            goto zya;
        }
        if (!email_exists($cS)) {
            goto a5D;
        }
        $user = get_user_by("\145\155\141\151\154", $cS);
        a5D:
        goto z45;
        zya:
        $user = get_user_by("\154\x6f\147\151\x6e", $cS);
        z45:
        if (!$user) {
            goto TOg;
        }
        $dx = true;
        if (!($dx && wp_check_password($uN, $user->data->user_pass, $user->ID))) {
            goto vS2;
        }
        return $user;
        vS2:
        TOg:
        if (!(!empty($cS) && !empty($uN))) {
            goto Sr4;
        }
        $vQ = mo_oauth_client_get_option("\x6d\157\137\157\x61\x75\164\150\x5f\x61\x70\x70\163\137\x6c\151\163\164");
        $X6 = $Y3 = false;
        $Qu = $ie = $Xo = $p0 = $nY = $b3 = '';
        foreach ($vQ as $OY => $AO) {
            $X6 = $AO;
            $rL = $OY;
            if (!isset($AO["\x75\163\145\x72\x6e\141\x6d\x65\x5f\x61\164\x74\x72"])) {
                goto MDa;
            }
            $Qu = $AO["\x75\163\145\162\156\141\x6d\145\137\141\164\164\162"];
            MDa:
            if (!isset($AO["\x65\155\141\151\154\137\x61\x74\164\162"])) {
                goto wrb;
            }
            $ie = $AO["\x65\155\x61\151\x6c\x5f\x61\164\x74\x72"];
            wrb:
            if (!isset($AO["\x66\151\x72\x73\164\156\x61\155\145\137\141\164\x74\x72"])) {
                goto O8w;
            }
            $Xo = $AO["\146\151\x72\163\164\x6e\141\155\x65\x5f\141\164\x74\162"];
            O8w:
            if (!isset($AO["\x6c\x61\163\164\156\141\x6d\x65\137\141\x74\x74\162"])) {
                goto KCG;
            }
            $p0 = $AO["\154\141\x73\x74\x6e\x61\x6d\145\x5f\x61\164\164\x72"];
            KCG:
            if (!isset($AO["\144\x69\x73\160\154\141\171\x5f\x61\x74\164\x72"])) {
                goto svS;
            }
            $b3 = $AO["\x64\x69\163\160\154\x61\171\137\141\164\164\162"];
            svS:
            if (!mo_oauth_client_get_option("\155\157\x5f\x6f\141\x75\164\x68\137\143\154\x69\x65\156\x74\137" . $rL . "\x5f\155\x61\x70\x70\x69\156\x67\137\x67\162\x6f\x75\x70\x6e\x61\x6d\x65\137\x61\x74\164\162\x69\142\x75\164\x65")) {
                goto EoM;
            }
            $lG = mo_oauth_client_get_option("\155\157\x5f\x6f\x61\x75\x74\x68\137\143\154\151\145\x6e\164\137" . $rL . "\x5f\x6d\x61\x70\160\x69\156\147\137\147\x72\157\x75\x70\156\x61\155\x65\x5f\x61\164\164\x72\x69\x62\165\x74\x65");
            EoM:
            goto i3K;
            fBU:
        }
        i3K:
        if ($X6) {
            goto ALU;
        }
        $Xz->add("\145\155\160\x74\x79\x5f\x70\x61\163\163\167\x6f\162\144", __("\x3c\163\164\162\x6f\156\147\x3e\105\x52\122\x4f\x52\x3c\57\x73\164\162\157\x6e\x67\76\72\x20\x4f\101\165\x74\x68\x20\x61\x70\160\154\151\143\141\164\151\x6f\156\x20\156\157\164\x20\x63\x6f\x6e\146\151\147\x75\162\x65\x64\56"));
        return $Xz;
        ALU:
        $L0 = new Mo_OAuth_Hanlder();
        $Is = $L0->getToken($X6["\x61\x63\143\x65\x73\163\x74\157\153\145\156\x75\x72\x6c"], "\160\141\163\x73\167\157\x72\144", $X6["\143\154\x69\145\156\164\x69\144"], $X6["\x63\154\x69\145\x6e\164\163\x65\143\x72\145\164"], '', $X6["\162\x65\144\x69\162\x65\x63\x74\x75\x72\x69"], $cS, $uN, false);
        $Is = json_decode($Is, true);
        $Y3 = false;
        if (isset($Is["\145\x72\x72\157\x72\137\x64\x65\163\x63\x72\151\x70\164\151\x6f\x6e"])) {
            goto yFg;
        }
        if (isset($Is["\145\162\x72\157\x72"])) {
            goto EOC;
        }
        if (isset($Is["\141\x63\143\145\163\x73\137\x74\x6f\x6b\145\x6e"])) {
            goto HTP;
        }
        $Xz->add("\145\x6d\160\164\171\x5f\x70\x61\163\x73\x77\157\162\144", __("\x3c\163\164\162\157\x6e\x67\x3e\x45\122\122\x4f\x52\x3c\x2f\x73\164\162\x6f\156\147\76\72\x20\101\x63\x63\x65\163\x73\x20\164\x6f\x6b\145\x6e\x20\x6e\157\x74\x20\x72\x65\143\x65\x69\166\x65\144\56\x20\x50\x6c\145\141\163\145\x20\143\x68\145\143\153\x20\171\157\x75\162\x20\143\x6f\156\146\151\147\165\x72\x61\164\x69\x6f\x6e\56"));
        return $Xz;
        goto Tfx;
        HTP:
        $hf = $Is["\x61\143\143\145\x73\163\137\164\157\153\145\156"];
        $h8 = $X6["\x72\145\163\157\x75\x72\x63\145\x6f\167\156\x65\162\144\x65\x74\x61\151\154\x73\x75\162\154"];
        if (!(substr($h8, -1) == "\x3d")) {
            goto qnw;
        }
        $h8 .= $hf;
        qnw:
        $Y3 = $L0->getResourceOwner($h8, $hf);
        Tfx:
        goto upB;
        EOC:
        $Xz->add("\x65\x6d\x70\164\x79\137\x70\x61\x73\163\x77\x6f\x72\144", __("\74\x73\164\162\x6f\156\147\76\105\122\x52\117\x52\x3c\x2f\163\x74\x72\157\156\x67\76\x3a\x20" . $Is["\145\162\x72\157\162"] . ''));
        return $Xz;
        upB:
        goto pQG;
        yFg:
        $Xz->add("\145\155\x70\x74\171\x5f\x70\x61\x73\163\x77\157\x72\x64", __("\x3c\x73\x74\162\x6f\156\147\76\x45\122\x52\117\122\x3c\57\x73\164\x72\x6f\156\147\x3e\x3a\x20" . $Is["\145\162\x72\157\162\137\144\x65\163\143\x72\x69\x70\x74\151\x6f\156"] . ''));
        return $Xz;
        pQG:
        if (!(isset($Y3) && $Y3)) {
            goto YEt;
        }
        $h9 = '';
        if (empty($Qu)) {
            goto Hqn;
        }
        $cS = getnestedattribute($Y3, $Qu);
        Hqn:
        if (empty($ie)) {
            goto Kmk;
        }
        $rC = explode("\40", $ie);
        foreach ($rC as $GN) {
            $M7 = getnestedattribute($Y3, $GN);
            if (!filter_var($M7, FILTER_VALIDATE_EMAIL)) {
                goto aRi;
            }
            $jw = $M7;
            aRi:
            pkd:
        }
        Ch1:
        Kmk:
        if (empty($Xo)) {
            goto RCe;
        }
        $Xo = getnestedattribute($Y3, $Xo);
        RCe:
        if (empty($p0)) {
            goto giE;
        }
        $p0 = getnestedattribute($Y3, $p0);
        giE:
        if (empty($lG)) {
            goto GDB;
        }
        $nY = getnestedattribute($Y3, $lG);
        GDB:
        if (empty($jw)) {
            goto fT5;
        }
        $G0 = false;
        $Fp = mo_oauth_client_get_option("\155\157\137\157\x61\x75\x74\150\x5f\x63\x6c\151\x65\156\x74\137\162\145\163\x74\162\151\x63\x74\145\144\137\144\157\155\x61\x69\x6e\x73");
        if (empty($Fp)) {
            goto S4c;
        }
        $qf = substr($jw, strpos($jw, "\x40") + 1);
        $M6 = explode("\54", $Fp);
        foreach ($M6 as $M6) {
            if (empty($M6)) {
                goto bW8;
            }
            if (!($qf == $M6)) {
                goto abB;
            }
            $G0 = true;
            goto rCB;
            abB:
            bW8:
            Yhc:
        }
        rCB:
        if (!($G0 == false)) {
            goto fMW;
        }
        wp_die("\131\x6f\165\40\x64\x6f\40\156\x6f\164\x20\150\141\166\145\x20\162\151\x67\150\x74\163\40\164\157\40\x61\x63\x63\x65\x73\163\40\x74\x68\x69\x73\x20\160\141\147\145\x20\56\x20\120\154\x65\141\x73\145\x20\x63\157\156\x74\x61\x63\164\40\x79\157\165\162\x20\x61\x64\155\151\156\151\163\x74\162\141\164\x6f\x72");
        fMW:
        S4c:
        goto gY_;
        fT5:
        if (!mo_oauth_client_get_option("\155\x6f\x5f\x61\143\x74\x69\x76\x61\164\145\x5f\x75\163\145\162\137\141\x6e\141\x6c\x79\x74\x69\143\163")) {
            goto vCd;
        }
        $wY = attribute_failure();
        Mo_OAuth_User_Reports::add_transactions(isset($cS) && $cS ? $cS : '', Mo_Oauth_Constants::failure("\x65\155\x61\151\154"), $rL, '', $wY["\143\154\x69\145\156\164\x69\x70"], $wY["\156\141\166\x69\x67\141\x74\151\157\156\x75\x72\154"]);
        vCd:
        wp_die("\x45\x6d\141\151\154\x20\141\x64\144\162\x65\x73\163\40\x6e\x6f\164\x20\162\x65\143\x65\x69\166\x65\x64\x2e\40\103\x68\x65\143\153\x20\171\x6f\165\162\40\74\x62\76\101\x74\164\162\x69\x62\x75\x74\x65\x20\115\x61\x70\x70\x69\x6e\147\74\57\x62\76\40\x63\157\156\146\x69\x67\x75\162\141\164\151\157\156\x2e");
        gY_:
        if (!empty($cS)) {
            goto bDr;
        }
        $cS = $jw;
        bDr:
        $h9 = $Xo . "\40" . $p0;
        if (empty($b3)) {
            goto Bki;
        }
        if ($b3 == "\x46\116\x41\x4d\x45") {
            goto BhB;
        }
        if ($b3 == "\x4c\x4e\x41\115\x45") {
            goto LBy;
        }
        if ($b3 == "\114\x4e\101\x4d\x45\x5f\106\x4e\101\x4d\105") {
            goto JGJ;
        }
        if (!($b3 == "\x55\123\x45\x52\116\x41\115\105")) {
            goto R4i;
        }
        $h9 = $cS;
        R4i:
        goto UEb;
        JGJ:
        $h9 = $p0 . "\40" . $Xo;
        UEb:
        goto a0A;
        LBy:
        $h9 = $p0;
        a0A:
        goto pQv;
        BhB:
        $h9 = $Xo;
        pQv:
        Bki:
        $user = get_user_by("\x6c\x6f\x67\x69\x6e", $cS);
        if ($user) {
            goto jMe;
        }
        $user = get_user_by("\x65\155\x61\x69\x6c", $jw);
        jMe:
        $C5 = new Mo_OAuth_Client_Role_Mapping();
        $Vw = false;
        $oO = false;
        if ($user) {
            goto tFi;
        }
        if (mo_oauth_client_get_option("\155\x6f\x5f\157\x61\x75\x74\x68\137\x63\x6c\x69\145\x6e\164\137\x61\x75\164\157\x5f\162\x65\147\x69\x73\164\145\x72") == 1) {
            goto VUr;
        }
        if (!mo_oauth_client_get_option("\x6d\157\x5f\141\x63\164\x69\x76\x61\164\x65\137\x75\163\145\162\x5f\x61\156\x61\x6c\x79\164\x69\143\x73")) {
            goto UUO;
        }
        $wY = attribute_failure();
        Mo_OAuth_User_Reports::add_transactions(isset($cS) && $cS ? $cS : '', Mo_Oauth_Constants::failure("\162\x65\147\151\x73\164\x72\x61\x74\x69\157\x6e"), $rL, '', $wY["\143\x6c\151\145\x6e\164\151\x70"], $wY["\x6e\x61\x76\x69\147\x61\x74\151\157\156\165\162\154"]);
        UUO:
        wp_die("\122\x65\147\151\163\x74\x72\x61\164\x69\x6f\x6e\x20\x69\x73\x20\144\x69\x73\141\x62\154\145\144\x20\x66\157\x72\40\x74\150\151\x73\40\x73\151\164\x65\x2e\40\120\x6c\x65\x61\x73\145\x20\143\157\x6e\164\141\x63\x74\40\x79\x6f\x75\x72\40\141\144\x6d\151\x6e\151\163\x74\x72\141\164\x6f\162");
        goto jxC;
        VUr:
        $Vw = true;
        $GC = wp_generate_password(10, false);
        $oO = wp_create_user($cS, $GC, $jw);
        $user = get_user_by("\x65\155\141\151\154", $jw);
        $oO = $user->ID;
        wp_update_user(array("\111\x44" => $user->ID, "\x66\x69\x72\163\164\x5f\156\141\155\x65" => $Xo, "\154\141\x73\164\137\x6e\141\155\x65" => $p0, "\x64\151\x73\x70\154\141\171\137\x6e\x61\x6d\145" => $h9));
        update_user_meta($user->ID, "\x6d\x6f\x5f\x6f\141\x75\x74\150\x5f\142\x75\144\144\x79\x70\162\x65\163\x73\137\141\164\164\162\x69\x62\x75\x74\x65\163", $Y3);
        if (empty($nY)) {
            goto yRc;
        }
        $C5->apply($user->ID, $rL, $nY, true);
        yRc:
        return $user;
        jxC:
        goto smM;
        tFi:
        $oO = $user->ID;
        update_user_meta($oO, "\155\x6f\137\x6f\x61\165\164\150\x5f\142\165\x64\144\x79\160\x72\x65\163\x73\137\141\x74\x74\162\151\142\165\x74\145\x73", $Y3);
        if (empty($nY)) {
            goto xxI;
        }
        $C5->apply($user->ID, $rL, $nY, false);
        xxI:
        return $user;
        smM:
        YEt:
        Sr4:
    }
}
?>
