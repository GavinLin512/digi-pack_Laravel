@extends('template.cart_template')

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
    <div class="col-12">
        <h3>寄送資料</h3>
    </div>
    <div class="col-12">
        <label for="name" class="w-100">姓名</label>
        <input type="text" placeholder="王小明" class="w-100 p-3" id="name">
    </div>
    <div class="col-12">
        <label for="phone" class="w-100">電話</label>
        <input type="number" placeholder="0912345678" class="w-100 p-3" id="phone">
    </div>
    <div class="col-12">
        <label for="email" class="w-100">Email</label>
        <input type="email" placeholder="abc123@gmail.com" class="w-100 p-3" id="email">
    </div>
    <div class="col-12 no-gutters">
        <label for="address" class="w-100">地址</label>
        <div class="col-12 d-flex">
            <input type="text" placeholder="城市" class="w-50 p-3 mr-1" id="address">
            <input type="number" placeholder="郵遞區號" class="w-50 p-3 ml-1" id="address">
        </div>
        <input type="text" placeholder="地址" class="w-100 p-3 mb-5" id="address">
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
    <div class="col-12 d-flex justify-content-between">
        <a class="btn btn-outline-primary btn-lg px-5" href="{{ asset('cart-2') }}" role="button">上一步</a>
        <a class="btn btn-primary btn-lg px-5" href="{{ asset('cart-4') }}" role="button">下一步</a>
    </div>
@endsection
