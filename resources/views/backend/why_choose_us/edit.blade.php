@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.why_choose_us.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{$why_choose_us->title}}" required>
                        </div>
                        <div class="form-group">
                            <label>Icon <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="icon">
                            <br>
                            <img src="{{url('files/why_choose_us',$why_choose_us->icon)}}" width="10%" />
                        </div>
                        <div class="form-group mt-3">
                            <label>Text <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="text" value="{{$why_choose_us->text}}" required>
                        </div>
                        <div class="form-group">
                            <label>Short text <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="short_text" value="{{$why_choose_us->short_text}}" required>
                        </div>
                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="order" value="{{$why_choose_us->order}}" required>
                        </div>                          
                        <div class="form-group">
                            <label>Featured <span class="text-danger">*</span></label>
                            <select class="form-control" name="featured" required>
                                <option value="Enabled" {{ $why_choose_us->featured == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $why_choose_us->featured == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>                     
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $why_choose_us->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $why_choose_us->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>

                        <div class="mt-5 text-right">
                            <input type="hidden" name="hidden_id" value="{{ $why_choose_us->id }}"/>
                            <a href="{{route('admin.why_choose_us.index')}}" type="button" class="btn rounded-pill px-4 py-2 me-2 btn-warning">Back</a>                                
                            <input type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success" value="Update" />                               
                        </div>                       
                        
                    </div>
                </div>
            </div>
            
            

        </div>

    </form>

    <script type="text/javascript">
        
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="number" name="phone_numbers[]" class="form-control m-input" autocomplete="off" required>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });
        
        $(document).on('click', '#removeRow', function () {
            // $(this).closest('#inputFormRow').remove();
            $(this).parents('.input-group').remove();
        });        
        
    </script>


    <script>
        $("#country").keyup(function(){
            var str = $(this).val();
            var trims = $.trim(str)
            var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
            $("#slug").val(slug.toLowerCase()) 
        })
    </script>


<br><br>
@endsection
