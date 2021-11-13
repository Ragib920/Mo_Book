@extends('provider_layouts.app')

@section('title','Details')
@section('details_select','active')
@section('content')

    @if($id>0)
        {{$image_required=" "}}
    @else
        {{$image_required="required"}}
    @endif

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"> </div>
                            <div class="card-body">
                                <form action="{{route('details.ManageDetailsProcess')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input  name="id" value="{{$id}}" type="hidden"  >
                                    <input  name="provider_id" value="{{session()->get('PROVIDER_ID')}}" type="hidden"  >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Company Name</label>
                                                        <input  name="company_name" value="{{$company_name}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Address </label>
                                                        <input  name="address" value="{{$address}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Phone Number</label>
                                                        <input  name="phone" value="{{$phone}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image" class="control-label mb-1"> Image</label>
                                                <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}} >
                                                @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror


                                                @if($image!='')
                                                    <a href="{{asset('storage/media/details/'.$image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/details/'.$image)}}"/></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Short Description</label>
                                                <textarea name="short_des" id="short_des "  rows="3" class="form-control" required="required" >{{ $short_des }}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div>
                                        <button  type="submit" class="btn btn-lg btn-info btn-block">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        CKEDITOR.replace('short_des');
    </script>
@endsection

