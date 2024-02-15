<div class="form-floating mb-3">
    <input type="text" class="form-control" id="nombre" value="{{$producto->nombre ?? 'Mouse'}}" name="nombre">
    <label for="nombre">Nombre</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="stock"  name="stock" value="{{$producto->stock ?? '25'}}">
    <label for="stock">stock</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="precio" name="precio" value="{{$producto->precio ?? '40'}}">
    <label for="precio">precio</label>
</div>

<div class="form-floating mb-3">
    <input type="date" class="form-control" id="fvencimiento" name="fvencimiento" value="{{$producto->fvencimiento ?? '2023-12-05'}}">
    <label for="fvencimiento">Fecha vencimiento</label>
</div>

<div class="form-floating mb-3">
    <input type="file" class="form-control" id="foto" name="foto">
    <label for="foto">foto</label>
</div>

<div class="form-floating mb-3">
    <input type="file" class="form-control" id="video" name="video">
    <label for="video">Video</label>
</div>

<div class="row">
    <div class="col-11">
        <div class="form-floating mb-3">
            <select class="form-control" name="categoria_id" id="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach
                
            </select>
            <label for="categoria_id">Video</label>
        </div>
    </div>
    <div class="col-1">
        <label id="agregarcateria" for=""> <i id="iconomas" class="fa-solid fa-circle-plus fa-3x text-success" ></i> </label>
        {{-- <label id="agregarcateria" for=""> <i id="iconomas" data-bs-toggle="modal" data-bs-target="#formcrearcategoria" class="fa-solid fa-circle-plus fa-3x text-success" ></i> </label> --}}
        
    </div>
</div>


<input id="fotos" name="file-data[]" type="file" multiple>

<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="submit">Guardar</button>
</div>



{{-- este es el modal para crear categorias  --}}

<div class="modal fade" id="formcrearcategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Crear Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <div class="row">
                <div class="col-3">
                    <label for="">Categoría</label>
                </div>
                <div class="col-9">
                    <input class="form-control" type="text" name="" id="categoriaajax" placeholder="Ingres una categoria">
                </div>
            </div>  
            </div>
            <div class="modal-footer">
                <div class="container-fluid h-100 mt-3"> 
                    <div class="row w-100 align-items-center">
                        <div class="col text-center">
                            <a href="" id="guardar" class="btn btn-success">Guardar <i class="far fa-save"></i></a>        
                            <button id="cancelar" class="btn btn-info">Cancelar <i class="far fa-save"></i></button>        
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






  {{-- <!-- Modal -->
  <div class="modal fade" id="formcrearcategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-3">
                    <label for="">Categoría</label>
                </div>
                <div class="col-9">
                    <input class="form-control" type="text" name="" id="categoriaajax" placeholder="Ingres una categoria">
                </div>
            </div>  
        </div>
        <div class="modal-footer">
            <div class="modal-footer">
                <div class="container-fluid h-100 mt-3"> 
                    <div class="row w-100 align-items-center">
                        <div class="col text-center">
                            <a href="" id="guardar" class="btn btn-success">Guardar <i class="far fa-save"></i></a>        
                            <button id="cancelar" class="btn btn-info">Cancelar <i class="far fa-save"></i></button>        
                        </div>	
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div> --}}

