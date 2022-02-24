<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Models\WhyChoose;

class ForEmployeeController extends Controller
{
    public function index()
    {
        return view('backend.for_employee.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
    
        $add = new WhyChoose;

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
            $data = WhyChoose::get();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                       
                    $button = '<a href="'.route('admin.for_employee.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
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
        $for_employee = WhyChoose::where('id',$id)->first();        
        // dd($for_employee);              

        return view('backend.for_employee.edit',[
            'for_employee' => $for_employee         
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $update = new WhyChoose;

        $update->title=$request->title; 
        $update->description=$request->description;   
        $update->status=$request->status;
        $update->order=$request->order;

        WhyChoose::whereId($request->hidden_id)->update($update->toArray());
   
        return redirect()->route('admin.for_employee.index')->withFlashSuccess('Updated Successfully');                   

    }

    public function destroy($id)
    {        
        $data = WhyChoose::findOrFail($id);
        $data->delete();   
    }
}
