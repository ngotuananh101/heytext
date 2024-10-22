<?php

namespace App\Http\Controllers;

use App\Models\Combining;
use App\Models\Style;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function style($slug)
    {
        $c_style = Style::where('slug', $slug)->first();
        if ($c_style) {
            $combining = Combining::all();
            return view('pages.home.style', compact('c_style', 'combining'));
        } else {
            abort(404);
        }
    }
}
