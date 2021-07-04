@extends('layouts.template.index_template')

@section('title', '產品列表')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index/template/template.css') }}">
    <style>
        .product-img {
            width: 100%;
            height: 250px;
            background-size: cover;
            background-position: center;
        }

    </style>

@endsection

@section('main')
    <div class="container">
        <div class="row mb-4 ">
            <a href="{{ '/product' }}" class="btn btn-outline-success mr-2">All</a>
            @foreach ($categorys as $category)
                <a href="/product?category_id={{ $category->id }}"
                    class="btn btn-outline-success mr-2">{{ $category->category }}</a>
            @endforeach
        </div>
        <div class="row d-flex justify-content-between">
            @foreach ($products as $product)
                <div class="card" style="width: 18rem;">
                    <div class="product-img" style="background-image: url('{{ asset($product->product_img) }}')"></div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">{{ $product->discript }}</p>
                        <button href="#" class="btn btn-primary add-btn" data-id="{{ $product->id }}">新增到購物車</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('js')
    <script>
        var addBtns = document.querySelectorAll('.add-btn');
        // console.log(addBtns);
        addBtns.forEach(function(addBtn) {
            addBtn.addEventListener('click', function() {
                var productId = this.getAttribute('data-id');

                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}')
                formData.append('productId', productId)

                fetch('/cart/add', {
                    'method': 'post',
                    'body': formData
                }).then(function(response) {
                    return response.text();
                }).then(function(result) {
                    if (result == 'success') {
                        alert('新增到購物車成功！');
                    };
                });
            })
        })
    </script>
@endsection
