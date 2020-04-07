@extends('layout')

@section('error')
    {{$msg."  ".$status}}
@endsection

@section('script')
    <script>
        $("#message").show(); 
    </script>
@endsection
