@extends('backend.layouts.app')

@section('title', __('Edit Candidate Category'))

@section('content')
    <form action="{{route('admin.candidate_category.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{$candidate_category->name}}" required>
                        </div> 

                        <label>Description</label> 
                        <textarea class="form-control" name="description" rows="2">{{$candidate_category->description}}</textarea>
                                             
                        <div class="form-group">
                            <label>Featured <span class="text-danger">*</span></label>
                            <select class="form-control" name="featured" required>
                                <option value="Enabled" {{ $candidate_category->featured == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $candidate_category->featured == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $candidate_category->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $candidate_category->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="order" value="{{ $candidate_category->order }}" required>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-5 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $candidate_category->id }}"/>
                    <input type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success" value="Update"/>
                </div>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
