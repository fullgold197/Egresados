<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Untels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h4>Universidad Nacional Tecnológica de Lima Sur</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="">
                    <div class="form-row">
                        <div class="col-auto my-1">
                            <a href="{{route('login-egresado.index')}}" class="btn btn-success">Egresados</a>
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('login-administrador.index')}}" class="btn btn-success">Administrador</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>
</html>
