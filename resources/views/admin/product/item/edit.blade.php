@extends('layouts.app')

@section('page_title', '產品品項編輯頁面')

@section('css')
    <link rel="stylesheet" href="#">
@endsection

@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('admin/home') }}">首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">產品管理</li>
                <li class="breadcrumb-item"><a href="{{ asset('admin/product/item') }}">產品品項</a></li>
                <li class="breadcrumb-item active" aria-current="page">編輯產品品項</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('編輯產品品項') }}</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ asset('/admin/product/item/update') }}/{{ $old_productData->id }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group form-check  d-flex pl-0 no-gutters">

                                <input id="pin_to_top" type="checkbox" class="form-control mr-2"
                                    style="width: 25px; height: 25px;" name="pin_to_top" value="1" autocomplete="pin_to_top"
                                    autofocus @if ($old_productData->pin_to_top === 1) checked @endif>
                                <label for="pin_to_top" class="form-check-label mb-0 mr-4"
                                    style="line-height: 25px;">{{ __('是否置頂') }}</label><br>
                                <small class="form-text text-mute col-10">* 一次只能置頂一筆資料，如果勾選多筆，會置頂排序較上面的第一筆資料</small>
                            </div>


                            <div class="form-group">
                                <label for="product_name">{{ __('產品名稱') }}</label>
                                <input id="product_name" type="text" class="form-control " name="product_name" required
                                    autocomplete="product_name" autofocus value="{{ $old_productData->product_name }}">
                            </div>

                            <div class="form-group">
                                <label for="product_category_id">{{ __('產品種類') }}</label>
                                <select class="form-control" id="product_category_id" name="product_category_id">
                                    @foreach ($category as $item)
                                        <option @if ($item->id == $old_productData->product_category_id) selected @endif value="{{ $item->id }}">
                                            {{ $item->category }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('產品價錢') }}</label>
                                <input id="price" type="number" class="form-control " name="price" required
                                    autocomplete="price" autofocus value="{{ $old_productData->price }}">
                            </div>

                            <div class="form-group" id="newColor">
                                <label for="color">{{ __('產品顏色') }}</label>
                                <input class="btn btn-outline-primary btn-sm h-75 addColor" name="addBtn" type="button"
                                    value="+">
                                @foreach ($colors as $color)
                                    <div class="row m-0 d-flex align-items-center mb-3">
                                        <input id="color" type="color" class="form-control w-25 mr-3" name="color[]"
                                            value="{{ $color }}" autofocus>
                                        <input class="btn btn-outline-danger btn-sm h-75 addColor" name="addBtn"
                                            type="button" value='-' onclick='$(this).parent().remove();'>
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="size">{{ __('產品尺寸') }}</label>
                                <div class="col-12 d-flex">
                                    @foreach ($sizes as $key => $item)
                                        <p class="mb-0 mr-2" style="line-height: 25px;">{{ $item }}</p>
                                        <input id="size" type="checkbox" class="form-control mr-3"
                                            style="width: 25px; height: 25px;" name="size[]" value="{{ $item }}"
                                            @foreach ($size as $key => $value)  @if ($value==$item) checked @endif
                                        @endforeach autocomplete="size" autofocus>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="discript">{{ __('產品描述') }}</label>
                                <textarea class="form-control" id="discript" rows="5" name="discript"
                                    required>{{ $old_productData->discript }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">{{ __('產品圖片') }}</label>
                                <div class="col-md-3">
                                    <img class="w-100" src="{{ $old_productData->product_img }}" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product_img">{{ __('修改產品主要圖片') }}</label>
                                <input id="product_img" type="file" class="form-control " name="product_img"
                                    autocomplete="product_img" autofocus>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('更新') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var addColor = document.querySelector('.addColor')
        // var i = 1;
        addColor.addEventListener('click', function() {
            // i++;
            var newColor = document.createElement('div');
            newColor.className = 'row m-0 d-flex align-items-center';
            newColor.innerHTML =
                "<input type='color' name='color[]' class='form-control w-25 mb-3 mr-3'><input type='button' name='removeBtn' class='btn btn-sm btn-outline-danger mb-3' value='-' onclick='$(this).parent().remove();'>"
            document.getElementById('newColor').appendChild(newColor);

        });
    </script>
@endsection
