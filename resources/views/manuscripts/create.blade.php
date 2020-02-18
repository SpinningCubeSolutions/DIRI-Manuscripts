@extends ('layouts.base')

@section('title', 'Create New Manuscript')

@section('head_content')
    <link href="{{URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('heading', 'Add New Manuscript')

@section ('content')
    <div class="col-xs-12">
        <div class="text-center">    
            <br>
        </div>
    </div>

    <form action="{{ route('manuscripts.store')}}" method="post">
    {{-- <form action="{{ route('dumpAndDie')}}" method="post">     --}}
        @include('manuscripts.fields')
        <div class="form-group row">
            <div class="col-xs-12 text-center">
                <button type="submit" class="btn btn-primary">Add Manuscript</button>
            </div>
        </div>
        
    </form>
@endsection


