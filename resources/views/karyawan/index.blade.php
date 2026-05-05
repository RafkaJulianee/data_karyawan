@extends('layouts.app') 
 
@section('content') 
<h1 class="text-xl font-bold mb-4">Data Karyawan</h1> 
 
<a href="/karyawan/create" class="bg-blue-500 text-white px-3 py-2 
rounded">Tambah</a> 
 
<table class="table-auto w-full mt-4 bg-white shadow"> 
    <thead> 
        <tr class="bg-gray-200"> 
            <th class="p-2">No</th> 
            <th>Nama</th> 
            <th>Jabatan</th> 
            <th>Alamat</th> 
            <th>No HP</th> 
            <th>Aksi</th> 
        </tr> 
    </thead> 
    <tbody> 
        @foreach ($karyawans as $k) 
        <tr> 
            <td class="p-2">{{ $loop->iteration }}</td> 
            <td>{{ $k->user->name }}</td> 
            <td>{{ $k->jabatan->nama_jabatan }}</td> 
            <td>{{ $k->alamat }}</td> 
            <td>{{ $k->no_hp }}</td> 
            <td> 
                <a href="/karyawan/{{ $k->id }}/edit" class="text-blue-500">Edit</a> 
                <form action="/karyawan/{{ $k->id }}" method="POST" class="inline"> 
                    @csrf @method('DELETE') 
                    <button class="text-red-500">Hapus</button> 
                </form> 
            </td> 
        </tr> 
        @endforeach 
    </tbody> 
</table> 
@endsection 
