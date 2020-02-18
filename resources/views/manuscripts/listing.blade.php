@foreach ($manuscripts as $manuscript)

        <div class="row middlerow">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="well well-lg">
                    <div class="text-center">
                        <a href="{{ route('manuscripts.show', ['manuscript' => $manuscript]) }}"><img src="{{ $manuscript->preview_image }}" alt="" width="150"></a>
                        
                    <div>
                        <br><a href="{{ route('manuscripts.show', ['manuscript' => $manuscript]) }}">{{ $manuscript->place_of_origin }}</a>
                    </div>
                    
                    <div>
                        {{ $manuscript->date_of_creation }}
                    </div>
                </div>
                <br>
                    <div>
                    <p>{{ $manuscript->physical_description }}</p>
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach