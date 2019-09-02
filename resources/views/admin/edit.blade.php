@extends('admin/index')

@section('content')
<form method="post">
    @csrf
    @method('patch')

    <input type="hidden" name="id" value="{{ $user->id }}" />
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $user->name }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Role</label>
        <div class="col-sm-10">
            <select class="custom-select" name="role_id" required>
                @foreach($roles as $item)
                <option value="{{ $item->id }}" {{ $item->id == $user->role_id ? 'selected' : '' }}>
                    {{ $item->name }}</option>
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
