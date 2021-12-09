@extends('backend.layouts.app')

@section('title', __('Candidates'))

@section('content')

<div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>Candidates</strong>

                  
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Country</th>
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
    

     <!-- Modal delete -->
     <!-- <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
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
    </div> -->
    

    <script type="text/javascript">
        $(function () {
            var table = $('#villadatatable').DataTable({
                processing: true,
                ajax: "{{route('admin.candidates.getdetails')}}",
                serverSide: true,
                order: [[0, "desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'country', name: 'country'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
 

            // var user_id;

            // $(document).on('click', '.delete', function(){
            // user_id = $(this).attr('id');
            // $('#confirmModal').modal('show');
            // });

            // $('#ok_button').click(function(){
            // $.ajax({
            // url:"find_candidate/delete/"+user_id,
            
            // success:function(data)
            // {
            //     setTimeout(function(){
            //     $('#confirmModal').modal('hide');
            //     $('#villadatatable').DataTable().ajax.reload();
            //     });
            // }
            // })
            // });

          
        });
    </script>



@endsection
