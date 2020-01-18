@extends('layouts.base')

@section('title', 'Manuscript Details')

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
     <!-- Start: Manuscript Section -->
 <div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="booksmedia-detail-main">
                <div class="container">
                    <div class="text-center image-display">
                        <div class="post-thumbnail">
                            <img src="{{ $displayImage }}" width="500" alt="">
                        </div>
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
                        <p><strong>Physical Description</strong> {{ $manuscript->physical_description }} </p>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


    {{-- <table>
        @foreach ($manuscriptImages as $image)
            <tr>
            <td><img src="{{ URL::asset($image) }}" width="300" ></td>
            </tr>
        @endforeach
    </table> --}}
@endsection 