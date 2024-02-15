
@extends('adminlte::page')

@section('css')

@stop

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            EDITAR PRODUCTO
        </div>
        <div class="card-body">
            {{-- {{ $producto }} --}}
            <form action="{{ route('produco.update',$producto->id) }}" method="post">
                {{ method_field('PATCH') }}
                @csrf
                @include('producto.form')
            </form>
        </div>
    </div>
@stop

@section('js')
    <script>
        let vector=[];
        let N=10;

        for(i=0;i<N;i++){
            //elemento = parseInt(prompt("Ingrese un elemento("+ i+"):"))
            var maximo = 10000;
            var numeroAleatorioEntero = Math.floor(Math.random() * maximo);
            vector[i]= numeroAleatorioEntero;
        }

        console.log(vector);

    </script>
@stop
