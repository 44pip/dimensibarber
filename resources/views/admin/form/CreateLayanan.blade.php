@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="mb-0">Form Tambah Layanan</h6>
                        <a href="{{ route('layanan.index') }}" class="btn btn-outline-light btn-sm">Kembali</a>
                    </div>

                    <form action="{{ route('layanan.store') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="jenis" id="floatingJenis"
                                placeholder="Jenis Layanan" required>
                            <label for="floatingJenis">Jenis Layanan</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="deskripsi" id="floatingDeskripsi" placeholder="Deskripsi Layanan"
                                style="height: 150px;" required></textarea>
                            <label for="floatingDeskripsi">Deskripsi Layanan</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="number" class="form-control" name="harga" id="floatingHarga" placeholder="Harga"
                                step="0.01" max="99999999.99" required>
                            <label for="floatingHarga">Harga (Rp)</label>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
