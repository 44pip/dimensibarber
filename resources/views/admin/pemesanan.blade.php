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
                        <h6 class="mb-0">Tabel Pemesanan</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Catatan</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemesanan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->waktu }}</td>
                                        <td>{{ $item->catatan }}</td>
                                        <td>
                                            <form action="{{ route('pemesanan.update', $item->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" onchange="this.form.submit()" class="form-select"
                                                    style="width: 100px; margin: 0 auto; background-color: {{ $item->status == 'Done' ? '#d4edda' : '#f8d7da' }}; color: {{ $item->status == 'Done' ? '#155724' : '#721c24' }};">
                                                    <option value="Done" {{ $item->status == 'Done' ? 'selected' : '' }}>
                                                        Done</option>
                                                    <option value="Belum"
                                                        {{ $item->status == 'Belum' ? 'selected' : '' }}>
                                                        Belum</option>
                                                </select>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        {!! $pemesanan->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
