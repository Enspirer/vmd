@extends('backend.layouts.app')

@section('title', __('Edit Contact Us'))

@section('content')
    
    <form action="{{route('admin.contact_us.update')}}" method="post" enctype="multipart/form-data">
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
                                            <tbody>
                                                <tr>
                                                    <td width="150px" style="font-weight: 600; font-size:16px;">Name:</td>
                                                    <td style="font-size:16px;">{{ $contact_us->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Phone Number:</td>
                                                    <td style="font-size:16px;">{{ $contact_us->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Email:</td>
                                                    <td style="font-size:16px;">{{ $contact_us->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Message:</td>
                                                    <td style="font-size:16px;">{{ $contact_us->message }}</td>
                                                </tr>
                                            </tbody>                                            
                                        </table>
                                    </div>                                            
                                            
                                </div>
                            </div>                            

                            <div class="mt-5 text-right">
                                <input type="hidden" name="hidden_id" value="{{ $contact_us->id }}"/>
                                <a href="{{route('admin.contact_us.index')}}" type="button" class="btn rounded-pill text-light px-4 py-2 me-2 btn-primary mr-2">Back</a>
                                @if($contact_us->status == 'Seen')
                                @else
                                <input type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success" value="Seen" />
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
