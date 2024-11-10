<?php

namespace Br41ne\NumSpell;

use Br41ne\NumSpell\Enums\Teens;
use Br41ne\NumSpell\Enums\Tens;
use Br41ne\NumSpell\Enums\Units;

class NumberToWord
{
    public static $units;
    public static $teens;
    public static $tens;

    protected static function init()
    {
        self::$units = Units::getAll();
        self::$teens = Teens::getAll();
        self::$tens = Tens::getAll();
    }

    public static function convert($number)
    {
        self::init();
        if ($number < 10) {
            return self::$units[$number];
        } elseif ($number < 20) {
            return self::$teens[$number];
        } elseif ($number < 100) {
            return self::convertTens($number);
        } elseif ($number < 1000) {
            return self::convertHundreds($number);
        } else {
            return self::convertThousands($number);
        }
    }

    protected static function convertTens($number)
    {
        $tens = intdiv($number, 10);
        $remainder = $number % 10;

        if (in_array($number, array_keys(self::$teens))) {
            return self::$teens[$number];
        }

        //if tens is 0, return empty string
        $result = self::$tens[$tens] ?? '';
        if ($remainder) {

            //if remainder is 0, return the units string
            $result .=  ($tens == 0 ? '' : '-') . self::$units[$remainder];
        }
        return $result;
    }

    protected static function convertHundreds($number)
    {
        $hundreds = intdiv($number, 100);
        $remainder = $number % 100;

        $result = self::$units[$hundreds] . ' hundred';
        if ($remainder) {
            $result .= ' and ' . self::convertTens($remainder);
        }
        return $result;
    }

    protected static function convertThousands($number)
    {
        $thousands = intdiv($number, 1000);
        $remainder = $number % 1000;

        $result = self::$units[$thousands] . ' thousand';
        if ($remainder) {
            $result .= ' ' . self::convertHundreds($remainder);
        }
        return $result;
    }
}
