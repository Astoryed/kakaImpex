@extends('layouts.admin')

@section('admin')

    <div id="admin_section">

        @if(Session::has('product_deleted'))

            <span class="bg-danger col-lg-12" style="color: black">{{session('product_deleted')}}</span>

        @endif

        @if(Session::has('product_updated'))

            <span class="bg-primary col-lg-12" style="color: black">{{session('product_updated')}}</span>

        @endif

        <h1>Products</h1><br>

            <table class="table table-responsive ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Details</th>
                    <th>Created</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>

                @if($products)
                    @foreach($products as $product)

                        <tr>
                            <th>{{$product->id}}</th>
                            <td><img height="75" width="75" src="{{$product->photo ? $product->photo->file: '/images/placeholder.jpg'}}"></td>
                            <td><a href="{{route('products.edit',$product->id)}}"><b>{{$product->name}}</b></a></td>
                            <td>{{$product->category}}</td>
                            <td>Rs:{{$product->price}}</td>
                            <td>{{$product->details}}</td>
                            <td>{{$product->created_at->diffForHumans()}}</td>
                            <td>
                                 {!! Form::open(['method'=>'DELETE', 'action'=> ['ProductController@destroy', $product->id]]) !!}

                                     <div class="form-group">
                                         {!! Form::submit('Delete', ['class'=>'btn2']) !!}
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