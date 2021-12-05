@extends('web_layouts.app')
@section('title','All Sound System')

@section('content')
    <!-- Projects -->
    <div id="projects" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        {{-- catering  --}}
                        <div class="tab-pane fade show active" id="catering" role="tabpanel" aria-labelledby="catering-tab">
                            <div id="services" class="cards-2 bg-white">
                                <div class="row">
                                    <div class="col-lg-12">
                                    @foreach($sound_system as $data)
                                        <!-- Card -->
                                            <div class="card">
                                                <div class="card-image">
                                                    <img style="height:195px; width: 395px; " class="img-fluid" src="{{asset('storage/media/service/'.$data->image)}}" alt="alternative">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $data->package_name }}</h3>
                                                    {{--                                                <p>Perfect for fresh ideas or young startups, this package will help get the business off the ground</p>--}}
                                                    <p class="price">Starting at <span>${{ $data->mrp }}</span> <span><del>${{ $data->price }}</del></span>  </p>
                                                    <ul class="list-unstyled li-space-lg d-flex justify-content-center">
                                                        <li class="media">
                                                            <i class="fas fa-store-alt"></i>
                                                            <div class="media-body" style="font-size: 12px;">{{ $data->company_name }}</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="button-container">
                                                    <a href="{{url('/service_details')}}/{{$data->id}}" class="btn-solid-reg page-scroll" href="#">BOOK NOW</a>
                                                </div> <!-- end of button-container -->
                                            </div>
                                            <!-- end of card -->
                                        @endforeach
                                        <div class="  d-flex justify-content-center">
                                            {!! $sound_system->links() !!}
                                        </div>
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
