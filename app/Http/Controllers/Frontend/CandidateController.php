<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Models\WhyChooseCandidate;

class CandidateController extends Controller
{
    public function index()
    {
        $for_candidate = WhyChooseCandidate::where('status','Enabled')->orderBy('order','ASC')->get();

        return view('frontend.for_candidate',[
            'for_candidate' => $for_candidate
        ]);
    }
}
