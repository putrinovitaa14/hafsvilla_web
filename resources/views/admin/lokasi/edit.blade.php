@extends('layouts.admin')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Lokasi</h4>
                <form class="forms-sample" action="{{ route('lokasi.update', $lokasis->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" class="form-control mb-2  @error('lokasi') is-invalid @enderror"
                            value="{{ $lokasis->lokasi }}">
                        @error('lokasi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                    <a href="/lokasi" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
