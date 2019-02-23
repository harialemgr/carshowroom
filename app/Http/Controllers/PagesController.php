<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;
use App\page_category;

class PagesController extends Controller
{
    public function getCategoryId()
    {
        $category_id = page_category::whereName('Support')->pluck('id')->first();
        return $category_id;
    }

    public function price()
    {
        $category_id = $this->getCategoryId();
        $pricings = Pricing::whereDisplay('1')->get();
        $letters = array('A','B','C','D','E','F','G','H','I','J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        return view('pages.prices')->with(compact('pricings', 'letters', 'category_id'));
    }
}
