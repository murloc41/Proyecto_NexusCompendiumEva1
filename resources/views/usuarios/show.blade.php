@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detalle de Usuario</h1>
    <p>ID: {{ $id }}</p>
    {{-- Aquí puedes mostrar más datos del usuario si se pasa el modelo --}}
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
