<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Styles.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Farmacia</title>
    @include('dashboard.parciales.nav2-header-main')
</head>
<body>
    <h1>Registros</h1>

    <form action="{{route('far.store')}}" method="post">
        @csrf
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <label for="">Nombre Farmacos</label>
                        <input readonly type="text" name="Nombre" value="{{$farmacos->Nombre}}">
                        @error('Nombre')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Laboratorio</label>
                        <input readonly type="text" name="Laboratorio" value="{{$farmacos->Laboratorio}}">    
                        @error('Laboratorio')
                            <small class="text-danger">{{$message}}</small>
                        @enderror                
                    </li>
                    <li>
                        <label for="">Formula</label>
                        <input readonly type="text" name="Formula" value="{{$farmacos->Formula}}">
                        @error('Formula')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Descripcion</label>
                        <textarea readonly name="Descripcion">{{$farmacos->Descripcion}}</textarea>
                        @error('Descripcion')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Precio Costo</label>
                        <input readonly type="number" name="PrecioCosto" value="{{$farmacos->PrecioCosto}}">
                        @error('PrecioCosto')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Precio Venta</label>
                        <input readonly type="number" name="PrecioVenta" value="{{$farmacos->PrecioVenta}}">
                        @error('PrecioCosto')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Existencias</label>
                        <input readonly type="number" name="Existencias" value="{{$farmacos->Existencias}}">
                        @error('Existencias')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                </ul>
            </nav>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>