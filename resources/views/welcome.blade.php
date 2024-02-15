<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .product-card {
            border: 1px solid #B1AFAF;
            border-radius: 8px;
            padding: 16px;
            margin: 16px;
            text-align: center;
            background-color: #fff;
            height:400px;   
        }

.product-card img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
    margin-bottom: 8px;
}

.product-card h3 {
    font-size: 1.2em;
    margin-bottom: 8px;
}

.product-card p {
    color: #666;
    margin-bottom: 12px;
}

.product-card span.price {
    font-weight: bold;
    color: #333;
    font-size: 1.2em;
}

.product-card button {
    background-color: #4CAF50;
    color: #fff;
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.product-card button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    
    
    <div class="row">

        @foreach ($productos as $producto)
       
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
               <!-- Dentro del bucle de Blade -->
                <div class="product-card">
                    <div class="card">
                        <div class="card-header position-relative">
                            <span class="badge bg-danger text-white rounded-3 position-absolute top-1 end-0 p-2">Bs. {{ $producto->precio }}</span>
                            <h3> {{ $producto->nombre }}</h3>
                        </div>
                        <div class="card-body">
                            @if($producto->foto!="")
                                <img class="imagen rounded float-right img-fluid img-thumbnail" src="{{ asset('storage/fotos/'.$producto->foto) }}" alt="Descripción de la imagen" width="100%">
                            @else
                                <img class="imagen rounded float-right img-fluid img-thumbnail" src="{{ asset('storage/fotos/sinfoto.png') }}" alt="Descripción de la imagen">
                            @endif
                            
                            {{-- <p>Descripción corta del producto.</p> --}}
                            <div class="card-footer">
                                <button onclick="agregarAlCarrito()">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        $(".size").on('click', function(){
            $(this).toggleClass('focus').siblings().removeClass('focus');
        })
    </script>
</body>
</html>
{{-- <div class="card">
    <div class="card-header">
        {{ $producto->nombre }}
    </div>
    <div class="card-body bg-secondary">
        @if($producto->foto!="")
            <img class="imagen rounded float-right" src="{{ asset('storage/fotos/'.$producto->foto) }}" alt="Descripción de la imagen" width="100px">
        @else
            <img class="imagen rounded float-right" src="{{ asset('storage/fotos/sinfoto.png') }}" alt="Descripción de la imagen" width="100px">
        @endif
            
    
    </div>
</div> --}}