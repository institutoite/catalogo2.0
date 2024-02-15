@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-header bg-secondary">
            {{ $producto->nombre }}
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>ATRIBUTO</th>
                    <th>VALOR</th>
                </thead>
                <tbody>
                    <tr>
                        <td>NOMBRE</td>
                        <td>{{ $producto->nombre }}</td>
                    </tr>
                    <tr>
                        <td>PRECIO</td>
                        <td>{{ $producto->precio }}</td>
                    </tr>
                    <tr>
                        <td>STOCK</td>
                        <td>{{ $producto->stock }}</td>
                    </tr>
                    <tr>
                        <td>FECHA VENCIMIENTO</td>
                        <td>{{ $producto->fvencimiento }}</td>
                    </tr>
                    <tr>
                        <td>FOTO</td>
                        <td>{{ $producto->foto }}</td>
                    </tr>
                    <tr>
                        <td>VIDEO</td>
                        <td>{{ $producto->video }}</td>
                    </tr>
                    <tr>
                        <td>CREACION</td>
                        <td>{{ $producto->created_at }}</td>
                    </tr>
                    <tr>
                        <td>ACTUALIZACION</td>
                        <td>{{ $producto->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop