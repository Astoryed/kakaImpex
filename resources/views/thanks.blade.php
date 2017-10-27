@extends('layouts.master')

@section('area')

    <div id="thanks">

        <h1>Your Order Is Submitted </h1>

        <table id="order-table" class="table table-responsive">

            @if($mails)
                @foreach($mails as $mail)

                    <tr>
                        <td>Order ID:</td>
                        <td>{{$mail->id}}</td>
                    </tr>

                    <tr>
                        <td>First Name:</td>
                        <td> {{$mail->customer_name}}</td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td> {{$mail->customer_email}}</td>
                    </tr>


                    <table id="order-table" class="table">

                        <h3>Purchased Items</h3>

                        <thead>
                        <tr>
                            <th>Items Name</th>
                            <th>Items Quantity</th>
                            <th>Items Price</th>
                        </tr>
                        </thead>

                        @foreach($mail->cart->items as $item)

                            <tbody>
                            <tr>
                                <td>{{$mail['items']['name'] }}</td>
                                <td>{{$mail['qty'] }}</td>
                                <td> {{$mail['price'] }}</td>
                            </tr>
                            </tbody>

                        @endforeach

                    </table>

                    <tr>
                        <td>TotalPrice:</td>
                        <td> Rs: {{ $mail->cart->totalPrice }}</td>
                    </tr>
                @endforeach
            @endif

        </table>

    </div>

@stop