<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Models\WhyChoose;


class EmployeeController extends Controller
{
    public function index()
    {
        $for_employee = WhyChoose::where('status','Enabled')->get();        
        
        return view('frontend.for_employee',[
            'for_employee' => $for_employee
        ]);
    }
}
