<?php


namespace MoOauthClient\Free;

use MoOauthClient\AppUI;
use MoOauthClient\App\UpdateAppUI;
use MoOauthClient\AppGuider;
class ClientAppUI
{
    private $common_app_ui;
    public function __construct()
    {
        $this->common_app_ui = new AppUI();
    }
    public function render_free_ui()
    {
        $Ou = $this->common_app_ui->get_apps_list();
        if (!(isset($_GET["\x61\143\164\x69\157\156"]) && "\x64\x65\154\x65\164\145" === $_GET["\141\143\x74\151\x6f\x6e"])) {
            goto Mm;
        }
        if (!isset($_GET["\141\160\160"])) {
            goto rj;
        }
        $this->common_app_ui->delete_app($_GET["\x61\160\160"]);
        return;
        rj:
        Mm:
        if (!(isset($_GET["\x61\143\x74\151\157\x6e"]) && "\x69\156\x73\x74\162\x75\x63\x74\x69\157\x6e\163" === $_GET["\x61\x63\164\151\157\156"] || isset($_GET["\x73\150\157\167"]) && "\151\156\163\x74\162\165\x63\164\x69\x6f\x6e\x73" === $_GET["\x73\x68\157\x77"])) {
            goto MG;
        }
        if (!(isset($_GET["\141\160\x70\111\144"]) && isset($_GET["\146\157\162"]))) {
            goto Qo;
        }
        $HN = new AppGuider($_GET["\141\160\160\111\144"], $_GET["\146\x6f\x72"]);
        $HN->show_guide();
        Qo:
        if (!(isset($_GET["\163\150\x6f\167"]) && "\151\156\x73\164\x72\165\143\164\151\x6f\156\163" === $_GET["\163\150\x6f\x77"])) {
            goto CV;
        }
        $HN = new AppGuider($_GET["\x61\x70\x70\111\x64"]);
        $HN->show_guide();
        $this->common_app_ui->add_app_ui();
        return;
        CV:
        MG:
        if (!(isset($_GET["\x61\143\164\151\157\x6e"]) && "\x61\144\x64" === $_GET["\x61\143\x74\151\157\156"])) {
            goto Lg;
        }
        $this->common_app_ui->add_app_ui();
        return;
        Lg:
        if (!(isset($_GET["\141\143\x74\x69\x6f\156"]) && "\165\160\144\x61\164\x65" === $_GET["\x61\x63\x74\x69\157\x6e"])) {
            goto h2;
        }
        if (!isset($_GET["\141\160\x70"])) {
            goto bO;
        }
        $U3 = $this->common_app_ui->get_app_by_name($_GET["\141\x70\x70"]);
        new UpdateAppUI($_GET["\x61\x70\160"], $U3);
        return;
        bO:
        h2:
        if (!(isset($_GET["\141\143\164\x69\x6f\x6e"]) && "\x61\x64\x64\137\156\x65\x77" === $_GET["\x61\x63\164\151\x6f\x6e"])) {
            goto lQ;
        }
        $this->common_app_ui->add_app_ui();
        return;
        lQ:
        if (!(is_array($Ou) && count($Ou) > 0)) {
            goto MV;
        }
        $this->common_app_ui->show_apps_list_page();
        return;
        MV:
        $this->common_app_ui->add_app_ui();
    }
}
