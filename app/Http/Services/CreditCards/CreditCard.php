<?php

namespace App\Http\Services\CreditCards;

use App\Http\Services\Offers\Visitor;

interface CreditCard
{
    public function accept(Visitor $visitor);
}
