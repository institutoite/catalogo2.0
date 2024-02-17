
@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@stop


@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="container">


    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Different Width</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-4">
              <input type="text" class="form-control" placeholder=".col-2">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder=".col-2">
            </div>
            <div class="col-4">
              <input type="text" class="form-control" placeholder=".col-2">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>

    <div class="card">
        <div class="card-header p-3">
            <div>
                <a href="{{ route('producto.crear') }}"> <button class="btn btn-danger">crear</button></a>
                
                <div class="float-right">
                    <a href="" id="crear_producto_modal" class="btn btn-sm float-right text-white"  data-placement="left">
                        <i id="crearproducto" class="fa-solid fa-circle-plus fa-3x text-success"></i>
                    </a>
                </div>

                
            </div>
        </div>
        <div class="card-body">
            <table id="productos" class="table table-bordered table-hover table-striped nowrap" style="width:100%">
                <thead class="">
                    <th>#</th>
                    <th>nombre</th>
                    <th>stock</th>
                    <th>precio</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->precio }}</td>
                        {{-- <td>{{ $producto->foto }}</td>
                        <td>{{ $producto->video }}</td> --}}
                        <td>
                            <a class="eliminar">
                                <i class="fa-solid fa-trash-can text-danger"></i>
                            </a>
                            
                            
                            &nbsp;
                            <i class="fa-brands fa-whatsapp text-success"></i>&nbsp;
                            <a href="{{ route('producto.editar',$producto) }}"> 
                                    <i class="fa-solid fa-pen-to-square text-indigo"></i>
                                </a>
                                <a href="{{ route('mostrar.producto',$producto) }}">
                                    <i class="fa-regular fa-eye text-fuchsia"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-foorter ">
            este es ele pie 
        </div>
        
    </div>
</div>

{{-- esto es el modal para crear un producto desde ajax --}}
  <!-- Modal -->
  <div class="modal fade" id="modal_crear_producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @include('producto.formajax')
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a id="guardarAjaxModal" class="btn btn-primary">Guardar</a>
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<!-- Usando un CDN para el idioma español -->
<script src="https://cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/buffer.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/filetype.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/fileinput.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/locales/fr.js"></script>


{{-- agregando funcionalidades a bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function(){
        $("#fotos").fileinput(
                {
                maxFileCount: 5,
                showUpload: false,
                }
            );

        // $("#productos").dataTable();
        new DataTable('#productos', {
            responsive: true,
            "lengthMenu": [[5, 10, 20,30,50,100, -1], [5, 10, 20,30,50,100, "Todos"]],
            
        });






        $("#crear_producto_modal").on("click",function(e){
            e.preventDefault();
            
            $.ajax({
                url:"{{ route('jalar.categorias')}}",
                type:"GET",
                dataType:"json",
                success:function(categorias){
                    $("#categoriaselect").empty();
                    $("#categoriaselect").append(`<option>Elija una categoria</option>`);
                    categorias.forEach(categoria => {
                        $("#categoriaselect").append(`<option value=${categoria.id}>${categoria.categoria}</option>`);
                    });
                }
            });

            $("#modal_crear_producto").modal("show");

            console.log("Me hicieron click");
        })

       


        $(".eliminar").on("click",function(){
            id=50;
            $.ajax({
                url : "{{ route('producto.destroy')}}",
                data : { id_producto : id },
                type : 'GET',
                dataType : 'json',
                success : function(json) {
                    console.log(json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        });

        $("#guardarAjaxModal").on("click",function(e){
            e.preventDefault();
            console.log("hiciste click en guardar ajax");
            let nombreAenviar=$("#nombre").val();
            let stockAenviar=$("#stock").val();
            let precioAenviar=$("#precio").val();
            let fechavencimientoAenviar=$("#fechavencimiento").val();
            let fotoAenviar=$("#foto").val();
            let videoAenviar=$("#video").val();
            console.log("nombreAenviar:",nombreAenviar);
            console.log("stockAenviar:",stockAenviar);
            console.log("precioAenviar:",precioAenviar);
            console.log("fechavencimientoAenviar:",fechavencimientoAenviar);
            console.log("fotoAenviar:",fotoAenviar);
            console.log("videoAenviar:",videoAenviar);


            $.ajax({
                url : "{{ route('producto.guardar.ajax')}}",
                data : { 
                    nombre :nombreAenviar,
                    stock :stockAenviar,
                    precio :precioAenviar,
                    fechavencimiento:fechavencimientoAenviar,
                },
                type : 'GET',
                success : function(json) {
                    console.log(json);
                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            })
        })

    })
    </script>
@stop
