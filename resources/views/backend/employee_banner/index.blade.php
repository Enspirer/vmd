@extends('backend.layouts.app')

@section('title', __('Employee Banner'))

@section('content')

<div class="row">
    <div class="col-12">
        <form action="{{route('admin.employee_banner.update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">                            
                            <div class="form-group">
                                <label>Employee Banner</label>
                                <input type="file" class="form-control mt-2" name="employee_banner" required/>
                                <br>
                                <img src="{{ url('files/employee_banner',config('employee_banner')) }}" width="30%" />
                            </div>       
                        </div>
                    </div>
                </div>                
            </div>            
        
            <div align="center">
                <button type="submit" class="btn rounded-pill text-light px-4 py-2 me-2 btn-success">Update</button><br><br><br>
            </div>

        </form>
    </div>         

            
</div>

@endsection
