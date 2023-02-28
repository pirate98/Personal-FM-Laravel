<?php

namespace App\Enums;

enum TransactionCategories: string
{
    case HOME = 'home';
    case ENTERTAINMENT = 'entertainment';
    case RECURRING_BILL = 'recurring_bill';
    case FAMILY = 'family';
    case TRANSPORT = 'transport';
}
