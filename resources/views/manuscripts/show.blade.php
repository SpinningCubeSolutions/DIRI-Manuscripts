@extends('layouts.base')

@section('content')
    <dl class="row">
        <dt class="col-sm-3">Physical Location</dt>
        <dd class="col-sm-9">{{ $manuscript->physical_location }}</dd>

        <dt class="col-sm-3">Classmark</dt>
        <dd class="col-sm-9">{{ $manuscript->classmark }}</dd>

        <dt class="col-sm-3">Place of Origin</dt>
        <dd class="col-sm-9">{{ $manuscript->place_of_origin }}</dd>

        <dt class="col-sm-3">Date of Creation</dt>
        <dd class="col-sm-9">{{ date('F d, Y', strtotime($manuscript->date_of_creation)) }}</dd>

        <dt class="col-sm-3">Associated Persons</dt>
        <dd class="col-sm-9">{{ $manuscript->associated_persons }}</dd>

        <dt class="col-sm-3">Physical Description</dt>
        <dd class="col-sm-9">{{ $manuscript->physical_description }}</dd>

        <dt class="col-sm-3">Material</dt>
        <dd class="col-sm-9">{{ $manuscript->material }}</dd>

        <dt class="col-sm-3">Format</dt>
        <dd class="col-sm-9">{{ $manuscript->format }}</dd>

        <dt class="col-sm-3">Binding</dt>
        <dd class="col-sm-9">{{ $manuscript->binding }}</dd>
    </dl>

    <table>
        @foreach ($manuscriptImages as $image)
            <tr>
            <td><img src="{{ URL::asset($image) }}" width="300" ></td>
            </tr>
        @endforeach
    </table>
@endsection