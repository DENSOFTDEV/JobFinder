@extends('layouts.main')
@section('content')

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <h2 class="text-muted m-3">Seeker Registration</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">
                    <form method="POST" action="{{route('register')}}" class="p-5 bg-white">
                        @csrf
                        <input type="hidden" value="seeker" name="user_type">
                        <div class="form-group row">
                            <div class="col-md-12">Name</div>
                            <div class="col-md-12">
                                <input id="name" type="text"
                                       class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name"
                                       value="{{old('name')}}">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        {{$errors->first('name')}}
                                                    </strong>
                                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">Date of Birth</div>

                            <div class="col-md-12">
                                <input id="datepicker" type="text"
                                       class="form-control @error('dob') is-invalid @enderror" name="dob"
                                       value="{{ old('dob') }}" required autocomplete="dob" readonly="readonly">

                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">Gender</div>
                            <div class="col-md-12">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female">
                                    <label class="form-check-label" for="gender">Female</label>
                                </div>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">Email</div>
                            <div class="col-md-12">
                                <input id="email" type="email"
                                       class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email"
                                       value="{{old('email')}}">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        {{$errors->first('email')}}
                                                    </strong>
                                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">Password</div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           autocomplete="new-password">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-eye"></i></div>
                                    </div>
                                    @if($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                              <strong>
                                                        {{$errors->first('password')}}
                                              </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">Confirm Password</div>
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Register as Seeker" class="btn btn-primary py-2 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <p>Once you create an account a verification link will be sent to your email</p>
                        <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
