<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>Data Karyawan</title> 
@vite('resources/css/app.css') 
</head> 
<body class="bg-gray-100"> 
<nav class="bg-blue-600 p-4 text-white flex justify-between"> 
<div> 
<a href="/dashboard" class="font-bold">Dashboard</a> 
</div> 
<div> 
<span>{{ auth()->user()->name }}</span> 
<form action="/logout" method="POST" class="inline"> 
@csrf 
<button class="ml-3 bg-red-500 px-2 py-1 rounded">Logout</button> 
</form> 
</div> 
</nav> 
<div class="flex"> 
<aside class="w-64 bg-white shadow h-screen p-4"> 
<ul> 
<li><a href="/dashboard" class="block py-2">Dashboard</a></li> 
<li><a href="/jabatan" class="block py-2">Jabatan</a></li> 
<li><a href="/karyawan" class="block py-2">Karyawan</a></li> 
</ul> 
</aside> 
<main class="flex-1 p-6"> 
@yield('content') 
</main> 
</div> 
</body> 
</html> 
