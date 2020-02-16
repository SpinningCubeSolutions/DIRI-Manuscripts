@extends('layouts.base')

@section('title', 'List of Manuscripts')

@section('head_content')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">    
@endsection

@section('heading', 'List of Manuscripts')

@section('content')
    
    {{-- <div class="row"><div class="col-xs-8 col-xs-offset-2"></div> --}}

    @include('manuscripts.listing')
    
    
@endsection