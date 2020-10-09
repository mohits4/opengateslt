<?php


function miniorange_support()
{
    ?>
        <div class="mo_support_layout">
            <!--<h3>Support</h3>
            <div >
                <p>Your general questions can be asked in the plugin <a href="https://wordpress.org/support/plugin/miniorange-login-with-eve-online-google-facebook" target="_blank">support forum</a>.</p>
            </div>
            <div style="text-align:center;">
                <h4>OR</h4>
            </div>-->
            <div>
                <h3>Contact Us</h3>
                <p>Need any help? Couldn't find an answer in <a href="<?php 
    echo add_query_arg(array("\164\x61\142" => "\x66\141\161"), $_SERVER["\122\105\x51\x55\105\x53\124\x5f\125\122\111"]);
    ?>
">Frequently Asked Questions [FAQ]</a>?<br>Just send us a query so we can help you.</p>
                <form method="post" action="">
                    <input type="hidden" name="option" value="mo_oauth_contact_us_query_option" />
                    <table class="mo_settings_table">
                        <tr>
                            <td><b><font color="#FF0000">*</font>Email:</b></td>
                            <td><input type="email" class="mo_table_textbox" required name="mo_oauth_contact_us_email" value="<?php 
    echo mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\x75\x74\150\137\x61\x64\x6d\x69\156\137\x65\155\x61\x69\154");
    ?>
"></td>
                        </tr>
                        <tr>
                            <td><b>Phone:</b></td>
                            <td><input type="tel" id="contact_us_phone" pattern="[\+]\d{11,14}|[\+]\d{1,4}[\s]\d{9,10}" class="mo_table_textbox" name="mo_oauth_contact_us_phone" value="<?php 
    if (!(mo_oauth_client_get_option("\x6d\157\137\157\141\x75\x74\x68\137\x61\144\x6d\151\156\137\x70\150\157\156\145") != "\146\x61\x6c\163\x65")) {
        goto Eq;
    }
    echo mo_oauth_client_get_option("\x6d\157\137\x6f\x61\165\164\x68\137\x61\x64\155\x69\x6e\x5f\x70\150\x6f\x6e\145");
    Eq:
    ?>
"></td>
                        </tr>
                        <tr>
                            <td><b><font color="#FF0000">*</font>Query:</b></td>
                            <td><textarea class="mo_table_textbox" onkeypress="mo_oauth_valid_query(this)" onkeyup="mo_oauth_valid_query(this)" onblur="mo_oauth_valid_query(this)" required name="mo_oauth_contact_us_query" rows="4" style="resize: vertical;"></textarea></td>
                        </tr>
                    </table>
                    <div style="text-align:center;">
                        <input type="submit" name="submit" style="margin:15px; width:100px;" class="button button-primary button-large" />
                    </div>
                    <p>If you want custom features in the plugin, just drop an email at <a href="mailto:info@xecurify.com">info@xecurify.com</a>.</p>
                </form>
            </div>
        </div>
        <script>
            jQuery("#contact_us_phone").intlTelInput();
            function mo_oauth_valid_query(f) {
                !(/^[a-zA-Z?,.\(\)\/@ 0-9]*$/).test(f.value) ? f.value = f.value.replace(
                        /[^a-zA-Z?,.\(\)\/@ 0-9]/, '') : null;
            }
        </script>
    <?php 
}
?>
