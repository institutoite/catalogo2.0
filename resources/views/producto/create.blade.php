
@extends('adminlte::page')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
   <div class="card">
    <div class="card-header">
        Crear Producto
    </div>
    <div class="card-body">
        


        @if($errors->has('nombre'))
            <span class="text-danger"> {{ $errors->first('nombre')}}</span>
        @endif

        <form action="{{ route('producto.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('producto.form')  
            
        </form>

    </div>
   </div>

   
@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script> 

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
        $(document).ready(function() {
      
            $("#fotos").fileinput(
                {
                maxFileCount: 5,
                showUpload: false,
                }
            );

            $("#iconomas").on("click",function(){
                $("#formcrearcategoria").modal("show");
            })

            $("#guardar").on("click",function(e){
                
                e.preventDefault();
                categoriaajax = $("#categoriaajax").val();

                //console.log(categoriaajax);
                
                $.ajax({
                    url : "{{ route('guardar.categoria.ajax')}}",
                    data:{categoria:categoriaajax},
                    type : 'GET',
                    success : function(respuesta) {
                        
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Gurdado correctamente",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $("#formcrearcategoria").modal("hide");
                        $html = "<option value="+ respuesta.id + ">"+ respuesta.categoria +"</option>" 
                        $("#categoria_id").append($html)
                        console.log(respuesta.categoria);
                    },
                });
               
            })

            
        });
      




    </script>
@stop


