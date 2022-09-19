<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Styles.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Farmacia</title>
    @include('dashboard.partials.nav-header-main')
</head>
<body>

    <div class="container">
        <table class="table">
            <thead>
                <tbody>
                    <tr>
                        <td>
                            Id
                        </td>
                        <td>
                            Nombre
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
                </tbody>
                @foreach($medicinas as $medicina)
                    <tr>
                        <td>
                            {{$medicina->id}}
                        </td>

                        <td>
                            {{$medicina->Nombre}}
                        </td>

                        <td>
                            {{$medicina->Laboratorio}}
                        </td>

                        <td>
                            {{$medicina->Formula}}
                        </td>

                        <td>
                            {{$medicina->Descripcion}}
                        </td>

                        <td>
                            {{$medicina->PrecioCosto}}
                        </td>

                        <td>
                            {{$medicina->PrecioVenta}}
                        </td>

                        <td>
                            {{$medicina->Existencias}}
                        </td>

                        <td>
                            {{$medicina->created_at->format('d-m-Y')}}
                        </td>

                        <td>
                            {{$medicina->updated_at->format('d-m-Y')}}
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{route('post.show', $medicina->id)}}">Ver</a>
                            <a class="btn btn-info" href="{{route('post.edit', $medicina->id)}}">Editar</a>
                            <form method="POST" action="{{route('post.destroy', $medicina->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
            {{$medicinas->links()}}
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>