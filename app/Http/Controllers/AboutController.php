<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all()->first();
        return view('admin.about.index', [
            "about" => $about,
            "links" => collect(json_decode($about->links, TRUE))
        ]);
    }

    public function edit()
    {
        $about = About::first();
        return view('admin.about.edit', [
            "about" => $about
        ]);
    }

    public function update(Request $request)
    {
        return $request;
    }
}
