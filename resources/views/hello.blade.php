@extends('layouts.master')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <h1 class="text-uppercase">Laravel 5</h1>
    <blockquote>{{ Inspiring::quote() }}</blockquote>
@stop