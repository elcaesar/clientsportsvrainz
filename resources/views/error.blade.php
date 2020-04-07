@extends('layout')

@section('error')
    {{'Hubo un error en la consulta. Error: '.$status}}
@endsection

@section('script')
    <script>
        $("#message").show(); 
    </script>
@endsection