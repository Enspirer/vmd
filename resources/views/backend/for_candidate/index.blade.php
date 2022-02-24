@extends('backend.layouts.app')

@section('title', __('Why Choose Skill Jobs'))

@section('content')
    

<div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>Why Choose Skill Jobs (For Candidate Page)</strong>

                    <div class="btn btn-info pull-right ml-3" data-toggle="modal" data-target="#exampleModal">Add New</div>
                   
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <!-- Modal insert -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
         
                <form action="{{route('admin.for_candidate.store')}}" method="post" enctype="multipart/form-data">
                
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required>
                        </div> 

                        <label>Description <span class="text-danger">*</span></label> 
                        <textarea class="form-control" name="description" rows="3" required></textarea>
                        
                        <div class="form-group mt-2">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="order" required>
                        </div>

                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Add New">
                    </div>
                </form>

            </div>
        </div>
    </div>

     <!-- Modal delete -->
     <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form name="importform" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalDeleteLabel">Delete</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Are you sure you want to remove this?</h5>
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" name="ok_button" id="ok_button">Delete</button>
                       
                    </div>
                </form>

            </div>
        </div>
    </div>
    

    <script type="text/javascript">
        $(function () {
            var table = $('#villadatatable').DataTable({
                processing: true,
                ajax: "{{route('admin.for_candidate.getdetails')}}",
                serverSide: true,
                order: [[0, "desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'status', name: 'status'},
                    {data: 'order', name: 'order'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            }); 

            var user_id;

            $(document).on('click', '.delete', function(){
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
            $.ajax({
            url:"for_candidate/delete/"+user_id,
            
            success:function(data)
            {
                setTimeout(function(){
                $('#confirmModal').modal('hide');
                $('#villadatatable').DataTable().ajax.reload();
                });
            }
            })
            });

          
        });
    </script>



@endsection
