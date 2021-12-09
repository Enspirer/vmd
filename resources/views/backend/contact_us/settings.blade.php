@extends('backend.layouts.app')

@section('title', __('Contact Informations'))

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<div class="row">
    <div class="col-12">
        <form action="{{route('admin.contact_information.update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">                            
                            <div class="form-group">
                                <label>Short text</label>
                                <input type="text" class="form-control mt-2" name="short_text" value="{{ config('contact_text') }}"/>
                            </div> 
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control mt-2" id="editor" name="address">{!! config('contact_address') !!}</textarea>
                            </div>   
                            <div class="form-group">
                                <label>Phone Numbers</label>
                                <input type="text" class="form-control mt-2" name="phone_numbers" value="{{ config('contact_number') }}"/>
                            </div>   
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" class="form-control mt-2" name="fax" value="{{ config('contact_fax') }}"/>
                            </div>  
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control mt-2" name="email" value="{{ config('contact_email') }}"/>
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
