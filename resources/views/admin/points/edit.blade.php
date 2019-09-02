@extends('layouts.index')

@section('content')
<form method="post" action="{{ url('points/'.$student->id)}}">
    @csrf
    @method('patch')
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $student->name }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">NRP</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="nrp" placeholder="NRP" value="{{ $student->nrp }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Student</label>
        <div class="col-sm-10">
            <select class="form-control" name="student_id">
              <?php foreach ($students as $student): ?>
                <option value="{{ $student->id }}">{{ $student->nrp."-".$student->name }}</option>
              <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
@endsection
