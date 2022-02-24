<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Auth\User;

class EmployeesController extends Controller
{

    public function index()
    {   
        return view('backend.employees.index');
    }

    public function getdetails(Request $request)
    {        
        $data = User::where('profile_type','employee_account')->get();
        return DataTables::of($data)
            
            ->addColumn('action', function($data){                       
                $button = '<a href="'.route('admin.employees.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                return $button;
            })
                                 
            ->rawColumns(['action'])
            ->make(true);
        
        return back();
    }

    public function edit($id)
    {
        $employees = User::where('id',$id)->first();        
        // dd($employees);              
        
        return view('backend.employees.edit',[
            'employees' => $employees
        ]);

    }    
    
}
