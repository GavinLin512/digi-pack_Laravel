@extends('layouts.template.cart_template')

@section('title', '寄送資料')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart/cart-3/cart-3.css') }}">
@endsection

@section('cart-content')
    <div class="col-12 title-1 mb-4">
        <h2>購物車</h2>
    </div>
    <div class="col-12 px-3 prog-bar">
        <div class="col-12 d-flex justify-content-around align-items-center px-3">
            <div class="green-circle rounded-circle text-light d-flex align-items-center justify-content-center">
                1</div>
            <div class="progress mx-1">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100%" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="green-circle rounded-circle text-light d-flex align-items-center justify-content-center">
                2</div>
            <div class="progress mx-1">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100%" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="green-circle rounded-circle text-light d-flex align-items-center justify-content-center">
                3</div>
            <div class="progress mx-1">
                <div class="progress-bar" role="progressbar" style="width: 33.33%" aria-valuenow="33.33%" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="green-circle rounded-circle text-dark d-flex align-items-center justify-content-center">
                4</div>
        </div>
        <div class="col-12 d-flex justify-content-between mr-5 px-2">
            <p><small>確認購物車</small></p>
            <p><small class="mr-2">付款與運送方式</small></p>
            <p><small class="mr-4">填寫資料</small></p>
            <p><small class="mr-1">完成訂購</small></p>
        </div>
    </div>
    <hr class="my-3 w-100">
    <form action="{{ asset('/cart/step-3/check') }}" method="POST" id="shipment" class="col p-0 shipment">
        @csrf
        <div class="col-12">
            <h3>寄送資料</h3>
        </div>
        <div class="col-12">
            <label for="name" class="w-100">姓名</label>
            <input type="text" placeholder="王小明" class="w-100 p-3 form-control" id="name" name="name" required>
        </div>
        <div class="col-12">
            <label for="phone" class="w-100">電話</label>
            <input type="number" placeholder="0912345678" class="w-100 p-3 form-control" id="phone" name="phone" required>
        </div>
        <div class="col-12">
            <label for="email" class="w-100">Email</label>
            <input type="email" placeholder="abc123@gmail.com" class="w-100 p-3 form-control" id="email" name="email"
                required>
        </div>
        <div class="col-12 no-gutters">
            <label for="address" class="w-100">地址</label>
            <div class="col-12 d-flex city-selector-set">
                <!-- 縣市選單 -->
                <select class="county form-control" required></select>
                <!-- 區域選單 -->
                <select class="district form-control" required></select>
                {{-- <input type="text" placeholder="城市" class="w-50 p-3 mr-1" id="address"> --}}
                <input class="zipcode form-control" type="text" size="3" readonly placeholder="郵遞區號" name="zipcode">
                {{-- <input type="number" placeholder="郵遞區號" class="w-50 p-3 ml-1" id="address"> --}}
            </div>
            <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
            <input type="text" placeholder="哈哈里 哈哈路 哈哈巷99號之1" class="w-100 p-3 mb-5 form-control" id="address"
                name="address" required>
        </div>




        <hr class="my-3 w-100">
        <div class="col-12 d-flex justify-content-end no-gutters">
            <div class="col-4">
                <div class="row w-100 d-flex justify-content-between">
                    <p><small class="text-muted ">數量:</small></p>{{ $qty }}
                </div>
                <div class="row w-100 d-flex justify-content-between">
                    <p><small class="text-muted ">小計:</small></p>${{ number_format($subTotal) }}
                </div>
                <div class="row w-100 d-flex justify-content-between">
                    <p><small class="text-muted ">運費:</small></p>${{ $shippingFee }}
                </div>
                <div class="row w-100 d-flex justify-content-between">
                    <p><small class="text-muted ">總計:</small></p>${{ number_format($total) }}
                </div>
            </div>
        </div>
        <hr class="my-3 w-100">
        <div class="col-12 d-flex justify-content-between">
            <a class="btn btn-outline-primary btn-lg px-5" href="{{ asset('/cart/step-2') }}" role="button">上一步</a>
            <button type="submit" class="btn btn-primary btn-lg px-5" id="goToPay">前往付款</button>
        </div>
    </form>
@endsection

@section('js')
    <script src="{{ asset('js/tw-city-selector.js') }}"></script>
    <script>
        new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county', // 在 el 裡查找 element
            elDistrict: '.district', // 在 el 裡查找 element
            elZipcode: '.zipcode' // 在 el 裡查找 element
        });
    </script>

@endsection
