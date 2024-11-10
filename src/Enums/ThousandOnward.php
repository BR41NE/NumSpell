<?php


namespace Br41ne\NumSpell\Enums;

enum ThousandOnward: string
{
    case HUNDRED = 'hundred';
    case THOUSAND = 'thousand';
    case MILLION = 'million';
    case BILLION = 'billion';
    case TRILLION = 'trillion';
    case QUADRILLION = 'quadrillion';
    case QUINTILLION = 'quintillion';
    case SEXTILLION = 'sextillion';
    case SEPTILLION = 'septillion';
    case OCTILLION = 'octillion';
    case NONILLION = 'nonillion';
    case DECILLION = 'decillion';

    public static function getAll(): array
    {
        return [
            self::HUNDRED->value,
            self::THOUSAND->value,
            self::MILLION->value,
            self::BILLION->value,
            self::TRILLION->value,
            self::QUADRILLION->value,
            self::QUINTILLION->value,
            self::SEXTILLION->value,
            self::SEPTILLION->value,
            self::OCTILLION->value,
            self::NONILLION->value,
            self::DECILLION->value,
        ];
    }
}
