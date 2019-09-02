@extends('layouts.index')

@section('content')
<a href="/admin/user/create" class="btn btn-primary" style="margin-bottom: 20px">Create</a>
<table id="table" class="table table-striped mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php $i=0 ?>
        @foreach($users as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->role->name }}</td>
            <td>
                <a href="{{ '/admin/user/edit/' . $item->id }}" class="edit" title="Edit" data-toggle="tooltip"><i
                        class="material-icons">&#xE254;</i></a>
                <a href="#" class="delete-item" title="Delete" data-toggle="tooltip" data-id="{{ $item->id }}"><i
                        class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
    $(".delete-item").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('admin/user/delete') }}',
                    method: "delete",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
</script>
@endsection
