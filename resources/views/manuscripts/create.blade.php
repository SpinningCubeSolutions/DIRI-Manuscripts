@extends ('layouts.base')

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


