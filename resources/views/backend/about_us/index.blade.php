@extends('backend.layouts.app')

@section('title', __('About Us Informations'))

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<div class="row">
    <div class="col-12">
        <form action="{{route('admin.about_us.update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">      
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control mt-2" name="image"/>
                                <br>
                                <img src="{{ url('files/about_us',config('about_us_image')) }}" width="30%" />
                            </div>  
                            <div class="form-group mt-4">
                                <label>Description</label>
                                <textarea class="form-control mt-2" id="editor" name="description">{!! config('about_us_description') !!}</textarea>
                            </div>   
                            <div class="form-group">
                                <label>Our Mission</label>
                                <input type="text" class="form-control mt-2" name="our_mision" value="{{ config('our_mision') }}"/>
                            </div>   
                            <div class="form-group">
                                <label>Our Vision</label>
                                <input type="text" class="form-control mt-2" name="our_vision" value="{{ config('our_vision') }}"/>
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

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );

    
</script>

@endsection
