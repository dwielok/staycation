@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        {{-- <h2>Login</h2>
                    <ul class="breadcrumb-links">
                        <li>
                            <a href="/">Home</a>
                            <i class="bx bx-chevron-right"></i>
                        </li>
                        <li>Login</li>
                    </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mx-auto pt-120 pb-120">
        <div class="container">
            <section id="contact" class="contact-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 contact-sec">
                            <!--<div class="row contact-form-design-area">-->
                            <div class="col-lg-6 col-md-12 m-auto">
                                <div class="section-title text-center">
                                    <h2>Register</h2>
                                    <div class="title-separator-outer ">
                                        <div class="title-separator style-liner" style="background-color:#ff7f47"></div>
                                    </div>
                                </div>
                                <!-- START CONTACT FORM DESIGN AREA -->
                                <div class="login-form">
                                    <form id="login-form" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="email"
                                                    class="col-form-label text-md-end">{{ __('Username') }}</label>
                                                <input id="username" type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="username" value="{{ old('username') }}" autocomplete="username"
                                                    autofocus>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name"
                                                    class="col-form-label text-md-end">{{ __('Name') }}</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" autocomplete="name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email"
                                                    class="col-form-label text-md-end">{{ __('Email') }}</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone"
                                                    class="col-form-label text-md-end">{{ __('Phone') }}</label>
                                                <input id="phone" type="text"
                                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ old('phone') }}" autocomplete="phone">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password"
                                                    class="col-form-label text-md-end">{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" autocomplete="password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password-confirm"
                                                    class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" autocomplete="new-password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="address"
                                                    class="col-form-label text-md-end">{{ __('Address') }}</label>
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    value="{{ old('address') }}" name="address" autocomplete="address">
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="dob"
                                                    class="col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>
                                                <input id="dob" type="date"
                                                    class="form-control @error('dob') is-invalid @enderror" name="dob"
                                                    autocomplete="dob">
                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 text-center login-btn">
                                                <div class="actions wow fadeInUp" data-wow-delay=".4s">
                                                    <input type="submit" value="Register" name="submit" id="submitButton"
                                                        class="" title="Register!">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- / END CONTACT FORM DESIGN AREA </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
