@extends('admin/index')

@section('content')
<form method="post">
    @csrf

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Role</label>
        <div class="col-sm-10">
            <select class="custom-select" name="role_id" required>
                @foreach($roles as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
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
