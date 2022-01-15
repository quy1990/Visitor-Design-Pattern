<?php

namespace App\Http\Services\CreditCards;

use App\Http\Services\Offers\Visitor;

class SilverCreditCard implements CreditCard
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitSilver($this);
    }
}
