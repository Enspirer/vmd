<div class="container">
    <h2 style="margin-top: 20px;">Development Courses</h2>
    <h4 style="padding-top: 40px;padding-bottom: 40px;">Featured course</h4>
    <div class="row">
        @if(count($featured_courses) > 0)
            @foreach($featured_courses as $item)
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <a href="{{ route('courses.show', [$item->slug]) }}" style="text-decoration: auto;color: white;">
                        <div class="card" style="background: #201a4a;border-radius: 20px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        @if($item->course_image != "")
                                            <div style="border-radius: 20px;background-image: url({{asset('storage/uploads/'.$item->course_image)}});height: 200px;background-size: cover;;background-position: center">

                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-7">
                                        <h4>{{$item->title}}</h4>
                                        <p style="padding-top: 15px;overflow: hidden;text-overflow: ellipsis;height: 83px;">{{$item->meta_description}}</p>


                                        <div class="course-rate ul-li">
                                            <ul>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                @for($i=1; $i<=(int)$item->rating; $i++)
                                                    <li><i class="fas fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            @endforeach
        @endif
    </div>
</div>
