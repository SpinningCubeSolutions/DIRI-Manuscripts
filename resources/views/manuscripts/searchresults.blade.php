@extends('layouts.base')

@section('title', 'Search Results')

@section('head_content')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">    
@endsection

@section('heading', 'Search Results')

@section('content')
    
    @if (count($manuscripts) == 0)
        <div class="text-center padded-div">
            <h4>Your search for '{{ $searchTerm }}' did not return any results.</h4><br>
            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('manuscripts.showSearchForm') }}'">Back to Search Form</button>
        </div>
    @else
        <div class="row">
            <div class="col-sm-3">
                <a href="{{ route('manuscripts.showSearchForm') }}">< Search Form</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h4>You searched for: {{ $searchTerm }}</h4><br>
                    <h5>Your search returned {{ count($manuscripts) }} results.</h5>
                </div>
                <br>
            </div>
        </div>
        @include('manuscripts.listing')
    @endif

    

@endsection