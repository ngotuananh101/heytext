<?php

namespace App\Http\Controllers;

use App\Models\Font;

class HomeController extends Controller
{
    public function index()
    {
        $fonts = Font::all()->take(10) ?? [];
        return view('home', [
            'fonts' => $fonts
        ]);
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
        return view('unicode', [
            'fontSizes' => $fontSizes,
        ]);
    }
}
