<?php


function emit_analytics_tab($U6)
{
    global $Sk;
    $jc = $Sk->get_plugin_config()->get_current_config();
    if (!(!isset($jc["\x61\143\164\151\166\x61\x74\145\x5f\x75\x73\145\162\x5f\141\x6e\141\154\x79\164\x69\143\163"]) || !boolval($jc["\141\143\x74\x69\x76\141\164\x65\x5f\165\x73\x65\162\x5f\141\156\141\154\171\x74\151\143\163"]))) {
        goto eY;
    }
    return;
    eY:
    ?>
	<a class="nav-tab <?php 
    echo "\x61\x6e\141\154\171\x74\151\143\163" === $U6 ? "\x6e\141\166\55\x74\141\x62\55\x61\143\x74\x69\x76\145" : '';
    ?>
" href="admin.php?page=mo_oauth_settings&tab=analytics">User Analytics</a>
	<?php 
}
add_action("\x6d\157\x5f\x6f\x61\x75\164\x68\x5f\143\154\x69\145\x6e\x74\x5f\x61\144\x64\x5f\156\x61\166\137\164\x61\x62\163\137\165\151\137\151\x6e\x74\145\x72\x6e\x61\x6c", "\x65\x6d\x69\x74\x5f\141\x6e\x61\x6c\x79\x74\151\143\x73\137\x74\141\142", 10, 1);
