@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Edit Layanan</h6>
                    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis Layanan</label>
                            <input type="text" class="form-control" id="jenis" name="jenis"
                                value="{{ old('jenis', $layanan->jenis) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" step="0.01"
                                value="{{ old('harga', $layanan->harga) }}" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('layanan.index') }}" class="btn btn-secondary ms-3">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
