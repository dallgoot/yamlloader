<?php
namespace Dallgoot\Yaml;

class Types
{
    const DIRECTIVE  = 0;
    const DOC_START = 1;
    const DOC_END = 2;

    const COMMENT = 8;
    const EMPTY   = 16;
    const ROOT    = 32;

    const KEY = 42;
    const ITEM = 52;

    const MAPPING  = 43;
    const SEQUENCE = 53;

    const MAPPING_SHORT  = 44;
    const SEQUENCE_SHORT = 54;

    const PARTIAL = 62; // have a multi line quoted  string OR json definition
    const LITTERAL = 72;
    const LITTERAL_FOLDED = 82;

    const SCALAR    = 102;
    const TAG = 132;
    const JSON = 142;

    const QUOTED = 148;
    const RAW    = 150;
    const REF_DEF = 152;
    const REF_CALL = 164;

    const SET = 172;
    const SET_KEY = 180;
    const SET_VALUE = 196;

    public static $LITTERALS = [self::LITTERAL, self::LITTERAL_FOLDED];

    public static function getName($constant)
    {
        return array_flip((new \ReflectionClass(self::class))->getConstants())[$constant];
    }
}
