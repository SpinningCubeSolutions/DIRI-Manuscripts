@extends('layouts.base')

@section('title', 'Edit Manuscript')

@section('head_content')
    <link href="{{URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('heading', 'Edit Manuscript')

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