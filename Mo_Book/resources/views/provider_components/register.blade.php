@extends('ProviderAuthLayouts.app')

@section('title','Provider Registration')

@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <div class="login-logo">
                                <a class="mt-4 mb-4" style="text-decoration: none;font-size:26px; color:#14BF98 " ><i class="fab fa-meetup"></i> Provider Registration</a>
                            </div>
                        </div>

                        @if(Session::has('message'))
                            <div class="alert alert-success text-center pt-3" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif

                        <div class="login-form">
                            <form action="{{route('provider.register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{url('provider/login')}}">login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

