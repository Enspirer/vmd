<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Models\Yourjobs;

class YourJobController extends Controller
{
    public function index()
    {   
        return view('backend.your_jobs.index');
    }

    public function getdetails(Request $request)
    {        
        $data = Yourjobs::get();
        return DataTables::of($data)
            
            ->addColumn('action', function($data){
                       
                $button = '<a href="'.route('admin.your_jobs.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                $button .= '<a href="'.url('storage/attached_file',$data->attached_file).'" name="download" id="'.$data->id.'" class="download btn btn-warning btn-sm" style="margin-right: 10px" target="_blank"><i class="fas fa-download"></i> Download </a>';
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
        $your_jobs = Yourjobs::where('id',$id)->first();        
        // dd($your_jobs);              
        
        return view('backend.your_jobs.edit',[
            'your_jobs' => $your_jobs
        ]);

    }

    public function update(Request $request)
    {    
        // dd($request);     
   
        $update = new Yourjobs;

        $update->status='Seen';        
        
        Yourjobs::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.your_jobs.index')->withFlashSuccess('Updated Successfully'); 
                            

    }

    public function destroy($id)
    {        
        $data = Yourjobs::findOrFail($id);
        $data->delete();   
    }
}
