<?php


namespace MoOauthClient;

class Backup
{
    function backup()
    {
        global $Sk;
        $sh = $Sk->mo_oauth_client_get_option("\155\157\x5f\x6f\x61\165\x74\x68\137\141\160\160\x73\137\x6c\x69\x73\164");
        echo "\x3c\160\x72\x65\x3e";
        echo "\x3c\57\160\x72\x65\76";
        ?>
		<div id="mo_oauth_backup_layout" class="mo_support_layout">
			<h3>Plugin Backup</h3>
			<div class="mo-oauth-client-backup">
                <h4>Current Settings</h4>
				<form id="mo_oauth_backup_form" method="post">
					<input type="hidden" name="option" value="mo_oauth_download_backup">
					<?php 
        wp_nonce_field("\x6d\157\137\x6f\141\165\164\x68\x5f\x64\x6f\167\156\x6c\157\x61\x64\137\142\x61\x63\x6b\165\x70", "\155\157\x5f\x6f\x61\x75\x74\x68\x5f\144\x6f\167\x6e\154\x6f\x61\144\x5f\x62\x61\143\153\x75\x70\x5f\x6e\157\156\143\145");
        ?>
					<input type="submit" name="submit" value="Backup Current Settings" class="button button-primary button-large">
				</form>
			</div>
			<div class="mo-oauth-client-backup">
                <h4>Restore Plugin Settings</h4>
				<form id="mo_oauth_backup_download_form" method="post" enctype="multipart/form-data">
					<input type="hidden" name="option" value="mo_oauth_restore_backup">
					<?php 
        wp_nonce_field("\155\x6f\137\x6f\x61\165\164\x68\137\x72\x65\163\164\157\x72\145\x5f\x62\141\143\x6b\165\x70", "\x6d\x6f\137\x6f\x61\165\x74\x68\x5f\x72\145\163\164\157\x72\x65\137\142\141\x63\x6b\165\x70\137\156\157\x6e\x63\145");
        ?>
                    Please choose a file: <input name="mo_oauth_client_backup" type="file" id="mo_oauth_client_backup"><br><br>
					<input type="submit" name="submit" value="Restore Existing Backup" class="button button-primary button-large">
				</form>
			</div>
		</div>
	<?php 
    }
}
