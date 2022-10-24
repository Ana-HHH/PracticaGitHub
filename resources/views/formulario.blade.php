<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    @extends('template')

    @section('contenido')

    @if (session()->has('confirm'))

    {!! "<script>
    Swal.fire('Usuario Ingresado', 'success')
        </script>"
    !!}

    @endif

    <div class="card mb-5 mp-5 px-4">

        <h5 class="card-header">Formulario</h5>

        <div class="card-body">
            <form method="POST" action="enviarForm">
                @csrf

                <div class="row g-3 align-items-center  mb-3">
                  <div class="col-auto">
                    <label class="col-form-label">Usuario</label>
                  </div>

                  <div class="col-auto">
                    <input type="text" name="formUsuario" class="form-control">
                  </div>

                </div>
                <div class="row g-3 align-items-center  mb-3">
                  <div class="col-auto">
                    <label class="col-form-label">Contraseña</label>
                  </div>
                  <div class="col-auto">
                    <input type="password" name="formPass" class="form-control" >
                  </div>
                  <div class="col-auto">
                    <span class="form-text">
                      Tiene que contener entre 8-20 caracteres.
                    </span>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Ingresar Usuario</button>

            </form>

        </div>
      </div>
    @stop


</body>
</html>
