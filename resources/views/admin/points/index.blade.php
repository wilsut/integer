@extends('layouts.index')

@section('content')
<a href="{{ route('points.create') }}" class="btn btn-primary" style="margin-bottom: 20px">Create</a>
<table id="table" class="table table-striped mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NRP</th>
            <th scope="col">Name</th>
            <th scope="col">Note</th>
            <th scope="col">Point</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php $i=0 ?>
        @foreach($points as $point)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $point->student->nrp }}</td>
            <td>{{ $point->student->name }}</td>
            <td>{{ $point->note }}</td>
            <td>{{ $point->point }}</td>
            <td>
                <a href="{{ route('points.edit', $point->id) }}" class="edit" title="Edit" data-toggle="tooltip"><i
                        class="material-icons">&#xE254;</i></a>
                <a href="#" class="delete-item" title="Delete" data-toggle="tooltip" data-id="{{ $point->id }}"><i
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
