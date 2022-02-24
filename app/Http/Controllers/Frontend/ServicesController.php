<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\Models\CandidateCategory;

class ServicesController extends Controller
{
    public function index(Request $request, $slug)
    {
        // dd($request);
        $cadidate_category = CandidateCategory::where('slug',$slug)->first();

        $sort_search = null;
        $users = User::where('type',$cadidate_category->id)->orderBy('created_at', 'desc');

        if ($request->search != null){
            $sort_search = $request->search;
            $users->where('first_name', 'like', '%'.$sort_search.'%')->orWhere('last_name', 'like', '%'.$sort_search.'%')->where('type',$cadidate_category->id);
        }
        $users = $users->paginate(5);

        return view('frontend.services',[
            'cadidate_category' => $cadidate_category,
            'users' => $users,
            'sort_search' => $sort_search
        ]);
    }
}
