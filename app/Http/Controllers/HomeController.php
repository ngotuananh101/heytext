<?php

namespace App\Http\Controllers;

use App\Models\Font;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page') ?? 1;
        if ($page <= 1) {
            $totalFonts = Font::all()->count();
            $fonts = Font::paginate(20);
            return view('home', [
                'fonts' => $fonts,
                'totalFonts' => $totalFonts
            ]);
        } else {
            $fonts = Font::paginate(20, ['*'], 'page', $page);
            return response()->json($fonts);
        }
    }


    public function getMoreFonts($page)
    {
        $fonts = Font::all()->skip($page * 10)->take(10) ?? [];
    }

    public function fonts($slug)
    {
        $font = Font::where('slug', $slug)->first();
        $fontSizes = array(
            "8px",
            "10px",
            "12px",
            "14px",
            "16px",
            "18px",
            "24px",
            "32px",
            "48px",
            "72px"
        );
        $fontWeight = array(
            "Thin 100" => [
                '100',
                'normal',
            ],
            "Thin 100 Italic" => [
                '100',
                'italic',
            ],
            "Light 300" => [
                '300',
                'normal',
            ],
            "Light 300 Italic" => [
                '300',
                'italic',
            ],
            "Regular 400" => [
                '400',
                'normal',
            ],
            "Regular 400 Italic" => [
                '400',
                'italic',
            ],
            "Medium 500" => [
                '500',
                'normal',
            ],
            "Medium 500 Italic" => [
                '500',
                'italic',
            ],
            "Bold 700" => [
                '700',
                'normal',
            ],
            "Bold 700 Italic" => [
                '700',
                'italic',
            ],
            "Black 900" => [
                '900',
                'normal',
            ],
            "Black 900 Italic" => [
                '900',
                'italic',
            ]
        );
        $testText = fake()->paragraph(1);
        return view('fonts', [
            'font' => $font,
            'testText' => $testText,
            'fontSizes' => $fontSizes,
            'fontWeight' => $fontWeight
        ]);
    }

    public function unicode()
    {
        $fontSizes = array(
            "8px",
            "10px",
            "12px",
            "14px",
            "16px",
            "18px",
            "24px",
            "32px",
            "48px",
            "72px"
        );
        $variant = file_get_contents(public_path('assets/data/variants.json'));
        $combining = file_get_contents(public_path('assets/data/combining.json'));
        return view('unicode', [
            'fontSizes' => $fontSizes,
            'variant' => $variant,
            'combining' => $combining
        ]);
    }
}
