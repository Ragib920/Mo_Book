@extends('ProviderAuthLayouts.app')

@section('title','Provider Login')

@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a class="mt-4 mb-4" style="text-decoration: none;font-size:26px; color:#14BF98 " ><i class="fab fa-meetup"></i>Providers Login</a>
                        </div>
                        <div class="login-form">
{{--                            <form action="" method="post">--}}
                            <form action="{{route('provider.login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

                                <p>
                                    Do not have account?
                                    <a href="#">Register here</a>
                                </p>
                                @if(Session::has('error'))
                                    <div class="alert alert-danger text-center pt-3" role="alert">
                                        {{Session::get('error')}}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
