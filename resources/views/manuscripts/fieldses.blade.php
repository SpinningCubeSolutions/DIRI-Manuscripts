{{-- Physical Location --}}
<div class="form-group row">
    <label for="physical_location" class="col-sm-2 col-form-label">Physical Location</label>
    <div class="col-sm-10">
        <input name="physical_location" type="text" class="form-control" placeholder="Physical Location" value="{{ $manuscript->physical_location ?? ''}}"/>
    </div>
</div>

<div class="form-group row">
    <label for="classmark" class="col-sm-2 col-form-label">Classmark</label>
    <div class="col-sm-10">
        <input name="classmark" type="text" class="form-control" placeholder="Classmark" value="{{ $manuscript->classmark ?? ''}}"/>
    </div>
</div>

<div class="form-group row">
    <label for="place_of_origin" class="col-sm-2 col-form-label">Place of Origin</label>
    <div class="col-sm-10">
        <input name="place_of_origin" type="text" class="form-control" placeholder="Place of Origin" value="{{ $manuscript->place_of_origin ?? ''}}"/>
    </div>
</div>

<div class="form-group row">
    <label for="date_of_creation" class="col-sm-2 col-form-label">Date of Creation</label>
    <div class="col-sm-10">
        <input name="date_of_creation" type="date" class="form-control" placeholder="YYYY-MM-DD" value="{{ $manuscript->date_of_creation ?? ''}}"/>
    </div>
</div>

<div class="form-group row">
    <label for="associated_persons" class="col-sm-2 col-form-label">Associated Person(s)</label>
    <div class="col-sm-10">
        <input name="place_of_origin" type="text" class="form-control" placeholder="Place of Origin" value="{{ $manuscript->place_of_origin ?? ''}}"/>
    </div>
</div>

<div class="form-group row">
    <label for="physical_description" class="col-sm-2 col-form-label">Physical Description</label>
    <div class="col-sm-10">
        <textarea name="physical_description" id="physical_description"  rows="20"></textarea>
    </div>
</div>

