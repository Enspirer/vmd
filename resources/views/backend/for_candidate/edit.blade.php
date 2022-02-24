@extends('backend.layouts.app')

@section('title', __('Edit Why Choose Skill Jobs'))

@section('content')
    <form action="{{route('admin.for_candidate.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{$for_candidate->title}}" required>
                        </div> 

                        <label>Description <span class="text-danger">*</span></label> 
                        <textarea class="form-control" name="description" rows="3" required>{{$for_candidate->description}}</textarea>
                                                
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $for_candidate->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $for_candidate->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="order" value="{{ $for_candidate->order }}" required>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-5 text-right">
                    <input type="hidden" name="hidden_id" value="{{ $for_candidate->id }}"/>
                    <input type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success" value="Update"/>
                </div>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
