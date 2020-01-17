@extends ('layouts.base')

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

@section ('content')
    <h1>Add New Manuscript</h1>
    <form action="{{ route('manuscripts.store')}}" method="post">
        @include('manuscripts.fields')
        <div class="form-group row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Add Manuscript</button>
            </div>
        </div>
        
    </form>
@endsection


