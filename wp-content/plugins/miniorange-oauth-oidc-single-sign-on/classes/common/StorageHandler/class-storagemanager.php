<?php


namespace MoOauthClient;

use MoOauthClient\StorageHandler;
class StorageManager
{
    private $storage_handler;
    const PRETTY = "\x70\162\x65\x74\164\171";
    const JSON = "\152\163\x6f\x6e";
    const RAW = "\162\141\x77";
    public function __construct($yC = '')
    {
        $this->storage_handler = new StorageHandler(empty($yC) ? $yC : base64_decode($yC));
    }
    private function decrypt($ys)
    {
        return empty($ys) || '' === $ys ? $ys : strtolower(hex2bin($ys));
    }
    private function encrypt($ys)
    {
        return empty($ys) || '' === $ys ? $ys : strtoupper(bin2hex($ys));
    }
    public function get_state()
    {
        return $this->storage_handler->stringify();
    }
    public function add_replace_entry($qi, $sh)
    {
        if ($sh) {
            goto jw;
        }
        return;
        jw:
        $sh = is_string($sh) ? $sh : wp_json_encode($sh);
        $this->storage_handler->add_replace_entry(bin2hex($qi), bin2hex($sh));
    }
    public function get_value($qi)
    {
        $sh = $this->storage_handler->get_value(bin2hex($qi));
        if ($sh) {
            goto nA;
        }
        return false;
        nA:
        $ic = json_decode(hex2bin($sh), true);
        return json_last_error() === JSON_ERROR_NONE ? $ic : hex2bin($sh);
    }
    public function remove_key($qi)
    {
        $sh = $this->storage_handler->remove_key(bin2hex($qi));
    }
    public function validate()
    {
        return $this->storage_handler->validate();
    }
    public function dump_all_storage($GV = self::RAW)
    {
        $a0 = $this->storage_handler->get_storage();
        $X6 = array();
        foreach ($a0 as $qi => $sh) {
            $ld = \hex2bin($qi);
            if ($ld) {
                goto xI;
            }
            goto FU;
            xI:
            $X6[$ld] = $this->get_value($ld);
            FU:
        }
        hp:
        switch ($GV) {
            case self::PRETTY:
                echo "\x3c\x70\x72\x65\x3e";
                print_r($X6);
                echo "\x3c\x2f\x70\162\x65\76";
                goto Hh;
            case self::JSON:
                echo \json_encode($X6);
                goto Hh;
            default:
            case self::RAW:
                print_r($X6);
                goto Hh;
        }
        Vk:
        Hh:
    }
}
