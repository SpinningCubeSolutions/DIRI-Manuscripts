@extends('layouts.base')

@section('title', 'Search')
@section('heading', 'Search')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h4>You can search our manuscript library here. Enter search terms below. </h4><br>
        </div>
    </div>
    <form action="{{ route('manuscripts.search') }}" method="post">
        
        <div class="form-group row">
            <div class="form-label col-sm-2"><br>Search terms</div>
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

    <h3>Search by Category</h3>
    <br>

    <form action="{{ route('manuscripts.searchOne') }}" method="post">

    <div class="form-group row">
        <div class="form-label col-sm-2">
            <select name="category" id="category" class="form-control" required>
                <option value="" disabled selected>Category</option>
                <option value="physical_location">Physical Location</option>
                <option value="classmark">Classmark</option>
                <option value="place_of_origin">Place of Origin</option>
                <option value="subject">Subject(s)</option>
                <option value="author">Author(s)</option>
                <option value="date_of_creation">Date of Creation</option>
                <option value="associated_persons">Associated Person(s)</option>
                <option value="physical_description">Physical Description</option>
                <option value="material">Material</option>
                <option value="format">Format</option>
                <option value="binding">Binding</option>
            </select>
        </div>
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
    {{-- <form action="route('manuscripts.searchOne'" method="post"> --}}

    </form>
@endsection