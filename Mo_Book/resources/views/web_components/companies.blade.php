@extends('web_layouts.app')
@section('title','All Companies')
@section('companies_select','active')

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
                                    @foreach($providers as $data)
                                    <div class="col-lg-6">
                                            <div class="company"  >
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <div class="image ">
                                                           @if($data->company_image!='')
                                                               <img style="height: 205px; width: 245px; "  src="{{asset('storage//media/details/'.$data->company_image)}}"/>
                                                           @endif
                                                       </div>
                                                   </div>
                                                   <div class="col-md-6 body">
{{--                                                       {!!$data->short_des!!}--}}
                                                       <h4>{{$data->company_name}}</h4>
                                                       <p class="fs"><i class="fas fa-phone"></i> {{$data->phone}}</p>
                                                       <p class="fs"><i class="fas fa-map-marker-alt"></i> {{$data->address}}</p>
                                                       <p class="fs"><i class="fas fa-map-marker-alt"></i> {{$data->email}}</p>
                                                       <a href="{{url('/company_details')}}/{{$data->id}}" type="button" style="width: 80%"  class="btn btn-outline-secondary">View Details</a>
                                                   </div>
                                               </div>
                                            </div>
                                    </div> <!-- end of col -->
                                    @endforeach
                                </div> <!-- end of row -->
                                <div class=" d-flex justify-content-center">
                                    {!! $providers->links() !!}
                                </div>
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
