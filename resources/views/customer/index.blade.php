@extends('layouts.admin')

@section('admin')


    <div id="admin_section">

        <h1>Customers</h1><br><br>

        <table class="table table-responsive ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>

            </tr>
            </thead>


            <tbody>

            @if($users)
                @foreach($users as $user)

                    <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>

                    </tr>

                @endforeach
            @endif

            </tbody>
        </table>
    </div>



@stop