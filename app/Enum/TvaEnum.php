<?php
namespace App\Enums;

enum TvaEnum: string
{
    case FR= '19.6';
    case CH = '10';
    case ESP = '5.5';
    case PT = '2.1';
    case NULL = '0%';
}
