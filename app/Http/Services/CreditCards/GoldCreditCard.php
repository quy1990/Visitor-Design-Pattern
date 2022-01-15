<?php

namespace App\Http\Services\CreditCards;

use App\Http\Services\Offers\Visitor;

class GoldCreditCard implements CreditCard
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitGold($this);
    }
}
