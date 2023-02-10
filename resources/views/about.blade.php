@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" class="rounded-circle" width="200" height="200" style="object-fit: cover">
@endSection