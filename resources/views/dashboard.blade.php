<!DOCTYPE html>
<html lang="pt">
<style>
.text{
    text-align:right;
    padding: 10px;
}    
</style>
<head>
    <meta charset="UTF-8">

    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <div class="text">
    <a href="logout" class="btn btn-outline-danger">Logout</a>
    </div>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Bem vindo ao seu perfil</h4>
                <hr>
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>
                         @foreach ($users as $user)
                        <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td style="display:flex; gap:10px;">
                            <a class="btn btn-outline-primary" href="edit-user/{{$user->id}}">Editar</a>
                            @if(Session::get('loginId') != $user->id)
                            <a class="btn btn-outline-danger" href="delete-user/{{$user->id}}">Eliminar</a>
                            @endif

                        </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="add-user" id="btn_green" class="btn btn-outline-secondary""">Adicionar Utilizador</a>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</html>