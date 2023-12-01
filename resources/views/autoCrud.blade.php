<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3cc495ee3a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>AutoCRUD</title>
</head>
<body>
    <h1 class="text-center p-3">AutoCRUD</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card p-3">
                    <img src="{{ asset('imgs/empleados.jpg') }}" class="card-img-top" alt="Aqui habia ponido una imagen">
                    <div class="card-body text-center">
                        <h5 class="card-title">Empleados</h5>
                        <p class="card-text">¡Explora y administra la información de los empleados de manera sencilla y eficiente en esta página!</p>
                        <a href="{{ route('empleados.index') }}" class="btn btn-primary">CRUD Empleados</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <img src="{{ asset('imgs/clientes.jpg') }}" class="card-img-top" alt="Aqui habia ponido una imagen">
                    <div class="card-body text-center">
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text">¡Explora y administra la información de los clientes de manera sencilla y eficiente en esta página!</p>
                        <a href="{{ route('clientes.index') }}" class="btn btn-primary">CRUD Clientes</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <img src="{{ asset('imgs/autos.jpg') }}" class="card-img-top" alt="Aqui habia ponido una imagen">
                    <div class="card-body text-center">
                        <h5 class="card-title">Autos</h5>
                        <p class="card-text">¡Explora y administra la información de los autos de manera sencilla y eficiente en esta página!</p>
                        <a href="{{ route('autos.index') }}" class="btn btn-primary">CRUD Autos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
