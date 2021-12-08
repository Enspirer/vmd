@extends('backend.layouts.app')

@section('title', __('Edit Find Candidate'))

@section('content')
    
    <form action="{{route('admin.find_candidate.update')}}" method="post" enctype="multipart/form-data">
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
                                                    <td style="font-size:16px;">{{ $find_candidate->first_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Last Name:</td>
                                                    <td style="font-size:16px;">{{ $find_candidate->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Email:</td>
                                                    <td style="font-size:16px;">{{ $find_candidate->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Phone Number:</td>
                                                    <td style="font-size:16px;">{{ $find_candidate->contact_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Company Name:</td>
                                                    <td style="font-size:16px;">{{ $find_candidate->company_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Message:</td>
                                                    <td style="font-size:16px;">{{ $find_candidate->message }}</td>
                                                </tr>
                                            </tbody>                                            
                                        </table>
                                    </div>                                            
                                            
                                </div>
                            </div>                            

                            <div class="mt-5 text-right">
                                <input type="hidden" name="hidden_id" value="{{ $find_candidate->id }}"/>
                                <a href="{{route('admin.find_candidate.index')}}" type="button" class="btn rounded-pill px-4 py-2 me-2 btn-warning">Back</a>
                                @if($find_candidate->status == 'Seen')
                                @else
                                <input type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success" value="Seen" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>






<br><br>
@endsection
