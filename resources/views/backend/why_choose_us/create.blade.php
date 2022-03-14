@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

    <form action="{{route('admin.why_choose_us.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">                        
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>Icon <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="icon" required>
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" name="text">
                        </div>
                        <div class="form-group">
                            <label>Short text <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="short_text" required>
                        </div>
                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="order" required>
                        </div>
                        <div class="form-group">
                            <label>Featured <span class="text-danger">*</span></label>
                            <select class="form-control" name="featured" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>

                        <div class="mt-5 text-right">
                            <input type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success" value="Create New" />                               
                        </div>
                    </div>
                    
                </div>
            </div>
            <br>              
                        
        </div>

    </form>


<br><br>
@endsection
