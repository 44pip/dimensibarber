@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col-lg-12">
                <div class="bg-secondary rounded p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="mb-0">Tabel Layanan</h6>
                        <a href="{{ route('layanan.create') }}" class="btn btn-primary btn-sm">Tambah Layanan</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($layanan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->jenis }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>Rp.{{ number_format($item->harga, 0, ',', '.') }}</td>
                                        <td class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('layanan.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('layanan.destroy', $item->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        {!! $layanan->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
