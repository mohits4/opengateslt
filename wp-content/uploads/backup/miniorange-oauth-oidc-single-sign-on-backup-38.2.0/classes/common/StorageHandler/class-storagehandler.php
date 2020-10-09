<?php


namespace MoOauthClient;

class StorageHandler
{
    private $storage;
    public function __construct($yC = '')
    {
        $PL = empty($yC) || '' === $yC ? json_encode(array()) : sanitize_text_field(wp_unslash($yC));
        $this->storage = json_decode($PL, true);
    }
    public function add_replace_entry($qi, $sh)
    {
        $this->storage[$qi]["\126"] = $sh;
        $this->storage[$qi]["\110"] = md5($sh);
    }
    public function get_value($qi)
    {
        if (isset($this->storage[$qi])) {
            goto BZ;
        }
        return false;
        BZ:
        $sh = $this->storage[$qi];
        if (!(!is_array($sh) || !isset($sh["\x56"]) || !isset($sh["\x48"]))) {
            goto ed;
        }
        return false;
        ed:
        if (!(md5($sh["\126"]) !== $sh["\110"])) {
            goto AB;
        }
        return false;
        AB:
        return $sh["\126"];
    }
    public function remove_key($qi)
    {
        if (!isset($this->storage[$qi])) {
            goto oe;
        }
        unset($this->storage[$qi]);
        oe:
    }
    public function stringify()
    {
        $a0 = $this->storage;
        $a0[\bin2hex("\x75\x69\144")]["\126"] = bin2hex(MO_UID);
        $a0[\bin2hex("\165\x69\144")]["\110"] = md5($a0[\bin2hex("\165\x69\x64")]["\x56"]);
        return base64_encode(wp_json_encode($a0));
    }
    public function get_storage()
    {
        return $this->storage;
    }
}
