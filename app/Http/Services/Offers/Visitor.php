<?php

namespace App\Http\Services\Offers;

interface Visitor
{
    public function visitBronze();
    public function visitSilver();
    public function visitGold();
}
