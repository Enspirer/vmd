<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Models\ContactUs;
use App\Models\Config;


class ContactUsController extends Controller
{
    public function index()
    {
        return view('backend.contact_us.index');
    }

    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = ContactUs::get();
            return DataTables::of($data)
            
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.contact_us.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
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
        }
        return back();
    }

    public function edit($id)
    {
        $contact_us = ContactUs::where('id',$id)->first();                 
        
        return view('backend.contact_us.edit',[
            'contact_us' => $contact_us         
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);     
   
        $up_contactus = new ContactUs;

        $up_contactus->status='Seen';        
        
        ContactUs::whereId($request->hidden_id)->update($up_contactus->toArray());

        return redirect()->route('admin.contact_us.index')->withFlashSuccess('Updated Successfully');                             

    }

    public function destroy($id)
    {        
        $data = ContactUs::findOrFail($id);
        $data->delete();   
    }

    public function contact_information()
    {
        return view('backend.contact_us.settings');
    }

    public function contact_information_update(Request $request)
    {            
        // dd($request);       

        $update = new Config;

        $update->value=$request->short_text;
        Config::where('key','=','contact_text')->update($update->toArray()); 

        $update->value=$request->email;
        Config::where('key','=','contact_email')->update($update->toArray()); 

        $update->value=$request->fax;
        Config::where('key','=','contact_fax')->update($update->toArray()); 

        $update->value=$request->phone_numbers;
        Config::where('key','=','contact_number')->update($update->toArray()); 

        $update->value=$request->address;
        Config::where('key','=','contact_address')->update($update->toArray()); 
       
        return back()->withFlashSuccess('Updated Successfully');                

    }


}
