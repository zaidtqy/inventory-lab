@extends('layouts.default')

@section('content')
<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Inventaris Laboratorium Psikologi Menengah</h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merk</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Kuantitas</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->brand }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                        @if($item->description == 'DIPAKAI')
                                        <span class="badge badge-success">
                                                @elseif($item->description == 'RUSAK')
                                                <span class="badge badge-warning">
                                                    @else
                                                    <span>
                                                        @endif
                                                        {{ $item->description }}
                                                    </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('psimenengah_inventories.edit', $item->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('psimenengah_inventories.destroy', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                        Data Tidak Tersedia
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection