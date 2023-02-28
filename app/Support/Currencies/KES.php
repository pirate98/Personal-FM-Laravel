<?php

namespace App\Support\Currencies;

use ArchTech\Money\Currency;

class KES extends Currency
{
    protected string $code = 'KES';
    protected string $name = 'Kenyan Shilling';
    protected float $rate = 112.70;
    protected int $mathDecimals = 2;
    protected int $displayDecimals = 2;
    protected int $rounding = 2;
    protected string $prefix = 'KES ';
}
