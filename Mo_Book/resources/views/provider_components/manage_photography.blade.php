@extends('provider_layouts.app')

@section('title','Photography')
@section('photography_select','active')
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
                                <form action="{{route('photography.ManagePhotographyProcess')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input  name="id" value="{{$id}}" type="hidden"  >
                                    <input  name="provider_id" value="{{session()->get('PROVIDER_ID')}}" type="hidden"  >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="cc-payment" class="control-label mb-1">Package Name</label>
                                                        <input  name="package_name" value="{{$package_name}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image" class="control-label mb-1">Cover Photo</label>
                                                <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}} >
                                                @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="pt-3">
                                                @if($image!='')
                                                    <a href="{{asset('storage/media/photography/'.$image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/photography/'.$image)}}"/></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">MRP </label>
                                                <input  name="mrp" value="{{$mrp}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Price</label>
                                                <input  name="price" value="{{$price}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required >
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

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Privacy And Policy</label>
                                                <textarea name="privacy_policy" id="privacy_policy "  rows="3" class="form-control" required="required" >{{ $privacy_policy }}</textarea>
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
        CKEDITOR.replace('privacy_policy');
    </script>
@endsection

