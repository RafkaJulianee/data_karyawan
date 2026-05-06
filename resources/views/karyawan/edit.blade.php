@extends('layouts.app') 
 
@section('content') 
<h1 class="text-xl mb-4">Edit Karyawan</h1> 
 
<form action="/karyawan/{{ $karyawan->id }}" method="POST" class="bg-white p-4 
shadow rounded"> 
    @csrf @method('PUT') 
 
    <select name="jabatan_id" class="border p-2 w-full mb-3"> 
        @foreach ($jabatans as $j) 
        <option value="{{ $j->id }}" {{ $karyawan->jabatan_id == $j->id ? 'selected' : '' }}> 
            {{ $j->nama_jabatan }} 
        </option> 
        @endforeach 
    </select> 
 
    <input type="text" name="alamat" value="{{ $karyawan->alamat }}" class="border p-2 
w-full mb-3"> 
    <input type="text" name="no_hp" value="{{ $karyawan->no_hp }}" class="border p-2 
w-full mb-3"> 
 
    <button class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button> 
</form> 
@endsection 
