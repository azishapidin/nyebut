<?php

namespace Azishapidin\Nyebut;

class Nyebut
{
    protected static $angka = [
        '',
        'satu',
        'dua',
        'tiga',
        'empat',
        'lima',
        'enam',
        'tujuh',
        'delapan',
        'sembilan',
        'sepuluh',
        'sebelas'
    ];

    public static function toText($number)
    {
        if ($number < 12) {
            return self::$angka[$number];
        } elseif ($number < 20) {
            return self::toText($number - 10) . ' belas';
        } elseif ($number < 100) {
            return self::toText(intval($number / 10)) . ' puluh ' . self::toText($number % 10);
        } elseif ($number < 200) {
            return 'seratus ' . self::toText($number - 100);
        } elseif ($number < 1000) {
            return self::toText(intval($number / 100)) . ' ratus ' . self::toText($number % 100);
        } elseif ($number < 2000) {
            return 'seribu ' . self::toText($number - 1000);
        } elseif ($number < 1000000) {
            return self::toText(intval($number / 1000)) . ' ribu ' . self::toText($number % 1000);
        } elseif ($number < 1000000000) {
            return self::toText(intval($number / 1000000)) . ' juta ' . self::toText($number % 1000000);
        }
        return (string) $number;
    }
}
