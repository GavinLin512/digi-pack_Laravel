@extends('template.index_template')

@section('main')
    <main>
        <div class="container my-container">
            <div class="row mx-auto cart-page no-gutters">
                @yield('cart-content')
            </div>
        </div>
    </main>
@endsection
