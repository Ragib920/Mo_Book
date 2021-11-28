@extends('web_layouts.app')
@section('title','Companies')

@section('content')

    <!-- Projects -->
    <div id="projects" class="filter">
        <div class="container">
            <div class="row"><div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        {{-- catering  --}}
                        <div class="tab-pane fade show active" id="catering" role="tabpanel" aria-labelledby="catering-tab">
                            <div id="services" class="cards-2 bg-white">
                                <div class="row">
                                        <div class="col-lg-12">
                                            <div class="company"  >
                                                <div class="row ">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-4">
                                                        <div class="image ">
                                                            @if($data->company_image!='')
                                                                <img style="height: 200px; width: 330px; "  src="{{asset('storage//media/details/'.$data->company_image)}}"/>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 body">
                                                        <h4 style="padding-top: 20px;">{{$data->company_name}}</h4>
                                                        <p class="fs"><i class="fas fa-phone"></i> {{$data->phone}}</p>
                                                        <p class="fs"><i class="fas fa-map-marker-alt"></i> {{$data->address}}</p>
                                                        <p class="fs"><i class="fas fa-map-marker-alt"></i> {{$provider->email}}</p>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8">
                                                        <div  class="fs text-justify" style="padding-top: 15px;">  {!!$data->short_des!!}</div>
                                                    </div>
                                                    <div class="col-md-2"></div>

                                                </div>
                                            </div>
                                        </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of cards-2 -->
                            <!-- end of services -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        {{-- catering  --}}
                        <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="catering-tab">
                            <div id="services" class="cards-2 bg-white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="company"  >
                                            Catering Service
                                        </div>
                                    @foreach($catering as $data)
                                        <!-- Card -->
                                            <div class="card">
                                                <div class="card-image">
                                                    <img style="height:195px; width: 395px; " class="img-fluid" src="{{asset('storage/media/catering/'.$data->image)}}" alt="alternative">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $data->package_name }}</h3>
                                                    {{--                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>--}}
                                                    <p class="price">Starting at <span>${{ $data->mrp }}</span> <span><del>${{ $data->price }}</del></span>  </p>
                                                    <ul class="list-unstyled li-space-lg d-flex justify-content-center">

                                                    </ul>
                                                </div>
                                                <div class="button-container">

                                                    <span><a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                    <span> <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                </div> <!-- end of button-container -->
                                            </div>
                                            <!-- end of card -->
                                    @endforeach


                                        <div class="company" >
                                            Photography Service
                                        </div>
                                    @foreach($photography as $data)
                                        <!-- Card -->
                                            <div class="card">
                                                <div class="card-image">
                                                    <img style="height:195px; width: 395px; " class="img-fluid" src="{{asset('storage/media/photography/'.$data->image)}}" alt="alternative">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $data->package_name }}</h3>
                                                    {{--                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>--}}
                                                    <p class="price">Starting at <span>${{ $data->mrp }}</span> <span><del>${{ $data->price }}</del></span>  </p>
                                                    <ul class="list-unstyled li-space-lg d-flex justify-content-center">

                                                    </ul>
                                                </div>
                                                <div class="button-container">
                                                    <span><a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                    <span> <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                </div> <!-- end of button-container -->
                                            </div>
                                            <!-- end of card -->
                                    @endforeach

                                        <div class="company" >
                                            Decoration Service
                                        </div>
                                    @foreach($decoration as $data)
                                        <!-- Card -->
                                            <div class="card">
                                                <div class="card-image">
                                                    <img style="height:195px; width: 395px; " class="img-fluid" src="{{asset('storage/media/decoration/'.$data->image)}}" alt="alternative">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $data->package_name }}</h3>
                                                    {{--                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>--}}
                                                    <p class="price">Starting at <span>${{ $data->mrp }}</span> <span><del>${{ $data->price }}</del></span>  </p>
                                                    <ul class="list-unstyled li-space-lg d-flex justify-content-center">

                                                    </ul>
                                                </div>
                                                <div class="button-container">
                                                    <span><a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                    <span> <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                </div> <!-- end of button-container -->
                                            </div>
                                            <!-- end of card -->
                                    @endforeach


                                        <div class="company" >
                                            Lighting Service
                                        </div>
                                    @foreach($lighting as $data)
                                        <!-- Card -->
                                            <div class="card">
                                                <div class="card-image">
                                                    <img style="height:195px; width: 395px; " class="img-fluid" src="{{asset('storage/media/lighting/'.$data->image)}}" alt="alternative">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $data->package_name }}</h3>
                                                    {{--                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>--}}
                                                    <p class="price">Starting at <span>${{ $data->mrp }}</span> <span><del>${{ $data->price }}</del></span>  </p>
                                                    <ul class="list-unstyled li-space-lg d-flex justify-content-center">

                                                    </ul>
                                                </div>
                                                <div class="button-container">
                                                    <span><a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                    <span> <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                </div> <!-- end of button-container -->
                                            </div>
                                            <!-- end of card -->
                                    @endforeach



                                        <div class="company" >
                                            Sound System Service
                                        </div>
                                    @foreach($sound_system as $data)
                                        <!-- Card -->
                                            <div class="card">
                                                <div class="card-image">
                                                    <img style="height:195px; width: 395px; " class="img-fluid" src="{{asset('storage/media/sound_system/'.$data->image)}}" alt="alternative">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $data->package_name }}</h3>
                                                    {{--                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>--}}
                                                    <p class="price">Starting at <span>${{ $data->mrp }}</span> <span><del>${{ $data->price }}</del></span>  </p>
                                                    <ul class="list-unstyled li-space-lg d-flex justify-content-center">

                                                    </ul>
                                                </div>
                                                <div class="button-container">
                                                    <span><a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                    <span> <a class="btn-solid-reg page-scroll" href="#callMe">DETAILS</a></span>
                                                </div> <!-- end of button-container -->
                                            </div>
                                            <!-- end of card -->
                                    @endforeach


                                    <!-- end of card -->
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of cards-2 -->
                            <!-- end of services -->
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

@endsection
