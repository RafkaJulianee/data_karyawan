@extends('layouts.app') 
 
@section('content') 
<h1 class="text-xl mb-4">Tambah Jabatan</h1> 
 
<form action="/jabatan" method="POST" class="bg-white p-4 shadow rounded"> 
    @csrf 
    <input type="text" name="nama_jabatan" placeholder="Nama Jabatan" class="border 
p-2 w-full mb-3"> 
    <button class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button> 
</form> 
@endsection 
