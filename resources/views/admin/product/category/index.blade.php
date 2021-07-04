@extends('layouts.app')

@section('page-title', '產品種類管理頁面')

@section('css')
    <link rel="stylesheet" href="#">
@endsection

@section('main')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('admin/home') }}">首頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">產品管理</li>
                <li class="breadcrumb-item active" aria-current="page">產品種類</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('產品種類管理') }}</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ asset('/admin/product/category/create') }}" class="btn btn-success">新增</a>
                        <table id="my-datatable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>產品種類名稱</th>
                                    <th>產品品項總數</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productCategoryData as $item)
                                <tr>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->products->count() }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ asset('/admin/product/category/edit') }}/{{ $item->id }}">編輯</a>
                                        <form style="display: inline-block" action="{{ asset('/admin/product/category/delete') }}/{{ $item->id }}" method="POST">
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
                                    <th>產品種類名稱</th>
                                    <th>產品品項總數</th>
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
                "ordering": false,
            });
        });

    </script>
@endsection
