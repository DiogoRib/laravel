<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">

    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Registar</h4>
                <hr>
                <form action="{{route('register-user')}}" method="post">
                    @if(Session::has('sucess'))
                    <div class="alert alert-sucess">{{Session::get('sucess')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                    @csrf
                    <div class="form goup">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" placeholder="Aqui escreve o seu nome" name="name" value="">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form goup">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" placeholder="Aqui escreve o seu email" name="email" value="">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form goup">
                        <label for="name">Palavra-Passe</label>
                        <input type="password" class="form-control" placeholder="Aqui escreve a sua Palavra-Passe" name="password" value="">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    </br>
                    <div>
                        <button class="btn btn-block btn-primary" type="submit">Registrar</button>
                    </div>

                    </br>
                    <a href="login">Ir para a pagina do login<a>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</html>