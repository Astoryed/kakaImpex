@extends('layouts.admin')

@section('admin')

<div id="admin_section" class="col-lg-6">

    <h2 class="sub-header">Order Inquiry</h2><br>

    <table class="table table-responsive">

        @if($inquires)
            @foreach($inquires as $inquiry)
                <thead>

                <tr>
                    <th>ID</th>
                    <th>{{$inquiry->id}}</th>
                </tr>
                <tr>
                    <th>Order ID</th>
                    <th>{{$inquiry->order_id}}</th>
                </tr>
                <tr>
                    <th>Customer ID</th>
                    <th>{{$inquiry->customer_id}}</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>{{$inquiry->name}}</th>
                </tr>
                <tr>
                    <th>Company</th>
                    <th>{{$inquiry->company}}</th>
                </tr>
                <tr>
                    <th>Address</th>
                    <th>{{$inquiry->address}}</th>
                </tr>
                <tr>
                    <th>Country</th>
                    <th>{{$inquiry->country}}</th>
                </tr>
                <tr>
                    <th>Phone</th>
                    <th>{{$inquiry->phone}}</th>
                </tr>
                <tr>
                    <th>Contact</th>
                    <th>{{$inquiry->cellNo}}</th>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>{{$inquiry->email}}</th>
                </tr>
                <tr>
                    <th>Comments</th>
                    <th>{{$inquiry->comments}}</th>
                </tr>
                </thead>

            @endforeach
        @endif
    </table>
</div>

@stop