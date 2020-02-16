@extends('layouts.base')

@section('title', 'Search')
@section('heading', 'Search')

@section('content')
    <form action="{{ route('manuscripts.search') }}" method="post">
        <div class="form-group row">
            <div class="form-label col-sm-2"><br>Search for manuscripts</div>
            <div class="col-sm-8 form-field">
                <input class="form-control input-field" type="text" name="search_parameters" id="search_parameters" placeholder="Enter search terms" />
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
        @csrf
    </form>
@endsection