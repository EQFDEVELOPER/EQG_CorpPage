@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Catálogo de Productos</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($productos as $producto)
            <div class="p-4 bg-white shadow rounded-lg">
                <h2 class="font-bold text-xl">{{ $producto->nombre }}</h2>
                <p class="text-gray-600">{{ $producto->sustancia }}</p>
                <span class="text-blue-600 font-bold">${{ $producto->precio }}</span>
            </div>
        @endforeach
    </div>
@endsection
