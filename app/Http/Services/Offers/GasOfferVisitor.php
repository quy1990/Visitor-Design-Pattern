<?php

namespace App\Http\Services\Offers;

class GasOfferVisitor implements Visitor
{

    public function visitBronze(): void
    {
        echo 'Gas:Bronze';
    }

    public function visitSilver(): void
    {
        echo 'Gas:Silver';
    }

    public function visitGold(): void
    {
        echo 'Gas:Gold';
    }
}
