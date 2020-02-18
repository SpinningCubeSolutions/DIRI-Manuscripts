@extends('layouts.base')

@section('title', 'About the DIRI Manuscript Project')
@section('heading','About the DIRI Manuscript Project')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <p>The Digital Library of the Dhammachai International Research Institute (DIRI) is making images of over 100,000 manuscripts from Thailand, Laos, Cambodia, Sri Lanka, and other countries available online and accessible for study. The project is funded by the Dhammachai International Research Institute and the 60th Dhammachai Education Foundation of New Zealand and Australia.</p>
    </div>
    <div class="col-sm-12">
        <img src="{{ URL::asset('/img/manuscript.png') }}" width="1000" alt="Manuscript cover">
    </div>
    <div class="col-sm-12">
        <br>
        <p>Based in the city of Dunedin, the Dhammachai International Research Institute conducts a number of activities in the field of Buddhist studies.</p>
        <p>The objectives of the Institute:</p>
        <ol>
            <li>To research and investigate the buddhavacana, the original teachings of the Buddha, without bias to any particular school or discipline such as Theravāda, Mahāyana or Vajrayāna.</li>
            <li>To promote both the academic study of Buddhism, especially the origins of Buddhism, and the application of the teachings to daily life.</li>
            <li>The establishment of its own journal by the Institute which will publish articles relating to these objectives.</li>
            <li>To co-operate with similar centers in other academic institutions in organizing seminars and conferences, etc.</li>
        </ol>

        <p>To find out more about the Dhammachai International Research Institute, visit the Institute's <a href="http://diri.ac.nz" target="_blank">home page.</p>
    </div>
    
</div>    
@endsection