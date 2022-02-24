@extends('backend.layouts.app')

@section('title', __('View Candidates'))

@section('content')
    
    <form action="{{route('admin.candidates.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-12 p-1">
                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">

                            <div class="row">
                                        
                                <div class="row pe-0">
                                    <div class="col-12">
                                        <table class="table table-hover table-borderless">
                                            <tbody >
                                                <tr>
                                                    <td width="150px" style="font-weight: 600; font-size:16px;">First Name:</td>
                                                    <td style="font-size:16px;">{{ $candidates->first_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Last Name:</td>
                                                    <td style="font-size:16px;">{{ $candidates->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Email:</td>
                                                    <td style="font-size:16px;">{{ $candidates->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Phone Number:</td>
                                                    <td style="font-size:16px;">{{ $candidates->contact_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Country:</td>
                                                    <td style="font-size:16px;">{{ $candidates->country }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Educational Qualification:</td>
                                                    <td style="font-size:16px;">{{ $candidates->education_qulification }}</td>
                                                </tr>
                                            </tbody>                                            
                                        </table>
                                    </div>                                            
                                            
                                </div>
                            </div>                            

                            <div class="mt-5 text-right">
                                <input type="hidden" name="hidden_id" value="{{ $candidates->id }}"/>
                                <a href="{{route('admin.candidates.index')}}" type="button" class="btn rounded-pill px-4 py-2 me-2 btn-warning">Back</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>






<br><br>
@endsection
