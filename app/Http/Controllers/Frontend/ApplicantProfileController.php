<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\Models\CandidateCategory;

class ApplicantProfileController extends Controller
{
    public function index($id)
    {
        $user = User::where('id',$id)->first();

        return view('frontend.applicant_profile',[
            'user' => $user
        ]);
    }
}
