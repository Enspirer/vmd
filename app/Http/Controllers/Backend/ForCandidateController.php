<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Models\WhyChooseCandidate;


class ForCandidateController extends Controller
{
    public function index()
    {
        return view('backend.for_candidate.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
    
        $add = new WhyChooseCandidate;

        $add->title=$request->title; 
        $add->description=$request->description;   
        $add->status=$request->status;
        $add->order=$request->order;
        $add->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = WhyChooseCandidate::get();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                       
                    $button = '<a href="'.route('admin.for_candidate.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button;
                })
                ->editColumn('status', function($data){
                    if($data->status == 'Enabled'){
                        $status = '<span class="badge badge-success">Enabled</span>';
                    }
                    else{
                        $status = '<span class="badge badge-danger">Disabled</span>';
                    }   
                    return $status;
                })
                ->rawColumns(['action','status'])
                ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $for_candidate = WhyChooseCandidate::where('id',$id)->first();        
        // dd($for_candidate);              

        return view('backend.for_candidate.edit',[
            'for_candidate' => $for_candidate         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $update = new WhyChooseCandidate;

        $update->title=$request->title; 
        $update->description=$request->description;   
        $update->status=$request->status;
        $update->order=$request->order;

        WhyChooseCandidate::whereId($request->hidden_id)->update($update->toArray());
   
        return redirect()->route('admin.for_candidate.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = WhyChooseCandidate::findOrFail($id);
        $data->delete();   
    }
}
