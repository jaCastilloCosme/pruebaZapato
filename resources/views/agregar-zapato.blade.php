<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">  
    <title>Nuevo zapato</title>
</head>
<body>
        <div class="container p-3">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 col-xs-12 col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <h3>Agregar nuevo zapato</h3>
                            </div>
                            <div class="card-body">
                                    <form method="POST" action="{{ route('zapato.store') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">                                        
                                            <div class="form-group">
                                              <label for="tipo">Tipo de zapato</label>
                                              <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo de zapato" value="{{ old('tipo') }}">
                                            </div>
                                            <div class="form-group">
                                                    <label for="marca">Marca</label>
                                                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca de zapato" value="{{ old('marca') }}">
                                                  </div>
                                            <div class="form-group">
                                              <label for="medida">Medida de zapato</label>
                                              <input type="text" class="form-control" id="medida" name="medida" placeholder="Medida de zapato" value="{{ old('medida') }}">
                                            </div>
                                            <div class="form-group">
                                                    <label for="descripcion">Descripción</label>
                                                    <textarea class="form-control" id="descripcion" rows="3" name="descripcion" value="{{ old('descripcion') }}"></textarea>
                                                  </div>
                                            <button type="submit" class="btn btn-primary btn-block">Agregar nuevo zapato</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>
