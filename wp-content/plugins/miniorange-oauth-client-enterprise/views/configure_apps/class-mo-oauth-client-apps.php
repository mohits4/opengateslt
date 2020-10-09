<?php


require_once "\157\x61\165\164\150\x5f\x61\160\x70\163\137\x61\165\164\x6f\x6c\157\141\x64\56\160\150\x70";
require_once "\141\x70\160\x5f\x63\x6f\x6d\160\x6f\x6e\145\156\x74\163\57\141\144\x64\x5f\x61\160\160\137\x70\x61\147\x65\x2e\x70\x68\160";
class Mo_OAuth_Client_Apps
{
    public static function sign_in_settings()
    {
        sign_in_settings_ui();
    }
    public static function customization()
    {
        customization_ui();
    }
    public static function applist()
    {
        applist_page();
    }
    public static function eve_settings()
    {
        show_eve_settings();
    }
    public static function add_app()
    {
        add_app_page();
    }
    public static function update_app($rd)
    {
        update_app($rd);
    }
    public static function delete_app($rd)
    {
        mo_oauth_client_delete_app($rd);
    }
}
?>
