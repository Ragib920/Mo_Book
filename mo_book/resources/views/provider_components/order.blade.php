@extends('provider_layouts.app')

@section('title','Order List')
@section('order_select','active')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Order List</h2>
                        </div>
                    </div>
                </div>

                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Cover Image </th>
                                    <th>Package Name</th>
                                    <th>Date line</th>
                                    <th>User Details</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $data)
                                    <tr>
                                        <td>
                                            @if($data->image!='')
                                                <img width="100px" src="{{asset('storage/media/service/'.$data->image)}}"/>
                                            @endif
                                        </td>
                                        <td>{{ $data->package_name }}</td>
                                        <td class="text-danger">{{ $data->date }}</td>
                                        <td>
                                          <p> Name: {{ $data->name }}</p>
                                          <p>Address: {{ $data->u_address }}</p>
                                          <p>Phone: {{ $data->u_phone }}</p>
                                          <p>Gmail:{{ $data->email }}</p>
                                        </td>
                                        <td>
                                            @if($data->o_status==1)
                                                <a href="{{url('provider/orderlist/status/0')}}/{{$data->o_id}}" class="btn-warning btn"> Pending </a>
                                            @elseif($data->o_status==0)
                                                <a href="{{url('provider/orderlist/status/1')}}/{{$data->o_id}}" class="btn btn-success ">Condirmed</a>
                                            @elseif($data->o_status==2)
                                                <button  class="btn btn-danger ">order cenceled </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $order->links() !!}
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
@section('script')
    @if(Session::has('message'))
        <script>
            toastr.success("{!! Session::get('message') !!}");
        </script>
    @endif
@endsection
