<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Models\CandidateCategory;

class CandidateCategoryController extends Controller
{
    
    public function index()
    {
        return view('backend.candidate_category.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        if($request->featured == 'Enabled'){
            CandidateCategory::where('featured','Enabled')->update(array('featured' => 'Disabled'));           
        }
    
        $add = new CandidateCategory;

        $add->name=$request->name; 
        $add->slug=$request->slug; 
        $add->description=$request->description;   
        $add->featured=$request->featured;   
        $add->status=$request->status;
        $add->order=$request->order;
        $add->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = CandidateCategory::get();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                       
                    $button = '<a href="'.route('admin.candidate_category.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button;
                })
                ->addColumn('featured', function($data){
                    if($data->featured == 'Enabled'){
                        $featured = '<span class="badge badge-success">Enabled</span>';
                    }
                    else{
                        $featured = '<span class="badge badge-danger">Disabled</span>';
                    }   
                    return $featured;
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
                ->rawColumns(['action','status','featured'])
                ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        $candidate_category = CandidateCategory::where('id',$id)->first();        
        // dd($candidate_category);              

        return view('backend.candidate_category.edit',[
            'candidate_category' => $candidate_category         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        if($request->featured == 'Enabled'){
            CandidateCategory::where('featured','Enabled')->update(array('featured' => 'Disabled'));           
        }

        $update = new CandidateCategory;

        $update->name=$request->name; 
        $update->slug=$request->slug; 
        $update->description=$request->description; 
        $update->featured=$request->featured;   
        $update->status=$request->status;
        $update->order=$request->order;

        CandidateCategory::whereId($request->hidden_id)->update($update->toArray());
   
        return redirect()->route('admin.candidate_category.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = CandidateCategory::findOrFail($id);
        $data->delete();   
    }

}
