@extends('layouts.template')

@section('content')
<form action="{{ route('akun.update', $akun['id'])}}" method="POST" class="card p-5">
    @csrf
    @method('PATCH')

    @if ($errors->any())
    <ul class="alert alert-danger p-3">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama  :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ $akun['name']}}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">email  :</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="{{ $akun['email']}}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Tipe Pengguna :</label>
        <div class="col-sm-10">
            <select class="form-select" id="type" name="type">
                <option selected disabled hidden>Pilih</option>
                <option value="admin" {{ $akun ['role'] == 'admin' ? 'selected' : ''}}>admin</option>
                <option value="cashier" {{ $akun ['role'] == 'cashier' ? 'selected' : ''}}>kasir</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Ubah Password :</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" value="{{ $akun['price'] }}">
        </div>
        <button type="submit" class="btn btn-primay mt-3">Simpan Perubahan</button>
    </div>
</form>
@endsection

