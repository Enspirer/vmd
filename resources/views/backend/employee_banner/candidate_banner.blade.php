@extends('backend.layouts.app')

@section('title', __('Candidate Banner'))

@section('content')

<div class="row">
    <div class="col-12">
        <form action="{{route('admin.candidate_banner.update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">                            
                            <div class="form-group">
                                <label>Candidate Banner</label>
                                <input type="file" class="form-control mt-2" name="candidate_banner" required/>
                                <br>
                                <img src="{{ url('files/candidate_banner',config('candidate_banner')) }}" width="30%" />
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
