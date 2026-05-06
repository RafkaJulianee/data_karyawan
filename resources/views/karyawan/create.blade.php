@extends('layouts.app') 
 
@section('content') 
<h1 class="text-xl mb-4">Tambah Karyawan</h1> 
 
<form action="/karyawan" method="POST" class="bg-white p-4 shadow rounded"> 
    @csrf 
 
    <select name="user_id" class="border p-2 w-full mb-3"> 
        @foreach ($users as $u) 
        <option value="{{ $u->id }}">{{ $u->name }}</option> 
        @endforeach 
    </select> 
 
    <select name="jabatan_id" class="border p-2 w-full mb-3"> 
        @foreach ($jabatans as $j) 
        <option value="{{ $j->id }}">{{ $j->nama_jabatan }}</option> 
        @endforeach 
    </select> 
 
    <input type="text" name="alamat" placeholder="Alamat" class="border p-2 w-full 
mb-3"> 
    <input type="text" name="no_hp" placeholder="No HP" class="border p-2 w-full mb-3"> 
 
    <button class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button> 
</form> 
@endsection 
