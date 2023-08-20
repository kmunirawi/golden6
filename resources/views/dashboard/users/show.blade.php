@extends('dashboard.master')
@section('title')
Show User Details
@endsection
@section('content')
Created At: {{$user->created_at}}
@endsection