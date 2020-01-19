{{-- Physical Location --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="physical_location" id="physical_location" placeholder="Physical Location"/>
    </div>
</div>

{{-- Classmark --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="classmark" id="classmark" placeholder="Classmark" />
    </div>
</div>

{{-- Subject(s) --}}
<div class="form-group row">
    <div class="col-sm-2"></div>  
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="subject" id="subject" placeholder="Suject(s)" />
    </div>
</div>

{{-- Author(s) --}}
<div class="form-group row">
    <div class="col-sm-2"></div>  
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="author" id="author" placeholder="Author(s)" />
    </div>
</div>

{{-- Place of Origin --}}
<div class="form-group row">
    <div class="col-sm-2"></div>  
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="place_of_origin" id="place_of_origin" placeholder="Place of Origin" />
    </div>
</div>

{{-- Date of Creation --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="date_of_creation" id="date_of_creation" placeholder="Date of Creation" />
    </div>
</div>

{{-- Associated Persons --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="associated_persons" id="associated_persons" placeholder="Associated Person(s)" />
    </div>
</div>

{{-- Physical Description --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <textarea name="physical_description" id="physical_description" rows="5" class="form-control input-field" placeholder="Physical Description"></textarea>
    </div>
</div>

{{-- Material --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <textarea name="images" id="images" rows="3" class="form-control input-field" placeholder="Material"></textarea>
    </div>
</div>

{{-- Format --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="format" id="format" placeholder="Format"/>
    </div>
</div>

{{-- Binding --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <input class="form-control input-field" type="text" name="binding" id="binding" placeholder="Binding"/>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 form-field">
        <strong>Manuscript Images</strong>
    </div>
</div>

{{-- images --}}
<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <textarea name="images" id="images" rows="10" class="form-control input-field" required placeholder="Paste image links from Google Drive here. Must be ONLY ONE image link per line"></textarea>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-1">Image Width</div>
    <div class="col-sm-2">
        <input class="form-control input-field" type="text" name="width" id="width" placeholder="px"/>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-1">Image Height</div>
    <div class="col-sm-2">
        <input class="form-control input-field" type="text" name="height" id="height" placeholder="px"/>
    </div>
</div>

@csrf