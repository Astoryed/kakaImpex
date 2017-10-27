@extends('layouts.app-admin')

@section('adminPanel')


    <!--NAv Bar -->
    <!-- ------ -->

    <header>
        <nav>
            <div><a href="{{route('home')}}"><img src="/img/logomain.jpg" id="logo-main"></a>

                <button class="nav-btn"><i class="fa fa-bars"></i></button>
            </div>

            <ul>
                    @if (Auth::guest())
                    <li href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @else
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                    @endif
            </ul>
        </nav>
        </ul>
    </header> <br><br><br><br>


    <div  id="login-navbar" class="animated slideInDown">
        Welcome Admin!
    </div>

        <div id="admin-box">
            <div class="row">
                <div id="admin_back" class="col-md-2">
                    <h1>Categories</h1>

                    <ul class="nav nav-sidebar">

                        <li><a href="#demo1" data-toggle="collapse"><b>Admin</b></a></li>

                        <div id="demo1" class="collapse">
                           <hr> <a href="{{route('admin.index')}}">Admin Index</a><hr>
                        </div>

                        <li><a href="#demo2" data-toggle="collapse"><b>Products</b></a></li>

                        <div id="demo2" class="collapse">
                            <hr> <a href="{{route('products.index')}}">Product Index</a><hr>
                            <a href="{{route('products.create')}}">Create Product</a><hr>
                        </div>


                        <li><a href="#demo3" data-toggle="collapse"><b>Customers</b></a></li>

                        <div id="demo3" class="collapse">
                            <hr> <a href="{{route('customer.index')}}">Customers Index</a><hr>
                            <a href="{{route('customer.create')}}">Create Customer</a><hr>
                        </div>

                        <li><a href="#demo4" data-toggle="collapse"><b>Orders</b></a></li>
                        <div id="demo4" class="collapse">
                            <hr> <a href="{{route('orderlist')}}">Orders List</a><hr>
                        </div>

                    </ul>

                </div>

                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                        @yield('admin')

                    </div>
                </div>
            </div>
        </div>

@endsection
