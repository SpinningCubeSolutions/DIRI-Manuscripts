@extends('layouts.base')

@section('title', 'Manuscript Details')

@section('heading','Manuscript Details')

@section('content')
     <!-- Start: Manuscript Section -->
 <div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="booksmedia-detail-main">
                <div class="container">
                    <div class="text-center image-display">
                        <div class="post-thumbnail">
                            <img src="{{ $manuscript->preview_image }}" width="500" alt="">
                        </div>
                        <br>
                        <div class="text-center">
                        <button type="button" class="btn btn-primary" onclick="location.href='{{ route('manuscripts.viewer', ['manuscript' => $manuscript]) }}'">View Manuscript</button>
                        </div>
                    </div>
                    <div class="booksmedia-detail-box">
                        <div class="detailed-box">
                            
                            <div class="col-xs-12">
                                <div class="post-center-content">
                                    <p><strong>Physical Location:</strong> {{ $manuscript->physical_location }}</p>
                                    <p><strong>Classmark:</strong> {{ $manuscript->classmark }}</p>
                                    <p><strong>Subject(s):</strong> {{ $manuscript->subject }}</p>
                                    <p><strong>Subject(s) (Other language):</strong> {{ $manuscript->subject_other_lang }}</p>
                                    <p><strong>Author(s):</strong> {{ $manuscript->author }}</p>
                                    <p><strong>Place of Origin:</strong> {{ $manuscript->place_of_origin }}</p>
                                    <p><strong>Date of Creation:</strong> {{ $manuscript->date_of_creation }}</p>
                                    <p><strong>Associated Persons:</strong> {{ $manuscript->associated_persons }}</p>
                                    <p><strong>Material:</strong> {{ $manuscript->material }}</p>
                                    <p><strong>Format:</strong> {{ $manuscript->format }}</p>
                                    <p><strong>Binding:</strong> {{ $manuscript->binding }}</p>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <p><strong>Physical Description</strong><br> {{ $manuscript->physical_description }} </p>

                    </div>
                    @guest
                        
                    @else
                        <button type="button" class="btn btn-primary" onclick="location.href='{{ route('manuscripts.edit', ['manuscript' => $manuscript]) }}'">Edit Manuscript</button>
                        <p>To delete a manuscript, please contact <a href="mailto:michael@spinningcube.co.nz">the webmaster.</a></p>
                    @endguest
                </div>
            </div>
        </main>
    </div>
</div>

@endsection 