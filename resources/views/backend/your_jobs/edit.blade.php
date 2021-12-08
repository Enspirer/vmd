@extends('backend.layouts.app')

@section('title', __('Edit Post Your Jobs'))

@section('content')
    
    <form action="{{route('admin.your_jobs.update')}}" method="post" enctype="multipart/form-data">
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
                                                    <td style="font-size:16px;">{{ $your_jobs->first_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Last Name:</td>
                                                    <td style="font-size:16px;">{{ $your_jobs->last_name }}</td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Email:</td>
                                                    <td style="font-size:16px;">{{ $your_jobs->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Phone Number:</td>
                                                    <td style="font-size:16px;">{{ $your_jobs->contact_number }}</td>
                                                </tr>
                                                    <td style="font-weight: 600; font-size:16px;">Company Name:</td>
                                                    <td style="font-size:16px;">{{ $your_jobs->company_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Message:</td>
                                                    <td style="font-size:16px;">{{ $your_jobs->message }}</td>
                                                </tr>
                                            </tbody>                                            
                                        </table>
                                    </div>                                            
                                            
                                </div>
                            </div>                            

                            <div class="mt-5 text-right">
                                <input type="hidden" name="hidden_id" value="{{ $your_jobs->id }}"/>
                                <a href="{{route('admin.your_jobs.index')}}" type="button" class="btn rounded-pill px-4 py-2 me-2 btn-warning">Back</a>
                                @if($your_jobs->status == 'Seen')
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
