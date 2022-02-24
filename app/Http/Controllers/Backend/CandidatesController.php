<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Auth\User;

class CandidatesController extends Controller
{
    public function index()
    {   
        return view('backend.candidates.index');
    }

    public function getdetails(Request $request)
    {        
        $data = User::where('profile_type','candidate_account')->get();
        return DataTables::of($data)
            
            ->addColumn('action', function($data){
                       
                $button = '<a href="'.route('admin.candidates.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                $button .= '<a href="'.url('files/cv',$data->cv).'" name="download" id="'.$data->id.'" class="download btn btn-success btn-sm" style="margin-right: 10px" target="_blank"><i class="fas fa-download"></i> Download </a>';
                return $button;
            })                    
            ->rawColumns(['action'])
            ->make(true);
        
        return back();
    }

    public function edit($id)
    {
        $candidates = User::where('id',$id)->first();        
        // dd($candidates);              
        
        return view('backend.candidates.edit',[
            'candidates' => $candidates
        ]);

    }
    
    public function destroy($id)
    {        
        $data = User::findOrFail($id);
        $data->delete();   
    }

}
