@extends('layouts.app')

@section('content')

    <div  id="login-navbar" class="animated slideInDown">
        Welcome Admin!
    </div>

    <div id="admin_back">

    <div id="side_bar" class="animated fadeInUp">

        <div class="row">

            <div id="side_bar_items" class="col-sm-9">
                <a href="#demo1" data-toggle="collapse">
                    <b>Admin</b></a>
                    <div id="demo1" class="collapse">
                        <hr> <a href="{{route('admin.index')}}">Admin Index</a><hr>
                    </div>
            </div>

            <div id="side_bar_items" class="col-sm-9">
                <a href="#demo2" data-toggle="collapse">
                    <b>Products</b>
                </a>
                <div id="demo2" class="collapse">
                    <hr> <a href="{{route('products.index')}}">Product Index</a><hr>
                    <a href="{{route('products.create')}}">Create Product</a><hr>
                </div>
            </div>


            <div id="side_bar_items" class="col-sm-9">
                <a href="#demo3" data-toggle="collapse">
                    <b>Customers</b>
                </a>
                <div id="demo3" class="collapse">
                    <hr> <a href="{{route('customer.index')}}">Customers Index</a><hr>

                </div>
            </div>
        </div>

    </div>

        @yield('admin')

    </div>


@endsection
