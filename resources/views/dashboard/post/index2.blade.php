<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Styles.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Farmacos</title>
</head>
<body>
    @include('dashboard.parciales.nav2-header-main')
    <main>
        <div class="container">
            <table class="table table-striped">
                <Thead>
                    <body>
                        <tr>
                            <td>
                                Id
                            </td>
                        
                            <td>
                                Nombre Farmaco
                            </td>
                        
                            <td>
                                Laboratorio
                            </td>
                        
                            <td>
                                Formula
                            </td>

                            <td>
                                Descripcion
                            </td>

                            <td>
                                Precio Costo
                            </td>

                            <td>
                                Precio Venta
                            </td>

                            <td>
                                Existencias
                            </td>

                            <td>
                                Creacion
                            </td>
                        
                            <td>
                                Actualizado
                            </td>

                            <td>
                                Acciones
                            </td>
                        </tr>
                        
                    </body>

                    {{-- recorrer arreglo --}}
                    {{-- la variable posts que se manda aqui se va a llamar post --}}
                    @foreach ($farmacos as $farmaco)
                        <tr>
                            <td>
                                {{$farmaco->id}}
                            </td>
                        
                            <td>
                                {{$farmaco->Nombre}}
                            </td>
                        
                            <td>
                                {{$farmaco->Laboratorio}}
                            </td>

                            <td>
                                {{$farmaco->Formula}}
                            </td>

                            <td>
                                {{$farmaco->Descripcion}}
                            </td>

                            <td>
                                {{$farmaco->PrecioCosto}}
                            </td>

                            <td>
                                {{$farmaco->PrecioVenta}}
                            </td>

                            <td>
                                {{$farmaco->Existencias}}
                            </td>
                        
                            <td>
                                {{$farmaco->created_at->format('d-m-Y')}}
                            </td>
                        
                            <td>
                                {{$farmaco->updated_at-> format('d-m-Y')}}
                            </td>
                            
                            <td>
                                <a href="{{route('far.edit',$farmaco->id)}}" class="btn btn-secondary">Editar</a>
                                <form action="{{route('far.destroy',$farmaco->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </Thead>
               {{$farmacos->links()}}
            </table>
        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>