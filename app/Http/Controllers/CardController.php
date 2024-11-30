<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function card_1()
    {
        return view('Main.Cards.card_1');
    }

    public function card_2()
    {
        return view('Main.Cards.card_2');

    }

}
