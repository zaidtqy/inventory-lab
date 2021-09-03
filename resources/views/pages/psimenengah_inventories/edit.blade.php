@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Ubah Inventaris</strong>
        <strong>({{ $item->name }})</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('psimenengah_inventories.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="brand" class="form-control-label">Merk Barang</label>
                <input type="text" name="brand" value="{{ old('brand') ? old('brand') : $item->brand }}" class="form-control @error('brand') is-invalid @enderror" />
                @error('brand') <div class="text-muted">Merk barang wajib diisi</div> @enderror
            </div>
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Barang</label>
                <input type="text" name="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror" />
                @error('name') <div class="text-muted">Nama barang wajib diisi</div> @enderror
            </div>
            <div class="form-group">
                <label for="category" class="form-control-label">Kategori</label>
                <select name="category" value="{{ old('category') ? old('category') : $item->category }}" class="form-control @error('category') is-invalid @enderror">
                    <option value="Elektronik">Elektronik</option>
                    <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                    <option value="Furniture">Furniture</option>
                </select>
                @error('category') <div class="text-muted">Kategori wajib diisi</div> @enderror
            </div>
            <div class="form-group">
                <label for="quantity" class="form-control-label">Kuantitas</label>
                <input type="number" name="quantity" value="{{ old('quantity') ? old('quantity') : $item->quantity }}" class="form-control @error('quantity') is-invalid @enderror" />
                @error('quantity') <div class="text-muted">Kuantitas wajib diisi</div> @enderror
            </div>
            <div class="form-group">
                <label for="description" class="form-control-label">Keterangan</label>
                <select name="description" value="{{ old('description') ? old('description') : $item->description }}" class="form-control @error('description') is-invalid @enderror">
                    <option value="DIPAKAI">DIPAKAI</option>
                    <option value="RUSAK">RUSAK</option>
                </select>
                @error('description') <div class="text-muted">Kategori wajib diisi</div> @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Ubah Barang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection