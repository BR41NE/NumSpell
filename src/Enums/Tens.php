<?php

namespace Br41ne\NumSpell\Enums;

enum Tens: string
{
    case TEN = 'ten';
    case TWENTY = 'twenty';
    case THIRTY = 'thirty';
    case FORTY = 'forty';
    case FIFTY = 'fifty';
    case SIXTY = 'sixty';
    case SEVENTY = 'seventy';
    case EIGHTY = 'eighty';
    case NINETY = 'ninety';

    public static function getAll(): array
    {
        return [
            1 => self::TEN->value,
            2 => self::TWENTY->value,
            3 => self::THIRTY->value,
            4 => self::FORTY->value,
            5 => self::FIFTY->value,
            6 => self::SIXTY->value,
            7 => self::SEVENTY->value,
            8 => self::EIGHTY->value,
            9 => self::NINETY->value,
        ];
    }
}
