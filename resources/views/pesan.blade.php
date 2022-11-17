@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/pesan') }}" class="btn btn-success">+ Pesanan Baru</a>
    <form action="">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor Meja Pelanggan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="....">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Makanan</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Minuman</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    </form>
</div>
@endsection
