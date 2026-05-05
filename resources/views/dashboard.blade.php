@extends('layouts.app') 
@section('content') 
<h1 class="text-2xl font-bold mb-4">Dashboard</h1> 
<div class="grid grid-cols-2 gap-4"> 
<div class="bg-white p-4 shadow rounded"> 
<h2 class="text-lg">Total Karyawan</h2> 
<p class="text-3xl">{{ $totalKaryawan }}</p> 
</div> 
<div class="bg-white p-4 shadow rounded"> 
<h2 class="text-lg">Total Jabatan</h2> 
<p class="text-3xl">{{ $totalJabatan }}</p> 
</div> 
</div> 
@endsection 
