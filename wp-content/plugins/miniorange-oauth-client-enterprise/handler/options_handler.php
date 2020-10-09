<?php


function mo_oauth_client_get_option($OY)
{
    if (is_multisite() && get_option("\x6d\x6f\x5f\x6f\141\x75\164\150\137\x63\x6c\151\x65\156\164\137\155\165\154\x74\151\163\151\164\145\137\x70\x6c\141\x6e")) {
        goto Y2e;
    }
    return get_option($OY);
    goto Tp_;
    Y2e:
    return get_site_option($OY);
    Tp_:
}
function mo_oauth_client_update_option($OY, $O2)
{
    if (is_multisite() && get_option("\155\x6f\137\157\141\x75\164\x68\x5f\x63\154\151\145\x6e\x74\137\x6d\165\154\x74\151\163\x69\164\x65\137\x70\154\x61\156")) {
        goto Q7s;
    }
    update_option($OY, $O2);
    goto LEd;
    Q7s:
    return update_site_option($OY, $O2);
    LEd:
}
function mo_oauth_client_delete_option($OY)
{
    if (is_multisite() && get_option("\x6d\157\x5f\x6f\141\165\164\150\x5f\x63\x6c\151\145\156\x74\x5f\155\165\154\164\x69\163\x69\x74\x65\137\x70\154\x61\156")) {
        goto zGq;
    }
    delete_option($OY);
    goto sFo;
    zGq:
    return delete_site_option($OY);
    sFo:
}
