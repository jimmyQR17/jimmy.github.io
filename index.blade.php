<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body >

    <div class="p-5">

    <div class="text-center">
    <img src="../public/image/PERUINTI.JPG" class="img-fluid" alt="Peru inti" width="150" height="200">
</div>
   

    <form class="row g-3 mb-5" action="{{ route('alumno.store') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nombre</label>
            <input type="text" class="form-control"  name="nombre" autofocus>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control"name="fechaDeNacimiento">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">T. Zapato</label>
            <input type="text" class="form-control" name="TZapato">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">T. de Polo</label>
            <input type="text" class="form-control"name="TDePolo">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">T. de pantalon</label>
            <input type="text" class="form-control" name="TDePantalon">
        </div>
        <div class="col-12">
            <button class="btn btn-primary me-md-2" type="submit">Guardar</button>
            <button class="btn btn-primary" type="button">Limpiar</button>
        </div>
    </form>

    <table class="table table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Telefono</th>
            <th scope="col">T. Zapato</th>
            <th scope="col">T. de Polo</th>
            <th scope="col">T. de pantalon</th>
            <th scope="col">Operaciones</th>

            </tr>
        </thead>

        <tbody>

            @php
                $count = 1;
            @endphp
            
            @foreach($alumnos as $alumno)

                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->fechaDeNacimiento }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->TZapato }}</td>
                    <td>{{ $alumno->TDePolo }}</td>
                    <td>{{ $alumno->TDePantalon }}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalEliminar-{{ $alumno->id }}" class="btn btn-danger btn-sm">Eliminar</button>
                            
                             <!-- Modal -->
                            <div class="modal fade" id="modalEliminar-{{ $alumno->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                </div>
                                    <form action="{{ route('alumno.delete', $alumno->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>

                            <button class="btn btn-warning btn-sm">Editar</button>
                        </div>  
                    </td>
                </tr>
                
            @endforeach

        </tbody>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>