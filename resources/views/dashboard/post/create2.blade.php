<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Styles.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Farmaco</title>
    @include('dashboard.parciales.nav2-header-main')
</head>
<body>
    <h1>Ingreso de medicamentos</h1>
    <form action="{{route('far.store')}}" method="post">
        @include('dashboard.partials.session-flash-status')
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <label for="">Nombre Farmaco</label>
                        <input type="text" name="Nombre" value="{{old('Nombre', $farmaco->Nombre)}}">
                        @error('Nombre')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Laboratorio</label>
                        <input type="text" name="Laboratorio" value="{{old('Laboratorio', $farmaco->Laboratorio)}}">    
                        @error('Laboratorio')
                            <small class="text-danger">{{$message}}</small>
                        @enderror                
                    </li>
                    <li>
                        <label for="">Formula</label>
                        <input type="text" name="Formula" value="{{old('Formula', $farmaco->Formula)}}">
                        @error('Formula')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Descripcion</label>
                        <textarea name="Descripcion">{{old('Descripcion', $farmaco->Descripcion)}}</textarea>
                        @error('Descripcion')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Precio Costo</label>
                        <input type="number" name="PrecioCosto" value="{{old('PrecioCosto', $farmaco->PrecioCosto)}}">
                        @error('PrecioCosto')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Precio Venta</label>
                        <input type="number" name="PrecioVenta" value="{{old('PrecioVenta', $farmaco->PrecioVenta)}}">
                        @error('PrecioVenta')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <label for="">Existencias</label>
                        <input type="number" name="Existencias" value="{{old('Existencias', $farmaco->Existencias)}}">
                        @error('Existencias')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </li>
                    <li>
                        <button type="submit">Enviar</button>
                    </li>
                </ul>
            </nav>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>