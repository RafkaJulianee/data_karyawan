@extends('layouts.app') 
@section('content') 
<h1 class="text-xl font-bold mb-4">Data Jabatan</h1> 
<a href="/jabatan/create" class="bg-blue-500 text-white px-3 py-2 
rounded">Tambah</a> 
<table class="table-auto w-full mt-4 bg-white shadow"> 
<thead> 
<tr class="bg-gray-200"> 
<th class="p-2">No</th> 
<th>Nama Jabatan</th> 
<th>Aksi</th> 
</tr> 
</thead> 
<tbody> 
@foreach ($jabatans as $j) 
<tr> 
<td class="p-2">{{ $loop->iteration }}</td> 
<td>{{ $j->nama_jabatan }}</td> 
<td> 
<a href="/jabatan/{{ $j->id }}/edit" class="text-blue-500">Edit</a> 
<form action="/jabatan/{{ $j->id }}" method="POST" class="inline"> 
@csrf @method('DELETE') 
<button class="text-red-500">Hapus</button> 
</form> 
</td> 
</tr> 
@endforeach 
</tbody> 
</table> 
@endsection 
