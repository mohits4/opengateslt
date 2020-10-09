<?php


abstract class MoOAuthClientBasicEnum
{
    private static $constCacheArray = NULL;
    public static function getConstants()
    {
        if (!(self::$constCacheArray == NULL)) {
            goto SDM;
        }
        self::$constCacheArray = array();
        SDM:
        $bz = get_called_class();
        if (array_key_exists($bz, self::$constCacheArray)) {
            goto gSA;
        }
        $mU = new ReflectionClass($bz);
        self::$constCacheArray[$bz] = $mU->getConstants();
        gSA:
        return self::$constCacheArray[$bz];
    }
    public static function isValidName($w9, $oE = false)
    {
        $Bh = self::getConstants();
        if (!$oE) {
            goto Gga;
        }
        return array_key_exists($w9, $Bh);
        Gga:
        $oc = array_map("\x73\164\x72\x74\157\154\157\x77\145\x72", array_keys($Bh));
        return in_array(strtolower($w9), $oc);
    }
    public static function isValidValue($sh, $oE = true)
    {
        $UU = array_values(self::getConstants());
        return in_array($sh, $UU, $oE);
    }
}
