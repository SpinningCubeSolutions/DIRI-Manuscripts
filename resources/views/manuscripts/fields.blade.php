{{-- Physical Location --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="physical_location">Physical Location</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="text" name="physical_location" id="physical_location" />
    </div>
</div>

{{-- Classmark --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="classmark">Classmark</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="text" name="classmark" id="classmark" />
    </div>
</div>

{{-- Place of Origin --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="place_of_origin">Place of Origin</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="text" name="place_of_origin" id="place_of_origin" />
    </div>
</div>

{{-- Date of Creation --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="date_of_creation">Date of Creation</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="date" name="date_of_creation" id="date_of_creation" placeholder="yyyy-mm-dd" />
    </div>
</div>

{{-- Associated Persons --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="associated_persons">Associated Persons</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="text" name="associated_persons" id="associated_persons" />
    </div>
</div>

{{-- Physical Description --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="physical_description">Physical Description</label>
    </div>
    <div class="col-sm-8">
        <textarea name="physical_description" id="physical_description" rows="5" class="form-control"></textarea>
    </div>
</div>

{{-- Material --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="material">Material</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="text" name="material" id="material" />
    </div>
</div>

{{-- Format --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="format">Format</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="text" name="format" id="format" />
    </div>
</div>

{{-- Binding --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="binding">Binding</label>
    </div>
    <div class="col-sm-8">
        <input class="form-control" type="text" name="binding" id="binding" />
    </div>
</div>

{{-- images --}}
<div class="form-group">
    <div class="control-label col-sm-2">
        <label for="images">Images</label>
    </div>
    <div class="col-sm-8">
        <textarea name="images" id="images" rows="10" class="form-control" required placeholder="Paste image links from Google Drive here. Must be ONLY ONE image link per line"></textarea>
    </div>
</div>

@csrf