<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Models\FindCandidates;


use App\Models\WishList;

class FindCandidatesController extends Controller
{
    public function index()
    {   
        return view('backend.find_candidates.index');
    }

    public function getdetails(Request $request)
    {
        
        $data = FindCandidates::get();
        return DataTables::of($data)
            
            ->addColumn('action', function($data){
                       
                $button = '<a href="'.route('admin.find_candidate.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
                    
            ->editColumn('status', function($data){
                if($data->status == 'Pending'){
                    $status = '<span class="badge badge-warning">Pending</span>';
                }
                else{
                    $status = '<span class="badge badge-success">Seen</span>';
                }   
                return $status;
            })
                    
            ->rawColumns(['action','status'])
            ->make(true);
        
        return back();
    }

    public function edit($id)
    {
        $find_candidate = FindCandidates::where('id',$id)->first();        
        // dd($find_candidate);              
        
        return view('backend.find_candidates.edit',[
            'find_candidate' => $find_candidate
        ]);

    }

    public function update(Request $request)
    {    
        // dd($request);     
   
        $update = new FindCandidates;

        $update->status='Seen';        
        
        FindCandidates::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.find_candidate.index')->withFlashSuccess('Updated Successfully'); 
                            

    }

    public function destroy($id)
    {        
        $data = FindCandidates::findOrFail($id);
        $data->delete();   
    }
}
