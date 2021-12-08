<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\FindCandidates;
use App\Models\Models\Yourjobs;


class FindCandidatesController extends Controller
{
    public function find_canidates(Request $request)
    {        
        // dd($request);     
   
        $add = new FindCandidates;

        $add->first_name=$request->first_name;
        $add->last_name=$request->last_name;
        $add->company_name=$request->company_name;
        $add->contact_number=$request->contact_number;
        $add->email=$request->email;
        $add->message=$request->message;
        $add->status='Pending'; 

        $add->save();
       
        session()->flash('message','Thanks!');

        return back();    
    }

    public function post_job(Request $request)
    {        
        // dd($request);     

        if($request->file('attached_file'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->attached_file->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->attached_file->move(public_path('storage/attached_file'), $preview_fileName1);
            $attached_file = $preview_fileName1;
        }else{
            $attached_file = null;
        } 
   
        $add = new Yourjobs;

        $add->first_name=$request->first_name;
        $add->last_name=$request->last_name;
        $add->company_name=$request->company_name;
        $add->contact_number=$request->contact_number;
        $add->attached_file=$attached_file;
        $add->email=$request->email;
        $add->message=$request->message;
        $add->status='Pending'; 

        $add->save();
       
        session()->flash('message','Thanks!');

        return back();    
    }
}
