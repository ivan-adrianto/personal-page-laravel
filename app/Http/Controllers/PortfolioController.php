<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolios', [
            "portfolios" => Portfolio::all()
        ]);
    }

    public function detail($type)
    {

        return view('portfolio_detail', [
            "portfolio" => Portfolio::find($type)
        ]);
    }
}
