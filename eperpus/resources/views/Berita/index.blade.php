@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Berita</h1>
        <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah</a>
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
            <th>judul</th>
<th>image</th>
<th>isi</th>
<th>penulis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @php $counter = 1; @endphp
        @foreach($data as $item)
            <tr>
                <td> {{ $counter++ }}</td>
                <td>{{ $item->judul }}</td>
<td>{{ $item->image }}</td>
<td>{{ $item->isi }}</td>
<td>{{ $item->penulis }}</td>
                <td>
                    <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="btn btn-sm btn-info">Detail</a>
                    <a href="{{ route('berita.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('berita.delete', ['id' => $item->id]) }}" class="btn btn-sm btn-danger">Delete</a>
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
