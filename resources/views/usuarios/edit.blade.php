@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- Aquí van los campos del usuario para editar --}}
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
