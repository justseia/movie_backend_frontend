@extends('layouts.app')

@section('content')
    <div class="container" style="margin-bottom: 150px;">
        <div class="row">
            <div class="col-6" style="display: flex; flex-direction: column; justify-content: center;">
                <div style="font-size: 54px;color:#132977;font-weight: 700;">EasyTick</div>
                <div style="font-size: 25px;">is an innovative platform for buying tickets and making friends for cultural and entertainment events. We strive to provide our users with a comfortable and memorable experience for every event they attend!</div>
            </div>
            <div class="col-6">
                <img src="{{ asset('assets/images/about_us_img.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container" style="display: flex; flex-direction: column; align-items: center; margin-bottom: 100px;">
        <div style="font-size: 40px;color:#132977;font-weight: 700;margin-bottom: 50px">We offer more than just tickets</div>
        <div class="row" style="text-align: center;">
            <div class="col-4">
                <img src="{{ asset('assets/images/f_1.png') }}" alt="" style="margin-bottom: 15px">
                <div style="font-size: 20px;color:#101913;font-weight: 700;margin-bottom: 10px">Free Delivery</div>
                <div style="font-size: 14px;color:#101913;font-weight: 400;">Now you won't miss anything. Tickets for various events, concerts, films, theaters</div>
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/images/f_2.png') }}" alt="" style="margin-bottom: 15px">
                <div style="font-size: 20px;color:#101913;font-weight: 700;margin-bottom: 10px">Free Delivery</div>
                <div style="font-size: 14px;color:#101913;font-weight: 400;">Now you won't miss anything. Tickets for various events, concerts, films, theaters</div>
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/images/f_3.png') }}" alt="" style="margin-bottom: 15px">
                <div style="font-size: 20px;color:#101913;font-weight: 700;margin-bottom: 10px">Free Delivery</div>
                <div style="font-size: 14px;color:#101913;font-weight: 400;">Now you won't miss anything. Tickets for various events, concerts, films, theaters</div>
            </div>
        </div>
    </div>
    <div style="background-color: #F5F5F5; padding: 60px 0;">
        <div class="container" style="display: flex; flex-direction: column; align-items: center;">
            <div style="font-size: 40px;color:#132977;font-weight: 700; margin-bottom: 40px;">EasyTick is your best way to unforgettable events!</div>
            <div class="row" style="text-align: center;">
                <div class="col-4">
                    <div style="font-size: 90px;color:#132977;font-weight: 700;">1000</div>
                    <div style="font-size: 20px;color:#101913;font-weight: 400;">happy customers who have already used our platform</div>
                </div>
                <div class="col-4">
                    <div style="font-size: 90px;color:#132977;font-weight: 700;">98%</div>
                    <div style="font-size: 20px;color:#101913;font-weight: 400;">users rate our platform as convenient and intuitive</div>
                </div>
                <div class="col-4">
                    <div style="font-size: 90px;color:#132977;font-weight: 700;">80%</div>
                    <div style="font-size: 20px;color:#101913;font-weight: 400;">users actively use the find a friend function</div>
                </div>
            </div>
        </div>
    </div>
@endsection
