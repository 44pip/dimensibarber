@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <!-- Tabel Layanan -->
            <div class="col-lg-6">
                <div class="bg-secondary rounded p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="mb-0">Tabel Layanan</h6>
                        <form method="GET" action="{{ route('dashboard.index') }}" class="d-flex">
                            <input type="text" name="search_layanan" class="form-control me-2"
                                placeholder="Cari Layanan..." value="{{ request('search_layanan') }}">
                            <button class="btn btn-primary">Cari</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($layanan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->jenis }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>Rp.{{ number_format($item->harga, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $layanan->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>

            <!-- Tabel Pemesanan -->
            <div class="col-lg-6">
                <div class="bg-secondary rounded p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="mb-0">Tabel Pemesanan</h6>
                        <form method="GET" action="{{ route('dashboard.index') }}" class="d-flex">
                            <input type="text" name="search_pemesanan" class="form-control me-2"
                                placeholder="Cari Pemesanan..." value="{{ request('search_pemesanan') }}">
                            <button class="btn btn-primary">Cari</button>
                        </form>
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
                                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d - F - Y') }}</td>
                                        <td>{{ $item->waktu }}</td>
                                        <td>{{ $item->catatan }}</td>
                                        <td>
                                            <span class="badge {{ $item->status == 'Done' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pemesanan->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>

            <!-- Tabel Testimoni -->
            <div class="col-lg-12">
                <div class="bg-secondary rounded p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="mb-0">Tabel Testimoni</h6>
                        <form method="GET" action="{{ route('dashboard.index') }}" class="d-flex">
                            <input type="text" name="search_testimoni" class="form-control me-2"
                                placeholder="Cari Testimoni..." value="{{ request('search_testimoni') }}">
                            <button class="btn btn-primary">Cari</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Komentar</th>
                                    <th scope="col">Tanggal & Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimoni as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->komentar }}</td>
                                        <td>{{ $item->waktu_dan_tanggal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $testimoni->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
