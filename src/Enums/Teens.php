<?php

namespace Br41ne\NumSpell\Enums;

enum Teens: string
{
    case TEN = 'ten';
    case ELEVEN = 'eleven';
    case TWELVE = 'twelve';
    case THIRTEEN = 'thirteen';
    case FOURTEEN = 'fourteen';
    case FIFTEEN = 'fifteen';
    case SIXTEEN = 'sixteen';
    case SEVENTEEN = 'seventeen';
    case EIGHTEEN = 'eighteen';
    case NINETEEN = 'nineteen';

    public static function getAll(): array
    {

        return [
            10 => self::TEN->value,
            11 => self::ELEVEN->value,
            12 => self::TWELVE->value,
            13 => self::THIRTEEN->value,
            14 => self::FOURTEEN->value,
            15 => self::FIFTEEN->value,
            16 => self::SIXTEEN->value,
            17 => self::SEVENTEEN->value,
            18 => self::EIGHTEEN->value,
            19 => self::NINETEEN->value,
        ];
    }
}
