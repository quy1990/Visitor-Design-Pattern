<?php

namespace App\Http\Services\Offers;

class HotelOfferVisitor implements Visitor
{

    public function visitBronze(): void
    {
        echo 'Hotel:Bronze';
    }

    public function visitSilver(): void
    {
        echo 'Hotel:Silver';
    }

    public function visitGold(): void
    {
        echo 'Hotel:Gold';
    }
}
