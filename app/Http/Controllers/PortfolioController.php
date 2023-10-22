<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function portfolioDasboard()
    {
        return view('admin.portfolios.index', [
            "portfolios" => Portfolio::all()
        ]);
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $validatedRequest = $request->validate(
            [
                "title" => "required",
                "description" => "required",
                "tech_stack" => "required",
                "link" => "nullable",
                "link_type" => "nullable",
                "image" => "image|file|max:1024",
                "type" => "required|in:personal,professional"
            ],
        );

        if ($request->file('image')) {
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Portfolio::create($validatedRequest);
        return redirect('/admin/portfolios')->with('success', 'New portfolio has been added');
    }

    public function edit($portfolio_id)
    {
        $portfolio = Portfolio::find($portfolio_id);
        return view('admin.portfolios.edit', [
            "portfolio" => $portfolio,
            "portfolio_id" => $portfolio_id
        ]);
    }

    public function update($portfolio_id, Request $request)
    {
        $validatedRequest = $request->validate(
            [
                "title" => "required",
                "description" => "required",
                "tech_stack" => "required",
                "link" => "nullable",
                "link_type" => "nullable",
                "image" => "image|file|max:1024",
                "type" => "required|in:personal,professional"
            ],
        );

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedRequest['image'] = $request->file('image')->store('/images');
        }

        Portfolio::where('id', $portfolio_id)
            ->update($validatedRequest);

        return redirect('/admin/portfolios')->with('success', 'Portfolio has been edited');
    }

    public function destroy($portfolio_id)
    {
        $portfolio = Portfolio::find($portfolio_id);
        Storage::delete($portfolio->image);
        Portfolio::destroy($portfolio_id);
        return redirect('admin/portfolios')->with('success', 'Portfolio has been deleted');
    }
}
