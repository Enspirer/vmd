<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;


class EmployeeBannerController extends Controller
{
    public function index()
    {
        $employee_banner = Config::where('key','=','employee_banner')->first();

        return view('backend.employee_banner.index',[
            'employee_banner' => $employee_banner
        ]);
    }

    public function update(Request $request)
    {            
        // dd($request);

        if($request->file('employee_banner'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->employee_banner->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->employee_banner->move(public_path('files/employee_banner'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 

        $update = new Config;

        $update->value=$image_url;
        Config::where('key','=','employee_banner')->update($update->toArray()); 
       
        return back()->withFlashSuccess('Updated Successfully');                

    }

    public function candidate_index()
    {
        $candidate_banner = Config::where('key','=','candidate_banner')->first();

        return view('backend.employee_banner.candidate_banner',[
            'candidate_banner' => $candidate_banner
        ]);
    }

    public function candidate_update(Request $request)
    {            
        // dd($request);

        if($request->file('candidate_banner'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->candidate_banner->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->candidate_banner->move(public_path('files/candidate_banner'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 

        $update = new Config;

        $update->value=$image_url;
        Config::where('key','=','candidate_banner')->update($update->toArray()); 
       
        return back()->withFlashSuccess('Updated Successfully');                

    }

    public function home_banner_index()
    {
        $home_banner = Config::where('key','=','home_banner')->first();

        return view('backend.employee_banner.home_banner',[
            'home_banner' => $home_banner
        ]);
    }

    public function home_banner_update(Request $request)
    {            
        // dd($request);

        if($request->file('home_banner'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->home_banner->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->home_banner->move(public_path('files/home_banner'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 

        $update = new Config;

        $update->value=$image_url;
        Config::where('key','=','home_banner')->update($update->toArray()); 
       
        return back()->withFlashSuccess('Updated Successfully');                

    }
}
