@extends('layouts.index')

@section('content')
<form method="post" action="{{ url('points/'.$point->id)}}">
    @csrf
    @method('patch')
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">NRP</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="NRP" value="{{ $point->student->nrp }}" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Name" value="{{ $point->student->name }}" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Point</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="point" placeholder="Point" value={{ $point->point }}
                required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Note</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="note" placeholder="Note" value={{ $point->note }} required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
@endsection
