<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;


class AboutUsController extends Controller
{
    public function index()
    {
        return view('backend.about_us.index');
    }

    public function update(Request $request)
    {            
        // dd($request);       

        if($request->file('image'))
        {            
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/about_us'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = 'about.png';
        } 

        $update = new Config;

        $update->value=$image_url;
        Config::where('key','=','about_us_image')->update($update->toArray());

        $update->value=$request->description;
        Config::where('key','=','about_us_description')->update($update->toArray()); 

        $update->value=$request->our_mision;
        Config::where('key','=','our_mision')->update($update->toArray()); 

        $update->value=$request->our_vision;
        Config::where('key','=','our_vision')->update($update->toArray()); 
       
        return back()->withFlashSuccess('Updated Successfully');                

    }

}
