@component('mail::message')
    # کد فعالسازی حساب شما در {{ config('app.name') }}

    ** چنانچه ثبت نام از شما نبوده است، این ایمیل را نادیده بگیرید.


    @component('mail::panel')
        کد فعالسازی شما: {{ $code }}
    @endcomponent

    با تشکر,<br>
    {{ config('app.name') }}
@endcomponent
