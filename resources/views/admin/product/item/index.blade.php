@extends('layouts.app')

@section('page_title', '產品品項管理頁面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app/item_index.css') }}">
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ asset('admin/home') }}">首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">產品管理</li>
            <li class="breadcrumb-item active" aria-current="page">產品品項</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h2 class="mb-0">{{ __('產品管理') }}</h2></div>

                <div class="card-body">
                    <a href="{{ asset('/admin/product/item/create') }}" class="btn btn-success">新增</a>
                    <table id="my-datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>是否置頂</th>
                                <th>產品名稱</th>
                                <th>產品種類</th>
                                <th>產品價格</th>
                                <th>產品顏色</th>
                                <th>產品尺寸</th>
                                <th>產品圖片</th>
                                <th>產品描述</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productData as $item)
                            <tr>
                                <td>@if ($item->pin_to_top === 1) 是 @else 否 @endif</td>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->category->category }}</td>
                                <td>{{ $item->price }}</td>
                                {{-- @php
                                    $colors = json_decode($item->color);
                                    // dd($item->size);
                                @endphp --}}
                                <td>@foreach ($item->color as $color)
                                    <div class="showColor" style="background-color: {{ $color }}"></div>
                                @endforeach</td>
                                <td>@foreach ($item->size as $size)
                                    {{ $size }},
                                @endforeach</td>
                                <td>
                                    <img src="{{ $item->product_img }}" alt="" style="width: 200px">
                                </td>
                                <td>{{ $item->discript }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ asset('/admin/product/item/edit') }}/{{ $item->id }}">編輯</a>
                                    <form style="display: inline-block" action="{{ asset('/admin/product/item/delete') }}/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">刪除</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>是否置頂</th>
                                <th>產品名稱</th>
                                <th>產品種類</th>
                                <th>產品價格</th>
                                <th>產品顏色</th>
                                <th>產品尺寸</th>
                                <th>產品圖片</th>
                                <th>產品描述</th>
                                <th>操作</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#my-datatable').DataTable({
            "ordering": true,
        });
    });
</script>
@endsection


