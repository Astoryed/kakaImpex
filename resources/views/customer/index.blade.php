@extends('layouts.admin')

@section('admin')

    <div id="admin_section">

        @if(Session::has('Customer_updated'))

            <p class="addProduct col-lg-6">{{session('Customer_updated')}}</p>

        @endif

            @if(Session::has('Customer_deleted'))

                <p class="addProduct col-lg-6">{{session('Customer_deleted')}}</p>

            @endif

        <h1>Customers</h1><br><br>

        <table class="table table-responsive ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th>DELETE</th>
            </tr>
            </thead>


            <tbody>

            @if($customers)
                @foreach($customers as $customer)

                    <tr>
                        <th>{{$customer->id}}</th>
                        <td><b><a href="{{route('customer.edit',$customer->id)}}">{{$customer->name}}</a></b></td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->created_at->diffForHumans()}}</td>
                        <td>{{$customer->updated_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['CustomerController@destroy', $customer->id]]) !!}

                            <div class="form-group">
                                {!! Form::submit('Delete Customer', ['class'=>'btn btn-danger']) !!}
                            </div>

                            {!! Form::close() !!}
                        </td>
                    </tr>

                @endforeach
            @endif

            </tbody>
        </table>
    </div>



@stop