@extends('web_layouts.app')
@section('title','Service Details')

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
                                    <div class="col-lg-8">
                                        <div class="company">
                                            @foreach($services as $data)
                                            <div class="row ">
                                                <div class="col-md-7">
                                                    <div class="image ">
                                                        @if($data->image!='')
                                                            <img style="height:195px; width: 395px; " class="img-fluid" src="{{asset('storage/media/service/'.$data->image)}}" alt="alternative">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-5 body">
                                                    <div class="row"></div>
                                                    <h4 style="padding-top: 20px;">{{$data->package_name}}</h4>
                                                    <p class="fs"><i class="fas fa-store-alt"></i> {{$data->company_name}}</p>
                                                    <p class="text-danger" style="font-size: 20px;font-weight: bold;" > MRP $<del>{{ $data->mrp }} </del></p>
                                                    <p style="font-size: 20px;font-weight: bold;">Price {{$data->price}}</p>
                                                </div>
                                            </div>
                                            <div class="row pt-4">
                                                <div class="col-md-6">
                                                    <h5>Description</h5>
                                                    <div  class="fs text-justify" style="padding-top: 15px;">  {!!$data->short_des!!}</div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>Privacy & policy </h5>
                                                    <div  class="fs text-justify" style="padding-top: 15px;">  {!!$data->privacy_policy!!}</div>
                                                </div>

                                            </div>
                                            @endforeach
                                        </div>
                                    </div> <!-- end of col -->
                                    <div class="col-lg-4">
                                        <div class="company">
                                            <form action="{{route('order.ManageOrderProcess')}}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                @foreach($services as $data)
                                                    <input  name="user_id" value=" {{(session()->get('USER_ID'))}} " type="hidden" >
                                                    <input  name="provider_id" value=" {{$data->provider_id}} " type="hidden" >
                                                    <input  name="service_id" value=" {{$data->id}} " type="hidden" >
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1"> Date</label>
                                                        <input  name="date" type="date" class="form-control" aria-required="true" aria-invalid="false" required >
                                                    </div>
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td colspan="3">{{$data->package_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Price {{$data->price}} * 1 </td>
                                                            <td>BDT {{$data->price}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Total</td>
                                                            <td>BDT {{$data->price}}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                @endforeach


                                                <button  type="submit" class="btn btn-lg btn-info btn-block">
                                                    Confirm
                                                </button>
                                            </form>
                                        </div>
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
