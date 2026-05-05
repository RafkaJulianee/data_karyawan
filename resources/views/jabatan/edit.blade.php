@extends('layouts.app') 
 
@section('content') 
<h1 class="text-xl mb-4">Edit Jabatan</h1> 
 
<form action="/jabatan/{{ $jabatan->id }}" method="POST" class="bg-white p-4 shadow 
rounded"> 
    @csrf @method('PUT') 
    <input type="text" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}" 
class="border p-2 w-full mb-3"> 
    <button class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button> 
</form> 
@endsection 
