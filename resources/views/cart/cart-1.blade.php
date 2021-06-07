@extends('template.cart_template')

@section('title', '購物頁面')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart/cart-1/cart-1.css') }}">
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
                <div class="progress-bar" role="progressbar" style="width: 33.33%" aria-valuenow="33.33%" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="green-circle rounded-circle text-dark d-flex align-items-center justify-content-center">
                2</div>
            <div class="progress mx-1">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
    <div class="col-12 title-2 mb-2 mt-3">
        <h3>訂單明細</h3>
    </div>
    <div class="col-12 product d-flex no-gutters ">
        <div class="col-8 d-flex align-items-center">
            <div class="col-2">
                <img src="{{ asset('img/product-1.jpeg') }}" alt="">
            </div>
            <div class="col-9 ml-4">
                <h5>Chicken momo</h5>
                <p class="mb-0"><small class="text-muted">#41551</small></p>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <button type="button" class="btn btn-sm minus">-</button>
            <input type="number" onKeypress="return (/[\d]/.test(String.fromCharCode(event.keyCode)))" id="count" value="1"
                class="text-center mx-1" onchange="priceOnchange(this.id)">
            <button type="button" class="btn btn-sm plus">+</button>
            <small data-price="30.50" class="ml-2 price">$30.50</small>
        </div>
    </div>
    <hr class="my-3 w-100">
    <div class="col-12 product d-flex no-gutters ">
        <div class="col-8 d-flex align-items-center">
            <div class="col-2">
                <img src="{{ asset('img/product-2.jpeg') }}" alt="">
            </div>
            <div class="col-9 ml-4">
                <h5>Spicy Mexican potatoes</h5>
                <p class="mb-0"><small class="text-muted">#66999</small></p>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center ">
            <button type="button" class="btn btn-sm minus">-</button>
            <input type="number" onKeypress="return (/[\d]/.test(String.fromCharCode(event.keyCode)))" id="count" value="1"
                class="text-center mx-1">
            <button type="button" class="btn btn-sm plus">+</button>
            <small data-price="20.50" class="ml-2 price">$20.50</small>
        </div>
    </div>
    <hr class="my-3 w-100">
    <div class="col-12 product d-flex no-gutters ">
        <div class="col-8 d-flex align-items-center">
            <div class="col-2">
                <img src="{{ asset('img/product-3.jpeg') }}" alt="">
            </div>
            <div class="col-9 ml-4">
                <h5>Breakfast</h5>
                <p class="mb-0"><small class="text-muted">#86577</small></p>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center ">
            <button type="button" class="btn btn-sm minus">-</button>
            <input type="number" onKeypress="return (/[\d]/.test(String.fromCharCode(event.keyCode)))" id="count" value="1"
                class="text-center mx-1">
            <button type="button" class="btn btn-sm plus">+</button>
            <small data-price="40.50" class="ml-2 price">$40.50</small>
        </div>
    </div>
    <hr class="my-3 w-100">
    <div class="col-12 d-flex justify-content-end no-gutters">
        <div class="col-4">
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">數量:</small></p>
                <span data-defalt="0" class="amount"></span>
            </div>
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">小計:</small></p>
                <span data-defalt="0" class="subtotal"></span>
            </div>
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">運費:</small></p>
                <span data-defalt="0" class="shipping"></span>
            </div>
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">總計:</small></p>
                <span data-defalt="0" class="totalcost"></span>
            </div>
        </div>
    </div>
    <hr class="my-3 w-100">
    <div class="col-12 d-flex justify-content-between">
        <p class="mb-0 d-flex align-items-center"><i class="fa fa-arrow-left text-sm pr-2"></i>返回購物</p>
        <a class="btn btn-primary btn-lg px-5" href="{{ asset('/cart-2') }}" role="button">下一步</a>
    </div>
@endsection

@section('calc-js')
    <script src="{{ asset('js/cart-1.js') }}"></script>
@endsection
