@extends('layouts.base')

@section('title', 'List of Manuscripts')

@section('header')
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
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

    @foreach ($manuscripts as $manuscript)

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="well well-lg">
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