<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\Models\CandidateCategory;

class ServicesController extends Controller
{
    public function index($slug)
    {
        $cadidate_category = CandidateCategory::where('slug',$slug)->first();

        $users = User::where('type',$cadidate_category->id)->get();
        // dd($users);

        return view('frontend.services',[
            'cadidate_category' => $cadidate_category,
            'users' => $users
        ]);
    }
}
