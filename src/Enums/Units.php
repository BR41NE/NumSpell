<?php

namespace Br41ne\NumSpell\Enums;

enum Units: string
{
    case ZERO = 'zero';
    case ONE = 'one';
    case TWO = 'two';
    case THREE = 'three';
    case FOUR = 'four';
    case FIVE = 'five';
    case SIX = 'six';
    case SEVEN = 'seven';
    case EIGHT = 'eight';
    case NINE = 'nine';

    public static function getAll(): array
    {
        return [
            0 => self::ZERO->value,
            1 => self::ONE->value,
            2 => self::TWO->value,
            3 => self::THREE->value,
            4 => self::FOUR->value,
            5 => self::FIVE->value,
            6 => self::SIX->value,
            7 => self::SEVEN->value,
            8 => self::EIGHT->value,
            9 => self::NINE->value,
        ];
    }
}
