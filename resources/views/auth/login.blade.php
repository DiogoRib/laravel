<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:30px;">
                <h4>Login</h4>
                <hr>
                <form action="{{route('login-user')}}" method="post">
                @csrf
                    <div class="form goup">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" placeholder="Aqui escreve o seu email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form goup">
                        <label for="name">Palavra-Passe</label>
                        <input type="password" class="form-control" placeholder="Aqui escreve a sua Palavra-Passe" name="password" value="">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    </br>
                    <div>
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>

                    </br>
                    <a href="registration">Novo Utilizador<a>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</html>