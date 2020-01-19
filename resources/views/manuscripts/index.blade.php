@extends('layouts.base')

@section('title', 'List of Manuscripts')

@section('head_content')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">    
@endsection

@section('header')
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner header-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Manuscript Listing</h2>
                <span class="underline center"></span>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->
@endsection

@section('content')
    
    {{-- <div class="row"><div class="col-xs-8 col-xs-offset-2"></div> --}}

    </div>
    @foreach ($manuscripts as $manuscript)

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="well well-lg">
                    <div class="text-center">
                        <img src="{{ \App\Http\Controllers\ManuscriptController::getDisplayImage($manuscript, 1) }}" alt="" width="150">
                    </div>
                    <div>
                        <a href="{{ route('manuscripts.show', ['manuscript' => $manuscript]) }}">{{ $manuscript->place_of_origin }}</a>
                    </div>
                    <div>
                        {{ $manuscript->date_of_creation }}
                    </div>
                    <div>
                    <p>{{ $manuscript->physical_description }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach
    
@endsection