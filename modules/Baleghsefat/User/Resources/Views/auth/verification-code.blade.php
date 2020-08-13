@extends('auth.master')

@section('content')
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="card card-primary">
            <div class="card-header">
                <h4>رمز عبور را فراموش کرده اید</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">ما لینکی برای تنظیم مجدد گذرواژه شما ارسال خواهیم کرد</p>
                <form method="POST">
                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            رمز عبور را فراموش کرده اید
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
