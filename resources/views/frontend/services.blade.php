@extends('frontend.layouts.app'.config('theme_layout'))

@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@push('after-styles')
@endpush


@section('content')

<section class="section-applications" id="section-applications">
    <div class="container">
        <div class="title">
            <div class="row">
                <div class="col-8">
                    {{$cadidate_category->name}}
                </div>
                <div class="col-4">
                    <form action="{{route('frontend.services',$cadidate_category->slug)}}" method="get" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="text" class="form-control" id="search" name="search" @isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ 'Type name & Enter' }}">
                    </form>                
                </div>
            </div>
                
        </div>

            @if(count($users) == 0)
                @include('frontend.includes.not_found',[
                    'not_found_title' => 'data not found',
                    'not_found_description' => null,
                    'not_found_button_caption' => null
                ])

            @else
                <div class="table-container">
                    <div class="row thead">
                        <div class="col">Name</div>
                        <div class="col">Position Applied</div>
                        <div class="col">Gender</div>
                        <div class="col">Actions</div>
                    </div>
                    @foreach($users as $key => $user)
                        <div class="row tbody">
                            <div class="col">
                                <div class="name">{{$user->first_name}} {{$user->last_name}}</div>
                                <div class="age">{{\Carbon\Carbon::parse($user->dob)->diff(\Carbon\Carbon::now())->format('%y years')}} old, <span class="gender">{{$user->gender}}</span></div>
                            </div>
                            <div class="col">{{$cadidate_category->name}}</div>
                            <div class="col">{{$user->gender}}</div>
                            <div class="col">
                                <a href="{{url('services/applicant-profile',$user->id)}}" class="view-btn">View Profile</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="my-md-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">{{ $users->appends(request()->input())->links() }}</li>
                        </ul>
                    </nav>
                </div>
            @endif

        </div>
    </div>
</section>

@endsection


@push('after-scripts')

@endpush