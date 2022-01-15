<?php

namespace App\Http\Services\CreditCards;

use App\Http\Services\Offers\Visitor;

class BronzeCreditCard implements CreditCard
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitBronze($this);
    }
}
