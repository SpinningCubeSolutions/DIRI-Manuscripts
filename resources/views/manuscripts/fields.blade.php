{{-- Physical Location --}}
<div class="form-group row">
    
    <div class="form-label col-sm-2"><br>Physical Location</div>
    
    <div class="col-sm-8 form-field">
    <input class="form-control input-field" type="text" name="physical_location" id="physical_location" value="{{ old('physical_location', $manuscript->physical_location ?? null) }}" placeholder="Physical Location"/>
    </div>
</div>

{{-- Classmark --}}
<div class="form-group row">
    
    <div class="form-label col-sm-2"><br>Classmark</div>
    
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="classmark" id="classmark" value="{{ old('classmark', $manuscript->classmark ?? null) }}" placeholder="Classmark" />
    </div>
</div>

{{-- Subject(s) --}}
<div class="form-group row">
    
    <div class="form-label col-sm-2"><br>Subject(s)</div>  
    
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="subject" id="subject" value="{{ old('subject', $manuscript->subject ?? null) }}" placeholder="Subject(s)" />
    </div>
</div>

    
{{-- Subject (other language) --}}
<div class="form-group row">
    
    <div class="form-label col-sm-2"><br>Subject(s) (Other language)</div>  
    
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="subject_other_lang" id="subject_other_lang" value="{{ old('subject_other_lang', $manuscript->subject_other_lang ?? null) }}" placeholder="Subject(s) (Other language)" />
    </div>
</div>

{{-- Author(s) --}}
<div class="form-group row">
    <div class="col-sm-2 form-label"><br>Author(s)</div>  
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="author" id="author" value="{{ old('author', $manuscript->author ?? null) }}" placeholder="Author(s)" />
    </div>
</div>

{{-- Place of Origin --}}
<div class="form-group row">
    <div class="col-sm-2 form-label"><br>Place of Origin</div>  
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="place_of_origin" id="place_of_origin" value="{{ old('place_of_origin', $manuscript->place_of_origin ?? null) }}" placeholder="Place of Origin" />
    </div>
</div>

{{-- Date of Creation --}}
<div class="form-group row">
    <div class="form-label col-sm-2"><br>Date of Creation</div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="date_of_creation" id="date_of_creation" value="{{ old('date_of_creation', $manuscript->date_of_creation ?? null) }}" placeholder="Date of Creation" />
    </div>
</div>

{{-- Associated Persons --}}
<div class="form-group row">
    <div class="form-label col-sm-2"><br>Associated Persons</div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="associated_persons" id="associated_persons" value="{{ old('associated_persons', $manuscript->associated_persons ?? null) }}" placeholder="Associated Person(s)" />
    </div>
</div>

{{-- Physical Description --}}
<div class="form-group row">
    <div class="form-label col-sm-2"><br>Physical Description</div>
    <div class="col-sm-8 form-field">
        <textarea name="physical_description" id="physical_description" rows="5" class="form-control input-field" placeholder="Physical Description">{{ old('physical_description', $manuscript->physical_description ?? null) }}</textarea>
    </div>
</div>

{{-- Material --}}
<div class="form-group row">
    <div class="form-label col-sm-2"><br>Material</div>
    <div class="col-sm-8 form-field">
        <textarea name="material" id="material" rows="3" class="form-control input-field" value="{{ old('material', $manuscript->material ?? null) }}placeholder="Material"></textarea>
    </div>
</div>

{{-- Format --}}
<div class="form-group row">
    <div class="form-label col-sm-2"><br>Format</div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="format" id="format" value="{{ old('format', $manuscript->format ?? null) }}" placeholder="Format"/>
    </div>
</div>

{{-- Binding --}}
<div class="form-group row">
    <div class="form-label col-sm-2"><br>Binding</div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="binding" id="binding" value="{{ old('binding', $manuscript->binding ?? null) }}" placeholder="Binding"/>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <strong>Manuscript Images (from Google Drive) </strong>
    <a href="{{ route('google-drive') }}" target="_blank"> Get Image Links</a>
    </div>
</div> 


{{-- images --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <textarea name="images" id="images" rows="10" class="form-control input-field" placeholder="Image link|width:height, eg. https://drive.google.com/open?id=ABCDEFGHIJKLMNOP|2000:6000">{{ old('images', $images ?? null) }}</textarea>
    </div>
</div>

{{-- Preview Image --}}
<div class="form-group row">
    <div class="form-label col-sm-2"><br></div>
    <div class="col-sm-8 form-field">
        <p>Please copy and paste one of the image links from above to use as a preview image in the manuscript listing.</p>
        <input class="form-control input-field" type="text" name="preview_image" id="preview_image" value="{{ old('preview_image', $manuscript->preview_image ?? null) }}" placeholder="Preview Image (DO NOT paste the width and height part, e.g. |2000:180) "/>
    </div>
</div>

@csrf