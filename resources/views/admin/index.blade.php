@extends('layouts.admin')

@section('admin')

    <div id="admin_section">

        <h1>Admin</h1><br><br>

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

            @if($admins)
                @foreach($admins as $admin)

                    <tr>
                        <th>{{$admin->id}}</th>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->created_at->diffForHumans()}}</td>
                        <td>{{$admin->updated_at->diffForHumans()}}</td>
                    </tr>

                @endforeach
            @endif

            </tbody>
        </table>
    </div>



    @stop