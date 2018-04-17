<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">  
    <title>Bienvenido</title>
</head>
<body>
    <div class="container p-2">
            <div class="row justify-content-md-center">
                <div class="col-md-10 col-xs-12 col-lg-10">
                    <div class="card">
                        <div class="card-header">Zapatos agregados</div>
                        <div class="card-body">
                            <div class="p-2">
                                <a class="btn btn-success btn-block" href="{{ route('zapato.create') }}">Agregar zapato nuevo</a>
                            </div>
                                <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Medida</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($zapatos as $zapato)
                                                <tr>
                                                    <th scope="row">{{$zapato -> tipo}}</th>
                                                    <td>{{$zapato -> marca}}</td>
                                                    <td>{{$zapato -> medida}}</td>
                                                    <td>{{$zapato -> descripcion}}</td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="{{ route('zapato.edit', $zapato->id )}}">Editar</a>
                                                        <form style="display: inline" method="POST" action="{{ route('zapato.destroy', $zapato->id)}}">
                                                                {!! csrf_field() !!}
                                                                {!! method_field('DELETE') !!}
                                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>                                             
                                            @endforeach
                                        </tbody>
                                      </table>
                        </div>


                    </div>
                </div>
            </div>
    </div>
</body>
</html>