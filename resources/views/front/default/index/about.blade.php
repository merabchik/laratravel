
@extends('front/default/layouts/app')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
 about
@endsection