@extends('layout.master')

@section('title', 'Page 1')

@section('sidebar')

    @parent
    <p>This is sidebar of page 1</p>
@endsection

@section('content')
    <p>This is content of page 1</p>
    <div>Hi Guys!</div>

    @include('form')
@endsection
