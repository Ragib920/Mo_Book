@extends('web_layouts.app')
@section('title','My order')
@section('order_select','active')

@section('content')
    <!-- Projects -->
    <div id="projects" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="catering" role="tabpanel" aria-labelledby="catering-tab">
                            <div id="services" class="cards-2 bg-white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @foreach($order as $data)
                                            <div class="company">
                                                <div class="row ">
                                                    <div class="col-md-2">
                                                        <div class="image ">
                                                            @if($data->image!='')
                                                                <img style="height:100px; width: 160px;" class="img-fluid" src="{{asset('storage/media/service/'.$data->image)}}" alt="alternative">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 body">
                                                        <p style="font-weight: bold;">{{$data->package_name}}</p>
                                                        {{--
                                                        <p class="fs"><i class="fas fa-store-alt"></i> {{$data->company_name}}</p>
                                                        --}}
                                                        {{--
                                                        <p class="text-danger" style="font-size: 20px;font-weight: bold;" > MRP $<del>{{ $data->mrp }} </del></p>
                                                        --}}
                                                        <p>Price {{$data->price}}</p>
                                                    </div>
                                                    <div class="col-md-4 body">
                                                        <div class="row"></div>
                                                        <p class="fs"><i class="fas fa-store-alt"></i> {{$data->company_name}}</p>
                                                        <p class="fs"> {{$data->address}} | {{$data->phone}}</p>
                                                    </div>
                                                    <div class="col-md-2 body ">
                                                        <p>Delevary Date: {{$data->date}}</p>
                                                        <td>
                                                            @if($data->o_status==1)
                                                                <a href="{{url('provider/orderlist/status/2')}}/{{$data->o_id}}" class="btn-secondary btn">Cancel Order</a>
                                                            @elseif($data->o_status==0)
                                                                <button class="btn btn-success ">Condirmed</button>
                                                            @elseif($data->o_status==2)
                                                                <button href="" class="btn btn-danger ">order cenceled </button>
                                                            @endif
                                                        </td>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $order->links() !!}
                        </div>
                    </div>
                </div>
                <!-- end of cards-2 -->
                <!-- end of services -->
            </div>
        </div>
    </div>
    </div>
    </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->
@endsection

@section('script')
    @if(Session::has('message'))
        <script>
            toastr.success("{!! Session::get('message') !!}");
        </script>
    @endif
@endsection
