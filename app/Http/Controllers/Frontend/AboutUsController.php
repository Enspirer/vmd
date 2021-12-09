<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Models\WhyChooseUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $why_choose_us = WhyChooseUs::where('status','Enabled')->orderBy('order','ASC')->get();

        return view('frontend.about_us',[
            'why_choose_us' => $why_choose_us
        ]);
    }
}
