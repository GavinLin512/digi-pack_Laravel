@extends('layouts.template.cart_template')

@section('title', '付款及運送方式')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart/cart-2/cart-2.css') }}">
@endsection

@section('cart-content')
    <div class="col-12 title-1 mb-3">
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
                <div class="progress-bar" role="progressbar" style="width: 33.33%" aria-valuenow="33.33%" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="green-circle rounded-circle text-dark d-flex align-items-center justify-content-center">
                3</div>
            <div class="progress mx-1">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
    <form action="{{ asset('/cart/step-2/check') }}" method="POST" id="payment" class="payment w-100">
        @csrf
        <div class="col-12 mt-3 mb-4">
            <h3>付款方式</h3>
        </div>
        <div class="pay">
            @php
                $pay = Session::get('pay');
            @endphp
            <div class="col-12 d-flex flex-column no-gutters pl-4">
                <div class="col-8 d-flex">
                    <div class="col-1">
                        <input type="radio" name="pay" class="mt-2" value="Credit" @if ($pay == 'Credit') checked @endif required>
                    </div>
                    <h5 class="ml-2">信用卡付款</h5>
                </div>
                <div class="col-12">
                    <hr class="w-100">
                </div>
            </div>
            <div class="col-12 d-flex flex-column no-gutters pl-4">
                <div class="col-8 d-flex">
                    <div class="col-1">
                        <input type="radio" name="pay" class="mt-2" value="ATM" @if ($pay == 'ATM') checked @endif required>
                    </div>
                    <h5 class="ml-2">網路 ATM</h5>
                </div>
                <div class="col-12">
                    <hr class="w-100">
                </div>
            </div>
            <div class="col-12 d-flex flex-column no-gutters pl-4">
                <div class="col-8 d-flex">
                    <div class="col-1">
                        <input type="radio" name="pay" class="mt-2" value="CVS" @if ($pay == 'CVS') checked @endif required>
                    </div>
                    <h5 class="ml-2">超商代碼</h5>
                </div>
            </div>
        </div>
        <hr class="my-3 w-100">
        <div class="col-12 mt-3 mb-4">
            <h3>運送方式</h3>
        </div>
        <div class="delivery">
            @php
                $delivery = Session::get('delivery');
            @endphp
            <div class="col-12 d-flex flex-column no-gutters pl-4">
                <div class="col-8 d-flex">
                    <div class="col-1">
                        <input type="radio" name="delivery" class="mt-2" value="Home" @if ($delivery == 'Home') checked @endif required>
                    </div>
                    <h5 class="ml-2">黑貓宅配</h5>
                </div>
                <div class="col-12">
                    <hr class="w-100">
                </div>
            </div>
            <div class="col-12 d-flex flex-column no-gutters pl-4">
                <div class="col-8 d-flex">
                    <div class="col-1">
                        <input type="radio" name="delivery" class="mt-2" value="C2C" @if ($delivery == 'C2C') checked @endif required>
                    </div>
                    <h5 class="ml-2">超商店到店</h5>
                </div>
            </div>
        </div>
    </form>

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
        <a class="btn btn-outline-primary btn-lg px-5" href="{{ asset('/cart/step-1') }}" role="button">上一步</a>
        <button class="btn btn-primary btn-lg px-5" id="next">下一步</button>
    </div>
@endsection

@section('js')
    <script>
        document.querySelector('#next').addEventListener('click', function() {
            // console.log(123);
            var payBtns = document.querySelector('input[name = "pay"]:checked');
            var deliveryBtns = document.querySelector('input[name = "delivery"]:checked');

            console.log(payBtns, deliveryBtns);
            if (payBtns && deliveryBtns) {
                document.querySelector('#payment').submit();
            } else if (payBtns) {
                alert('請選擇運送方式');
            } else if (deliveryBtns) {
                alert('請選擇付款方式');
            } else {
                alert('請先選擇付款及運送方式');
            }
        })
    </script>

@endsection
