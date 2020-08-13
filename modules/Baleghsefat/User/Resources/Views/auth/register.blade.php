@extends('User::auth.master')

@section('content')
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="card card-primary">
            <div class="card-header">
                <h4>ثبت نام</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">نام</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="lastName">نام خانوادگی</label>
                            <input id="lastName" type="text" class="form-control" value="{{ old('lastName') }}"
                                   name="lastName" required autocomplete="lastName">
                            @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">ایمیل یا موبایل</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                               name="username" value="{{ old('username') }}" required autocomplete="mobile">
                        @error('username')
                        <div class="invalid-feedback">
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="password" class="d-block">کلمه عبور</label>
                            <input id="password" type="password"
                                   class="form-control pwstrength @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="password2" class="d-block">تایید رمز عبور</label>
                            <input id="password2" type="password" class="form-control" name="password_confirmation"
                                   required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                            <label class="custom-control-label" for="agree">من با شرایط و ضوابط موافقم</label>
                        </div>
                        @error('agree')
                        <div class="invalid-feedback">
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            ثبت نام
                        </button>
                    </div>
                </form>
            </div>
            <div class="mb-4 text-muted text-center">
                قبلاً ثبت نام کرده اید؟ <a href="auth-login.html">ورود</a>
            </div>
        </div>
    </div>
@endsection
