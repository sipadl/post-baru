@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Staff</h1>
        <a href="{{ route('staff.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(count($data) > 0)
    <table class="table" id="myDataTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>nama</th>
<th>image</th>
<th>fakultas</th>
<th>mata_pelajaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @php $counter = 1; @endphp
        @foreach($data as $item)
            <tr>
                <td> {{ $counter++ }}</td>
                <td>{{ $item->nama }}</td>
<td>{{ $item->image }}</td>
<td>{{ $item->fakultas }}</td>
<td>{{ $item->mata_pelajaran }}</td>
                <td>
                    <a href="{{ route('staff.show', ['id' => $item->id]) }}" class="btn btn-sm btn-info">Detail</a>
                    <a href="{{ route('staff.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('staff.delete', ['id' => $item->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
        <p>No posts found</p>
    @endif
  </script>
@endsection
