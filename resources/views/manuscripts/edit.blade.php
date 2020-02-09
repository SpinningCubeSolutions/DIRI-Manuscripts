@extends('layouts.base')

@section('title', 'Edit Manuscript')

@section('head_content')
    <link href="{{URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('header')
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Edit Manuscript</h2>
                <span class="underline center"></span>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->
@endsection

@section('content')

<form action="{{ route('manuscripts.update', ['manuscript' => $manuscript]) }}" method="post">
    @csrf
    @method('PUT')
    @include('manuscripts.fields')
        <div class="form-group row">
            <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-primary">Update Manuscript</button>
            </div>
        </div>
</form>
    
@endsection