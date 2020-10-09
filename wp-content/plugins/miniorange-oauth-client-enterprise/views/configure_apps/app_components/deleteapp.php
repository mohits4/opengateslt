<?php


function mo_oauth_client_delete_app($rd)
{
    $vQ = mo_oauth_client_get_option("\x6d\157\137\157\141\x75\x74\150\137\141\160\160\x73\x5f\x6c\x69\x73\x74");
    foreach ($vQ as $OY => $AO) {
        if (!($rd == $OY)) {
            goto EE;
        }
        unset($vQ[$OY]);
        if ($rd == "\145\x76\145\157\156\154\x69\156\145" || $rd == "\x45\166\x65\x4f\x6e\154\151\156\145\x41\x70\x70") {
            goto fS;
        }
        mo_oauth_client_delete_option("\x6d\x6f\137\157\x61\x75\x74\x68\x5f\x61\160\160\137\156\141\155\145\x5f" . $rd);
        goto aU;
        fS:
        mo_oauth_client_update_option("\x6d\x6f\137\157\141\165\164\150\x5f\x65\166\x65\x6f\x6e\x6c\151\x6e\x65\x5f\145\156\x61\142\x6c\x65", 0);
        aU:
        EE:
        UY:
    }
    pK:
    mo_oauth_client_update_option("\155\157\x5f\157\141\x75\164\150\137\x61\160\160\x73\x5f\x6c\151\163\x74", $vQ);
}
?>
