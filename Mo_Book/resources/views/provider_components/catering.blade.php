@extends('provider_layouts.app')

@section('title','Catering')
@section('catering_select','active')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Catering</h2>
                            <a  href="{{url('provider/catering/manage_catering')}}" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>Add More</a>
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
                                    <th>Package Name</th>
                                    <th>Cover Image </th>
                                    <th>Mrp</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $data)
                                    <tr>
                                        <td>{{ $data->package_name }}</td>
                                        <td>
                                            @if($data->image!='')
                                                <img width="100px" src="{{asset('storage/media/catering/'.$data->image)}}"/>
                                            @endif
                                        </td>
                                        <td>{{ $data->price }}</td>
                                        <td>{{ $data->mrp }}</td>
                                        <td>
                                            @if($data->status==1)
                                                <a href="{{url('provider/catering/status/0')}}/{{$data->id}}" class="btn-success btn"> Enabled</a>
                                            @elseif($data->status==0)
                                                <a href="{{url('provider/catering/status/1')}}/{{$data->id}}" class="btn btn-warning ">Disabled</a>
                                            @endif

                                            <a href="{{url('provider/catering/manage_catering/')}}/{{$data->id}}" class="btn btn-info"> <i class="fas fa-edit"></i></a>
                                            <a href="{{url('provider/catering/deleteCatering/')}}/{{$data->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
