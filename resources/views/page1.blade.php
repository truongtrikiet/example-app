@extends('layout.index')

@section('title', 'Page 1')

@section('layout.index')

    @parent
    <p>This is sidebar of page 1</p>
@endsection

@section('content')
    <p>This is content of page 1</p>
    <div>Hi Guys!</div>

    <p>Now : {{date('y-m-d H:i')}}</p>
@endsection
