@extends('layout')

@section("tituloUser" , "UsuarioAni: " . $user['data']['ani'])

@section('content')
    <table class="table table-sm table-hover">
        <tbody>
            <tr>
                <th>Ani</th>
                <td>{{$user['data']['ani']}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{$user['data']['status']}}</td>
            </tr>
            <tr>
                <th>Creation_date</th>
                <td>{{$user['data']['creation_date']}}</td>
            </tr>
            <tr>
                <th>End_date</th>
                <td>{{$user['data']['end_date']}}</td>
            </tr>
            <tr>
                <th>Service id</th>
                <td>{{$user['data']['service_id']}}</td>
            </tr>
            <tr>
                <th>Last Billings</th>
                <td>{{$user['data']['last_billings']}}</td>
            </tr>    
        </tbody>
    </table>
@endsection

