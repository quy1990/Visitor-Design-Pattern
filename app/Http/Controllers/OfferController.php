<?php

namespace App\Http\Controllers;

use App\Http\Services\CreditCards\BronzeCreditCard;
use App\Http\Services\CreditCards\GoldCreditCard;
use App\Http\Services\CreditCards\SilverCreditCard;
use App\Http\Services\Offers\GasOfferVisitor;
use App\Http\Services\Offers\HotelOfferVisitor;

class OfferController extends Controller
{
    public function index(): void
    {
        $bronze = new BronzeCreditCard();
        $silver = new SilverCreditCard();
        $gold = new GoldCreditCard();

        $visitor = new HotelOfferVisitor();
        $bronze->accept($visitor);
        $silver->accept($visitor);
        $gold->accept($visitor);
    }
}
