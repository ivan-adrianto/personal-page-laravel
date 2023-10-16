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
}
