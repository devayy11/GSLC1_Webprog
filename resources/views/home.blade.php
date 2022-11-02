@extends('tamplate')
@section('title')
<link rel="stylesheet" href="style.css">
@section('content')
    <h1>Apotik Sejahtera</h1>

    @foreach ($obats as $listobat)
    <div class="bagian">

        <div class="nama-obat">
            {{$listobat->Nama_Obat}}
        </div>
        <div class="deskripsi">
            {{$listobat->Deskripsi}}
        </div>
        <div class="harga">
            {{$listobat->Harga}}
        </div>
        <div class="gambar">
            <img src={{$listobat->url_gambar}} alt="list-obat">
        </div>
</div>




    @endforeach
@endsection
