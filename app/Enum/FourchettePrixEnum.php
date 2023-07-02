<?php

namespace App\Enums;

enum FourchettePrixEnum:string
{
   case € = 'Moins de 100€';
    case €€ = 'Entre 100€ et 200€';
    case €€€ = 'Entre 200€ et 3000€';
    case €€€€ = 'Entre 300€ et 400€';

    case ILLIMITE = 'Illimité';
}
