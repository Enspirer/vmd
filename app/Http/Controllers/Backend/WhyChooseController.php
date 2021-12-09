<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Models\WhyChooseUs;


class WhyChooseController extends Controller
{
    public function index()
    {
        return view('backend.why_choose_us.index');
    }

    public function create()
    {
        return view('backend.why_choose_us.create');
    }

    public function getdetails(Request $request)
    {        
        $data = WhyChooseUs::get();
        return DataTables::of($data)
            ->addColumn('action', function($data){                       
                $button = '<a href="'.route('admin.why_choose_us.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->addColumn('icon', function($data){
                $img = '<img src="'.url('files/why_choose_us/',$data->icon).'" style="width: 50%">';                 
                return $img;
            })
            ->addColumn('status', function($data){
                if($data->status == 'Enabled'){
                    $status = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $status = '<span class="badge badge-danger">Disabled</span>';
                }   
                return $status;
            })
            ->addColumn('featured', function($data){
                if($data->featured == 'Enabled'){
                    $status = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $status = '<span class="badge badge-danger">Disabled</span>';
                }   
                return $status;
            })
                    
            ->rawColumns(['action','status','icon','featured'])
            ->make(true);
       
    }

    public function store(Request $request)
    {        
        // dd($request);

        if($request->file('icon'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->icon->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->icon->move(public_path('files/why_choose_us'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        }

        $add = new WhyChooseUs;

        $add->title=$request->title;
        $add->icon=$image_url;        
        $add->text=$request->text;
        $add->featured=$request->featured;
        $add->short_text=$request->short_text;
        $add->order=$request->order;
        $add->status=$request->status;

        $add->save();

        return redirect()->route('admin.why_choose_us.index')->withFlashSuccess('Added Successfully');  
    }

    public function edit($id)
    {
        $why_choose_us = WhyChooseUs::where('id',$id)->first();        
        // dd($why_choose_us);              

        return view('backend.why_choose_us.edit',[
            'why_choose_us' => $why_choose_us
        ]);  
    }


    public function update(Request $request)
    {    
        // dd($request);

        if($request->file('icon'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->icon->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->icon->move(public_path('files/why_choose_us'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $detail = WhyChooseUs::where('id',$request->hidden_id)->first();
            $image_url = $detail->icon;
        }

        $update = new WhyChooseUs;

        $update->title=$request->title;
        $update->icon=$image_url;        
        $update->featured=$request->featured;
        $update->text=$request->text;
        $update->short_text=$request->short_text;
        $update->order=$request->order;
        $update->status=$request->status;
   
        WhyChooseUs::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.why_choose_us.index')->withFlashSuccess('Updated Successfully');                      

    }
    
    public function destroy($id)
    {        
        $data = WhyChooseUs::findOrFail($id);
        $data->delete();   
    }
}
