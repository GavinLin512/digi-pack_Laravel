@extends('template.cart_template')

@section('title', '完成訂購')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/cart/cart-4/cart-4.css') }}">
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
    <div class="col-12 d-flex justify-content-center">
        <h1>訂單成立</h1>
    </div>
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
        <div class="col-4 d-flex justify-content-end align-items-center ">
            <small class="mr-5">x1</small>
            <small class="ml-2">$10.50</small>
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
            <small class="mr-5">x1</small>
            <small class="ml-2">$10.50</small>
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
            <small class="mr-5">x1</small>
            <small class="ml-2">$10.50</small>
        </div>
    </div>
    <div class="col-12 mt-5 mb-4">
        <h3>寄送資料</h3>
    </div>
    <div class="col-12 d-flex mb-5 ml-1">
        <h5 class="mr-5">姓名</h5>
        <h5>王曉明</h5>
    </div>
    <div class="col-12 d-flex mb-5 ml-1">
        <h5 class="mr-5">電話</h5>
        <h5>0912345678</h5>
    </div>
    <div class="col-12 d-flex mb-5 ml-1">
        <h5 class="email">Email</h5>
        <h5>abc123@gmail.com</h5>
    </div>
    <div class="col-12 d-flex mb-5 ml-1">
        <h5 class="mr-5">地址</h5>
        <h5>409 台中市小鎮村英雄路1號</h5>
    </div>

    <hr class="my-3 w-100">
    <div class="col-12 d-flex justify-content-end no-gutters">
        <div class="col-4">
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">數量:</small></p>3
            </div>
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">小計:</small></p>$24.90
            </div>
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">運費:</small></p>$24.90
            </div>
            <div class="row w-100 d-flex justify-content-between">
                <p><small class="text-muted ">總計:</small></p>$24.90
            </div>
        </div>
    </div>
    <hr class="my-3 w-100">
    <div class="col-12 d-flex justify-content-end">
        <a class="btn btn-primary btn-lg px-5" href="{{ asset('/index') }}" role="button">返回首頁</a>
    </div>
@endsection
